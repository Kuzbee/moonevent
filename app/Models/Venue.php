<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venue extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'venue_name',
        'icon',
        'slug',
    ];

    public function bookings(){
        return $this->hasMany(PackageBooking::class);
    }


}