<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Note there is no responsive meta tag here -->

    <link rel="icon" href="favicon.ico">

    <title>University of Cebu Medical Center - UCMed</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="non-responsive.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <div class="row" style="background:url('assets/img/content-bg.png') repeat-y;">

        <div class="col-xs-3 menus">
          <br>
          <br>
          <a href="index.php"><img src="assets/img/ucmed-logo.png" alt="logo"></a>
          <br>
          <br>
          <div id="trunklineholoder">
          <p>TRUNKLINE (032) 517.0888</p>
          </div>
          <div id="menu-holder">
           
			<!-- Displays bold menus -->
			 <?php
                    if ($_GET["page"]=="about-us"){
		
                        include 'about-menus.php';
                    }
					else if ($_GET["page"]=="services"){
		
                        include 'services-menus.php';
                    }
					else if ($_GET["page"]=="rooms"){
		
                        include 'rooms-menus.php';
                    }
					else if ($_GET["page"]=="contacts"){
		
                        include 'contacts-menus.php';
                    }
					else if ($_GET["page"]=="promos"){
		
                        include 'promos-menus.php';
                    }
					else if ($_GET["page"]=="doctors"){
		
                        include 'doctors-menus.php';
                    }
					else if ($_GET["page"]=="appforms"){
		
                        include 'appforms-menus.php';
                    }
					/*else if ($_GET["page"]=="careers"){
		
                        include 'careers-menus.php';
                    }
					else if ($_GET["page"]=="gallery"){
		
                        include 'gallery-menus.php';
                    }
					else if ($_GET["page"]=="news"){
		
                        include 'news-menus.php';
                    }*/
					
                    else {
                        include 'menus.php';
                    }
                ?>
			
          </div>
          
        </div>

        <div class="col-xs-9 page-content">

            <?php
                    if ($_GET["page"]=="about-us"){
		
                        include 'about-content.php';
                    }
                    else if ($_GET["page"]=="services") {
                        include 'services-content.php';
                    }
                    else if ($_GET["page"]=="rooms") {
                        include 'rooms-content.php';
                    }
                    else if ($_GET["page"]=="contacts") {
                        include 'contact-contents.php';
                    }
                    else if ($_GET["page"]=="promos") {
                        include 'events-promo.php';
                    }
					else if ($_GET["page"]=="doctors") {
                        include 'doctors-content.php';
                    }
					else if ($_GET["page"]=="appforms") {
                        include 'applicationform-content.php';
                    }
                    else {
                        include 'error.php';
                    }
                ?>

        </div>

      </div><!-- From above row -->

    </div> <!-- /container -->
	
  <footer class="footer">

      <div class="container">
        <div class="row">
          <div class="col-xs-3 leftfooter">
              <div style="width:262px;margin-left:-6px;margin-top:-200px;">
              <img src="assets/img/building-small.png" alt="building">
            </div>
          </div>
          <div class="col-xs-9 rightfooter">
              <img src="assets/img/footer-label.png" alt="label">
          </div>
        </div>
      </div>

    </footer>
<!--this is the new footer
<div class="container container-full">
	<div class="row">
	<div class="col-xs-12 col-full">
			<footer class="wrapperfooter">
			  <div class="container">
				<div class="row">
				  <div class="col-xs-3 leftfooter">
					  <div style="width:262px;margin-left:-6px;margin-top:-200px;">
					  <img src="assets/img/building-small.png" alt="building">
					  </div>
				  </div>
				  <div class="col-xs-9 rightfooter">
					  <img src="assets/img/footer-label.png" alt="label">
				  </div>
				</div>
			  </div>
			</footer>
	</div>
	</div>
	</div> 
	</div>-->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
