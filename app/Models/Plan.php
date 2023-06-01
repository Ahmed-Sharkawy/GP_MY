<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'days',
        'price',
        'mycosis',
        'lunch',
        'dinner',
    ];

    public function setMycosisAttribute($value)
    {
        $this->attributes['mycosis'] = 1;
    }

    public function setLunchAttribute($value)
    {
        $this->attributes['lunch'] = 1;
    }

    public function setDinnerAttribute($value)
    {
        $this->attributes['dinner'] = 1;
    }

    public function plantable()
    {
        return $this->morphTo();
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('default')
            ->singleFile();
    }
}
