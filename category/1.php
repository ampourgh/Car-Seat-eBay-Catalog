<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>USA AUTO SEAT COVER</title>
  <?PHP
    include '../top-imports.php';
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <div class="site-outer">
  	<nav class="navbar navbar-fixed-top">
  		<section class="container-fluid">
  			<div class="row">
  				<div class="container-menu"  id="navbar">

            <div class="three col" id="hb">
              <div class="hamburger" id="hamburger-9">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </div>

  					<div class="logotype">
              <div class="big navbar-title"><a href="../index.php"><img src="../img/logo.png" class="site-logo"></a></div>
  					</div>

  					<div class="phone-number">
  						<div class="big phone-num">713-261-7380</div>
  					</div>

  				</div>
  			</div>
  		</section>
  	</nav>

  	<div class="site-inner">
  		<section class="container-fluid">
  			<div class="row mg">
          <div class="container">

            <br><br>

            <a href="../index.php"><span class="go-back glyphicon glyphicon-chevron-left"></span></a>

            <h1 class="text-center head blue">Seat Covers for <?PHP echo $_GET['car']; ?></h1>

            <?php

              if(isset($_GET['car'])) {
                include '../conn.php';

                $selectedCar = $_GET['car'];

                $sql = "SELECT * FROM heroku_52e2b92d5188bd3.seatCover WHERE car = '$selectedCar'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {

                  $numOfRows = mysqli_num_rows($result);

                  // output data of each row

                  $counter = 0;
                  while($row = mysqli_fetch_assoc($result)) {

                      $seatCoverIMG = str_replace(' ', '', $row["scName"]);

                      if ($counter == 0) {
                        echo '<div class="row">';
                      }

                        echo '<div class="col-md-3 col-sm-6 col-xs-12">
                                <a href="../item/1.php?item=' . $row["scName"] . '&car=' . $_GET['car'] . '">

                                <h3 class="text-center">' . $row["scName"] . '</h3>

                                <div class="sm-box" style="background-image: url(../img/item/' . $seatCoverIMG . '.png);">
                                  <div class="sm-box-overlay"></div>
                                  <div class="sm-box-basket"><a href="../item/1.php?item=' . $row["scName"] . '&car=' . $_GET['car'] . '" class="button button-blue" data-toggle="modal" data-target="#modal">Select</a></div>
                                  <div class="sm-box-content" style="height: 6rem;"><span style="font-size: 12px;" class="red">You save: <b>' . $row["clearance"] . '</b></span><br><i class="fa fa-chevron-right"></i> <span>Price: <b>US ' . $row["reducedPrice"] . '</b></span></div>
                                </div>
                              </a>
                            </div>';

                      $counter += 1;

                      if ($counter == 3 || 0 >= $numOfRows - $counter) {
                        echo '</div>';
                      }

                  }
                } else {
                  echo "Sorry! We currently do not have seat covers to display for " . $_GET['car'] . "s.";
                }

              }



             ?>

      </section>
    </div>

    <?PHP
      include '../footer.php';

      include '../navigation.php';

      echo '</div>';

      include '../bottom-imports.php';
    ?>
</body>
</html>
