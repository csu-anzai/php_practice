<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="showGet.php" method="GET">
        <label for="title">標題:
            <input type="text" name="title" id="title">
        </label>
        <br>
        <label for="news">分類:
            <select name="news" id="news">
                <option value="最新消息">最新消息</option>
                <option value="個人作品">個人作品</option>
            </select>
        </label>
        <br>
        <div>
            <label for="content">內文:
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </label>
        </div>
        <div>
            <label for="publish1"><input type="radio" name="publish" id="publish1" >發佈</label>
            <label for="publish2"><input type="radio" name="publish" id="publish2" >不發佈</label>
        </div>
        <div>
            <label for="php"><input type="checkbox" name="keyword[]"  id="php" value="php">php</label>
            <label for="html"><input type="checkbox" name="keyword[]"  id="html" value="html">html</label>
            <label for="css"><input type="checkbox" name="keyword[]"  id="css" value="css">css</label>
            <label for="javascript"><input type="checkbox" name="keyword[]"  id="javascript" value="javascript">javascript</label>
        </div>
        <button type="">送出</button>
    </form>
</body>

</html>