<?php
session_start();


if (!isset($_SESSION['my'])) {
    $_SESSION['my'] = 1;
} else {
    $_SESSION['my'] ++ ;
 }

 echo $_SESSION['my'];
