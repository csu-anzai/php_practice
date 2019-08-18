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
        $ar = array(1, 2, 3, 4, 'hi'); //一般索引式陣列 0 1 2 3 4
        //$ar = array[1, 2, 3, 4, 'hi']; 
        $br = array(
            'name' => 'jason', //key value
            'age' => '26',
        ); // 關聯式陣列key v
        // $br = array[
        //     'name' => 'jason', //key value
        //     'age' => '26',
        // ]; 

        $cr = array(); //可以不用建立
        for ($i = 0; $i < 10; $i++) {
            $cr[] = $i * $i; //[] .push一樣
        }

        echo '<pre>'; //顯示換行  
        print_r($ar); //主要用來列印陣列
        print_r($br);
        print_r($cr);
        var_dump($ar); //顯示更多　　
        var_dump($br);
        echo count($ar) . "\n"; //要確定是索引式才用
        echo count($br) . "\n";
        echo count($cr) . "\n";
        echo '</pre>';
        ?>
    </div>
    <div class="div2">
        <?php
        $dr = array(
            'name' => 'jason', //key value
            'age' => '26',
        );
        foreach ($dr as $k => $v) {
            echo "$k ： $v<br>"; //跳脫的大於
        }
        ?>
    </div>
    <div class="div3">
        <pre>
        <?php
        $fr = array(
            'name' => 'jason', //key value
            'age' => '26',
        );
        $er = $fr; //直接複製不是參照
        $gr = &$fr; //參照
        $er['age'] = 100;
        $gr['age'] = 99;
        print_r($fr);
        print_r($er);
        print_r($gr);

        ?>
        </pre>
    </div>
    <div class="div4">
        <?php
        //區域變數不會往外找 global $x;這種才是真的全域
        class   Person
        {
            var $name;
            public  $mobile;
            private $sno; //要改要用公開的方法　　　　　
            function setName($n)
            {
                $this->sno = $n;
            }
            function getName()
            {
                return $this->sno;
            }
        }
        $P = new Person;;
        $P->name = 'jason';
        $P->mobile = '0976562513';
        $P->setName("jack");
        print_r($P) . '<br/>';
        echo '<br/>';
        echo $P->name . '<br/>';
        echo $P->mobile . '<br/>';
        echo $P->getName();

        ?>
    </div>
    <div class="div5">
        <?php
        class Jason
        {
            var $name;
            function __construct($n)
            {
                $this->name = $n;
            }
        }
        $Jason = new Jason('jason');
        unset($Jason);
        print_r($Jason = new Jason('jason'));
        ?>
    </div>
    <div class="div6">
        <?php
        class MyMath
        {
            function distance($x1, $y1, $x2, $y2)
            {
                $dx = $x1 - $x2;
                $dy = $y1 - $y2;
                return sqrt($dx + $dx + $dy * 7); //ｓｑｒｔ開根號
            }
        }
        echo MyMath::distance(3, 3, 2, 2)
        ?>
    </div>
    <div class="div7">
        <?php
        ?>
    </div>
    <div class="div8">
        <?php
        ?>
    </div>
    <div class="div9">
        <?php
        ?>
    </div>
</body>
<script>
    const div2 = document.querySelector('.div2');
    const er = [12, 'a', 3, 4];
    for (let v of er) {
        div2.innerHTML += v + '<br>';
    }
</script>

</html>