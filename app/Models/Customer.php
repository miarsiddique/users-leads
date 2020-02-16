<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
    	'user_id',
		'customer_name',
		'company_name',
		'email',
		'pan_number',
		'gstin_number',
		'phone_number',
    ];
}
