<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    protected $table = 'bien';
    protected $primaryKey = 'id_bien';
    public $timestamps = false;

    protected $fillable = [
        'reference',
        'titre',
        'type_bien',
        'description',
        'adresse',
        'ville',
        'quartier',
        'surface_totale',
        'annee_construction',
        'statut_general',
        'publier_site'
    ];

    public function unites()
    {
        return $this->hasMany(Unite::class, 'id_bien');
    }
}
