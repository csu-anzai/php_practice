<?php
$a = isset($_GET['a'])?($_GET['a']):intval('asdad');
//intval不是數值轉換成0
$b = isset($_GET['b'])?($_GET['b']):intval(0);
echo $a + $b;
