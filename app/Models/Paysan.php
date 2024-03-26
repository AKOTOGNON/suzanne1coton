<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paysan extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ventes()
    {
        return $this->hasMany(Vente::class);
    }

    public function carnets()
    {
        return $this->hasMany(Carnet::class);
    }
}
