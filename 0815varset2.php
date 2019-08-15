<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <pre>
        <?php
        $a = 10;
        $b = $a;
        $c = 20;
        $d = &$c;
        $b = 50;
        $d = 60;
        echo "\$a: $a <br>";
        echo "\$b: $b <br>";
        ?>
    </pre>
    </div>


</body>

</html>