<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="div4">
        <?php
        //區域變數不會往外找 global $x;這種才是真的全域
        class   Person
        {
            private $name; //要改這個要在裡面建立ＦＵＮ改
            function setName($n)
            {
                $this->name = $n;
            }
            function getName()
            {
                return $this->name;
            }
        }
        $P = new Person;;
        $P->setName  ("jack");
        echo $P->getName();
        ?>
</body>

</html>