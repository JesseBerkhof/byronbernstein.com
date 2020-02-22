<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    public $fillable = [
		'first_name',
		'last_name',
		'city',
		'province_id',
		'postal_code',
		'webshop_id',
		'description',
    ];
}
