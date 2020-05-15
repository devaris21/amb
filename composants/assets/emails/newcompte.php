<html>
<head> 
	<meta name="swift-page-name" id="swift-page-name" content="home">
	<meta name="swift-page-section" id="swift-section-name" content="home">
	<meta name="msapplication-tileimage" content="//abs.twimg.com/favicons/win8-tile-144.png">
	<meta name="msapplication-tilecolor" content="#00aced">
</head>
<body >	
	<div style="max-width: 680px ; margin: 3% auto ;">
		<div style=" padding: 4%; background-color: #fff; border: 0.5px solid #ddd; border-bottom: 6px solid #ddd;">
			
			<div>
				<img style="height: 50px; float: right;" src="http://dummyimage.com/800x600/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
				<h1 style="font-size: 50px; color: grey; margin: 0; letter-spacing: 5px; font-weight: bold">AMB</h1>
				<small>Plateforme de gestion de parc Auto-Moto-Bateau</small>
			</div>
			<br><br>

			<h2 style="color: #23B2DBFF; text-align: center;">Lorem ipsum dolor sit amet, consectetur.</h2>

			<span><b>Cher <?= $this->name() ?>,</b> </span>
			<p>un accès et un espace de connexion vient de vous être dédié sur plateforme web de gestion du parc automobile en tant que <u><?= $poste  ?></u> !<br> 
			Cet espace vous permettra de mener vos actions habituelles, de suivre eventuellement le processus de validation de vos différentes demandes et surtout de retracer et/ou retrouver l'historiques de vos différentes action, de déclarer d'eventuels sinistres, et bien d'autres choses !</p>

			<p>Les informations de connexion communiquées ci-dessous vous sont individuelles et vous incomberont de tout acte ou action ménée sur ladite plateforme à partir d'une session ouverte par celles-ci! <br><br> Vous ne devez donc, en aucun cas, les divulguées à une autre personne !</p><br>

			<table>
				<tbody >
					<tr>
						<td class="gras">Identifiant : </td>
						<td><b><?= $this->login ?></b></td>
					</tr>
					<tr>
						<td class="gras"> Mot de passe :</td>
						<td><b><?= $pass  ?></b></td>
					</tr>
				</tbody>
			</table>
			<br>
			<div>
				<a class="bouton" href="http://www.4urprincess.co.uk/customer-login" target="_blank">Me connecter à mon compte</a>
			</div><br>

			<p>Par soucis de sécurité et d'intégrité des données, vous serez emmener à changer ces informations lors de votre premiere connexion !</p><br><br><br>

			<div style="text-align: right;">
				<h4 style="margin: 5px auto" >Cordialement,</h4>
				<small style="text-align: right; color: grey;">AMB | Plateforme de gestion de parc Auto-Moto-Bateau</small>
			</div>
		</div>
		<br>
		<table >
			<tbody>
				<tr>
					<td><a class="link" href="https://twitter.com/" target="_blank">Aide</a></td>
					<td><a class="link" href="https://twitter.com/" target="_blank">Centre de sécurité</a></td>
					<td><a class="link" href="https://twitter.com/" target="_blank">Application mobile</a></td>
					<td><a class="link" href="https://twitter.com/" target="_blank">Tous AMB</a></td>
				</tr>
			</tbody>
		</table>

		<hr>

		<small style=" font-size: 10px; color: #666666; line-height: 16px; display: inline-block; text-align: justify;  font-weight: normal !important;  " align="left">Cet email a été envoyé de manière automatique, donc si vous repondez, personne ne le verra.<br> Pour nous contactez, veuillez utiliser les supports de contact au bas du mail. <br><br>copyright © 2019-2020 AMB. Tous droits reservés. AMB est situé à port-bouet, rue de la baltique, Abidjan Côte d'Ivoire. <br>www.amb.com // info@amb.com // +225 59573307</small>
	</div>
	
	<?php include(__DIR__."/../../composants/assets/emails/templates/footer.php"); ?>

</body>
</html>

