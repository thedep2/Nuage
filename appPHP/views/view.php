
<!DOCTYPE html>
<html class="no-js" lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>La Cartographie des Nuages - Acceuil</title>
<link rel="icon" href="favicon.png">
<link rel="apple-touch-icon" href="apple-touch-icon.png">

<link rel="stylesheet" href="styles/normalize.css">


<link rel="stylesheet"
	href="bower_components/bootstrap/css/bootstrap.css">

<link href='http://fonts.googleapis.com/css?family=Satisfy'
	rel='stylesheet' type='text/css'>
<link
	href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700,400italic|Signika:400,600&amp;subset=latin,latin-ext'
	rel="stylesheet" type="text/css">
<link rel="stylesheet" href="styles/nuage.css">




<!--[if lt IE 9]>
    <script src="scripts/html5shiv.js"></script>
<![endif]-->



</head>
<body>





	<div id="bloc_page" class="container-fluid">

		<!-- HEADER -->

		<header id="banniere" class="row">
			<!-- Titre principal -->
			<h1 id="titre_principal" class="col-md-6">
				<a href="index.html">La Cartographie des Nuages</a>
			</h1>

			<!-- Menu banniere -->
			<nav id="nav_principal" class="col-md-6">
				<ul>
					<li><a href="index.html">Accueil</a></li>
					<li><a href="portfolio.html">Portefolio</a></li>
					<li><a href="astro.html">Astro</a></li>
					<li><a href="index.html">Vid&#xE9;os</a></li>
					<li><a href="index.html">Voyages</a></li>
					<li><a href="index.html">Galeries</a></li>
				</ul>
			</nav>
		</header>


		<!-- PAGE -->
		

<!-- Actualites -->



<article id="actu" class="row">
	<div id="actu_article" class="col-sm-12">


				<div id="parallax" class="clear">

					<div class="parallax-layer parallax-bg">
						<img class="parallax-bg"  src="images/Actu/Parallax/bg.png" alt=""
							style="position:absolute; left:0em; top:0em;" />
					</div>

					<div class="parallax-layer" style="width: 149px; height: 88px;">
						<img src="images/Actu/Parallax/cloud5.png" alt=""
							style="width: 149px; height: 88px; position:absolute; left:-35em; top:10em;" />
					</div>

					<div class="parallax-layer" style="width: 303px; height: 164px;">
						<img src="images/Actu/Parallax/cloud3.png" alt=""
							style="width: 303px; height: 164px; position:absolute; left:-20em; top:-1em;" />
					</div>

					<div class="parallax-layer" style="width: 250px; height: 130px;">
						<img src="images/Actu/Parallax/cloud2.png" alt=""
							style="width: 250px; height: 130px; position:absolute; left:8em; top:7em;" />
					</div>

					<div class="parallax-layer" style="width: 510px; height: 200px;">
						<img src="images/Actu/Parallax/cloud6.png" alt=""
							style="width: 510px; height: 200px; position:absolute; left:-50em; top:0em;" />
					</div>

					<div class="parallax-layer" style="width: 600px; height: 256px;">
						<img src="images/Actu/Parallax/cloud4.png" alt=""
							style="width: 600px; height: 256px; position:absolute; left:45em; top:0em;" />
					</div>

				</div>

				<nav class="row" id="actu_nav">
				
										<?php
    $offset = 1;
    foreach ($actus as $actu): ?>
				
				<div class="actu_div col-sm-offset-<?php echo $offset ?> col-sm-1 col-xs-offset-1 col-xs-6">
						<a href="#" class="actu_lien"><img
							class="img_vignette_actu img-circle" alt="<?php echo $actu->getNom()?>"
							src="images/vignettes/<?php echo $actu->getSrc() ?>" /></a>
					</div>
					
				
				<?php 
				if ($offset == 1)
				{
					$offset = 2;
				}
				endforeach ?>
				

				</nav>
			
	</div>
</article>


<!--  Accueil -->

<article class="article_accueil row">
	<p id="presentation_phrase" class="col-sm-12">
		Bienvenue sur <span class="nom_site">La Cartographie des Nuages</span>.
	</p>
</article>


<article class="article_accueil">
	<nav class="row">
	
		<div class="col-sm-6 image_menu">
			<a href="portfolio.html"><img
				class="img-rounded img-responsive img-thumbnail img_article_accueil"
				alt="Portfolio" src="images/vignettes/4-DSC_8555_DxO_4.jpg" /><br />Portefolio</a>
		</div>
		
				<div class="col-sm-6 image_menu">
			<a href="astro.html"><img
				class="img-rounded img-responsive img-thumbnail img_article_accueil"
				alt="Astro" src="images/vignettes/4-DSC_8555_DxO_4.jpg" /><br />Astro</a>
		</div>
		
		<!-- 					<div class="col-md-6 image_menu"> -->
		<!-- 							<a href="#/index"><img class="img_article_accueil" -->
		<!-- 								alt="Astro" src="images/4-DSC_8555_DxO_4.jpg" />Astro</a> -->
		<!-- 						</div> -->
		<!-- 					<div class="col-md-6 image_menu"> -->
		<!-- 							<a href="#/index"><img class="img_article_accueil" -->
		<!-- 								alt="Vid&#xE9;os" src="images/4-DSC_8555_DxO_4.jpg" />Vid&#xE9;os</a> -->
		<!-- 						</div> -->
		<!-- 					<div class="col-md-6 image_menu"> -->
		<!-- 							<a href="#/index"><img class="img_article_accueil" -->
		<!-- 								alt="Voyages" src="images/4-DSC_8555_DxO_4.jpg" />Voyages</a> -->
		<!-- 						</div> -->
		<!-- 					<div class="col-md-6 image_menu"> -->
		<!-- 							<a href="#/index"><img class="img_article_accueil" -->
		<!-- 								alt="Galeries" src="images/4-DSC_8555_DxO_4.jpg" />Galeries</a> -->
		<!-- 						</div> -->
	</nav>
</article>




		<!-- Footer -->

		<footer>
			<div class="row">
				<nav id="liens_footer" class="col-sm-12">
					<ul>
					<li><a href="index.html">Accueil</a></li>
					<li><a href="portfolio.html">Portefolio</a></li>
					<li><a href="astro.html">Astro</a></li>
					<li><a href="#">Vid&#xE9;os</a></li>
					<li><a href="#">Voyages</a></li>
					<li><a href="#">Galeries</a></li>
					</ul>
				</nav>
			</div>



			<div class="row">
				<nav id="contenu_footer" class="col-sm-12">
					<ul>
						<li>Tous droits r&#xE9;serv&#xE9;s</li>
						<li><a href="#">A propos</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>
			</div>

		</footer>

		

	</div>
	













<script src="scripts/vendor/modernizr-2.8.3.min.js"></script>
<script type="text/javascript" language="JavaScript" src="scripts/jquery-2.1.4.js"></script>

<script type="text/javascript" language="JavaScript" src="bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" language="JavaScript" src="scripts/parallax.js"></script>
<script type="text/javascript" language="JavaScript" src="scripts/jquery.event.frame.js"></script>

<script type="text/javascript" language="JavaScript" src="scripts/nuage.js"></script>


</body>
</html>