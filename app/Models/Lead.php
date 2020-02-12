<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{

	/**
     * leads
     * @var string
     */
	protected $table = 'leads';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'user_id', 'query', 'type', 'status'
	];
}
