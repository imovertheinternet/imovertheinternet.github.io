<head>
<link href="../assets/vendor/materialize/dist/css/materialize.css" rel="stylesheet">
<link href="assets/vendor/fontawesome/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="assets/vendor/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="assets/vendor/materialize/dist/js/min.js"></script>
<script type="text/javascript" src="assets/vendor/chartjs/Chart.min.js"></script>
<script type="text/javascript" src="assets/vendor/instafeed.js"></script>
<script type="text/javascript"
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwXv9mcqHNiIZNOaPxPL12oMwsTRUg4bw">
</script>

<script>
	$(document).ready(function(){
		$(".dropdown-button").dropdown();
	})
</script>

<script>
	$(document).ready(function(){
		$('.parallax').parallax();
	});
</script>   
<!--
<script type="text/javascript">
    var feed = new Instafeed({
        get: 'user',
        limit: 14,
        userId: 12118653,
        accessToken: '12118653.467ede5.6704f5fb6beb438aa12755a8d1545863'
    });
    feed.run();
</script>

<script>
var data = {
    labels: ["SEO & PPC", "Linux", "CSS3/HTML5", "JS", "jQuery", "git", "build tools"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56, 55, 40]
        }
    ]
};
    var buyers = document.getElementById('myChart').getContext('2d');
    new Chart(buyers).Bar(data);
</script>
-->


<script type="text/javascript">
      function initialize() {
        var mapOptions = {
         	center: { lat:  33.221064, lng:-96.912715},
        	zoom: 11,
         	scrollwheel: false,
    		navigationControl: false,

        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head>



<!-- <div class="navbar-fixed">
	<ul id="dropdown1" class="dropdown-content">
	  <li><a href="#!">one</a></li>
	  <li><a href="#!">two</a></li>
	  <li class="divider"></li>
	  <li><a href="#!">three</a></li>
	</ul>
	<nav>
	  <div class="nav-wrapper blue-grey z-depth-2">

	    <div class="col s12">
	      <ul class="left side-nav">
	      	<li><a href="sass.html">home</a></li>
	        <li><a href="sass.html">about</a></li>
	        <li><a href="sass.html">work</a></li>
	        <li><a href="components.html">contact</a></li>
	        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">portfolio<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
</div>
 -->



	
		<ul class="custom-nav hide-on-med-and-down">
			<li><a href="sass.html"><i class="mdi-action-search"></i></a></li>
			<li><a href="components.html"><i class="mdi-action-view-module"></i></a></li>
			<li><a href="javascript.html"><i class="mdi-navigation-refresh"></i></a></li>
			<li><a href="mobile.html"><i class="mdi-navigation-more-vert"></i></a></li>
		</ul>





<div id="header-intro" class="valign-wrapper z-depth-2">
	<span class="valign intro-text"> 
		<img class="responsive-img" src="../assets/images/cradsig2.png">
		<h1>
			code. create. climb.
		</h1>
			<p>
			If you hate parallax, click an icon so I dont have to hear complaining.
			</p>
	</span>
</div>


<div class="parallax-container valign-wrapper">
 		<!-- <canvas id="myChart" width="400" height="400"></canvas> -->
 		<div class="container center-align">
	 			
					<h2 class="valign white-text">I'm Conrad</h2>
<p class="valign white-text">
I enjoy working on motorcycles older than me, rock climbing, firearms, beer, computers, cars, whiskey, and learning just about anything anyone is willing to teach me.
I have experience in Linux systems administration (Ubuntu/Centos, Lamp stack), SEO & PPC, front end development 
(CSS, HTML, Variables, DRY), javascript (Node/Jquery), build tools (Grunt.js), performance techniques (Jshint, Uglify, Watch, Concat, etc), 
source repositories (SVN/Git), and I would love to learn more. Reach out to me HERE
</p>
				
		</div>
    <div class="parallax">
    	<img src="assets/images/wp3.jpeg">
			
    </div>
</div>

	  <div class="section about-me blue-grey lighten-5 z-depth-2">
	    
	<div class="row">
        <div class="col s12 m4">
			<div class="card small z-depth-2">
        		<div class="card-image waves-effect waves-block waves-light">
          			<img class="activator" src="../assets/images/1.png">
        		</div>
        	<div class="card-content">
          		<span class="card-title activator grey-text text-darken-4">Creekside Highlands Ranch<i class="waves-purple mdi-navigation-more-vert right"></i></span>
          		<p><a href="#">This is a link</a></p>
        	</div>
        	<div class="card-reveal">
          		<span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
          		<p>This is the 2nd site design I had to develop while working at </p>
        	</div>
     		</div>
    	</div>
	

        <div class="col s12 m4">
			<div class="card small z-depth-2">
        		<div class="card-image waves-effect waves-block waves-light">
          			<img class="activator" src="../assets/images/1.png">
        		</div>
        	<div class="card-content">
          		<span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
          		<p><a href="#">This is a link</a></p>
        	</div>
        	<div class="card-reveal">
          		<span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
          		<p>Here is some more information about this product that is only revealed once clicked on.</p>
        	</div>
     		</div>
    	</div>

    	 <div class="col s12 m4">
			<div class="card small z-depth-2">
        		<div class="card-image waves-effect waves-block waves-light">
          			<img class="activator" src="../assets/images/1.png">
        		</div>
        	<div class="card-content">
          		<span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
          		<p><a href="#">This is a link</a></p>
        	</div>
        	<div class="card-reveal">
          		<span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
          		<p>Here is some more information about this product that is only revealed once clicked on.</p>
        	</div>
     		</div>
    	</div>
    </div>
<!--
    <div class="row">
    	 <div class="col s12 m4">
			<div class="card">
        		<div class="card-image waves-effect waves-block waves-light">
          			<img class="activator" src="../assets/images/1.png">
        		</div>
        	<div class="card-content">
          		<span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
          		<p><a href="#">This is a link</a></p>
        	</div>
        	<div class="card-reveal">
          		<span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
          		<p>Here is some more information about this product that is only revealed once clicked on.</p>
        	</div>
     		</div>
    	</div>

    	 <div class="col s12 m4">
			<div class="card">
        		<div class="card-image waves-effect waves-block waves-light">
          			<img class="activator" src="../assets/images/1.png">
        		</div>
        	<div class="card-content">
          		<span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
          		<p><a href="#">This is a link</a></p>
        	</div>
        	<div class="card-reveal">
          		<span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
          		<p>Here is some more information about this product that is only revealed once clicked on.</p>
        	</div>
     		</div>
    	</div>

    	 <div class="col s12 m4">
			<div class="card">
        		<div class="card-image waves-effect waves-block waves-light">
          			<img class="activator" src="../assets/images/1.png">
        		</div>
        	<div class="card-content">
          		<span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
          		<p><a href="#">This is a link</a></p>
        	</div>
        	<div class="card-reveal">
          		<span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
          		<p>Here is some more information about this product that is only revealed once clicked on.</p>
        	</div>
     		</div>
    	</div>
-->
    </div> 

	  </div>

		<div class="parallax-container valign-wrapper">
			<span class="valign intro-text"> 
			<h2>contact me</h2>
				<a target="_blank" href="" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Lets share pictures"><i class="fa fa-instagram fa-3x"></i></a>
				<a target="_blank" href="http://www.linkedin.com/pub/conrad-grant/32/70a/839/" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Lets connect"><i class="fa fa-linkedin fa-3x"></i></i></a>
				<a target="_blank" href="" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="DEM REPOS"><i class="fa fa-github fa-3x "></i></a>
				<a target="_blank" href="" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="My even less used twitter"><i class="fa fa-twitter fa-3x "></i></a>
				<a target="_blank" href="" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="My unused FB"><i class="fa fa-facebook fa-3x "></i></a>
			</span>
				<div class="parallax">
					<img src="../assets/images/wp1.jpg">
				</div>
		</div>


	<!--<div id="portfolio" class="section blue-grey  darken-3 z-depth-2">
	     <div class="row container center-align">
	      <h3 class="header">my work</h3>
		      <p>
		      I'm Conrad. A web developer that loves climbing, coding, firearms, and working on motorcycles older than me.
		      </p>
	      <div class="row">
	      	<div class="col s12 m3">
	      		<i class="fa fa-cog fa-5x fa-spin"></i>
	      			<h5>srs business</h5>
	      				<p class="portfolio">omg blah blah balsdfj the quick brown fox jumps over the lazy dog more stuff ya go hsblah</p>
	      	</div>
	      	<div class="col s12 m3">
	      		<i class="fa fa-bolt fa-5x "></i>
	      			<h5>srs business</h5>
	      				<p class="portfolio">omg blah blah balsdfj the quick brown fox jumps over the lazy dog more stuff ya go hsblah</p>
	      	
	      	</div>
	      	<div class="col s12 m3">
	      		<i class="fa fa-toggle-on fa-5x"></i>
	      		<h5>srs business</h5>
	      				<p class="portfolio">omg blah blah balsdfj the quick brown fox jumps over the lazy dog more stuff ya go hsblah</p>
	      	
	      	</div>
	      	<div class="col s12 m3">
	      		<i class="fa fa-wifi fa-5x fa-spin"></i>
	      		<h5>srs business</h5>
	      				<p class="portfolio">omg blah blah balsdfj the quick brown fox jumps over the lazy dog more stuff ya go hsblah</p> 	
	      	</div>
		

	</div>-->

</div>
</div>

<div id="map-canvas"></div>
<!-- <div id="instafeed"></div> 
<a class="btn" onclick="toast('I am a toast', 4000)">Toast!</a>-->
