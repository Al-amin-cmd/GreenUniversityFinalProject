<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $table = 'user_deatils';

    protected $fillable =[
        'user_id',
        'image',
        'address',
        'location',
        'mobile_no',
        'dob'
    ];
}