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
            return $this->first_name;
        }

        return "$this->first_name $this->last_name";
    }

    public function getLocationAttribute()
    {
        if (!$this->city) {
            return $this->country;
        }

        return "$this->country, $this->city";
    }
}
