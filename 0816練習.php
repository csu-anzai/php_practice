<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = 1;
}   else{
    $_SESSION['cart'] ++;
}

echo $_SESSION['cart'].'<br/>';


date_default_timezone_set('Asia/Taipei');

setcookie('jason', 'hello');

echo time() . '<br/>';

echo date("Y-m-d H:i:s") . '<br/>';

echo date("Y-m-d H:i:s", time() + 30 * 24 * 60 * 60) . '<br/>';

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




    <div class="div1">
        <?php
        echo $_COOKIE['jason'];
        ?>
    </div>
    <div class="div2">
        <?php
        ?></div>
    <div class="div3">
        <?php
        ?></div>
    <div class="div4">
        <?php
        ?></div>
    <div class="div5">
        <?php
        ?></div>
    <div class="div6">
        <?php
        ?></div>
    <div class="div7">
        <?php
        ?></div>
    <div class="div8">
        <?php
        ?></div>
    <div class="div9">
        <?php
        ?></div>
    <div class="div10"><?php ?></div>
</body>

</html>