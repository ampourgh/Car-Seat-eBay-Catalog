<?php
  $conn = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "b5723b7b935724", "985bb187", "heroku_52e2b92d5188bd3");

  if ($conn) {
    echo "";
  } else {
    die("<br>Cannot connect: " . mysqli_connect_error());
  }
 ?>
