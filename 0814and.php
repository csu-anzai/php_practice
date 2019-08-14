<!doctype html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 7 && 5;
    echo "$a <br>";
    $a = 0 && 5;
    echo "$a <br>";
    $a = 7 and 5;
    echo "$a <br>";
    $a = 0 and 5;
    echo "$a <br>";
    echo ($a = 7 and 5) ? 'true<br>' : 'false<br>'; //是true拿左
    echo ($a = 0 and 5) ? 'true<br>' : 'false<br>'; //是false拿右
    ?>
</body>

</html>