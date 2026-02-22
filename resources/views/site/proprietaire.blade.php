@extends('layouts.app')

@section('title', 'Contact Propriétaire')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Contactez-nous – Propriétaire</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form method="POST" action="{{ route('proprietaire.store') }}">
        @csrf

        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="text" class="form-control" name="telephone" id="telephone">
        </div>

        <div class="mb-3">
            <label for="type_bien" class="form-label">Type de bien</label>
            <select name="type_bien" id="type_bien" class="form-select">
                <option value="">Sélectionner</option>
                <option value="VILLA">Villa</option>
                <option value="MAISON">Maison</option>
                <option value="IMMEUBLE">Immeuble</option>
                <option value="LOCAL_COMMERCIAL">Local commercial</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="message" rows="4" placeholder="Votre message..."></textarea>
        </div>

        <button type="submit" class="btn btn-dark">Envoyer</button>
    </form>
</div>
@endsection