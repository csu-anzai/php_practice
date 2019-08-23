<?php
session_start();

unset($_SESSION['loginUser']);

if (!empty($_SERVER['HTTP_REFERER'])) {
    header('Location:' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location:0819testPage.php');
}
