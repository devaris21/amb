<div id="small-chat">
	<span class="badge badge-warning float-right">5</span>
	<a class="open-small-chat" href="">
		<i class="fa fa-comments"></i>
	</a>
</div>

<?php include($this->rootPath("webapp/carplan/elements/templates/chat.php")); ?> 

<div class="footer">
	<div class="float-right">
		Copyright &copy; 2019-2020 | <strong>AMB</strong>.
	</div>
	<div>
		<strong>AMB | Plateforme de gestion de parc Auto-Moto-Bateau</strong>
	</div>
</div>

<?php include($this->rootPath("composants/assets/modals/modal-demandeentretien.php")); ?> 
<?php include($this->rootPath("composants/assets/modals/modal-sinistre-carplan.php")); ?>