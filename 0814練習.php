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
        $my_var = 66;
        $b = "22";
        $c = "abc";
        echo $my_var + $b; //單純數字相加
        echo "<br />";
        echo $my_var + $c; //66+0
        ?>
    </div>
    <div class="div2">
        <?php
        $n = 'name';
        $$n = 'jason';
        //等同$name = 'jason'
        echo $name;
        //要點用變數來當值,不要用
        ?>
    </div>
    <div class="div3">
        <?php
        $a = 'jason';
        echo "abc,$a"; //單純字串相加
        echo '<br/>';
        echo 'abc,$a'; //不會印出變數的內容
        ?>
    </div>
    <div class="div4">
        <?php
        $a = "Victor";
        echo "Hello,$a123<br/>"; //會變成變數這裡是未定義
        echo "Hello,{$a}123<br/>"; //在"裡面變數顯示
        echo "Hello,${a}123<br/>"; //在"裡面變數顯示
        echo $a . '<br/>'; //點符號是用來字串相接
        ?>
    </div>
    <div class="div2">
        <?php
        echo "a\b\"'c\d\\" . '<br/>';//  a\b"c\'d\
        echo 'a\b\"c\'d\\';// a\b\"c'd\
        ?>
    </div>
    <div class="div2">
        <?php
        ?>
    </div>
    <div class="div2">
        <?php
        ?>
    </div>
    <div class="div2">
        <?php
        ?>
    </div>
    <div class="div2">
        <?php
        ?>
    </div>
</body>

</html>