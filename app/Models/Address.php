<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
		'user_id',
		'customer_id',
		'line1',
		'line2',
		'city',
		'state',
		'pin_code',
		'state_code',
    ];
}
