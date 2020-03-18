<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appreciation extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'city',
        'country',
    ];

    public function getNameAttribute()
    {
        if (!$this->last_name) {
            return ucfirst($this->first_name);
        }

        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    public function getLocationAttribute()
    {
        if (!$this->city) {
            return ucfirst($this->country);
        }

        return ucfirst($this->country) . ', ' . ucfirst($this->city);
    }
}
