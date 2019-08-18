<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8" />
		<title>會員登入</title>

	</head>
	<style>
		form {
			border:#aaa solid 1px;
			margin:20px auto;
			padding:30px;
			width:300px;
		}
		.error{
			color:red;
		}
	</style>
	<body>
		<form method="post" action="checkUser.php">
			<?php
				if(isset($_GET['msg'])){
					echo "<p class='error'>{$_GET['msg']}</p>";
				}
			?>
			<div>
			帳號：<input type="text" name="username">
			</div>
			<div>
			密碼：<input type="password" name="password">
			</div>
			<button type="submit">登入</button>
		</form>
	</body>
</html>
