<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// this code is For soft delete

use Illuminate\Database\Eloquent\SoftDeletes;

class Glasses extends Model
{

    use SoftDeletes;

   protected $fillable=[
       'name','brand','color','price','description','is_available','image',
   ];
}
