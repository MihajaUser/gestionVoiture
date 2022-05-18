<h2 class="h4 pd-20">Liste Trajet</h2>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th class="table-plus datatable-nosort">Numero</th>
			<th>lieu depart</th>
			<th>lieu arrive</th>
			<th>depart</th>
			<th>arrivee</th>
			<th>voiture</th>
			<th>chauffeur</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($trajets as $key => $trajet) { ?>
			<tr>
				<td><?= $key + 1 ?></td>
				<td><?= $trajet['lieu_depart'] ?></td>
				<td><?= $trajet['lieu_arrive'] ?></td>
				<td><?= $trajet['date_depart'] . "<br> " . $trajet['heure_depart'] ?></td>
				<td><?= $trajet['date_arrivee'] . "<br>  " . $trajet['heure_arrivee'] ?></td>
				<td><?= $trajet['numero'] ?></td>
				<td><?= $trajet['nom_chauffeur'] ?></td>
				<?php if ($user[0]['statut'] == "admin") { ?>
					<td>
						<form action="<?php echo site_url('') ?>supprimer-trajet-gestion-de-voiture" method="post">
							<input type="hidden" name="idTrajet" value="<?php echo $trajet['id_trajet'] ?>">
							<input type="submit" class="btn btn-danger" value="supprimer">
						</form>
					</td>
				<?php		} ?>
			</tr>
		<?php } ?>
	</tbody>
</table>