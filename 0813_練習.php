<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <!-- 打完php後要空一格也，接ｅｃｈｏ的時候可以用？＝ -->
        <?php for ($i = 1; $i < 10; $i++) { ?>
        <tr>
            <?php for ($j = 1; $j < 10; $j++) { ?>
            <td>
                <?php echo $i * $j ?>
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
    <table border="1">
        <!-- 打完php後要空一格也，接ｅｃｈｏ的時候可以用？＝ -->
        <?php for ($i = 1; $i < 10; $i++) {
            echo "
        <>
            <td>
                  $i
            </td>
        </tr>";
        } ?>
    </table>



    <?php 
    define('a bc', 333); //常數定義法
    $a = 22; //變數定義
    echo (7 + 9);
    echo '<br>';
    echo __DIR__;
    //路徑
    echo '<br>';
    echo __FILE__;
    //完整路徑
    echo '<br>';
    $abc = 12;
    echo __LINE__ . '<br>'; //串字串用.
    echo $abc . '<br>';
    //第幾行
    //除錯要往前看
    $str = 'qwert'; //單純字串用單引號
    $str2 = "qwertt $str"; //有變數要用雙引號
    echo " $str <br> $str2";
    echo   $abc+'a';
    ?>
</body>

</html>