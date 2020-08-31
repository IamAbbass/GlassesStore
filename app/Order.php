<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'name','phone','is_verified','address','location','notes','gender','status','customer_id',
        'glass_id','image',
    ];
}
