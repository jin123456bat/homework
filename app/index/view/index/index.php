<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="./assets/css/login.css" />
<style>
body {
	height: 100%;
	background: #16a085;
	overflow: hidden;
}
</style>
</head>
<body>
	<dl class="admin_login">
		<form method="post" action="./index.php?c=index&a=login">
			<dt>
				<strong>Login Page</strong>
				<em>Management System</em>
			</dt>
			<div class="alert" style="display: none;">username or password is error</div>
			<dd class="user_icon">
				<input type="text" name="username" placeholder="username" class="login_txtbx" />
			</dd>
			<dd class="pwd_icon">
				<input type="password" name="password" placeholder="password" class="login_txtbx" />
			</dd>
			<dd>
				<input type="submit" value="Log In" class="submit_btn" />
			</dd>
			<dd>
				<p>
					© 2015-2019
				</p>
			</dd>
		</form>
	</dl>
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/Particleground.js"></script>
	<script>
	$(document).ready(function() {
		//粒子背景特效
		$('body').particleground({
			dotColor: '#5cbdaa',
			lineColor: '#5cbdaa'
		});
	});
</script>
</body>
</html>
