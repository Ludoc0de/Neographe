<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
	<title>Neographe</title>
</head>

<body>
	<h1>OPENING SOON !</h1>

	<div class="menu">
		<div class="barContainer">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>

		<p>Visit card</p>
	</div>

	<div class="container">
		<div class="cardContainer">
			<div class="card">
				<figure class="front">
					<h3>Neographe</h3>
					<p>Développeur web, votre artiste 2.0 !
					</p>
					<p class="services">Nos services
						<div class=pointUnderline></div>
					</p>

					<p class="slider">
						<span>
							<i class="fas fa-laptop-code icon"></i>
						</span>
						Création de votre site en
						<span class="text-container"></span>
						</span>
					</p>
					<p>
						<span>
							<i class="fas fa-cogs icon"></i>
						</span> Maintenance et hébergement de votre site
					</p>
					<p>
						<span>
							<i class="fas fa-pencil-alt icon"></i>
						</span> Création de vos logos
					</p>
					<p>
						<span>
							<i class="fab fa-forumbee icon"></i>
						</span> Formulaire de contact, içi
					</p>
				</figure>
				<figure class="back">
					<form id="formul" action="" method="post">
						<p>Formulaire de contact</p>
						<p id="formulName" class="animate">
							<input type="text" name="name" id="name" required>
							<label for="name" class="label-name">
								<span class="content-name">Nom</span>
							</label>
						</p>
						<p id="formulFirstName" class="animate">
							<input type="text" name="firstName" id="firstName" required>
							<label for="firstName" class="label-name">
								<span class="content-name">Prénom</span>
							</label>
						</p>
						<p id="formulMail" class="animate">
							<input type="email" name="mail" id="mail" required>
							<label for="mail" class="label-name">
								<span class="content-name">Mail</span>
							</label>
						</p>
						<textarea name="textArea" rows="4" cols="40">"Saisissez ici votre demande"
						</textarea>
						<p><input type="submit" value="Envoyer" id="button"></p>

					</form>
				</figure>
			</div>
		</div>
	</div>
	<!--
	<form id="formul">
		<p>Formulaire</p>
		<p id="formulName" class="animate">
			<input type="text" name="Nom" id="nom" required>
			<label for="name" class="label-name">
				<span class="content-name">Nom</span>
			</label>
		</p>
		<p id="formulFirstName" class="animate">
			<input type="text" name="Prenom" id="Prenom" required>
			<label for="name" class="label-name">
				<span class="content-name">Prenom</span>
			</label>
		</p>
		<p id="formulMail" class="animate">
			<input type="email" name="email" id="email" required>
			<label for="name" class="label-name">
				<span class="content-name">Mail</span>
			</label>
		</p>
		<textarea placeholder="Votre demande" rows="4" cols="50">Test
		</textarea>
		<br>
		<input type="submit" value="Envoyer" id="envoyer">
	</form>
-->
	<canvas></canvas>

	<!-- script-->
	<script src="js/main.js"></script>
	<script src="js/form.js"></script>
	<script src="js/slidershow.js"></script>
</body>

</html>