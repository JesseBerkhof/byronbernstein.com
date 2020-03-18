<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read string $first_name
 * @property-read string $last_name
 * @property-read string $country
 * @property-read string $city
 */
class Appreciation extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'city',
        'country',
    ];

    public function getNameAttribute(): string
    {
        if (!$this->last_name) {
            return ucfirst($this->first_name);
        }

        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    public function getLocationAttribute(): string
    {
        if (!$this->city) {
            return ucfirst($this->country);
        }

        return ucfirst($this->country) . ', ' . ucfirst($this->city);
    }
}
