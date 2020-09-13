<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


// cheack


class Glasses extends Model
{

    

   protected $fillable=[
       'name','brand','color','price','gender','description','is_available','image','is_deleted',
   ];
}
