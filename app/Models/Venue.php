<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Venue extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'icon',
        'slug',
    ];

    public function bookings(){
        return $this->hasMany(PackageBooking::class);
    }


}