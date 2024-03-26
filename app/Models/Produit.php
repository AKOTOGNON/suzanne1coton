<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
      public function distributions(){
        return $this->hasMany(Produit::class);
    }
    public function dettes(){
        return $this->hasMany(Dette::class);
    }
}
