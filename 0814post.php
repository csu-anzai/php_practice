<?php
$a = isset($_POST['a'])?($_POST['a']):intval('asdad');
//intval不是數值轉換成0
$b = isset($_POST['b'])?($_POST['b']):intval(0);
echo $a + $b;
