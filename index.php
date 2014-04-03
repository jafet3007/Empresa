<!DOCTYPE HTML>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link type="text/css" href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">

        <script type="text/javascript" src="js/jquery.1.11.0.min.js"></script> 
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.js"></script>

		<script>
		  $(document).ready(function(){

		  	window.addEventListener("resize", function webViewerResize(evt) {
		  		resizeSections();
		  	});

		  	resizeSections();
		});
			
		function resizeSections() {
			var MIN_SECTION_HEIGHT = 700;
	  		dHeight = document.documentElement.clientHeight;
	  		[].forEach.call(document.querySelectorAll('section'), function(e) {
	  			if(!e.classList.contains('no-resize'))
	  				e.style.minHeight = (dHeight < 700 ? MIN_SECTION_HEIGHT : dHeight)+'px';
	  		});
		}

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
				overflow: hidden;
			}

			#slide-0 {
				background-color: #FFF;
				background-image: url('img/lens_2.jpg');
				background-size: cover;
				height: 1px; /*hack para hacer que los row child obtengan height en porcentaje*/
			}

			#slide-0 .row {
				height: 20%;
			}

			#slide-0 .row:first-child {
				padding-top: 100px;
				height: 60%;
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
			}

			#slide-0 .slogan {
				font-weight: 200;
				font-size: 4em;
				color: #FFF;
				margin-bottom: 20px;
			}

			@media all and (max-width: 580px) {
				#slide-0 .slogan {
					font-size: 2em;
				}

				#slide-0 .row:first-child {
					height: 40%;
				}

				#slide-0 .lens-btn {
					margin-bottom: 5px;
					width: 95%;
				}
			}


			#slide-1{
				background: rgb(31,32,54);
			}


			#slide-2 {
				background: none;
				padding-top: 100px;
			}
			#slide-2 img {
				max-height: 100px;
			}

			#slide-3 {
				background: rgb(147,210,220);
			}

			#slide-5 {
				background: #EEE;
				border-top: 1px solid #CCC;
				height: 200px !important;
			}

			nav {
				margin-bottom: 0 !important;
			}

			.title {
				font-weight: 200;
				font-size: 4em;
			}

			/*taken from http://www.polymer-project.org/*/		
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

			.lens-nav {
				padding: 5px 0;
				background: rgba(119, 124, 135, 0.2) !important;
				border: none;
			}

			.lens-nav a {
				color: #FFF !important;
				font-weight: normal;
				font-size: 1em;
				text-transform: uppercase;
			}

			.lens-nav .active > a{
				background: transparent !important;
			}
		</style>
	</head>
        <body>

			<nav class="navbar navbar-default navbar-fixed-top lens-nav" role="navigation">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-10">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<svg width="32" height="24">
									    <path d="M0,6 32,6" stroke="#FFF" stroke-width="2"/>
									    <path d="M0,14 32,14" stroke="#FFF" stroke-width="2"/>
									    <path d="M0,22 32,22" stroke="#FFF" stroke-width="2"/>
  									</svg>
								</button>
								<a class="navbar-brand" href="#">LENS</a>
							</div>
							<div class="collapse navbar-collapse navbar-right">
								<ul class="nav navbar-nav">
									<li><a href="#slide-1">¿lens?</a></li>
									<li><a href="#slide-2">Productos</a></li>
									<li><a href="#slide-3">Testimonios</a></li>
									<li><a href="#slide-5">Contacto</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>

			<div class="main-content">

			<section id="slide-0" class="container-fluid text-center">

					<div class="row"><div class="logo">Lens</div></div>
					<hr>
					<div class="row"><div class="slogan">Building WebApps since 1991</div></div>
					<div class="row">
					  <button type="button" class="lens-btn">Large button</button>
					  <button type="button" class="lens-btn">Large button</button>
					  <button type="button" class="lens-btn">Large button</button>
					</div>
			</section>

			<section id="slide-1">
			</section>

			<section id="slide-2">
			    <div class="container text-center" >
			    	<div class="row">
					   	<div class="col-md-6">
					   		<p class="title">Mobile Development</p>
					   		<div class="row">
							   	<div class="col-md-6"><img class="img-rounded" src="img/android.png" /></div>
						   		<div class="col-md-6"><img class="img-rounded" src="img/ios.png" /></div>
					   		</div>
					   	</div>
					   	<div class="col-md-6">
					   		<p class="title">Web Development</p>
   					   		<div class="row">
							   	<div class="col-md-6"><img class="img-rounded" src="img/android.png" /></div>
						   		<div class="col-md-6"><img class="img-rounded" src="img/ios.png" /></div>
					   		</div>
					   	</div>

					</div>		
			    </div>
			</section>
			

			<section id="slide-3"></section>
			<section id="slide-5" class="no-resize">
					<p
					>
						Alg&uacute;n footer
					</p>

			</section>
			</div> <!-- class main -->
	</body>
</html>