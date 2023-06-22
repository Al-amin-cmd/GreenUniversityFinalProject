<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'location',
        'image',
        'campe_id',
        'station_code',
    ];

    public function schoolcampename(){
        return $this->belongsTo(Campe::class,'campe_id','id');
    }
}