<?php
$ar = array(
    'jason','jack',
);

foreach( $ar as $key => $value ){
    echo "{$key} : {$value}" ."<br/>" ;
}
foreach( $ar as $key  ){
    echo "{$key} " ."<br/>" ;
}//這樣還是拿值所以這個方法不能拿KEY
foreach( $ar as  $value ){
    echo " {$value}" ."<br/>" ;
}


?>