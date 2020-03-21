<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

/**
 * @property-read string $first_name
 * @property-read string $last_name
 * @property-read string $country
 * @property-read string $city
 * @property-read string $ip
 */
class Appreciation extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'city',
        'country',
        'ip',
        'approved_at',
    ];

    public function getMessageAttribute(): string
    {
        $firstName = ucfirst($this->first_name);
        $lastName = ucfirst($this->last_name);
        $name = $firstName . ' ' . $lastName;

        if (!$this->city) {
            return trans('texts.thanks.message_without_city', [
                'name' => $name,
                'random' => Arr::random(trans('texts.thanks.random'))
            ]);
        }

        $city = ucfirst($this->city);

        return trans('texts.thanks.message', [
            'name' => $name,
            'city' => $city,
            'random' => Arr::random(trans('texts.thanks.random'))
        ]);
    }
}
