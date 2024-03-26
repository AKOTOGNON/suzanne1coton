<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;
    protected $guarded = [];

     public function paysan(){
        return $this->belongsTo(Paysan::class);
    }
     public function dette(){
        return $this->belongsTo(Dette::class);
    }
     public function vente(){
        return $this->belongsTo(Vente::class);
    }

}
