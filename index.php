<!DOCTYPE HTML>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link type="text/css" href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">

        <script type="text/javascript" src="js/jquery.1.11.0.min.js"></script> 
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="libs/onepage-scroll/jquery.onepage-scroll.js"></script> 
        <link type="text/css" href="libs/onepage-scroll/onepage-scroll.css" rel="stylesheet">

		<script>
		  $(document).ready(function(){
				$(".main-content").onepage_scroll({
				   sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
				   easing: "ease-out",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in", 
				                                    // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
				   animationTime: 500,             // AnimationTime let you define how long each section takes to animate
				   pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
				   updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
				   beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
				   afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
				   loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
				   keyboard: true,                  // You can activate the keyboard controls
				   responsiveFallback: 600        // You can fallback to normal page scroll by defining the width of the browser in which
				                                    // you want the responsive fallback to be triggered. For example, set this to 600 and whenever 
				                                    // the browser's width is less than 600, the fallback will kick in.
				});
			});
		</script>

		<style type="text/css">
			body {
				padding: 0;    
				margin: 0;
				background: #f2f2f2;
				font-family: 'Roboto', Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
	            color: #606060;
			}

			section {
				height: 700px;
				overflow: hidden;
			}

			#slide-0{
				background-color: #FFF;
				background-image: url('img/lens_2.jpg');
				background-size: cover;
			}

			#slide-0 .logo {
				border-radius: 50%;
				width: 200px;
				height: 200px;
				background: rgba(255, 255, 255, 0.3);
				border: 5px solid #FFF;
				color: #FFF;
				display: inline-block;
				font-size: 4em;
				font-weight: 200;
				line-height: 3.3em;
				text-align: center;
				margin: 50px 0 200px 0;

				/*border: 5px solid #555;*/
			}

			#slide-0 .slogan {
				font-weight: 200;
				font-size: 4em;
				color: #FFF;
				margin-bottom: 20px;
				/*text-shadow: 2px 2px 5px rgba(255, 255, 255, 1);*/
				/*text-align: center;*/
				/*margin: 0 100px;*/
			}

			@media all and (max-width: 580px) {
				#slide-0 .slogan {
					font-size: 2em;
				}

				#slide-0 .logo {
					margin-bottom: 100px;
				}

				#slide-0 .lens-btn {
					margin-bottom: 5px;
					width: 95%;
				}
			}


			#slide-1 {
				background: none;
				/*background-image: url('img/bridge2.jpg');*/
			}


			#slide-2{
				background: rgb(31,32,54);
			}

			#slide-5 {
				background: #EEE;
				border-top: 1px solid #CCC;
/*				height: 200px !important;*/
			}

			nav {
				margin-bottom: 0 !important;
			}

			.title {
				font-weight: 200;
				font-size: 4em;
			}

/*			taken from http://www.polymer-project.org/*/		
			.lens-btn {
				display: inline-block;
				-webkit-transition: box-shadow 0.2s, background 0.2s;
				transition: box-shadow 0.2s, background 0.2s;
				border: none;
				cursor: pointer;
				overflow: hidden;
				position: relative;
				padding: 14px 14px 12px;
				border-radius: 2px;
				outline: none;
				white-space: nowrap;
				font-size: 13px;
				line-height: 24px;
				letter-spacing: 0.06em;
				vertical-align: middle;
				font-weight: 300;
				text-transform: uppercase;
				background: #FFF;
			}

			.lens-btn:hover, .lens-btn:active {
				box-shadow: 0px 4px 10px 0 rgba(0,0,0,0.1),0px 2px 10px 0px rgba(0,0,0,0.1);
			}

		</style>
	</head>
        <body>
<!-- 
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">LENS</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#slide-1">Slide 1</a></li>
							<li><a href="#slide-2">Slide 2</a></li>
						</ul>
					</div><
				</div>
			</nav> -->
			<div class="main-content">
			<section id="slide-0" class="container-fluid text-center">
					<div class="logo">Lens</div>
					<hr>
					<div class="slogan">Building WebApps since 1991</div>
					<p>
					  <button type="button" class="lens-btn">Large button</button>
					  <button type="button" class="lens-btn">Large button</button>
					  <button type="button" class="lens-btn">Large button</button>
					</p>

			</section>

			<section id="slide-1" class="bcg container-fluid text-center">
		
				    <div style="position: relative;">
				    	<p class="title">Mobile Development</p>
				    	<img src="img/android.png" />
				    	<img src="img/ios.png" />
				    </div>
	

			</section>
			
			<section id="slide-2">
			</section>

			<section></section>
			<section id="slide-5">
					<p
					>
						Alg&uacute;n footer
					</p>

			</section>
			</div> <!-- class main -->
	</body>
</html>