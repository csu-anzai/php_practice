<?php
session_start();
if (isset($_POST['account'])) {
    if ($_POST['account'] == 'jason' and $_POST['password'] == '0000') {
        $_SESSION['user'] = $_POST['account'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['user'])) : ?>
    <h2><?= $_SESSION['user'] ?>,您好</h2>
    <p><a href="0816logout.php">登出</a></p>
    <?php else :  ?>
    <form method="post">
        <input type="test" name="account" placeholder="account"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit">
    </form>
    <?php endif; ?>
</body>

</html>