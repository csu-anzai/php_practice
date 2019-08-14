<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .phpTable {
            color: #000;
            background: black;
            text-align: center;
            font-size: 32px;
            margin: 50px auto 0 auto;
        }

        .phpTable td {
            animation: color 5s infinite;
        }

        @keyframes color {
            0% {
                background: black;
                font-size: 32px;
                width: 100px;
            }

            25% {
                background: blue;
            }

            50% {
                background: yellow;
                font-size: 64px;
                width: 500px;
            }

            75% {
                background: white;
            }

            100% {
                background: black;
                font-size: 32px;
                width: 100px;
            }
        }
    </style>
</head>

<body>
    <h1 style="text-align:center; padding:10px;">PHP 99乘法表</h1>
    <table border='1' width='1000px' height='500px' class="phpTable">
        <?php for ($i = 1; $i < 10; $i++) { ?>
        <!-- 跑10個tr -->
        <tr>
            <?php for ($j = 1; $j < 10; $j++) { ?>
            <!-- 每個tr迴圈跑10個td -->
            <td>
                <?php printf('%s*%s=%s' ,$i,$j,$i*$j) ?>
                <!--　印出來 -->
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>

    <table border='1' width='1000px' height='500px' class="phpTable">
        <?php for ($i = 1; $i < 10; $i++) : ?>
        <!-- 跑10個tr -->
        <tr>
            <?php for ($j = 1; $j < 10; $j++) : ?>
            <!-- 每個tr迴圈跑10個td -->
            <td>
            <?php echo sprintf('%s*%s=%s' ,$i,$j,$i*$j) ?>
            <!-- 回傳的是值所以要有echo -->
            </td>
            <?php endfor ?>
        </tr>
        <?php endfor ?>
        <!-- 同大括號寫法只是比較好分辨 -->
    </table>



</body>

</html>