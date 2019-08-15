<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>



    <script>
        <?php
        function swap(&$a, &$b)
        {
            $c = $a;
            $a = $b;
            $b = $c;
        }

        $m =100;
        $n ='abc';
        swap($m,$n);
        echo "$m $n";


        ?>
    </script>
</body>

</html>