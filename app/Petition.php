<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    protected $fillable = [
        'name',
        'message',
    ];
}
