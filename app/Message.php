<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property-read string $username
 * @property-read string $body
 * @property-read Carbon $approved_at
 * @property-read string $ip
 */
class Message extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'username',
        'body',
        'ip',
        'approved_at',
    ];

    protected $dates = ['deleted_at'];
}
