<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>易班招新结果查询</title>
	
	<style>
	    body{
		background-color:skyblue;
	    }
	    #logo{
		height:60px;
		overflow:hidden;
	    }
	    #copyright{
		font-size:15px;
		margin:0 auto;
		color:azure;
		text-align:center;
	    }
	    .panel{
		height:50%;
		background-color:azure;
		text-align:center;
	    }
	</style>
    </head>
    <body>
	<div id='logo'><img src='/image/logo.png' height=55px /></div>
	<div id='inputPanel' class='panel'>
	@if(empty($detail))
	    <div>没有查询到相关记录</div>
	@else
	    <div>
		<div>恭喜您，您已经通过本次面试</div>
		<div id='name'>姓名:{{$detail['name']}}</div>
		<div id='yibanId'>易班id:{{$detail['yibanId']}}</div>
		@if(isset($detail['department']))
		    <div id='department'>部门:{{$detail['department']}}</div>
		@endif

		@if(isset($detail['message']))
		    <div id='message'>{!!$detail['message']!!}</div>
		@endif
	    </div>
	@endif

	</div>
	<div id='copyright'>
		<hr />上海立信会计金融学院易班学生工作站技术部提供技术支持
		<br/>上海立信会计金融学院443工作室蒋希文制作

	</div>
    </body>
</html>

