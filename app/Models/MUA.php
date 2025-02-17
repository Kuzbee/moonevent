<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MUA extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'mua_name',
        'icon',
        'slug',
    ];

    public function bookings(){
        return $this->hasMany(PackageBooking::class);
    }


}