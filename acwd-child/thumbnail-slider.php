<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta content="charset=utf-8">
	<title>FlexSlider 2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


  <!-- Demo CSS -->
	<link rel="stylesheet" href="../flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->

</head>
<body class="loading">
	<div id="main" role="main">
      <section class="slider">
        <div id="slider" class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="https://www.luxury-club.fr/wp-content/uploads/2020/01/mini-cooper_s_cabriolet-arriere-13.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="https://www.luxury-club.fr/wp-content/uploads/2020/01/mini-cooper_s_cabriolet-arriere-13.jpg" />
  	    		</li>

          </ul>
        </div>
        <div id="carousel" class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="https://www.luxury-club.fr/wp-content/uploads/2020/01/mini-cooper_s_cabriolet-arriere-13.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="https://www.luxury-club.fr/wp-content/uploads/2020/01/mini-cooper_s_cabriolet-arriere-13.jpg" />
  	    		</li>

          </ul>
        </div>
      </section>


  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <!-- FlexSlider -->
  <script defer src="../jquery.flexslider.js"></script>

  <script type="text/javascript">

    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

</body>
</html>
