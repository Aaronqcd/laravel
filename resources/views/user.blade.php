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
    		<h1>用户管理</h1>
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
				      <td><a href="userEdit/{{ $user->id }}">编辑</a></td>
				    </tr>
				@endforeach
			  </tbody>
			  <!-- <tfoot>
			    <tr><th colspan="3">
			      <div class="ui right floated pagination menu">
			        <a class="icon item">
			          <i class="left chevron icon"></i>
			        </a>
			        <a class="item">1</a>
			        <a class="item">2</a>
			        <a class="item">3</a>
			        <a class="item">4</a>
			        <a class="icon item">
			          <i class="right chevron icon"></i>
			        </a>
			      </div>
			    </th></tr>
			  </tfoot> -->
			</table>
		</div>
    </body>
</html>