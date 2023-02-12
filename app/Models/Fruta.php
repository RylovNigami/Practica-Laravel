<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruta extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'temporada', 'precio', 'stock'];

    public function proveedor()
    {
        return $this->hasMany('App\Models\Proveedor','id_proveedor','id');
    }

    public function batidos()
    {
        return $this->belongsToMany('App\Models\Batido','id_batido','id');
    }
}
