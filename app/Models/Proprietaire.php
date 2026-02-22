<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    protected $table = 'proprietaires';
    protected $primaryKey = 'id_proprietaire';

    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'type_bien',
        'message',
        'statut'
    ];
}
