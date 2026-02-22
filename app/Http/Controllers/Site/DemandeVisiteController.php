<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\DemandeVisite;
use App\Models\Unite;
use Illuminate\Http\Request;

class DemandeVisiteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_unite' => 'required|exists:unite,id_unite',
            'nom' => 'required',
            'email' => 'required|email',
        ]);

        DemandeVisite::create([
            'id_unite' => $request->id_unite,
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Votre demande a été envoyée. Nous vous contacterons pour fixer la date.');
    }
}
