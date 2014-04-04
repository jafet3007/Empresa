<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        <link type="text/css" href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">

        <script type="text/javascript" src="js/jquery.1.11.0.min.js"></script> 
        <script type="text/javascript" src="js/skrollr.js"></script> 
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.js"></script>

		<script>
		  $(document).ready(function(){
		  	window.addEventListener("resize", function webViewerResize(evt) {
		  		resizeSections();
		  	});
		  	resizeSections();
		  	var s = skrollr.init();
		});
			
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
			}

			#slide-0 {
				background-color: #FFF;
				background-image: url('img/lens_2.jpg');
				background-size: cover;
			}

			section .wrapper {
				display: table-cell;
				width: 100%;
				height: 100%;
				vertical-align: middle;

			}
/*
			#slide-0 .row {
				height: 20%;
			}*/

			#slide-0 .row:first-child {
				/*padding-top: 100px;*/
				/*height: 60%;*/
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
				margin-bottom: 75px;
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
/*
				#slide-0 .row:first-child {
					height: 50%;
				}*/

				#slide-0 .lens-btn {
					margin-bottom: 5px;
					width: 95%;
				}
			}


			#slide-1{
				background: rgb(31,32,54);
				text-align: justify;
			}


			#slide-2 {
				background: none;
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


			<section id="slide-0">
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

			<section id="slide-1">
				<div class="wrapper">
					<div class="container">
						<p class="bg-title">LENS</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href='http://loripsum.net/' target='_blank'>Compensabatur, inquit, cum summis doloribus laetitia.</a> Estne, quaeso, inquam, sitienti in bibendo voluptas? Nonne igitur tibi videntur, inquit, mala? <a href='http://loripsum.net/' target='_blank'>Quae ista amicitia est?</a> Ac tamen hic mallet non dolere. Scrupulum, inquam, abeunti; Duo Reges: constructio interrete. Vide igitur ne non debeas verbis nostris uti, sententiis tuis. </p>

<blockquote cite='http://loripsum.net'>
	Nam si +omnino nos+ neglegemus, in Aristonea vitia incidemus et peccata obliviscemurque quae virtuti ipsi principia dederimus;
</blockquote>


<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest. Bonum liberi: misera orbitas. Primum cur ista res digna odio est, nisi quod est turpis? Quae cum magnifice primo dici viderentur, considerata minus probabantur. <a href='http://loripsum.net/' target='_blank'>Tum mihi Piso: Quid ergo?</a> <a href='http://loripsum.net/' target='_blank'>Si longus, levis;</a> Est enim tanti philosophi tamque nobilis audacter sua decreta defendere. <a href='http://loripsum.net/' target='_blank'>Avaritiamne minuis?</a> </p>

<p>Varietates autem iniurasque fortunae facile veteres philosophorum praeceptis instituta vita superabat. Quamquam ab iis philosophiam et omnes ingenuas disciplinas habemus; Habent enim et bene longam et satis litigiosam disputationem. Haeret in salebra. Nec lapathi suavitatem acupenseri Galloni Laelius anteponebat, sed suavitatem ipsam neglegebat; Invidiosum nomen est, infame, suspectum. </p>

<p>Quia nec honesto quic quam honestius nec turpi turpius. Verum hoc idem saepe faciamus. Et quidem iure fortasse, sed tamen non gravissimum est testimonium multitudinis. Bonum valitudo: miser morbus. Hoc est non modo cor non habere, sed ne palatum quidem. Quia nec honesto quic quam honestius nec turpi turpius. Ut optime, secundum naturam affectum esse possit. Qui autem esse poteris, nisi te amor ipse ceperit? Quia nec honesto quic quam honestius nec turpi turpius. <a href='http://loripsum.net/' target='_blank'>Paria sunt igitur.</a> </p>

<p>Utinam quidem dicerent alium alio beatiorem! Iam ruinas videres. Maximus dolor, inquit, brevis est. Habes, inquam, Cato, formam eorum, de quibus loquor, philosophorum. Sin laboramus, quis est, qui alienae modum statuat industriae? Inde sermone vario sex illa a Dipylo stadia confecimus. Neque solum ea communia, verum etiam paria esse dixerunt. Graecis hoc modicum est: Leonidas, Epaminondas, tres aliqui aut quattuor; Videamus igitur sententias eorum, tum ad verba redeamus. Duo enim genera quae erant, fecit tria. An hoc usque quaque, aliter in vita? </p>


					</div>
				</div>
			</section>

			<section id="slide-2">
				<div class="wrapper">
			    <div class="container" >
			    	<div class="row"
						data-0="opacity:0;"
						data-30p-top="opacity:0.5;"
						data-center="opacity:1;"
						data--30p-bottom="opacity:0.5;"
						data-anchor-target="#slide-2"
		    		>
					   	<div class="col-md-6">
					   		<p class="bg-title">Web Development</p>
   					   		<div class="row">
							   	<div class="col-md-4"><img class="img-rounded" src="img/html5.png" /></div>
							   	<div class="col-md-4"><img class="img-rounded" src="img/css3.svg" /></div>
						   		<div class="col-md-4"><img class="img-rounded" src="img/php.png" /></div>
					   		</div>
					   	</div>
					   	<div class="col-md-6">
					   		<p class="bg-title">Mobile Development</p>
					   		<div class="row">
							   	<div class="col-md-6"><img class="img-rounded" src="img/android.png" /></div>
						   		<div class="col-md-6"><img class="img-rounded" src="img/ios.png" /></div>
					   		</div>
					   	</div>
					</div>		
			    </div>
			</div>
			</section>
			

			<section id="slide-3"></section>
			<section id="slide-5" class="no-resize">
				<p>
					Alg&uacute;n footer
				</p>
			</section>
                        
	</body>
</html>
