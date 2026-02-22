<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $primaryKey = 'id_client';
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'telephone',
        'email',
        'message',
        'budget_min',
        'budget_max',
        'type_recherche'
    ];
}
