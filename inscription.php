<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style/inscription.css">
    <title>Formulaire</title>
</head>
<body>
    <header>
		<a href="./index.php">Index</a>
    </header>
    <main>
    <section class="inscription-jpo">
	<div class="slider_bg_0">
		<div class="no-change">
			<div class="container-form">
				<div class="col-lg-7 col-md-6">
					<div class="slider_text">
						<a href="/"><span class="icon-angle-left"></span>retour</a>
						<h3 class="text-white">Inscription aux évènements</h3>
						<p>Pour vous inscrire à l'un de nos évènements, veuillez remplir le formulaire ci-contre.</p>
					</div>
				</div>

				<div class="col-lg-5 col-md-6">
					<div class="request_form">
						<form action="/inscription-aux-jpo-et-sessions-dadmissions" method="post" id="webform-submission-inscription-aux-jpo-sessions-d-a-add-form" accept-charset="UTF-8">
							<div class="form_0">
								<div class="info text-right">
									<p class="text-white">Tous les champs sont obligatoires</p>
									<h3 class="text-white">Lieu et évènement souhaités</h3>
								</div>

								
								<div class="">

									<label for="edit-ecole-envisagee" class="js-form-required form-required">École envisagée</label>
								
									<select class="ecole chk-input webform-entity-select form-select required custom-select rounded-0" data-drupal-selector="edit-ecole-envisagee" data-msg-required="Le champ École envisagée est requis." id="edit-ecole-envisagee" name="ecole_envisagee" required="required" aria-required="true"><option value="458" selected="selected">Annecy</option><option value="457">Angers</option><option value="460">Bordeaux</option><option value="461">Caen</option><option value="462">Grenoble</option><option value="512">Laval</option><option value="463">Lille</option><option value="464">Lyon</option><option value="465">Melun</option><option value="466">Montpellier</option><option value="513">Nancy</option><option value="467">Nantes</option><option value="468">Nice</option><option value="469">Paris</option><option value="470">Rennes</option><option value="471">Saint-Quentin-en-Yvelines</option><option value="472">Toulouse</option><option value="473">Vannes</option></select>
								</div>

								
								<div class="">

									<label for="edit-evenement-et-date-de-l-evenement" class="form-required">Événement et date de l’événement</label>
								
									<select class="chk-input webform-entity-select form-select required custom-select rounded-0" data-drupal-selector="edit-evenement-et-date-de-l-evenement" data-msg-required="Le champ Événement et date de l’événement est requis." id="edit-evenement-et-date-de-l-evenement" name="evenement_et_date_de_l_evenement" required="required" aria-required="true"><option value="" selected="selected">Sélectionnez un événement</option><option value="39165">STUDENT EXPERIENCE #6 - RENNES du 11/12/2023 à 09:00 - 12/12/2023 à 17:00</option><option value="39164">STUDENT EXPERIENCE #7 - RENNES du 12/12/2023 à 09:00 - 12/12/2023 à 17:00</option><option value="38429">Visite ton futur campus - Vannes du 13/12/2023 à 08:30 - 13/12/2023 à 16:30</option><option value="39166">STUDENT EXPERIENCE #8 - RENNES du 13/12/2023 à 09:00 - 13/12/2023 à 17:00</option><option value="38753">SESSION D&#039;INFORMATION &amp; D&#039;ADMISSION - RENNES du 13/12/2023 à 13:30 - 13/12/2023 à 17:00</option></select>
								</div>


							</div>
							<div class="form_1">
								<div class="info">
									<h3>Mes informations</h3>
								</div>

								<div class="">

									<label for="edit-prenom" class="form-required">Prénom</label>
								
									<input class="chk-input form-text required custom-input rounded-0 form-control" pattern="^([a-zA-ZÀ-ÖØ-öø-ÿ_\-\ \&#039;]+)$" data-webform-pattern-error="Le champ Prénom contient un(des) caractère(s) non valide(s)" data-drupal-selector="edit-prenom" data-msg-maxlength="Prénom field has a maximum length of 255." data-msg-required="Le champ Prénom est requis." data-msg-pattern="Le champ Prénom contient un(des) caractère(s) non valide(s)" type="text" id="edit-prenom" name="prenom" value="" size="60" maxlength="255" placeholder="Prénom" required="required" aria-required="true" />

								</div>

								


								<div class="">

									<label for="edit-nom" class="form-required">Nom</label>
								
									<input class="chk-input form-text required custom-input rounded-0 form-control" pattern="^([a-zA-ZÀ-ÖØ-öø-ÿ_\-\ \&#039;]+)$" data-webform-pattern-error="Le champ Nom contient un(des) caractère(s) non valide(s)" data-drupal-selector="edit-nom" data-msg-maxlength="Nom field has a maximum length of 255." data-msg-required="Le champ Nom est requis." data-msg-pattern="Le champ Nom contient un(des) caractère(s) non valide(s)" type="text" id="edit-nom" name="nom" value="" size="60" maxlength="255" placeholder="Nom" required="required" aria-required="true" />

								</div>

								


								<div class="">

									<label for="edit-email" class="form-required">Email</label>
								
									<input class="chk-input form-email required custom-input rounded-0 form-control" pattern="^([a-zA-Z0-9_\-\.\+]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" data-webform-pattern-error="Le champ Email contient un(des) caractère(s) non valide(s)" data-drupal-selector="edit-email" data-msg-email="Email ne contient pas une adresse email valide." data-msg-maxlength="Email field has a maximum length of 254." data-msg-required="Le champ Email est requis." data-msg-pattern="Le champ Email contient un(des) caractère(s) non valide(s)" type="email" id="edit-email" name="email" value="" size="60" maxlength="254" placeholder="Email" required="required" aria-required="true" />

								</div>

								


								<div class="">

									<label for="edit-telephone" class="form-required">Téléphone</label>
								
									<input class="chk-input form-tel required custom-input rounded-0 form-control" pattern="^(0)(?: *\d){9}$" data-webform-pattern-error="Le champ Téléphone contient un(des) caractère(s) non valide(s)" data-drupal-selector="edit-telephone" data-msg-maxlength="Téléphone field has a maximum length of 128." data-msg-required="Le champ Téléphone est requis." data-msg-pattern="Le champ Téléphone contient un(des) caractère(s) non valide(s)" type="tel" id="edit-telephone" name="telephone" value="" size="30" maxlength="128" placeholder="Téléphone" required="required" aria-required="true" />

								</div>


																	


								<div class="">

									<label for="edit-niveau" class="form-required">Niveau d'études</label>
								
									<select class="chk-input form-select required custom-select rounded-0" data-drupal-selector="edit-niveau" data-msg-required="Le champ Niveau d&#039;études est requis." id="edit-niveau" name="niveau" required="required" aria-required="true"><option value="" selected="selected">Niveau d&#039;études *</option><option value="517">Bac</option><option value="518">Bac + 1</option><option value="519">Bac + 2</option><option value="520">Bac + 3</option><option value="521">Bac + 4</option></select>
								</div>

								
								
								<div class="custom-control custom-checkbox mb-3">

									<label class="custom-control-label" for="edit-accord-rgpd-custom">
									<input type="checkbox" id="edit-accord-rgpd-custom" name="active_profile" value="1" class="default" required/>
										<div>
											<strong>Pour valider le formulaire, merci de cocher cette case *</strong>
										</div>
									</label>



								</div>

									

									


								<button type="submit" class="btn-recaptcha btn btn-primary rounded-0 d-flex align-items-center align-center">
									<span class="icon-check-w"></span>
									S'inscrire
								</button>

								<div class="custom-text">
									<label class="custom-text-label">
										En cochant cette case, vous acceptez qu’Eduservices recueille vos données et vous informe des formations et des actualités de l’école.

										Pour en savoir plus sur la gestion de vos données personnelles et exercer vos droits, reportez-vous à la notice
										
										<a href="/mentions-legales" title="Mentions Légales">ici</a>.

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
    </main>
</body>
</html>