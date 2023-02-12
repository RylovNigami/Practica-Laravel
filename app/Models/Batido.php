<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batido extends Model
{
    use HasFactory;
    protected $table = 'batidos';
    protected $fillable = ['nombre', 'precio'];

    public function frutas()
    {
        return $this->belongsToMany('App\Models\Fruta','id_fruta','id');
    }
}
