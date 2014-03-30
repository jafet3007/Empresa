<!DOCTYPE HTML>
<html>
	<head>
            <link type="text/css" href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">
            <script type="text/javascript" src="js/jQuery.js"></script>
            <script type="text/javascript" src="js/scrolly.js"></script>
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
/*			background: #8b190c;
			background: #e4542d;
			background: -moz-radial-gradient(center,ellipse cover,#e4542d 0%,#8b190c 100%);
			background: -webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,#e4542d),color-stop(100%,#8b190c));
			background: -webkit-radial-gradient(center,circle cover,#e4542d,#8b190c);
			background: -o-radial-gradient(center,circle cover,#e4542d,#8b190c);
			background: -ms-radial-gradient(center,circle cover,#e4542d,#8b190c);
			background: radial-gradient(circle at center,#e4542d,#8b190c);*/
			font-family: Candara, Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
                        
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
			/*color: #fff;*/
			color: #606060;
			font-weight: 100;
			font-size: 42px;
			text-align: center;
			margin: 0 100px;
		}

		.content {
			margin-top: 100px;
			height: 300px;
			display: block;
			font-size: 2em;
			background: #00c2dc;
			/*background: rgba(255, 255, 255, 0.28);*/
			text-align: center;
			color: #FFF;
		}
                .scrollblock {
                    margin: 0;
                    width: 100%;
                    height: 600px;
                }

		</style>
	</head>
        <body>
            <section id="bottle">
                <article>
                    <h1>Our products are a load of rubbish.</h1>   
                    <p><strong>NIKE FREE TR FIT</strong>
                        Each Nike 2010 World Championship Football jersey is made entirely from recycled polyester. That's up to eight recycled plastic bottles per jersey. In total, that diverted nearly 13 million plastic bottles from landfills. Yes, you read right. 13 million. Plastic. Bottles.</p>    
                </article>
                <div class="parallax" data-velocity="-.3"></div>
            </section>
             <header>
			<div class="center">
			<div class="logo">Lens_</div>
			<div class="slogan">Building WebApps since 1991</div>
			</div>
		</header>

		<div class="content">
			<h1>Some content!</h1>
		</div>
            <div id="item" class="parallax" data-velocity="-.3"></div>
	</body>
</html>