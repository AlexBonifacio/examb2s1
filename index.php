<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="https://www.mydigitalschool.com/themes/custom/mds/img/favicon.png?v=1" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style/inscription.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
	<meta name="description" content="Participez à un stage de découverte du digital, dispensé par des professionnels du web dans nos locaux 14 avenue du Rhône.">
    <title>Stage de découverte dy digital | MyDigitalSchool Annecy</title>
</head>
<body>
<?php
$servername = "127.0.0.1";
$username = "xfdbkfqt_mds";
$password = "MDSdecouverte74";
$dbname = "xfdbkfqt_mds_stage_decouverte";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  $e->getMessage();
}
?>
<!-- <div class="image-container">
    <img src="./img/homme_interagissant.webp" alt="Description" />
</div> -->
<header class="bandeau flex" id="header">
	<img src="./img/logo_mds_1.png" alt="Logo MYDIGITALSCHOOL">
	
</header>
<main>
<h1 class="flex main_h1">DÉCOUVREZ LES MÉTIERS DU DIGITAL GRÂCE AUX STAGES D’IMMERSION</h1>
	<section class="container1 flex">
    
	<div class="blur"></div>
	<section class="information-decouverte">
		<div class="title_left main_title">
		
			<h2 class="text-white">LES STAGES D’IMMERSION EN QUELQUES CHIFFRES</h2>
			<p class='text-white text-shadow'>Plongez dans l’univers du digital pendant 2 jours en immersion à MyDigitalSchool Annecy, et découvrez le web en vous amusant comme jamais ! </p>
		</div>
		<div class="title_left numbers_left_hero text-white">
			<div class="flex alignC relative">
				<p class='big-numb anim-numb' data-to-value="2" data-duration="800">2 </p><p class="absolute left80">JOURS DE STAGE</p>
			</div>
			<div class="flex alignC relative">
				<p class='big-numb anim-numb' data-to-value="12" data-duration="1500">12</p> <p class="absolute left80">HEURES DE FORMATION</p>
			</div>
			<div class="flex alignC relative">
				<p class='big-numb anim-numb' data-from-value="70" data-to-value="80" data-duration="1500">80</p> <p class="absolute left80">€ POUR DEUX JOURS</p>
			</div>
			<div class="flex alignC relative">
				<p class='big-numb anim-numb' data-to-value="14" data-duration="1000">14</p> <p class="absolute left80">AVENUE DU RHÔNE,<br>74000 ANNECY</p>
			</div>
		</div>

	</section>
    <section class="inscription-jpo">
	<div class="slider_bg_0">
		<div class="no-change">
			<div class="container-form">
				<div>
					<div class="slider_text">
						<h2 class="text-white title-form">INSCRIVEZ-VOUS !</h2>
						
					</div>
				</div>

				<div class="col-lg-5">
					<div class="request_form">
						<form action="traitement.php" method="post" id="form-inscription-stage-decouverte" accept-charset="UTF-8">
							<div class="form_0">


							

								
								<div class="">
								
									<select class=" webform-entity-select form-select required custom-select w100" data-drupal-selector="edit-evenement-et-date-de-l-evenement" data-msg-required="Le champ Événement et date de l’événement est requis." id="edit-evenement-et-date-de-l-evenement" name="evenement_et_date_de_l_evenement" required="required" aria-required="true"><option value="" selected="selected">Sélectionnez une date</option><option value="STUDENT EXPERIENCE #1 - ANNECY du 04/01/2024 à 09:00 - 05/01/2024 à 17:00">STUDENT EXPERIENCE #1 - ANNECY du 04/01/2024 à 09:00 - 05/01/2024 à 17:00</option><option value="STUDENT EXPERIENCE #2 - ANNECY du 28/01/2024 à 09:00 - 29/01/2024 à 17:00">STUDENT EXPERIENCE #2 - ANNECY du 28/01/2024 à 09:00 - 29/01/2024 à 17:00</option></select>
								</div>


							</div>
							<div class="form_1">
								
								<div class="container-nom-prenom flex">
								<div class="">

								
									<input class=" form-text required   form-control" pattern="^([a-zA-ZÀ-ÖØ-öø-ÿ_\-\ \&#039;]+)$" data-webform-pattern-error="Le champ Prénom contient un(des) caractère(s) non valide(s)" data-drupal-selector="edit-prenom" data-msg-maxlength="Prénom field has a maximum length of 255." data-msg-required="Le champ Prénom est requis." data-msg-pattern="Le champ Prénom contient un(des) caractère(s) non valide(s)" type="text" id="edit-prenom" name="prenom" value="" size="60" maxlength="255" placeholder="Prénom *" required="required" aria-required="true" />

								</div>

								


								<div class="">

								
									<input class=" form-text required   form-control" pattern="^([a-zA-ZÀ-ÖØ-öø-ÿ_\-\ \&#039;]+)$" data-webform-pattern-error="Le champ Nom contient un(des) caractère(s) non valide(s)" data-drupal-selector="edit-nom" data-msg-maxlength="Nom field has a maximum length of 255." data-msg-required="Le champ Nom est requis." data-msg-pattern="Le champ Nom contient un(des) caractère(s) non valide(s)" type="text" id="edit-nom" name="nom" value="" size="60" maxlength="255" placeholder="Nom *" required="required" aria-required="true" />

								</div>
								</div>

								


								<div class="">

								
									<input class=" form-email required   form-control w100" pattern="^([a-zA-Z0-9_\-\.\+]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" data-webform-pattern-error="Le champ Email contient un(des) caractère(s) non valide(s)" data-drupal-selector="edit-email" data-msg-email="Email ne contient pas une adresse email valide." data-msg-maxlength="Email field has a maximum length of 254." data-msg-required="Le champ Email est requis." data-msg-pattern="Le champ Email contient un(des) caractère(s) non valide(s)" type="email" id="edit-email" name="email" value="" size="60" maxlength="254" placeholder="Email *" required="required" aria-required="true" />

								</div>

								


								<div class="">
								
									<input class=" form-tel required   form-control w100" pattern="^(0)(?: *\d){9}$" data-webform-pattern-error="Le champ Téléphone contient un(des) caractère(s) non valide(s)" data-drupal-selector="edit-telephone" data-msg-maxlength="Téléphone field has a maximum length of 128." data-msg-required="Le champ Téléphone est requis." data-msg-pattern="Le champ Téléphone contient un(des) caractère(s) non valide(s)" type="tel" id="edit-telephone" name="telephone" value="" size="30" maxlength="128" placeholder="Téléphone *" required="required" aria-required="true" />

								</div>


																	


								<div class="">

									
								
									<select class="form-select required custom-select w100" data-drupal-selector="edit-niveau" data-msg-required="Le champ Niveau d&#039;études est requis." id="edit-niveau" name="niveau" required="required" aria-required="true"><option value="" selected="selected">Niveau d&#039;études *</option><option value="Lycéen">Lycéen</option><option value="Post Bac">Post bac</option><option value="Bac +3">Bac + 3</option><option value="Bac +4">Bac + 4</option><option value="521">Réorientation</option></select>
								</div>

								<div class="custom-checkbox required">

								<input type="checkbox" id="edit-accord-rgpd-custom" name="accord_rgpd" value="1" class="default" oninvalid="this.setCustomValidity('Vous devez accepter les termes et conditions')"  oninput="this.setCustomValidity('')"/>

								<label class="custom-control-label flex" for="edit-accord-rgpd-custom">
									<div class="text-white"><p class="text-shadow" style="font-size: 15px">
										J’accepte qu’Eduservices recueille mes données et m’informe des formations et des actualités de l’école.* 
										<a href="/mentions-legales" title="Mentions Légales"></a></p>
										

									</div>
								</label>
								<div class="error-message" style="display:none; color:white; font-weight: bold;">Vous devez accepter ce champ</div>



								</div>

								
								<div class="custom-control custom-checkbox mb-3">

									
									<input type="checkbox" id="accord-pay" name="accord_pay" value="1" class="default" oninvalid="this.setCustomValidity('Vous devez accepter les termes et conditions')" oninput="this.setCustomValidity('')"/>
									<label class="custom-control-label flex" for="accord-pay">
										<div class="text-white">
											<p class="text-shadow" style="font-size: 15px;">J’accepte de m’acquitter de la somme de 80 euros le jour du stage.</p>
										</div>
									</label>
									<div class="error-message-pay" style="display:none; color:white; font-weight: bold;">Vous devez accepter ce champ.</div>



								</div>


									

									


								<button type="submit" class=" btn btn-primary flex ">
									<span class="icon-check-w"></span>
									Je m'inscris
								</button>

								

									</label>
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	</section>
	<section class="section_nav">
		<nav>
			<li class="li_nav flex">
				<ul class="ulAfter"><a href="#section1">Le stage d'immersion</a></ul>
				<ul class="ulAfter"><a href="#section2">Le programme</a></ul>
				<ul class="ulAfter"><a href="#section3">Pour qui ?</a></ul>
				<ul class="ulAfter"><a href="#section4">Les métiers du web</a></ul>
				<ul><a href="#section5">Les infos pratiques</a></ul>

			</li>
		</nav>
	</section>
	<section class="section_h2">
		<h2 >MyDigitalSchool Annecy : Votre Passerelle vers le Futur du Digital</h2>
		<div class="separation_h2"></div>
		<p>Bienvenue à MyDigitalSchool Annecy, votre tremplin vers un avenir numérique passionnant. Notre stage de découverte de deux jours est une invitation à explorer le monde fascinant du web et du digital. Que vous soyez passionné de réseaux sociaux, de webdesign, de marketing digital ou de cybersécurité, ce stage est fait pour vous. Découvrez un éventail de métiers et de compétences dans un environnement innovant et dynamique.</p>

	</section>
	
	<section class="section_carte flex" id="section1">
		<div class="div_carte_left">
			<h3>LE STAGE D’IMMERSION, UNE APPROCHE UNIQUE DE L’APPRENTISSAGE</h3>
			<p>Chez MyDigitalSchool Annecy, nous révolutionnons l'éducation. Fini les cours magistraux ennuyeux ! Ici, tout est axé sur la pratique. </p>
			<p>Vous travaillerez sur des projets concrets, apprendrez par l'action et développerez des compétences en temps réel. Nous vous proposons un apprentissage interactif, où chaque étudiant est acteur de son éducation.</p>
			<p>Notre stage est une opportunité unique de découvrir le monde du digital de manière ludique et interactive. C'est l'occasion parfaite pour plonger dans une aventure unique, d'apprendre par la pratique, de créer des projets impressionnants, et de comprendre les coulisses du web.

			</p>
			<a href="#header"><button class="btn_main">Super, je m'inscris !</button></a>
		</div>
		<div class="div_carte_right">
			<img src="./img/carte-de-france.jpg" alt="Carte de France avec pointeur sur la ville d'Annecy">
		</div>

	</section>
	
	
	<section class="prog2jours flex" id="section2">
		<div class="div_prog_left flex">
			<h3>LE PROGRAMME DES 2 JOURS</h3>
			<h4>JOUR 1</h4>
			<p>Initiation à la prise d’image avec smartphone et/ou appareil photo professionnel. Mettre en avant un produit grâce à l’utilisation d’outils professionnels (box photo, appareil professionnel, lumières…)</p>
			<p style="margin-top: 16px;">Rédaction d’un post en respectant les règles de la charte éditoriale partagée par le porteur de projet. Découverte des enjeux du métier de Community Manager.</p>
			<h4 style="margin-top: 16px;">JOUR 2</h4>
			<p>Apprentissage des bases du code d’un site web en réalisant une landing page avec un outil no-code.</p>
			<p style="margin-top: 16px;">À la fin de la journée, vous saurez déjà rendre une page web accessible en ligne !</p>
			<div>
			<a href="#header"><button class="btn_main">C'est génial, je m'inscris!</button></a>
			</div>

		</div>
		<div class="img_hand_ia">
			<img src="./img/robot_hand.webp" alt="Main de robot tenant une constellation d'étoiles">
		</div>
	
	</section>
	
	<section class="section_icone" id="section3">
		<h2 class="text-white">À QUI S’ADRESSE CE STAGE ?</h2>
		<div class="separation_h2"></div>
		<div class="container_icone flex">
			<div class="card_icone">
				<div>
				<img src="./img/diplome.png" alt="Icone représentant un livre">
				</div>
				<h3>LYCÉENS</h3>
				<p class="text_icone" style="max-width:146px;">Vous avez entre 16 et 18 ans.</p>
			</div>
			<div class="card_icone">
				<div >
					<img src="./img/coiffe.png" alt="Icone représentant une coiffe">
				</div>
				<h3>DIPLÔMÉS</h3>
				<p class="text_icone" style="max-width: 193px;">Vous êtes étudiant de Bac à Bac +4.</p>
			</div>		
			<div class="card_icone">
				<div>
				<img src="./img/malette.png" alt="Icone représentant une malette">
				</div>
				<h3>PROFESSIONNELS</h3>
				<p class="text_icone">Vous êtes professionnel en reconversion.</p>
			</div>
		</div>
	
	</section>

	
	<section class="explore flex" style="flex-direction: row;" id="section4">
		<div class="div_prog_left flex">
			<h3>EXPLOREZ LES MÉTIERS DU WEB ET DU DIGITAL</h3>

			<p>Vous serez initié aux métiers clés du secteur digital : webmarketing, développement web, création numérique... </p>
			<p style="margin-top: 16px;">Notre équipe d'experts vous guidera à travers les différents aspects de ces métiers passionnants. Vous comprendrez mieux les compétences requises et les opportunités de carrière dans ce secteur en pleine expansion.</p>
			<p style="margin-top: 16px;">Au cours du stage, vous découvrirez comment créer du contenu digital captivant. </p>
			<p style="margin-top: 16px;">Vous apprendrez à produire des images impactantes, des posts de réseaux sociaux créatifs, des vidéos époustouflantes, et des sites web innovants. Cette expérience vous donnera un avant-goût de ce que c'est que d'être un créateur de contenu numérique.</p>
			<div>
			<a href="#header" ><button class="btn_main">C'est génial, je m'inscris!</button></a>
			</div>
		</div>

		
		<div class="img_hand_ia">
			<img src="./img/homme_interagissant.webp" alt="Main de robot tenant une constellation d'étoiles">
		</div>

	</section>
	
	<section class="prog2jours flex" id="section5">
		<div class="div_prog_left flex info_prat">
			<h3>LES INFORMATIONS PRATIQUES</h3>
			<h4>DATE ET DURÉE DU STAGE</h4>
			<p>Le stage est sur 2 jours (jeudi 4 et vendredi 5 janvier 2024) et dure 6 heures au total.</p>
			<h4>NIVEAU D’ENTRÉE</h4>
			<p>Il est accessible à tous, de débutant à confirmé. Vous pouvez être étudiant, diplômé ou encore en reconversion professionnelle.</p>
			<h4>NOMBRE D’ÉLÈVES</h4>
			<p>Le nombre de places est limité pour garantir une expérience de qualité. C’est pourquoi nous vous recommandons de vous inscrire pour réservez votre place.</p>
			<h4>TARIF DU STAGE</h4>
			<p>80€ pour une immersion totale dans le monde du digital pendant 6h !</p>

			<div>
			<a href="#header"><button class="btn_main" >Parfait, je m'inscris!</button></a>
			</div>

		</div>
		<div class="img_hand_ia">
			<img src="./img/femme_travaillant_sur_pc.webp" style="display:block;" alt="Main de robot tenant une constellation d'étoiles">
		</div>
	
	</section>
</main>

<footer class="flex">
	<div>
		<div class="logo_footer">
			<img src="./img/logo_blanc.png" width=281 alt="Logo blanc MyDigitalSchool ">
		</div>
		<div class="logo_sm flex">

			<a href="https://www.facebook.com/my.digital.schoolFR/" target="_blank" aria-label="Suivez-nous sur Facebook"><img src="./img/vector_facebook.svg" alt="Logo Facebook"></a>
			<a href="https://www.instagram.com/mydigitalschool/" aria-label="Suivez-nous sur Instagram"><img src="./img/vector_insta.svg" alt="Logo Instagram"></a>

			<a href="https://www.tiktok.com/@mydigitalschool?lang=fr
			" target="_blank" aria-label="Suivez-nous sur TikTok"><img src="./img/vector_tt.svg" alt="Logo TikTok"></a>
			<a href="https://www.youtube.com/channel/UC-x9a8FpIuvGoiOkzgL6kFA" aria-label="Suivez-nous sur YouTube" target="_blank"><img src="./img/vector_yt.svg" style="height:42px" alt="Logo YouTube"></a>
			<a href="https://www.linkedin.com/school/mydigitalschool/" target="_blank" aria-label="Suivez-nous sur LinkedIn"><img src="./img/vector_link.svg" alt="Logo Linkedin"></a>
		</div>
	</div>
	<div>
		<nav>
			<ul class="text-white">
				<li><a href="#section1" >Le stage d’immersion</a></li>
				<li><a href="#section2" >Le programme</a></li>
				<li><a href="#section3" >Pour qui?</a></li>
				<li><a href="#section4" >Les métiers du web</a></li>
				<li><a href="#section5" >Les infos pratiques</a></li>
			</ul>
		</nav>
	</div>

<script src="./script/rdm_deg.js"></script>
</footer>
</body>
</html>