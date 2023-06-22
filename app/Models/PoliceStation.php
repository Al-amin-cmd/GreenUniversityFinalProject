<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Scalar\MagicConst\Function_;

class PoliceStation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='police_stations';
    protected $fillable = [
        'name',
        'station_code',
        'active_force',
        'image',
        'exat_force',
        'campe_id',
    ];


    public Function campename(){
        return $this->belongsTo(Campe::class, 'campe_id', 'id');
    }
}