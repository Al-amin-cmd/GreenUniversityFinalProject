<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrayerPlace extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'location',
        'image',
        'station_code',
        'campe_id',
    ];

    public function prayerplacecampename(){
        return $this->belongsTo(Campe::class,'campe_id','id');
    }


}