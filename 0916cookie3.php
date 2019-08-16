<?php
if (!isset($_COOKIE['cookie'])) {
    setcookie('cookie', '10', time() + 30);
} else {
    $c = $_COOKIE['cookie'];
    setcookie('cookie', $c + 1, time() + 30);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>




    <?php
    if (!isset($_COOKIE['cookie'])) {
        echo 'cookie';
    } else {
        $c = $_COOKIE['cookie'];
       
    } ?>
</body>

</html>