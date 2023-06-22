<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campe extends Model
{
    use HasFactory, SoftDeletes;

    protected $table ='campes';
    protected $fillable = [
        'campe_code',
        'name',
        'address',
        'location',
    ];

    public function campes(){
        return $this->hasMany(Police::class);
    }
    public function people(){
        return $this->hasMany(People::class,'campe_id','id');
    }

    public function policestation(){
        return $this->hasMany(PoliceStation::class,'campe_id','id');
    }

    public function hostipals(){
        return $this->hasMany(Hostipal::class,'campe_id','id');
    }
}
