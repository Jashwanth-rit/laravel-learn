<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;
use App\Models\seller;


class product extends Model
{
    use HasFactory;
    protected $table = "products";
    public $timestamps = false;

    // MANY - ONE FOR OR FROM SELLER SIDE OF VIEW AND  ONE -  MANY FROM PRODUCT SIDE OF VIEW

    function getprod_many_one(){
         return $this->belongsTo(student::class,'seller_id');
       // return $this->hasOne(student::class,'name');
    }
}
