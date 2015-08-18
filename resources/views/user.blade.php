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
		    .page ul{list-style:none;} 
		    .page li{float:left;} 
		</style>
	</head>
    <body>
    	<div class="ui container">
    		<h1>用户管理</h1>
    		<h2 class="ui dividing header">
    			<a class="ui basic button" href="userAdd"><i class="icon user"></i> 添加用户 </a>
    		</h2>
	        <table class="ui selectable celled table">
			  <thead>
			    <tr><th>用户名</th>
			    <th>职业</th>
			    <th>邮箱</th>
			    <th>手机号码</th>
			    <th>操作</th>
			  </tr></thead>
			  <tbody>
			  	@foreach ($users as $user)
				    <tr>
				      <td>{{ $user->name }}</td>
				      <td>{{ $user->job }}</td>
				      <td>{{ $user->email }}</td>
				      <td>{{ $user->phone }}</td>
				      <td>
				      	<a href="userEdit/{{ $user->id }}">编辑</a> | 
				      	<a href="userDelete/{{ $user->id }}">删除</a>
				      </td>
				    </tr>
				@endforeach
			  </tbody>
			  <tfoot>
			    <tr><th colspan="5">
			      <div class="ui right floated pagination menu">
			        <div class="page">
			        	{!! $links !!}
			        </div>
			      </div>
			    </th></tr>
			  </tfoot>
			</table>
		</div>
    </body>
</html>