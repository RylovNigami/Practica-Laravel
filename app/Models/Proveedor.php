<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    protected $fillable = ['nombre'];

    public function frutas()
    {
        return $this->belongsTo('App\Models\Fruta','id_fruta','id');
    }
}
