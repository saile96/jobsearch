<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire d'inscription</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div class="page-content">
		<div class="wizard-v5-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">Créer CV</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder">
										<label for="first_name">Nom</label>
										<input type="text" placeholder="Entrer votre nom" class="form-control" id="first_name" name="first_name">
									</div>
									<div class="form-holder">
										<label for="last_name">Prenom</label>
										<input type="text" placeholder="Entrer votre prenom" class="form-control" id="last_name" name="last_name">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_name">Age</label>
										<input type="number" placeholder="" class="form-control input-step-2-1" id="age" name="account_name">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="address">Adresse</label>
										<input type="text" placeholder="Rufisque, HLM cite poste villa n°134" class="form-control" id="address" name="address">
										<span><i class="zmdi zmdi-pin"></i></span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-3">
										<label for="phone">Telephone</label>
										<input type="number" placeholder="+221 77 197 7756" class="form-control" id="phone" name="phone">
									</div>
									<div class="form-holder">
										<label for="code">Email</label>
										<input type="text" class="form-control" placeholder="ex: example@email.com" id="email" name="email">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_name">Specialite</label>
										<select name="specialite" id="specialite" class="form-control">
										<option value="informatique" selected>Informatique</option>
										<option value="informatique" >Gestion</option>
										<option value="informatique" >Logistique</option>
										<option value="informatique" >Restauration</option>
										<option value="informatique" >Autres</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_name">Niveau d'etude</label>
										<select name="niveau" id="niveau" class="form-control">
										<option value="informatique" selected>Bac</option>
										<option value="informatique" >BTS</option>
										<option value="informatique" >Licence</option>
										<option value="informatique" >Master</option>
										<option value="informatique" >Doctorat</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_name">Experience  professionnelle</label>
										<select name="experience" id="experience" class="form-control">
										<option value="informatique" selected>Moins 1 an </option>
										<option value="informatique" >1 ans</option>
										<option value="informatique" >2ans</option>
										<option value="informatique" >3 ans</option>
										<option value="informatique" >Plus</option>
										</select>
									</div>
								</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">Modifier CV</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder">
										<label for="bank">Nom</label>
										<input type="text" placeholder="Entrer votre nom" class="form-control input-step-2" id="bank" name="bank">
										<span><i class="zmdi zmdi-search"></i></span>
									</div>
									<div class="form-holder">
										<label for="branch">Prenom</label>
										<input type="text" placeholder="Entrer votre prenom" class="form-control input-step-2" id="branch" name="branch">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_name">Age</label>
										<input type="number" placeholder="" class="form-control input-step-2-1" id="age" name="account_name">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="email">Email </label>
										<input type="email" name="email" class="email input-step-2-1" id="email" placeholder="ex: example@email.com" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_name">Telephone</label>
										<input type="number" placeholder="+221 77 198 77 56" class="form-control input-step-2-1" id="telephone" name="account_name">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_name">Adresse</label>
										<input type="text" placeholder="Rufisque, HLM cite poste villa n°134" class="form-control input-step-2-1" id="adresse" name="account_name">
									</div>
								</div>
								
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_name">Specialite</label>
										<select name="specialite" id="specialite" class="form-control">
										<option value="informatique" selected>Informatique</option>
										<option value="informatique" >Gestion</option>
										<option value="informatique" >Logistique</option>
										<option value="informatique" >Restauration</option>
										<option value="informatique" >Autres</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_name">Niveau d'etude</label>
										<select name="niveau" id="niveau" class="form-control">
										<option value="informatique" selected>Bac</option>
										<option value="informatique" >BTS</option>
										<option value="informatique" >Licence</option>
										<option value="informatique" >Master</option>
										<option value="informatique" >Doctorat</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_name">Experience  professionnelle</label>
										<select name="experience" id="experience" class="form-control">
										<option value="informatique" selected>Moins 1 an </option>
										<option value="informatique" >1 ans</option>
										<option value="informatique" >2ans</option>
										<option value="informatique" >3 ans</option>
										<option value="informatique" >Plus</option>
										</select>
									</div>
								</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">Voir le CV</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Details</h3>
								<div class="form-row table-responsive">
									<table class="table">
										<tbody>
											<tr class="space-row">
												<th>Nom</th>
												<td id="fullname-val"></td>
											</tr>
											<tr class="space-row">
												<th>Prenom</th>
												<td id="fullname-val"></td>
											</tr>
											<tr class="space-row">
												<th>Email </th>
												<td id="email-val"></td>
											</tr>
											<tr class="space-row">
												<th>Age </th>
												<td id="age"></td>
											</tr>
											<tr class="space-row">
												<th>Telephone</th>
												<td id="phone-val"></td>
											</tr>
											<tr class="space-row">
												<th>Adresse</th>
												<td id="address-val"></td>
											</tr>
											<tr class="space-row">
												<th>Specialite</th>
												<td id="account-name-val"></td>
											</tr>
											<tr class="space-row">
												<th>Niveau d'etude</th>
												<td id="etude"></td>
											</tr>
											<tr class="space-row">
												<th>Experience professionnelle</th>
												<td id="account-number-val"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
</body>
</html>