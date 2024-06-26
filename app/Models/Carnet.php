<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carnet extends Model
{
    use HasFactory;
    protected $guarded = [];

     public function paysan()
    {
        return $this->belongsTo(Paysan::class);
    }
}
