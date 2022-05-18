<h2 class="h4 pd-20">Liste Vehicule</h2>
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
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($vehicules as $vehicule) {
			if ($vehicule['visiteTechniques_reste_jour'] <= 15 |  $vehicule['assurance_reste_jour'] <= 15) {	?>
				<tr class="table-danger"> <?php	} else { ?>
				<tr class="table-warning">
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
							<input type="submit" class="btn btn-secondary" value="papiers">
						</form>
					</td>
					<td>
						<form action="<?php echo site_url('') ?>supprimer-voiture-gestion-de-voiture" method="post">
							<input type="hidden" name="idVehicule" value="<?php echo $vehicule['id'] ?>">
							<input type="submit" class="btn btn-danger" value="supprimer">
						</form>
					</td>
				<?php		} ?>
				</tr>
			<?php }	?>
	</tbody>
</table>