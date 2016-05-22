<?php
session_start()
//?>
<!--La session et le php sont utiles pour le formulaire de contact-->

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
	<meta charset="UTF-8">
	<title>Resume Emmmanuelle Hommet</title>
	<meta name="description" content="Online responsive Resume of Emmanuelle Hommet">
	<meta name="Keywords" content="resume, cv, experience, developper, front-end, javascript, portfolio">
	<meta name="Author" content="Emmanuelle Hommet">
	<meta property="og:image" content="SHARE_IMG"/>
	<meta property="og:url" content="SHARE_URL"/>
	<meta property="og:title" content="SHARE_TITLE"/>
	<meta property="og:description" content="SHARE_DESCRIPTION"/>
	<meta property="og:title" content="Portfolio Emmanuelle Hommet"/>
	<meta property="og:url" content="http://www.skylightbubble.com/"/>
	<meta property="og:image" content="img/profil.jpg"/>
	<link rel="stylesheet" href="css/init.css">
	<link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.min.css" type="text/css"/>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mediaq.css">
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
				<a href="#home" class="active">Home</a>
			</li>
			<li>
				<a href="#profil">Profile</a>
			</li>

			<li>
				<a href="#exp">Experience</a>
			</li>
			<li>
				<a href="#exp">Skills</a>
			</li>
			<li>
				<a href="#portfolio">Portfolio</a>
			</li>
			<li>
				<a href="#contact">Contact</a>
			</li>
		</ul>
		<div id="language"><a href="../index.php"><i class="fa fa-globe"></i> FR</a></div>
	</nav>
	<!--End Navigation-->

	<!--Name section-->
	<div id="header-name">
		<h1>Emmanuelle Hommet</h1>
		<h2>CODER.</h2>
		<h2>FRONT END DEVELOPER.</h2>
		<h2>PASSIONNATE.</h2>
	</div>
</header>
<!--End Header-->
<main class="sections">
	<section id="profil">
		<div class="small  inline idcard desktop">
			<div class="inner  carreaux ">
				<div class="id"></div>
			</div>
			<!--<div class="content">-->
			<p>40</p>
			<p>Augsburg - Germany</p>
		</div>
		<div class="phone inline">
			<div class="text inline">
				<p>40</p>
				<p>Augsburg Germany</p>
			</div>
			<div class="small  inline idcard">
				<div class="inner  carreaux ">
					<div class="id"></div>
				</div>
				<!--<div class="content">-->

			</div>

			<div class="small inline resume">

				<div class="circle carreaux">
					<a href="pdf_english.pdf">
						<i class="fa fa-file-o fa-2x"></i>
						<h4>Resume</h4>
						<span class="subtitle">printable</span>
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
			<p> For 4 years, I have been dedicating all my time to the practise and learning of code.
				I have developed a solid expertise in the main front and back languages including some of their
				frameworks.
			</p>

			<p>I specialize now in Javascript and in particular AngularJS. I find that this framework increases
				the productivity and the user interface responsiveness</p>

			<p>My 15 years of professional experience and my international profile bring me skills
				that complement my technical and programming skills. (project management,
				team leading, capacities for adaptation...)
			</p>
			<p>My goal now is to be part of a team of passionate people on a motivating project
				to take advantage of my knowledge whilst continuing to develop it.
			</p>

		</div>
		<div class="small inline resume desktop">

			<div class="circle carreaux">
				<a href="pdf_english.pdf">
					<i class="fa fa-file-o fa-2x"></i>
					<h4>resume</h4>
					<span class="subtitle">printable</span>
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
			<h2>Experience and technical skills</h2>
			<h4>Currently</h4>
		</header>
		<div class="big inline">
			<h3>Website <a href="http://www.road-web.fr">road-web.fr</a></h3>
			<p>I am actually <strong>leader</strong> of the team developing the website : roadweb.fr : Collaborative
				project
				combining <strong>40 persons </strong>working in the web (developers, designers, marketers, community
				managers).
				For V1, we use <strong>php and Laravel</strong>.
				We are currently working on the V2 using <strong>AngularJs</strong>.
			</p>
			<p> This experience is very rich, both from a <strong>technical and management point of view</strong>.
				Because of the <strong>scope of the project</strong>, we met many obstacles that we needed to solve:
				misunderstanding between the expectations of designers and developers,
				distance working issues, respect of deadlines, allocation of responsabilities and decision-making
				powers.</p>

			<h3> Javascript / Angularjs Training with <a href="http://simplon.co">Simplon</a></h3>
			<p> The goal is to specialize in <strong>Javascript</strong> and <strong>AngularJS</strong>.</p>

			<h3><a href="http://www.loeildelexpat.com">loeildelexpat.com</a></h3>
			<p>
				I created this <strong> blog </strong> in order to discover how a <strong> CMS </strong> works
				and what are its possibilities concerning customization .
				The codes of the plugins were particularly interesting to work on, especially regarding SEO .
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
					CSS3 / BOOTSTRAP
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

				<li id="angular">angular
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
				<h4>Others</h4>
			</header>
			<div class="big inline other">
				<h3>Full stack developer online training with <a href="http://www.emweb.fr">Emweb</a> <span> (2013 à 2015)</span>
				</h3>
				<p>
					This 2 years training brought me a thorough knowledge of the
					main languages (front end and back end). it gave me the passion of coding.
				</p>
				<h3>Germany : French Trainer for adults and kids at <a href="http://www.isa-augsburg.com/en">International
						School Augsburg</a>
					<span> (2012-2016)</span>
				</h3>
				<h3>Korea : French Trainer for adults and kids at <a href="http://gifs.or.kr">International school
						Sacheon</a><span> (2008)</span></h3>
				<h3>France : French Teacher at <a href="http://www.education.gouv.fr"> l'Education Nationale</a>, IT
					adviser<span> (1999 à 2012)</span></h3>

			</div>
			<div class="inline skills_container">
				<ul class="skills">
					<li id="english">English
						<div class="bar_container">
							<span class="bar"></span>
						</div>
					</li>
					<li id="german">German
						<div class="bar_container">
							<span class="bar"></span>
						</div>
					</li>
					<li id="team">
						Team leading
						<div class="bar_container">
							<span class="bar"></span>
						</div>
					</li>
					<li id="project">
						project management
						<div class="bar_container">
							<span class="bar"></span>
						</div>
					</li>
					<li id="sociability">
						sociability - adaptability
						<div class="bar_container">
							<span class="bar"></span>
						</div>
					</li>

					<li id="learner">Learning agility
						<div class="bar_container">
							<span class="bar"></span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section id="portfolio"><!--/Container portfolio-->
		<header><h2>My portfolio</h2></header>

		<div class="full">
			<ul id="filters">
				<li><span class="filter active" data-filter="cat1 cat2 cat3 cat4 cat5 cat6">See all</span>
				</li>
				<li><span class="filter" data-filter="cat1">Html/css</span></li>
				<li><span class="filter" data-filter="cat2">Javascript</span></li>
				<li><span class="filter" data-filter="cat3">Bootstrap</span></li>
				<li><span class="filter" data-filter="cat4">Angular</span></li>
				<li><span class="filter" data-filter="cat5">Php/Laravel</span></li>
				<li><span class="filter" data-filter="cat6">Wordpress</span></li>
			</ul>
			<div id="portfoliolist">

				<div class="portfolio cat1 cat2 cat5" data-cat="cat1 cat2 cat5">

					<div class="portfolio-wrapper">
						<a href="http://www.road-web.fr">
							<img src="img/road-web.jpg" alt=""></a>

						<div class="label">
							<div class="label-text">
								<a class="text-title">Road-web.fr</a>
								<span class="text-category">Full website creation project complet</span>
								<span class="text-category">Html Css Php Laravel and soon Angular</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat1 cat2 cat3 cat4" data-cat="cat1 cat2 cat3 cat4">
					<div class="portfolio-wrapper">
						<a href="../Angular_movies/app/index.html">
							<img src="../Angular_movies/app/img/angular_movies.jpg" alt="pictures of the main page">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Vidéo Library</a>
								<span class="text-category">Angular Project </span>
								<span class="text-category">Restful Architecture</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>

				<div class="portfolio cat2" data-cat="cat2">
					<div class="portfolio-wrapper">
						<a href="../Annuaire/index.html">
							<img src="img/Telephone.png" alt="telephone">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Directory</a>
								<span class="text-category">Manipulating Javascript objects</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat1 cat2" data-cat="cat1 cat2">
					<div class="portfolio-wrapper">

						<a href="../Chifoumi/chifoumi.html">
							<img src="../Chifoumi/img/chifoumi.png" alt="logo js">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Rocks paper Scissors</a>
								<span class="text-category">Javascript Game</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat1 cat2" data-cat="cat1 cat2">
					<div class="portfolio-wrapper">
						<a href="../sheepclicker/index.html">
							<img src="../sheepclicker/img/main.jpg" alt="shaun le mouton">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Javascript Game</a>
								<span class="text-category">Work on loop</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat1 cat3" data-cat="cat1 cat3">

					<div class="portfolio-wrapper">
						<img src="img/bootstrap.jpg" alt="exercice des divs">

						<div class="label">
							<div class="label-text">
								<a href="https://github.com/titzelle/Semaine6/blob/master/divdiv.html"
								   class="text-title">Bootstrap grid</a>
								<span class="text-category">Template integration</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat2" data-cat="cat2">
					<div class="portfolio-wrapper">
						<a href="../dom-js/index.html"> <img src="img/js.jpg" alt="logo javascript">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Full javascript</a>
								<span class="text-category">Creating the Html from DOM</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat5" data-cat="cat5">
					<div class="portfolio-wrapper">
						<a href=""> <img src="../ville.jpg" alt="Las Vegas">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">micro-encyclopedia about towns</a>
								<span class="text-category">Php - link coming soon</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat5" data-cat="cat5">
					<div class="portfolio-wrapper">
						<a href=""> <img src="../saisons.jpg" alt="logo javascript">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Seasons</a>
								<span class="text-category">Php - Link coming soon</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat6" data-cat="cat6">
					<div class="portfolio-wrapper">
						<a href="http://loeildelexpat.com"> <img src="img/Loeildelexpat.jpg"
						                                         alt="loeildelexpat.com"/></a>

						<div class="label">
							<div class="label-text">
								<a class="text-title">L'Oeil de l'Expat</a>
								<span class="text-category">Blog made with Wordpress</span>
								<span class="text-category">Work on plugins and SEO</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat1 cat2 cat3 cat4" data-cat="cat1 cat2 cat3 cat4">
					<div class="portfolio-wrapper">
						<a href="../quizzangular/App/index.html">
							<img src="../cv/img/geek.png"
							     alt="Quiz réalisé avec Angular">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Are you a geek ?</a>
								<span class="text-category">Quizz Angular</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat2" data-cat="cat2">
					<div class="portfolio-wrapper">
						<a href="../tictactoe/index.html">
							<img src="../tictactoe/tictactoe.jpg" alt="Jeu du Tic Tac Toe">
						</a>
						<div class="label">
							<div class="label-text">
								<a class="text-title">Tic Tac Toe</a>
								<span class="text-category">Javascript Game</span>
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
				<p>Germany </p><br/>
				<p>Mail: pseudoups@hotmail.fr</p>
				<p>Tel : +49 176 84 81 95 33</p>
				<p>Skype : emmanuelle.bh</p>

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
				<form action="../post_contact.php" method="post">

					<h3>Contact me</h3>
					<label for="name" class="sr-only"></label>
					<input required class="form-control" type="text" name="name" id="name" placeholder="your name"
					       value="<?= isset( $_SESSION['inputs']['name'] ) ? $_SESSION['inputs']['name'] : ""; ?>">

					<label for="mail" class="sr-only"> </label>
					<input required class="form-control" type="email" name="mail" id="mail" placeholder="your Email"
					       value="
					       <?= isset( $_SESSION['inputs']['mail'] ) ? $_SESSION['inputs']['mail'] : ""; ?>">
					<label for="message" class="sr-only"></label>
                    <textarea required class="form-control" name="message" id="message" cols="30" rows="5"
                              placeholder="Your message"><?= isset( $_SESSION['inputs']['message'] ) ? $_SESSION['inputs']['message'] : ""; ?></textarea>
					<input type="submit" value="SEND">
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
						<p> Your message has been sent. Thank you.</p>
					</div>
				<?php endif; ?>
			</div>
			<!--            Gestion des erreurs du formulaire avec php -->


		</section>
	</footer>
</main>

<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js "></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js "></script>
<script type="text/javascript" src="js/jquery.mixitup2.min.js "></script>
<script type="text/javascript" src="js/heights.js "></script>
<script type="text/javascript" src="js/togglenav.js "></script>

</body>
</html>

<?php
unset( $_SESSION['errors'] );
unset( $_SESSION['inputs'] );
unset( $_SESSION['success'] ); ?>
