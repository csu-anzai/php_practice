<?php
$title = $_GET['title'];

$news = $_GET['news'];

$content = $_GET['content'];

$publish = $_GET['publish'];

$keyword = $_GET['keyword'];
?>


<p>標題:<?php echo $title;  ?></p>

<p>分類:<?php echo $news; ?></p>

<p>內容:<?php echo $content;  ?></p>

<p>發布狀況:<?php echo $publish;  ?></p>

<p>關鍵字:<?php echo implode(' ', $keyword)  ?></p>

<!-- implode == join -->