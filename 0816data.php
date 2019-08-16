<?php
    date_default_timezone_set('Asia/Taipei');//修改基本時間
    echo time(). '<br>';//讀取時間現在
    echo date("Y-m-d H:i:s").'<br>';  //年月日 時分秒    
    echo date("Y-m-d H:i:s", time()+30*24*60*60).'<br>';//數字表示
    echo date("Y-m-d H:i:s", strtotime('+30 days')).'<br>';//字串表示
    // echo date("Y-m-d H:i:s", strtotime('+30 days')). '<br>';
?>