<?php
//請求php檔案
require_once "value.php";
?>

<!DOCTYPE html>
<html lang="zh-TW">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php echo $title;?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	<div class="container">
  		<div class="row">
  			<div class='col s12 m6 offset-m3'>
  				<ul class="collection">
			    <?php
			    	foreach ($news as $key => $value) {
							echo "<li class='collection-item'><a href='{$value["url"]}'>{$value["title"]}</a></li>";
						}
			    ?>
          </ul>
  			</div>
  		</div>
  	</div>
  	<?php include_once 'footer.php';?>
  </body>
</html>
