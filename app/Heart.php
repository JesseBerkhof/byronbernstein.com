<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;

/**
 * @property-read string $ip
 */
class Heart extends Model
{
    protected $fillable = [
        'ip',
    ];
}
