<!doctype html>
<html>
<head>
	<meta charset="gb2312">
	<title>后台登录</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #eee;
		}

		.form-signin {
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
			margin-bottom: 10px;
		}
		.form-signin .checkbox {
			font-weight: normal;
		}
		.form-signin .form-control {
			position: relative;
			height: auto;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			padding: 10px;
			font-size: 16px;
		}
		.form-signin .form-control:focus {
			z-index: 2;
		}
		.form-signin input[type="email"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}

	</style>
</head>
<body>
<div class="container">

	<form class="form-signin" method="post" action="<?php echo U('public/login');?>">
		<h2 class="form-signin-heading">请输入账户/密码</h2>
		<label for="inputEmail" class="sr-only">账户</label>
		<input type="text" id="inputEmail" name="username" class="form-control" placeholder="输入用户名" required autofocus>
		<label for="inputPassword" class="sr-only">密码</label>
		<input type="password" id="inputPassword" name="password" class="form-control" placeholder="输入密码" required>
		<div class="checkbox">
			<label>
				<input type="checkbox" value="remember-me"> 记住
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
	</form>

</div> <!-- /container -->

</body>
</html>
