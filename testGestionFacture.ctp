<!-- Titre catégories-->
<div class="row">	
	<div class="col-sm-3">Nom de la catégorie</div>
	<div class="col-sm-3"> Argent prévue</div>
	<div class="col-sm-3">Argent restant</div>
	<div class="col-sm-3"></div>
</div>

<!-- Une ligne -->
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10"><hr /></div>
	<div class="col-sm-1"></div>
</div>
	
<!-- Titre facture -->
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-3">Nom de la facture</div>
	<div class="col-sm-3">Date</div>
	<div class="col-sm-3">Coût</div>
	<div class="col-sm-2"></div>
</div>

<hr />

<!-- Les catégories -->
<div id="Categories">
<?php#debut de boucle pour les catégories.  ?>
	<div class="row">
		<div class="col-sm-3">Resto</div>
		<div class="col-sm-3">35</div>
		<div class="col-sm-3">35</div>
		<div class="col-sm-3"><button>Supprimer</button></div>
	</div>


	
	<!-- Une ligne -->
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10"><hr /></div>
		<div class="col-sm-1"></div>
	</div>
	
	<!-- Les factures -->
	<div id='Facture'>
	<?php# debut de boucle pour les factures.  ?>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-3">St-Hubert</div>
			<div class="col-sm-3">10-14-25</div>
			<div class="col-sm-3">35</div>
			<div class="col-sm-2"><button>Supprimer</button></div>
		</div>
	<?php# fin de boucle pour les factures. ?>
	
		<!-- Une ligne -->
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10"><hr /></div>
			<div class="col-sm-1"></div>
		</div>
	
		<!-- Ajouter une facture -->
		<div class="row">
		<form>
			<div class="col-sm-1"></div>
			<div class="col-sm-3"><input type="text"></div>
			<div class="col-sm-3"><input type="text"></div>
			<div class="col-sm-3"><input type="text"></div>
			<div class="col-sm-2"><input type="submit" value="Ajouter facture"></div>
			</form>
		</div>
	</div>

<?php#fin de boucle pour les catégories. ?>
</div>

<hr />

<!-- Ajouter une catégorie-->
<div class="row">	
	<div class="col-sm-3"><input type="text"></div>
	<div class="col-sm-3"><input type="text"></div>
	<div class="col-sm-3"><input type="text"></div>
	<div class="col-sm-3"><input type="submit" value="Ajouter categorie"></div>
</div>
