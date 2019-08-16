<?php
session_start();

unset($_SESSION['user']);

if (!empty($_SERVER['HTTP_REFERER'])) {
    header('Location:0816loginFive.php');
} else {
    header('Location: 0816login.php');
}
