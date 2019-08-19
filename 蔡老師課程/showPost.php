<?php
$status = $_POST["status"];
$title = $_POST["title"];
$email = $_POST["email"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$content = $_POST["content"];
?>
<p>我們已收到您的訊息</p>
<?php
echo "狀況:".$status."<br/>";
echo "主旨:".$title."<br/>";
echo "您的信箱:".$email."<br/>";
echo "您的暱稱:".$name."<br/>";
echo "性別:".$gender."<br/>";
echo "內文:".$content."<br/>";
?>