<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link href="dist/semantic.css" rel="stylesheet" type="text/css"/>
		<script src="js/jquery-1.11.2.js"></script>
		<script src="dist/semantic.js"></script>
		<style type="text/css">
			.ui.container > h1 {
		      font-size: 3em;
		      text-align: center;
		      font-weight: normal;
		    }
		</style>
	</head>
    <body>
    	<div class="ui container">
    		<h1>添加用户</h1>
    		<div style="width:50%;margin-left: auto;margin-right: auto;">
		        <form class="ui form" action="<?=URL::to('userAdd')?>" method="post">
				  <div class="field">
				    <label>用户名</label>
				    <input type="text" name="name" placeholder="Name">
				  </div>
				  <div class="field">
				    <label>职业</label>
				    <input type="text" name="job" placeholder="Job">
				  </div>
				  <div class="field">
				    <label>邮箱</label>
				    <input type="text" name="email" placeholder="Email">
				  </div>
				  <div class="field">
				    <label>手机号码</label>
				    <input type="text" name="phone" placeholder="Phone">
				  </div>
				  <input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <button class="ui button" type="submit" style="float: right">添加</button>
				</form>
			</div>
		</div>
    </body>
</html>