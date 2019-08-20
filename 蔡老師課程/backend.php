<?php
//啟動 session
session_start();
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
	<meta charset="utf-8" />
	<title>後台管理</title>

</head>
<style>
	div.result {
		text-align: center;
	}
</style>

<body>
	<?php
	//使用 isset()方法，判別有沒有此變數可以使用，以及為已經登入
	if (isset($_SESSION['is_login'])&& $_SESSION['is_login']==true) :
		?>

	<div class="result">
		<h2>你正在後台，登入成功</h2>
		<!-- <img src='images/minino.gif'> -->
		<p>
			<a href='logout.php'>把我登出</a>
		</p>
	</div>

	<?php
	else :
		header('Location:login.php');
	endif;
	?>
</body>

</html>