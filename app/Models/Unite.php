<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    protected $table = 'unite';
    protected $primaryKey = 'id_unite';
    public $timestamps = false;

    protected $fillable = [
        'id_bien',
        'numero',
        'type_unite',
        'surface',
        'prix_loyer',
        'caution',
        'statut',
        'description'
    ];

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'id_bien');
    }

    public function photos()
    {
        return $this->hasMany(PhotoUnite::class, 'id_unite');
    }
}
