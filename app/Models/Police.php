<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Police extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'police_code',
        'designation',
        'image',
        'police_station_id',
        'status',
        'deleted_at',
    ];

    //protected $guarded =[];


    public function pstation(){
        return $this->belongsTo(PoliceStation::class, 'police_station_id', 'id');
    }
}