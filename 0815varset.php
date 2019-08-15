<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <pre>
        <?php
        $a = array(
            'name' => 'david',
            'age' => 20,
        );

        $b = $a;
        $c = &$a;

        $b['name'] = 'jason';
        $c['name'] = 'jack';

        print_r($a);
        print_r($b);
        print_r($a);

        ?>
    </pre>

</body>

</html>