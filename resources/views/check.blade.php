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
		height:300px;
		background-color:azure;
		text-align:center;
	    }
	    label{
	    }
	    
	    #input_name{
		padding-top:130px;
	    }
	</style>
    </head>
    <body>
	<div id='logo'><img src='/image/logo.png' height=55px /></div>
	<div id='inputPanel' class='panel'>
	    <div>本次查询已经结束，感谢您的使用。</div>
	    <!--
	    <form action='check' method='post'>
		{{csrf_field()}}
		<div id='input_name'>
		    <label>姓名:</label><input type='text' name='name' />
		    <input type='submit'/>
		</div>
	    </form>
	    -->
	</div>
	<div id='copyright'><hr />上海立信会计金融学院易班学生工作站技术部提供技术支持</div>
    </body>
</html>
