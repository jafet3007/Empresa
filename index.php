<!DOCTYPE HTML>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link type="text/css" href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">

        <script type="text/javascript" src="js/jQuery.js"></script> 
        <script type="text/javascript" src="js/skrollr.js"></script>

        <script type="text/javascript">
        	$(document).ready(function() {
        		var s = skrollr.init();
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
			}

			.bcg {
				width: 100%;
				height: 100%;
				background: no-repeat center center;
				background-size: cover;

			}
			#slide-0 .bcg {
				background-color: #FFF;
				background-image: url('img/lens_2.jpg');
			}

			#slide-0 .logo {
				border-radius: 50%;
				width: 200px;
				height: 200px;
				background: rgba(255, 255, 255, 0.5);
				border: 5px solid #FFF;
				color: #FFF;
				display: inline-block;
				font-size: 4em;
				font-weight: 200;
				line-height: 3.5em;
				text-align: center;
				/*border: 5px solid #555;*/
			}

			#slide-0 .slogan {
				font-weight: 200;
				font-size: 4em;
				color: #FFF;
				/*text-shadow: 2px 2px 5px rgba(255, 255, 255, 1);*/
				/*text-align: center;*/
				/*margin: 0 100px;*/
			}


			#slide-1 .bcg {
				background: none;
				/*background-image: url('img/bridge2.jpg');*/
			}

			#slide-2 .bcg {
				background: none;
			}

			#slide-5 .bcg {
				background: #000;
			}

			nav {
				margin-bottom: 0 !important;
			}

		</style>
	</head>
        <body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">LENS</a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li class="active"><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="#">Action</a></li>
<li><a href="#">Another action</a></li>
<li><a href="#">Something else here</a></li>
<li class="divider"></li>
<li><a href="#">Separated link</a></li>
<li class="divider"></li>
<li><a href="#">One more separated link</a></li>
</ul>
</li>
</ul>
<form class="navbar-form navbar-left" role="search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search">
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
<ul class="nav navbar-nav navbar-right">
<li><a href="#">Link</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="#">Action</a></li>
<li><a href="#">Another action</a></li>
<li><a href="#">Something else here</a></li>
<li class="divider"></li>
<li><a href="#">Separated link</a></li>
</ul>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

<!-- 			
	data-0: indica el estado inicial del elemento
	para la transición en colores, los valores tienen que ser en rgb()! 
	para dar valores en porcentaje se usa Np, N=cuánto porcentaje

	data-top = data-0-top = data-top-top = data-0-top-top: When the element's top is aligned with the top of the viewport.
	data-100-top = data-100-top-top: When the element's top is 100px above the top of the viewport.
	data--100-top = data--100-top-top: When the element's top is 100px below the top of the viewport.
	data-top-bottom= data-0-top-bottom: When the bottom of the element is at the top of the viewport (it's just not visible).
	data-center-center = data-0-center-center: When the element is at the center of the viewport.
	data-bottom-center = data-0-bottom-center: When the element's center is at the bottom of the viewport, thuss the upper half of the element is visible.
-->
			<section id="slide-0">
				<div class="bcg container text-center">
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="logo">Lens</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<hr>
					<div class="slogan">Building WebApps since 1991</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<p>
					  <button type="button" class="btn btn-primary btn-lg">Large button</button>
					  <button type="button" class="btn btn-default btn-lg">Large button</button>
					  <button type="button" class="btn btn-info btn-lg">Large button</button>
					</p>
				</div>
 				
			</section>

			<section id="slide-1">
				<div class="bcg"
			        data-center="background-position: 50% 0px;"
			        data-top-bottom="background-position: 50% -150px;"
				></div>
			</section>
			
			<section id="slide-2">
			    <div class="bcg"
					data-33p-top="background-color:rgb(1,27,59);"
	        		data-top-center="background-color:(0,0,0);"
	        		data-anchor-target="#slide-2"
			    >
			    </div>
			</section>

			<section></section>
			<section id="slide-5">
				<div class="bcg">
					<p
						data-100-bottom="opacity: 0;"
						data-bottom="opacity: 1;"
						data-anchor-target="#slide-5"
						style="font-size: 5em;"
					>
						Alg&uacute;n footer
					</p>
				</div>
			</section>
	</body>
</html>