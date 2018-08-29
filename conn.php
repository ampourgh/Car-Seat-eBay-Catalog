<?php
  $conn = mysqli_connect("server", "user", "pass", "heroku");

  if ($conn) {
    echo "";
  } else {
    die("<br>Cannot connect: " . mysqli_connect_error());
  }
 ?>
