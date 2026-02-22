<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        Client::create($request->all());

        return back()->with('success', 'Demande envoyée avec succès');
    }  
}
