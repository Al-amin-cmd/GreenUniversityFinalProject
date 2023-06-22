<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use HasFactory, SoftDeletes;


    protected $table ='people';
    protected $guarded = [];


    public function peoplecampename(){
        return $this->belongsTo(Campe::class,'campe_id', 'id');
    }
}