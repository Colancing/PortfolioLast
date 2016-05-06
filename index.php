<?php
session_start()
//?>
<!--La session et le php sont utiles pour le formulaire de contact-->

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
	<meta charset="UTF-8">
	<title>CV Emmmanuelle Hommet</title>
	<meta name="description" content="Online responsive Resume of Emmanuelle Hommet">
	<meta name="Keywords" content="resume, cv, expérience, développeur, front-end, javascript, portfolio">
	<meta name="Author" content="Emmanuelle Hommet">
	<meta property="og:image" content="SHARE_IMG"/>
	<meta property="og:url" content="SHARE_URL"/>
	<meta property="og:title" content="SHARE_TITLE"/>
	<meta property="og:description" content="SHARE_DESCRIPTION"/>
	<meta property="og:title" content="Portfolio Emmanuelle Hommet"/>
	<meta property="og:url" content="http://www.skylightbubble.com/"/>
	<meta property="og:image" content="cv/img/profil.jpg"/>
	<link rel="stylesheet" href="cv/css/init.css">
	<link rel="stylesheet" href="cv/css/font-awesome-4.5.0/css/font-awesome.min.css" type="text/css"/>
	<link rel="stylesheet" href="cv/css/style.css">
	<link rel="stylesheet" href="cv/css/mediaq.css">
</head>

<body>
<header id="home">
	<!-- Navigation -->
	<nav class="blocnav">
		<div class="overlay"></div>

		<!--appear with @media-->
		<button class="navtoggle">
			<span class="menu-toggle-bar-md"></span>
			<span class="menu-toggle-bar-md"></span>
			<span class="menu-toggle-bar-md"></span>
		</button>
		<div class="menu-bg"></div>
		<ul id="navlinks">
			<li>
				<a href="#home" class="active">Accueil</a>
			</li>
			<li>
				<a href="#profil">Profil</a>
			</li>

			<li>
				<a href="#exp">Expériences</a>
			</li>
			<li>
				<a href="#exp">Compétences</a>
			</li>
			<li>
				<a href="#portfolio">Portfolio</a>
			</li>
			<li>
				<a href="#contact">Contact</a>
			</li>
		</ul>
		<div id="language"><a href="cv/english.php"><i class="fa fa-globe"></i> EN</a></div>
	</nav>
	<!--End Navigation-->

	<!--Name section-->
	<div id="header-name">
		<h1>Emmanuelle Hommet</h1>
		<h2>CODEUR.</h2>
		<h2>DEVELOPPEUR FRONT END.</h2>
		<h2>PASSIONNÉE.</h2>
	</div>
</header>
<!--End Header-->
<main class="sections">
	<section id="profil">
		<div class="inline idcard desktop">
			<div class="inner  carreaux ">
				<div class="id"></div>
			</div>
			<!--<div class="content">-->
			<p>40 ans</p>
			<p>Augsburg - Allemagne</p>
		</div>
		<div class="phone inline">
			<div class="text inline">
				<p>40 ans</p>
				<p>Augsburg Allemagne</p>
			</div>
			<div class="inline idcard">
				<div class="inner  carreaux ">
					<div class="id"></div>
				</div>
			</div>

			<div class="inline resume">

				<div class="circle carreaux">
					<a href="cv/cv_print.pdf">
						<i class="fa fa-file-o fa-2x"></i>
						<h4>cv</h4>
						<span class="subtitle">imprimable</span>
					</a>
				</div>


				<div class="circle carreaux">
					<a href="https://github.com/titzelle">
						<i class="fa fa-github-square fa-2x"></i>
						<h4>GitHub</h4>
						<span class="subtitle">repositories</span>
					</a>
				</div>
			</div>
		</div>
		<div class="middle  inline">
			<p> Depuis 4 ans, je consacre tout mon temps à à la pratique et à l'apprentissage du code.
				J'ai maintenant une solide connaissance des langages principaux en back et front ainsi que des
				frameworks qui leur sont associés.</p>

			<p>Je me spécialise désormais en Javascript et en particulier AngularJs. Je trouve que ce framework
				apporte un vrai gain de productivité et améliore considérablement la réactivité de l'interface
				client.</p>

			<p> Mes 15 années d'expérience professionnelle et mon profil international m'apporte des compétences
				qui sont complémentaires à mes connaissances techniques de programmation (gestion de projets,
				encadrements d'équipes, facilité d'adaptation...)</p>

			<p> Mon objectif est maintenant de rejoindre une équipe de passionnés dans un projet motivant afin
				de mettre à profit mes connaissances tout en continuant à les développer.</p>
		</div>
		<div class="inline resume desktop">

			<div class="circle carreaux">
				<a href="cv/cv_print.pdf">
					<i class="fa fa-file-o fa-2x"></i>
					<h4>cv</h4>
					<span class="subtitle">imprimable</span>
				</a>
			</div>


			<div class="circle carreaux">
				<a href="https://github.com/titzelle">
					<i class="fa fa-github-square fa-2x"></i>
					<h4>GitHub</h4>
					<span class="subtitle">repositories</span>
				</a>
			</div>
		</div>
	</section>
	<section id="exp">
		<header>
			<h2>Expériences techniques et compétences</h2>
			<h4>Actuellement</h4>
		</header>
		<div class="big inline">
			<h3>Site road-web.fr</h3>
			<p>Je suis actuellement <strong>référent</strong> de l'équipe développement du site roadweb.fr : Projet
				collaboratif
				regroupant <strong>40 personnes</strong> travaillant dans le web (developpeurs, designers, marketers,
				community managers).
				Ce site est développé avec <strong>php et Laravel</strong>.
				Nous travaillons actuellement sur la version 2 en utilisant <strong>AngularJs</strong>.</p>
			<p>Cette expérience est très riche, tant du point de vue technique que du point de vue
				<strong>projet</strong> :
				Nous avons rencontré de nombreux obstacles auxquels nous avons dû apporter des solutions:
				incompréhension entre les attentes des designers et le travail de développeurs, gestion du travail à
				distance, tenue des délais, répartition des responsabilités et des pouvoirs quant
				aux prises de décisions finales...</p>
			<h3>Formation Javascript/AngularJs chez Simplon</h3>
			<p>
				Je suis cette formation dans le but de me spécialiser en <strong>Javascript</strong> et <strong>AngularJS</strong>.
			</p>

			<h3>loeildelexpat.com</h3>
			<p>
				J'ai crée ce <strong>blog</strong> dans le but de découvrir le fonctionnement d'un <strong>CMS</strong>
				et ses possibilités de
				personnalisation.
				Je trouve intéressant d'étudier le code des plugins, notamment en ce qui concerne le référencement.
			</p>
		</div>
		<div class="inline skills_container">
			<ul id="skills" class="skills">
				<li id="html">HTML5
					<div class="bar_container">
						<span class="bar"></span>
					</div>
				</li>
				<li id="css">
					CSS3
					<div class="bar_container">
						<span class="bar"></span>
					</div>
				</li>
				<li id="javascript">
					JAVASCRIPT
					<div class="bar_container">
						<span class="bar"></span>
					</div>
				</li>
				<li id="responsive">RESPONSIVE
					<div class="bar_container">
						<span class="bar"></span>
					</div>
				</li>
				<li id="php">
					PHP
					<div class="bar_container">
						<span class="bar"></span>
					</div>
				</li>

				<li id="ruby">RUBY
					<div class="bar_container">
						<span class="bar"></span>
					</div>
				</li>

			</ul>
			<ul class="skills">
				<li id="wordpress">WORDPRESS
					<div class="bar_container">
						<span class="bar"></span>
					</div>
				</li>
			</ul>
		</div>
		<div class="other">
			<header>
				<h4>Autres</h4>
			</header>
			<div class="big inline other">
				<h3>Formation intégrateur Développeur chez Emweb<span> (2013 à 2015)</span></h3>
				<p>
					Cette première formation front et back end de 2 ans m'a apporté une connaissance approfondie des
					principaux langages
					du web et m'a donné la passion du code.
				</p>
				<h3>Allemagne : Formateur de langue pour adultes chez International School
					Augsburg<span> (2012-2016)</span>
				</h3>
				<h3>Corée : Formateur de langue pour adultes chez American school Sacheon<span> (2008)</span></h3>
				<h3>France : Professeur de français à l'Education Nationale, référent
					informatique<span> (1999 à 2012)</span></h3>

			</div>
			<div class="inline skills_container">
				<ul class="skills">
					<li id="english">Anglais
						<div class="bar_container">
							<span class="bar"></span>
						</div>
					</li>
					<li id="german">Allemand
						<div class="bar_container">
							<span class="bar"></span>
						</div>
					</li>
					<li id="team">
						gestion d'équipes
						<div class="bar_container">
							<span class="bar"></span>
						</div>
					</li>
					<li id="project">
						gestion de projets
						<div class="bar_container">
							<span class="bar"></span>
						</div>
					</li>
					<li id="sociability">
						sociabilité - adaptabilité
						<div class="bar_container">
							<span class="bar"></span>
						</div>
					</li>

					<li id="learner">Facilité d'apprentissage
						<div class="bar_container">
							<span class="bar"></span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section id="portfolio"><!--/Container portfolio-->
		<header><h2>Mon portfolio</h2></header>

		<div class="full">
			<ul id="filters">
				<li><span class="filter active" data-filter="cat1 cat2 cat3 cat4 cat5 cat6">Toutes les catégories</span>
				</li>
				<li><span class="filter" data-filter="cat1">Html/css</span></li>
				<li><span class="filter" data-filter="cat2">Javascript</span></li>
				<li><span class="filter" data-filter="cat3">Bootstrap</span></li>
				<!--<li><span class="filter" data-filter="cat4">Ruby</span></li>-->
				<li><span class="filter" data-filter="cat5">Php/Laravel</span></li>
				<li><span class="filter" data-filter="cat6">Wordpress</span></li>
			</ul>
			<div id="portfoliolist">

				<div class="portfolio cat1 cat2 cat5" data-cat="cat1 cat2 cat5">
					<div class="portfolio-wrapper">
						<a href="http://www.road-web.fr">
							<img src="cv/img/road-web.jpg" alt=""></a>

						<div class="label">
							<div class="label-text">
								<a class="text-title">Road-web.fr</a>
								<span class="text-category">Projet de création de site complet</span>
								<span class="text-category">Html Css Php Laravel et bientôt Angular</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>

				<div class="portfolio cat1 cat2 cat3" data-cat="cat1 cat2 cat3">
					<div class="portfolio-wrapper">
						<a href="Angular_movies/app/index.html">
							<img src="Angular_movies/app/img/angular_movies.jpg" alt="vue de la page films">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Vidéothèque</a>
								<span class="text-category">Projet Angular </span>
								<span class="text-category">Architecture Restful</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>

				<div class="portfolio cat2" data-cat="cat2">
					<div class="portfolio-wrapper">
						<a href="Annuaire/index.html">
							<img src="cv/img/Telephone.png" alt="telephone">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Annuaire</a>
								<span class="text-category">Manipulation des objets en Javascript</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat1 cat2" data-cat="cat1 cat2">
					<div class="portfolio-wrapper">

						<a href="Chifoumi/chifoumi.html">
							<img src="Chifoumi/img/chifoumi.png" alt="logo js">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Pierre Feuille Ciseaux</a>
								<span class="text-category">Jeu en Javascript</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat1 cat2" data-cat="cat1 cat2">
					<div class="portfolio-wrapper">
						<a href="sheepclicker/index.html">
							<img src="sheepclicker/img/main.jpg" alt="shaun le mouton">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Jeu javascript</a>
								<span class="text-category">Travail sur les boucles</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat1 cat3" data-cat="cat1 cat3">

					<div class="portfolio-wrapper">
						<img src="cv/img/bootstrap.jpg" alt="exercice des divs">

						<div class="label">
							<div class="label-text">
								<a href="https://github.com/titzelle/Semaine6/blob/master/divdiv.html"
								   class="text-title">Grille bootstrap</a>
								<span class="text-category">Intégration d'une maquette</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat2" data-cat="cat2">
					<div class="portfolio-wrapper">
						<a href="dom-js/index.html"> <img src="cv/img/js.jpg" alt="logo javascript">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Tout en javascript</a>
								<span class="text-category">Création du html à partir du dom</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat5" data-cat="cat5">
					<div class="portfolio-wrapper">
						<a href=""> <img src="ville.jpg" alt="Las Vegas">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Micro-encyclopédie sur les villes</a>
								<span class="text-category">Php - lien à venir</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat5" data-cat="cat5">
					<div class="portfolio-wrapper">
						<a href=""> <img src="saisons.jpg" alt="logo javascript">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Les saisons ou autre</a>
								<span class="text-category">Php - Lien à venir</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat6" data-cat="cat6">
					<div class="portfolio-wrapper">
						<a href="http://loeildelexpat.com"> <img src="cv/img/Loeildelexpat.jpg"
						                                         alt="loeildelexpat.com"/></a>

						<div class="label">
							<div class="label-text">
								<a class="text-title">L'Oeil de l'Expat</a>
								<span class="text-category">Blog réalisé sous Wordpress</span>
								<span class="text-category">Etude des plugins et du référencement</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat2 cat5" data-cat="cat2 cat5">
					<div class="portfolio-wrapper">
						<a href="completion/index.html">
							<img src="completion/completion.png"
							     alt="formulaire avec aide aux choix par autocompletion">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Autocompletion</a>
								<span class="text-category">Requête Ajax avec gestion des touches claviers</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat2" data-cat="cat2">
					<div class="portfolio-wrapper">
						<a href="tictactoe/index.html">
							<img src="tictactoe/tictactoe.jpg" alt="Jeu du Tic Tac Toe">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Tic Tac Toe</a>
								<span class="text-category">Jeu javascript</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!--/section portfolio-->
	<footer>
		<section id="contact">
			<div class="contactinfo1 small inline">
				<h2>Emmanuelle Hommet</h2>
				<p class="glue">86153 Augsbourg</p>
				<p>ALLEMAGNE </p><br/>
				<p>Mail: pseudoups@hotmail.fr</p>
				<p>Tél : +49 176 84 81 95 33</p>
				<p>
					<a href="https://de.linkedin.com/in/emmanuellebh ">
						<i class="fa fa-linkedin-square fa-2x "></i>
					</a>
					<a href="https://github.com/titzelle">
						<i class="fa fa-github-square fa-2x "></i>
					</a>
				</p>
			</div>

			<div class="formgroup  inline"> <!--Formulaire de contact-->
				<form action="post_contact.php" method="post">

					<h3>Me contacter</h3>
					<label for="name" class="sr-only"></label>
					<input required class="form-control" type="text" name="name" id="name" placeholder="Votre nom"
					       value="<?= isset( $_SESSION['inputs']['name'] ) ? $_SESSION['inputs']['name'] : ""; ?>">

					<label for="mail" class="sr-only"> </label>
					<input required class="form-control" type="email" name="mail" id="mail" placeholder="Votre email"
					       value="
					       <?= isset( $_SESSION['inputs']['mail'] ) ? $_SESSION['inputs']['mail'] : ""; ?>">
					<label for="message" class="sr-only"></label>
                    <textarea required class="form-control" name="message" id="message" cols="30" rows="5"
                              placeholder="Votre message"><?= isset( $_SESSION['inputs']['message'] ) ? $_SESSION['inputs']['message'] : ""; ?></textarea>
					<input type="submit" value="ENVOYER">
				</form>
				<?php
				if ( isset( $_SESSION['errors'] ) ): ?>
					<div class="error-msg">
						<p>
							<?php $return = implode( '<br/>', $_SESSION['errors'] );
							echo $return; ?>
						</p>
					</div>
				<?php endif; ?>
				<?php
				if ( isset( $_SESSION['success'] ) ): ?>
					<div class="success-msg">
						<p> Votre message a bien été envoyé. Merci.</p>
					</div>
				<?php endif; ?>
			</div>
			<!--            Gestion des erreurs du formulaire avec php -->


		</section>
	</footer>
</main>

<script type="text/javascript" src="cv/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="cv/js/jquery.easing.min.js "></script>
<script type="text/javascript" src="cv/js/jquery.mixitup.min.js "></script>
<script type="text/javascript" src="cv/js/jquery.mixitup2.min.js "></script>
<script type="text/javascript" src="cv/js/heights.js "></script>
<script type="text/javascript" src="cv/js/togglenav.js "></script>

</body>
</html>

<?php
unset( $_SESSION['errors'] );
unset( $_SESSION['inputs'] );
unset( $_SESSION['success'] ); ?>
