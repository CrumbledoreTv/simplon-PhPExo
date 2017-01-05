<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Exo2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">

  </head>

  <body>
    <?php
      for($i = 1; $i<=24; $i++){
        echo "<div class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"img".$i.".jpg\"/></div>";
      }
     ?>
  </body>
</html>
