<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [
        'id'
    ];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function deal()
    {
        return $this->hasMany(Deal::class);
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    public function temp_reservation()
    {
        return $this->hasMany(TempReservation::class);
    }
}
