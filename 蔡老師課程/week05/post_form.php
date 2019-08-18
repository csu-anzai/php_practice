<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8" />
		<title>傳遞資料</title>
		
	</head>
	<body>
		<form method="POST" action="show_post.php">
			<div>標題：<input type="text" name="title"></div>
			<div>分類：
				<select name="category">
					<option value="最新消息">最新消息</option>
					<option value="個人作品">個人作品</option>
				</select>
			</div>
			<div>內文：<textarea name="content"></textarea></div>
			<div>
				<label><input type="radio" name="publish" value="1">發佈</label>
				<label><input type="radio" name="publish" value="0">不發佈</label>
			</div>
			<div>
				<label><input type="checkbox" name="keyword[]" value="php">php</label>
				<label><input type="checkbox" name="keyword[]" value="html">html</label>
				<label><input type="checkbox" name="keyword[]" value="css">css</label>
				<label><input type="checkbox" name="keyword[]" value="javascript">javascript</label>
			</div>
			<button type="submit">送出</button>
		</form>
	</body>
</html>