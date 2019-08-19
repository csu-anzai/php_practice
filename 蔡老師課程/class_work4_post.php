<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>聯絡我們</h1>
    <form action="">
        <div>狀況:
            <select name="status" id="">
                <option value="速件">速件</option>
                <option value="普通">普通</option>
            </select>
        </div>
        <div>
            <label>主旨:
                <input type="text" name="title">
            </label>
        </div>
        <div>
            <label>信箱:
                <input type=" email" name=" email">
            </label>
        </div>
        <div>
            <label>暱稱:
                <input type=" email" name=" name">
            </label>
        </div>
        <div>性別:
            <label for="man">男
                <input type="radio" name="gender" value="男" id="man">
            </label>
            <label for="womem">女
                <input type="radio" name="gender" value="女" id="womem">
            </label>
        </div>
        <div>
            <label for="content">
                <textarea name="content" id="" cols="30" rows="10" id="content">
            </textarea>
            </label>

        </div>
        <button type="submit">送出</button>
    </form>
</body>

</html>