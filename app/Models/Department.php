<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $table = 'department';
	public $timestamps = false;

	public function BelongsToResult()
	{
		return $this->belongsTo('App\Models\Result');
	}
}
