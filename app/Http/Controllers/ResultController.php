<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

use Illuminate\Support\Facades\Session;

class ResultController extends Controller
{
	public function __construct()
	{
		$this->middleware('yibanAuth');
	}

	public function GetResult(Request $request)
	{
		$yibanId = Session::get('yibanId');
		$model = new \App\Models\Result;
		$detail = $model->GetResult($yibanId)->first();

		$departmentId = NULL;
		$department = NULL;
		if(isset($detail['department']))
		{
			$departmentId = $detail['department'];
			$department = \App\Models\Department::find($departmentId);
		}

		if(!empty($department))
		{
			$detail['department'] = $department['department'];
			$detail['message'] = $department['message'];
		}
		Session::forget('yibanId');
		return view('result',['detail' => $detail]);
	}

	/*
	public function ChooseInterviewTime(Request $request)
	{

		$interviewTime = strtotime($request->get('interviewTime'));
		$model = new \App\Models\Result;

		//非法访问
		if(!$request->session()->has('id'))
			return '禁止访问';

		$id = $request->session()->get('id');
		$temp = $model->find($id);
		$temp->interviewTime = $interviewTime;
		$temp->save();
		return '预约面试成功';
	}
	 */
}

?>
