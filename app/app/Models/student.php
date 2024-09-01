<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

//MAKING MODEL VIEW CONTROLLER AND ASSIGNING TABLE NAME IN MODELS

class student extends Model
{
    use HasFactory;

    //  protected $table = "students";
    // public $timestamps = false;


    //ACCESSIRS TO DATA OF STUDENTS
     
//to uppercase first latter of the name - use getNameAttribute 


    // function getNameAttribute($val){
    //     return ucfirst($val);

    // }

    //MUTATORS TO DATA BEFORE WE ADD TO DATA BASE

    //updating city before storing into data base
    // function setCityAttribute($val){
    //     $this->attributes['city']='near'.$val;
    // }


    //ONE - ONE , MANY - ONE , ONE - MANY

    protected $table = "sellers";

    // function getprod_one_one(){
    //     return $this->hasOne(product::class,'seller_id');
    // }

    //ONE - MANY

    // function getprod_one_many(){
    //     return $this->hasMany(product::class,'seller_id');
    // }

   // MANY - ONE

   //FOR MANY - ONE WE JUST REVERSE THE ONE -  MANY IMPLIMENTATION 
   //MEAN WE COME FROM PRODUCT SIDE INSTEAD OF SELLER SIDE 
   //FOR MORE INFO WATCH PRODUCT.PHP  IN MODELS



}
