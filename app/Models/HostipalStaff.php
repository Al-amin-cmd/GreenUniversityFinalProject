<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HostipalStaff extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'designation',
        'image',
        'hostipal_staff_code',
        'hostipal_id',
    ];

    public function hospitalstaff(){
        return $this->belongsTo(Hostipal::class, 'hostipal_id', 'id');
    }
}