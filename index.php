<!DOCTYPE HTML>
<html>
	<head>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,400italic' rel='stylesheet' type='text/css'>
        <link type="text/css" href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="js/jQuery.js"></script>
        <script type="text/javascript" src="js/scrolly.js"></script>
        <script>
            $(function (){
                $('.parallax').scrolly({bgParallax: true});
            });
        </script>
		<style type="text/css">


		body {
			padding: 0;    
			margin: 0;
			background: #f2f2f2;
			font-family: 'Roboto', Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
			background: url("img/bridge.jpg");
            color: #555;
		}

        #item{
            background: url('img/test.jpeg');
        }

		header .center {
			max-width: 960px;
			position: relative;
			margin: 0 auto;
		}

		header .logo {
			border-radius: 50%;
			width: 200px;
			height: 200px;
			background: #FFF;
			display: inline-block;
			font-size: 4em;
			line-height: 3em;
			text-align: center;
		}

		header .slogan {
			color: #FFF;
			/*color: #606060;*/
			font-weight: 300;
			font-size: 4em;
			text-align: center;
			margin: 0 100px;
		}

		.content {
			margin-top: 100px;
			height: 200px;
			display: block;
			font-size: 2em;
			background: #FFF;
			/*background: #00c2dc;*/
			/*background: rgba(255, 255, 255, 0.28);*/
			text-align: center;
			/*color: #FFF;*/
		}

		.content h2 {
			font-weight: 300;
			font-size: 80px;

		}
		</style>
	</head>
	<body>
		<header>
			<div class="center">
			<div class="logo">Lens_</div>
			<div class="slogan">Building WebApps since 1991</div>
			</div>
		</header>

		<div class="content">
			<div>Some content!</div>
		</div>
            <div id="item" class="parallax" data-velocity="-.3"></div>
	</body>
</html>