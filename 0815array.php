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

    $a = array(2, 4, 6, 99, 'hi'); // 索引式陣列 

    $b = array(
        'name' => 'david',
        'age' => 20,
    );
    $c = array();

    for ($i = 0; $i < 10; $i++) {
        $c[] += $i * $i;
    }

    echo '<pre>';

    print_r($a);

    print_r($b);

    echo count($a) . "\n";

    echo count($b) . "\n";

    echo count($c) . "\n";


    echo '</pre>';
    ?>


</body>

</html>