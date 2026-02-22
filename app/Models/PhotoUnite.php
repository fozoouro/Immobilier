<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoUnite extends Model
{
    protected $table = 'photo_unite';
    protected $primaryKey = 'id_photo';
    public $timestamps = false;

    protected $fillable = [
        'id_unite',
        'url_photo'
    ];

    public function unite()
    {
        return $this->belongsTo(Unite::class, 'id_unite');
    }
}
