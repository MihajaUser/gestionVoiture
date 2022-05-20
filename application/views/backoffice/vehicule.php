<div class="  col-sm-10 col-md-10 col-lg-10 col-xl-10">
<h2 class="h4 pd-20"> Validite Papiers</h2>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th class="table-plus datatable-nosort">Numero</th>
			<th>Marque</th>
			<th>Modele</th>
			<th>Type</th>
			<?php
			?>
			<th></th>
		</tr>
	</thead >
	<tbody> 
		<?php foreach ($vehicules as $vehicule) {
			if ($vehicule['visiteTechniques_reste_jour'] <= 15 |  $vehicule['assurance_reste_jour'] <= 15) {	?>
				<tr class="table-danger"> <?php	}
				elseif ($vehicule['visiteTechniques_reste_jour'] <= 30 |  $vehicule['assurance_reste_jour'] <= 30){?>
					<tr class="table-warning">
				<?php }
				 else { ?>
				<tr class="table">
				<?php }
				?>
				<td><?= $vehicule['numero'] ?></td>
				<td><?= $vehicule['marque'] ?></td>
				<td><?= $vehicule['modele'] ?></td>
				<td><?= $vehicule['type'] ?></td>
				<?php if ($user[0]['statut'] == "admin") { ?>
					<td>
						<form action="<?php echo site_url('') ?>papiers-voiture-gestion-de-voiture" method="post">
							<input type="hidden" name="idVehicule" value="<?php echo $vehicule['id'] ?>">
							<input type="submit" class="btn btn-secondary" value="Details">
						</form>
					</td>
				<?php		} ?>
				</tr>
			<?php }	?>
	</tbody>
</table>
</div>