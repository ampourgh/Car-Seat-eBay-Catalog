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

  					<div class="checkout">
  						<div class="big" style="padding-right: 10px;">713-261-7380</div>
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

            <?php

              if(isset($_GET['item'])) {
                include '../conn.php';

                $selectedItem = $_GET['item'];
                $selectedCar = $_GET['car'];

                $sql = "SELECT * FROM heroku_52e2b92d5188bd3.seatCover WHERE scName = '$selectedItem' AND car = '$selectedCar'";
                // h
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  // output data of each row


                  while($row = mysqli_fetch_assoc($result)) {
                    $seatCoverIMG = str_replace(' ', '', $row["scName"]);
                    echo '<a href="../category/1.php?car=' . $row["car"] . '"><span class="go-back glyphicon glyphicon-chevron-left"></span></a>
                          <h1 class="text-center head blue">' . $row["scName"] . '</h1>
                          <div class="row">
                            <div class="item-col">
                              <img src="../img/item/' . $seatCoverIMG . '.png" style="height: 400px; width: auto; box-shadow: 0 1px 1px 1px rgba(0, 0, 0, .3);">
                            </div>
                            <div class="item-col">
                              <p><b>Description:</b> ' . $row["description"] . '</p>
                              <a href="' . $row["eBayURL"] . '"><img src="../img/ebay.svg" style="height: 35px; width: auto;"></a>
                              <br><br>
                              <a href="' . $row["payPalURL"] . '"><img src="../img/paypal.png" style="height: 35px; width: auto;"></a>
                              <br><br>
                              <p style="font-size:10px;"><b>Disclaimer:</b> ' . $row["disclaimer"] . '</p>
                            </div>
                          </div>';

                  }
                } else {
                  echo "<br><br><br><b>0 results</b>";
                }

              }



             ?>


            <br><br><br>
            <div class="row">
              <div class="col-thumbnail">
                <div class="sm-box" style="background-image: url('');"></div>
              </div>
              <div class="col-thumbnail">
                <div class="sm-box" style="background-image: url('');"></div>
              </div>
              <div class="col-thumbnail">
                <div class="sm-box" style="background-image: url('');"></div>
              </div>
              <div class="col-thumbnail">
                <div class="sm-box" style="background-image: url('');"></div>
              </div>
              <div class="col-thumbnail">
                <div class="sm-box" style="background-image: url('');"></div>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>

    <?PHP
      include './footer.php';

      include './navigation.php';

      echo '</div>';

      include './bottom-imports.php';
    ?>
</body>
</html>
