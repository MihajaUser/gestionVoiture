<div class="  col-sm-10 col-md-10 col-lg-10 col-xl-10">
  <h2 class="h4 pd-20">Maintenance Vehicule</h2>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th class="table-plus datatable-nosort">Numero</th>
        <th>voiture</th>
        <th>Elements maintenance</th>
        <th>km Usure</th>
        <th>km restant</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vehicules as $vehicule) { ?>
        <?php $restant = ($vehicule['usure'] + $vehicule['kilometrage_durant_maintenance']) - $vehicule['dernier_kilometrage'];
        if ($restant < 200) { ?>
          <tr class="table-danger">
          <?php
        } if ( $restant >= 200 && $restant < 500 ) { ?>
          <tr class="table-warning">
          <?php } if ($vehicule['objetMaintenance_nom'] == NULL) { ?>
          <tr class="table">
          <?php  }  ?>
          <td><?= $vehicule['numero'] ?></td>
          <td><?= $vehicule['marque'] . " " . $vehicule['modele'] . " " . $vehicule['type'] ?></td>
          <td><?= $vehicule['objetMaintenance_nom'] ?></td>
          <td><?php if ($vehicule['objetMaintenance_nom'] != NULL) { ?><?= $vehicule['usure'] . " km" ?> <?php } ?></td>
          <td><?php if ($vehicule['objetMaintenance_nom'] != NULL) { ?><?= $restant . " km" ?> <?php } ?></td>
          <?php if ($user[0]['statut'] == "admin") { ?>
            <td>
              <form action="<?php echo site_url('') ?>page-ajout-maintenance-vehicule-voiture-gestion-de-voiture" method="post">
                <input type="hidden" name="idVehicule" value="<?php echo $vehicule['id'] ?>">
                <input type="submit" class="btn btn-secondary" value="Maintenance">
              </form>
            </td>
          <?php    } ?>
          </tr>
        <?php }  ?>
    </tbody>
  </table>
</div>
<?php
//var_dump($vehicule);
/*	vehicules.id as id ,
		vehicules.numero as numero ,
		vehicules.marque as marque ,
		vehicules.modele as modele ,
		vehicules.type as type ,
		vehicules.disponible as disponible,
		objetsMaintenance.id as objetMaintenance_id ,
		objetsMaintenance.nom as objetMaintenance_nom ,
		maintenances.id as maintenances_id ,
		maintenances.usure as usure,
		maintenances.kilometrage_durant_maintenance as kilometrage_durant_maintenance,
		(select kilometre_arrive from view_trajet where id_voiture = vehicules.id order by date_arrivee desc limit 1) as dernier_kilometrage
*/ ?>