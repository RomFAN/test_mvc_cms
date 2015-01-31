<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>OnePager - One Page Responsive Portfolio Template</title>

<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="styles/style.css" media="screen" />
<link rel="stylesheet" href="styles/media-queries.css" />
<link rel="stylesheet" href="./flex-slider/flexslider.css" type="text/css" media="screen" />
<link href="styles/prettyPhoto.css" rel="stylesheet" type="text/css" media="screen" />
<link href="styles/tipsy.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="./scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="./flex-slider/jquery.flexslider-min.js"></script>
<script src="scripts/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="scripts/jquery.tipsy.js" type="text/javascript"></script>
<script src="scripts/jquery.knob.js" type="text/javascript"></script>
<script type="text/javascript" src="./scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="./scripts/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="./scripts/waypoints.min.js"></script>
<script type="text/javascript" src="./scripts/setup.js"></script>


</head>
<body>
<div id="wrap"> 
  <!-- wrapper -->
  <div id="sidebar"> 
    <!-- the  sidebar --> 
    <!-- logo -->  
    <!-- navigation menu -->
    <ul id="navigation">

    </ul>
  </div>
  <div id="container"> 
    <!-- page container -->
    <div class="page" id="home"> 
      <!-- page home -->
      <div class="page_content">
	
	
    <?php include './content_schemas/'.$content.'.php'; ?>

	
	
    <div class="footer">
      <p> &copy; 2012 <a href="http://eGrappler.com">eGrappler.com</a>. Some Rights Reserved.</p>
      <p> Designed With Love by <a href="http://esarfraz.com">Sarfraz Shoukat</a></p>
    </div>
  </div>
</div>
<a class="gotop" href="#top">Top</a>
</body>
</html>