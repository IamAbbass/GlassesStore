<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[
        'name','phone','is_verified','address','location','fcm_token','notes','gender','is_blocked','is_deleted',
    ];
}
