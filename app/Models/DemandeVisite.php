<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeVisite extends Model
{
    protected $table = 'demande_visite';
    protected $primaryKey = 'id_demande';
    public $timestamps = false;

    protected $fillable = [
        'id_unite',
        'nom',
        'email',
        'telephone',
        'message'
    ];
}
