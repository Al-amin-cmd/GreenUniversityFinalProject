<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hostipal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table ='hostipals';
    protected $fillable = [
        'name',
        'station_code',
        'present_capacity',
        'image',
        'campe_id',
    ];

    public function hospitalcampename(){
        return $this->belongsTo(Campe::class, 'campe_id', 'id');
    }
}