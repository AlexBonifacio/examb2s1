<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style/inscription.css">
    <title>Formulaire</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forminscriptionstage";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Erreur de connexion: " . $e->getMessage();
}
?>
<header class="bandeau">
	<a href="./index.php">Index</a>
</header>
<main>
	<section class="container1 flex">
	<section class="information-decouverte">
		<div>
			<h1 class="text-white">DÉCOUVREZ LES MÉTIERS DU DIGITAL GRÂCE AUX STAGES D’IMMERSION</h1>
		</div>

	</section>
    <section class="inscription-jpo">
	<div class="slider_bg_0">
		<div class="no-change">
			<div class="container-form">
				<div>
					<div class="slider_text">
						<h2 class="text-white title-form">INSCRIVEZ-VOUS</h2>
						
					</div>
				</div>

				<div class="col-lg-5">
					<div class="request_form">
						<form action="traitement.php" method="post" id="form-inscription-stage-decouverte" accept-charset="UTF-8">
							<div class="form_0">


							

								
								<div class="">
								
									<select class=" webform-entity-select form-select required custom-select w100" data-drupal-selector="edit-evenement-et-date-de-l-evenement" data-msg-required="Le champ Événement et date de l’événement est requis." id="edit-evenement-et-date-de-l-evenement" name="evenement_et_date_de_l_evenement" required="required" aria-required="true"><option value="" selected="selected">Sélectionnez une date</option><option value="39165">STUDENT EXPERIENCE #1 - ANNECY du 04/01/2024 à 09:00 - 05/01/2024 à 17:00</option><option value="39164">STUDENT EXPERIENCE #2 - ANNECY du 28/01/2024 à 09:00 - 29/01/2024 à 17:00</option></select>
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

									
								
									<select class="form-select required custom-select w100" data-drupal-selector="edit-niveau" data-msg-required="Le champ Niveau d&#039;études est requis." id="edit-niveau" name="niveau" required="required" aria-required="true"><option value="" selected="selected">Niveau d&#039;études *</option><option value="517">Lycéen</option><option value="518">Post bac</option><option value="519">Bac + 3</option><option value="520">Bac + 4</option><option value="521">Réorientation</option></select>
								</div>

								<div class="custom-checkbox required">

								<input type="checkbox" id="edit-accord-rgpd-custom" name="active_profile" value="1" class="default" required/>

								<label class="custom-control-label flex" for="edit-accord-rgpd-custom">
									<div class="text-white">
										J’accepte qu’Eduservices recueille mes données et m’informe des formations et des actualités de l’école.* <a href="/mentions-legales" title="Mentions Légales"></a>
									</div>
								</label>



								</div>

								
								<div class="custom-control custom-checkbox mb-3">

									
									<input type="checkbox" id="accord-pay" name="active_profile" value="1" class="default" required/>
									<label class="custom-control-label flex" for="accord-pay">
										<div class="text-white">
											J’accepte de m’acquitter de la somme de 80 euros le jour du stage.
										</div>
									</label>



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
</main>
</body>
</html>