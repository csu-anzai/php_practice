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
    define('abc',15);
    //const abc = 15;這是常數的設定
    echo abc.'<br>';
    $a = 22;
    //var a = 22;類似但是前面一定要加$字號只要是變數的話 
    echo $a.'<br>';

    echo (7+9).'</br>';
    //串接的時候用.數字要先用圓包起來
    echo 7+9;
    echo '</br>';
    echo __DIR__;
    echo '</br>';
    echo __FILE__;
    echo '</br>';
    echo __LINE__;
?>
</body>

</html>