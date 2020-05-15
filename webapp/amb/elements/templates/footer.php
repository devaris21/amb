
<?php include($this->rootPath("webapp/gestionnaire/elements/templates/aside.php")); ?> 


<div id="small-chat">
	<span class="badge badge-warning float-right">5</span>
	<a class="open-small-chat" href="">
		<i class="fa fa-comments"></i>
	</a>
</div>

<?php include($this->rootPath("webapp/gestionnaire/elements/templates/chat.php")); ?> 

<div class="footer">
	<div class="float-right">
		Copyright &copy; 2019-2020 | <strong>AMB</strong>.
	</div>
	<div>
		<strong>AMB | Plateforme de gestion de parc Auto-Moto-Bateau</strong>
	</div>
</div>

<!-- Le loader est placé dans le fichier head.php -->

<?php include($this->rootPath("composants/assets/modals/modal-vehicule.php")); ?> 
<?php include($this->rootPath("composants/assets/modals/modal-sinistre.php")); ?> 
<?php include($this->rootPath("composants/assets/modals/modal-entretienvehicule.php")); ?> 
<?php include($this->rootPath("composants/assets/modals/modal-equipement.php")); ?> 

<?php include($this->rootPath("composants/assets/modals/modal-chauffeur.php")); ?> 
<?php include($this->rootPath("composants/assets/modals/modal-prestataire.php")); ?> 

