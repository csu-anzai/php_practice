<?php
session_start();

$account = [
    'jason0'  => '0000',
    'jason1' => '1111',
    'jason2' => '2222',
    'jason3' => '3333',
];

if (isset($_POST['account'])) {
    if(isset($account[$_POST['account']])){
        if($_POST['password'] == $account[$_POST['account']]){
            $_SESSION['user'] = $_POST['account'];
        }
    }


    // echo $_POST['account'].':'.$_POST['password'];
};




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=F, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['user'])) : ?>
    <h2><?= $_SESSION['user'] ?>,你好</h2>
    <p><a href="0816logout.php">logout</a></p>`

    <?php else : ?>
    <form action="" method="post">
        <input type="text" name="account" placeholder="帳號"><br>
        <input type="account" name="password" placeholder="密碼"><br>
        <input type="submit">
    </form>
    <?php endif; ?>

</body>

</html>