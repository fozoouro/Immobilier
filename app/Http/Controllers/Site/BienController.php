<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bien;

class BienController extends Controller
{
    public function index(Request $request){
        $query = Bien::where('publier_site', true);

        // Ville
        if ($request->ville) {
            $query->where('ville', 'ILIKE', '%' . $request->ville . '%');
        }

        // Quartier
        if ($request->quartier) {
            $query->where('quartier', 'ILIKE', '%' . $request->quartier . '%');
        }

        // Type de bien
        if ($request->type_bien) {
            $query->where('type_bien', $request->type_bien);
        }

        // Filtres sur les unités
        $query->whereHas('unites', function ($q) use ($request) {

            if ($request->type_unite) {
                $q->where('type_unite', $request->type_unite);
            }

            if ($request->prix_min) {
                $q->where('prix_loyer', '>=', $request->prix_min);
            }

            if ($request->prix_max) {
                $q->where('prix_loyer', '<=', $request->prix_max);
            }

            if ($request->surface_min) {
                $q->where('surface', '>=', $request->surface_min);
            }

            if ($request->surface_max) {
                $q->where('surface', '<=', $request->surface_max);
            }

        });

        $biens = $query->orderBy('date_creation', 'desc')->get();

        return view('site.bien', compact('biens'));
    }

    public function show($id)
    {
        $bien = Bien::with(['unites.photos'])->findOrFail($id);

        return view('site.bien-details', compact('bien'));
    }
}