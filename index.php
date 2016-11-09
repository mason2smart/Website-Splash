 <!DOCTYPE html>
<html>
  <head>
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="description" content="Discobots - First Robotics Team 2587 Main Directory">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="material/material.min.css">
<script src="material/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       <meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Discobots 2587 | Splash</title>
    
  </head>
  <body>
             <center>
        <!------------------------------------------>
        <!------------------------------------------>
    		<!-- Simple header with fixed tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">DISCOBOTS SPLASH</span>
    </div>
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-color--primary-dark">
               <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">

      <a href="http://2015.discobots.org/" class="mdl-layout__tab mdl-button mdl-js-button mdl-js-ripple-effect ">2015</a>
      <a href="http://2014.discobots.org/" class="mdl-layout__tab mdl-button mdl-js-button mdl-js-ripple-effect">2014</a>
      <a href="http://2013.discobots.org/" class="mdl-layout__tab mdl-button mdl-js-button mdl-js-ripple-effect">2013</a>
      <a href="http://2012.discobots.org/" class="mdl-layout__tab mdl-button mdl-js-button mdl-js-ripple-effect">2012</a>
      <a href="http://2011.discobots.org/" class="mdl-layout__tab mdl-button mdl-js-button mdl-js-ripple-effect">2011</a>
      <a href="http://2010.discobots.org/" class="mdl-layout__tab mdl-button mdl-js-button mdl-js-ripple-effect">2010</a>
      <a href="http://2009.discobots.org/" class="mdl-layout__tab mdl-button mdl-js-button mdl-js-ripple-effect">2009</a>
      <a href="http://2008.discobots.org/" class="mdl-layout__tab mdl-button mdl-js-button mdl-js-ripple-effect">2008</a>
		</section>
   </div>
  </header>
</div>
			  <!------------------------------------------>
      	<div id="slideshow">
      	  <img id="slideimage" src="static/image1.jpg" />
      	  <script type="text/javascript"> // IMAGE SIZE NEEDS TO BE 600px WIDTH AND 400px HEIGHT
            var imageslist = new Array(); // create new array to preload images
            imageslist[0] = new Image(); // create new instance of image object
            imageslist[0].src = "static/image1.jpg"; // set image object src property to an image's src, preloading that image in the process
            imageslist[1] = new Image();
            imageslist[1].src = "static/image2.jpg";
            imageslist[2] = new Image();
            imageslist[2].src = "static/image3.jpg";
            //var for time image is shown, in milliseconds
            var speedms = 5000;
            //variable that will increment through the images
            var step=0;
            function slide() {
              console.log("slide slideshow");
              if (!document.images) {
                return;
              }
              document.getElementById('slideimage').src = imageslist[step].src;
              if (step < imageslist.length - 1){
                step++
              } else {
                step=0;
              }
              setTimeout("slide()",speedms);
            }
            
            console.log("start slideshow");
            slide();
          </script>
			  </div>
			  <!------------------------------------------>
	      <div class="linkbar" id="social">
	        <ul>
	          <li>
	            <a href="https://www.facebook.com/DiscoBots2587">
	              <img src="static/facebook.svg" alt="Facebook" />
	            </a>
	          </li>
	          <li>
	            <a href="https://twitter.com/discobots">
	              <img src="static/twitter.svg" alt="Twitter" />
	            </a>
	          </li>
	          <li>
	            <a href="https://plus.google.com/+DiscoBots/">
	              <img src="static/google.svg" alt="Google+" />
	            </a>
	          </li>
	          <li>
	            <a href="https://github.com/discobots2587/">
	              <img src="static/github.png" alt="GitHub" />
	            </a>
	          </li>
	        </ul>
	      </div>
		    <!------------------------------------------>
		  </center>
     <!--
     <p>We are the DiscoBots 2587, a FIRST and VEX Robotics team from Carnegie Vanguard High School and Lamar High School in Houston, Texas. This is the gateway to our website. Select a year to go to the website for that year or select a social media icon to follow us online!</p>
     -->
    </div>
  </body>
</html>