<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $table = 'jobs';

	protected $fillable = [
		'title', 'description', 'category', 'location', 'type', 'min_salary', 'max_salary', 'notice_period', 
		'user_id'
	];
}
