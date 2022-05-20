<div class="  col-sm-10 col-md-10 col-lg-10 col-xl-10">
<h2 class="h4 pd-20"> Liste Vehicules</h2>
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
		<?php foreach ($vehicules as $vehicule) {?>
				<tr class="table">
				<td><?= $vehicule['numero'] ?> </td>
				<td><?= $vehicule['marque'] ?></td>
				<td><?= $vehicule['modele'] ?></td>
				<td><?= $vehicule['type'] ?></td>
				<?php if ($user[0]['statut'] == "admin") { ?>
					<td>
						<form action="<?php echo site_url('') ?>trajets-vehicule-voiture-gestion-de-voiture" method="post">
							<input type="hidden" name="idVehicule" value="<?php echo $vehicule['id'] ?>">
							<input type="submit" class="btn btn-secondary" value="Trejets">
						</form>
					</td>
				<?php		} ?>
				</tr>
			<?php }	?>
	</tbody>
</table>
</div>