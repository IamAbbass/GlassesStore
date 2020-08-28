<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glasses extends Model
{
   protected $fillable=[
       'name','brand','color','price','description','is_available','image',
   ];
}
