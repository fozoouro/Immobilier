<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proprietaire;

class ProprietaireController extends Controller
{
     public function create()
    {
        return view('site.proprietaire');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
            'email' => 'required|email',
            'telephone' => 'nullable|string|max:20',
            'type_bien' => 'nullable|string', // pourra être validé avec ENUM si besoin
            'message' => 'nullable|string',
        ]);

        Proprietaire::create($request->all());

        return back()->with('success', 'Votre message a été envoyé. Nous vous contacterons bientôt.');
    }
}
