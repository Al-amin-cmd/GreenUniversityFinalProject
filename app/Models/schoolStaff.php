<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class schoolStaff extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'designation',
        'image',
        'schoolStaff_code',
        'school_id',
        'position',
    ];


    public function ssftaff(){
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}