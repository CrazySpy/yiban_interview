<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
	protected $table = 'result';

	public $timestamps = false;

	public function GetResult($yibanId)
	{
		return $this->where('yibanId','=',$yibanId)->get();
	}

	public function HasOneDepartment()
	{
		return $this->hasOne('App\Models\Department','id','department');
	}
}
?>
