<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrayerStaff extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'designation',
        'image',
        'prayer_staff_code',
        'prayer_places_id',
    ];

    public function pplace(){
        return $this->belongsTo(PrayerPlace::class, 'prayer_places_id', 'id');
    }
}