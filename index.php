<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link type="text/css" href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">

        <script type="text/javascript" src="js/jquery.1.11.0.min.js"></script> 
        <script type="text/javascript" src="js/skrollr.js"></script> 
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDGRnkhfBvaNdEXfvzciAxC6njq0obDHDw&sensor=false"></script>

		<script>
		  $(document).ready(function(){
		  	window.addEventListener("resize", function webViewerResize(evt) {
		  		resizeSections();
		  	});
		  	resizeSections();
		  	var s = skrollr.init();
                        google.maps.event.addDomListener(window, 'load', initialize);   
		});
		function initialize(){
                    var myLatLng = new google.maps.LatLng(19.448758,-99.105865);
                    var mapOptions = {
                        zoom: 18,
                        disableDefaultUI: true,
                        center: myLatLng
                    };
                    var map = new google.maps.Map(document.getElementById("map"),mapOptions);
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        title: 'Lens!'
                    });
                }	
		function resizeSections() {
			var MIN_SECTION_HEIGHT = 700;
	  		dHeight = document.documentElement.clientHeight;
	  		[].forEach.call(document.querySelectorAll('section'), function(e) {
	  			if(!e.classList.contains('no-resize'))
	  				e.style.height = (dHeight < 700 ? MIN_SECTION_HEIGHT : dHeight)+'px';
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

			/*idea del maquetado http://soundrop.fm/*/
			section {
				overflow: hidden;
				text-align: center;
				width: 100%;
				display: table;

				-webkit-transition: height 1s ease;  
			    -moz-transition: height 1s ease;  
			    -o-transition: height 1s ease;  
			    transition: height 1s ease;
			}


			@-webkit-keyframes pulse {
			  from { -webkit-box-shadow: 0 0 9px #FFF; }
			  50% { -webkit-box-shadow: 0 0 18px #FFF; }
			  to { -webkit-box-shadow: 0 0 9px #FFF; }
			}
			@-moz-keyframes pulse {
			  from { -webkit-box-shadow: 0 0 9px #FFF; }
			  50% { -webkit-box-shadow: 0 0 18px #FFF; }
			  to { -webkit-box-shadow: 0 0 9px #FFF; }
			}
			@-o-keyframes pulse {
			  from { box-shadow: 0 0 9px #FFF; }
			  50% { box-shadow: 0 0 18px #FFF; }
			  to { box-shadow: 0 0 9px #FFF; }
			}
			@keyframes pulse {
			  from { box-shadow: 0 0 9px #FFF; }
			  50% { box-shadow: 0 0 18px #FFF; }
			  to { box-shadow: 0 0 9px #FFF; }
			}

			#header {
	/*			background-image: url('img/lens_2.jpg');
				background-size: cover;*/

				background: #f08c89;
				background-image: url('img/header.svg');
				background-image: url('img/header.svg'), -moz-linear-gradient(75deg, #FF7088 15%, #F2B69D 55%);
				background-image: url('img/header.svg'), -webkit-linear-gradient(75deg, #FF7088 15%, #F2B69D 55%);
				background-image: url('img/header.svg'), -o-linear-gradient(75deg, #FF7088 15%, #F2B69D 55%);
				background-image: url('img/header.svg'), -ms-linear-gradient(75deg, #FF7088 15%, #F2B69D 55%);
				background-image: url('img/header.svg'), linear-gradient(75deg, #FF7088 15%, #F2B69D 55%);
			}

			section .wrapper {
				display: table-cell;
				width: 100%;
				height: 100%;
				vertical-align: middle;

			}
/*
			#header .row {
				height: 20%;
			}*/

			#header .row:first-child {
				/*padding-top: 100px;*/
				/*height: 60%;*/
			}

			#header .logo {
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
				margin-bottom: 75px;
			  	-webkit-animation-name: pulse;
			  	-webkit-animation-duration: 3s;
			  	-webkit-animation-iteration-count: infinite;
			  	-moz-animation-name: pulse;
			  	-moz-animation-duration: 3s;
			  	-moz-animation-iteration-count: infinite;
			  	-o-animation-name: pulse;
			  	-o-animation-duration: 3s;
			  	-o-animation-iteration-count: infinite;
			}

			#header .slogan {
				font-weight: 200;
				font-size: 4em;
				color: #FFF;
				margin-bottom: 20px;
			}

			@media all and (max-width: 580px) {
				#header .slogan {
					font-size: 2em;
				}
/*
				#header .row:first-child {
					height: 50%;
				}*/

				#header .lens-btn {
					margin-bottom: 5px;
					width: 95%;
				}
			}


			#description{
				/*background-color: rgb(31,32,54);*/
				background: #35b88f url('img/banner.svg') no-repeat bottom center;
				text-align: justify;
				color: #FFF;
				height: 400px;
			}


			#products {
				background: none;
				height: 400px;
			}
			#products img {
				max-height: 100px;
				max-width: 100px;
			}

			#slide-3 {
				//background: rgb(147,210,220);
                                //background-image: url('img/footer.png');  
                                height: 100%;
                                width: 100%;
                                margin: 0px;
                                padding: 0px
			}
                        #hover{
                            width: 100%;
                            height: 100%;
                            z-index: 2;
                            background-color: black;
                            opacity: 0.5;
                            position: absolute;
                        }
                        #containerContact{
                            width: 30%;
                            height: 80%;
                            left: 7%;
                            top: 249%;
                            z-index: 2;
                            position: absolute;
                            background-color: aqua;
                            border-radius: 30px;
                        }
			#slide-5 {
				background: #EEE;
				background-image: url("img/footer.svg");
				border-top: 1px solid #CCC;
				height: 400px;
			}

			nav {
				margin-bottom: 0 !important;
			}

			.bg-title {
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
	            color: #606060;
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
        <body id="skrollr-body">

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
									<li><a href="#description">¿lens?</a></li>
									<li><a href="#products">Productos</a></li>
									<li><a href="#slide-3">Testimonios</a></li>
									<li><a href="#footer">Contacto</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>


			<section id="header">
				<div class="wrapper">
					<div class="container">
					<div class="row"><div class="logo">Lens</div></div>
					<hr>
					<div class="row"><div class="slogan">Building Apps since 1991</div></div>
					<div class="row">
					  <button type="button" class="lens-btn">Large button</button>
					  <button type="button" class="lens-btn">Large button</button>
					  <button type="button" class="lens-btn">Large button</button>
					</div>
					</div>
				</div>
			</section>

			<section class="no-resize" id="products">
				<div class="wrapper">
			    <div class="container" >
			    	<div class="row"
						data-0="opacity:0.1;"
						data-50p-top="opacity:0.5;"
						data-center-center="opacity:1;"
						data--50p-bottom="opacity:0.5;"
						data-anchor-target="#products"
		    		>
					   	<div class="col-sm-5">
					   		<p class="lead">Web Development</p>
   					   		<div class="row">
							   	<div class="col-xs-4"><img class="img-rounded" src="img/html5.png" /></div>
							   	<div class="col-xs-4"><img class="img-rounded" src="img/css3.svg" /></div>
						   		<div class="col-xs-4"><img class="img-rounded" src="img/php.png" /></div>
					   		</div>
					   	</div>
					   	<div class="col-sm-2"></div>
					   	<div class="col-sm-5">
					   		<p class="lead">Mobile Development</p>
					   		<div class="row">
							   	<div class="col-xs-6"><img class="img-rounded" src="img/android.png" /></div>
						   		<div class="col-xs-6"><img class="img-rounded" src="img/ios.png" /></div>
					   		</div>
					   	</div>
					</div>		
			    </div>
			</div>
			</section>

			<section class="" id="description"
				data-center="background-position:50% 100%;"
				data-top-bottom="background-position:50% 10%;"
				>
				<div class="wrapper">
					<div class="container text-center"
						data-0="opacity:0.1;"
						data-50p-top="position:relative;top:-50%;opacity:0;"
						data-center="top:0%;opacity:1;"
						data-anchor-target="#description"
						>
							<p class="bg-title">LENS</p>
							<p class="lead">Lens es una empresa que bla bla bla... <a href='http://loripsum.net/' target='_blank'>Paria sunt igitur.</a> </p>
						  	<button type="button" class="lens-btn">Large button</button>
					</div>
				</div>
			</section>
			
                <section id="slide-3">
                    <div id="containerContact">
                        
                    </div>
                    <div id="hover"></div>
                    <div id="map" style="width: 100%; height: 100%;"></div>
                </section>
           
            
			<section id="slide-5" class="no-resize">
				<p>
					Alg&uacute;n footer
				</p>
			</section>
	</body>
</html>
