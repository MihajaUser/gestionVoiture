<div>
  <div style="">
    <h2 class="h4 pd-20">Papier du vehicule </h2>
    <div class="card">
      <div class="card-body">
        <h2> Voiture matricule <?= $papiers[0]['numero']  ?> </h2>
        <br />
        <br />
        <h2> Assurance </h2>
        <?php if ($papiers['0']['assurances_id'] != "") { ?>
          <li> date emission = <?= $papiers[0]['assurances_date_emission'] . " " . $papiers[0]['assurances_heure_emission'] ?></li>
          <li> date expiration =<?= $papiers[0]['assurances_date_expiration'] . " " . $papiers[0]['assurances_heure_expiration'] ?></li>
          <li> Jour restant = <?= $papiers[0]['assurance_reste_jour'] ?>
            <br />
            <br />
            <form method="post" action="<?= site_url('page-modifier-assurance-voiture-gestion-de-voiture') ?>">
            <input type="hidden" name="numero" class="btn btn-danger" value="<?= $papiers[0]['numero'] ?>">
              <input type="hidden" name="idVehicule" class="btn btn-danger" value="<?= $papiers[0]['id'] ?>">
              <input type="submit" class="btn btn-secondary" value="Modifier assurance">
            </form>
          <?php } else { ?>
            <br />
          <li>Pas d'assurance </li>
          <br />
          <form method="post" action="<?= site_url() ?>page-ajout-assurance-voiture-gestion-de-voiture">
            <input type="hidden" name="idVehicule" class="btn btn-danger" value="<?= $papiers[0]['id'] ?>">
            <input type="submit" class="btn btn-danger" value="Ajout  assurance">
          </form>
        <?php  } ?>
        <br />
        <br />
        <br />
        <h2>Visite Technique</h2>
        <?php if ($papiers[0]['visiteTechniques_id'] != "") { ?>
          <li> date emission = <?= $papiers[0]['visiteTechniques_date_emission'] . " " . $papiers[0]['visiteTechniques_heure_emission'] ?></li>
          <li>date expiration =<?= $papiers[0]['visiteTechniques_date_expiration'] . " " . $papiers[0]['visiteTechniques_heure_expiration'] ?></li>
          <li> Jour restant = <?= $papiers[0]['visiteTechniques_reste_jour'] ?>
            <br />
            <br />
            <form  method="post" action="<?=site_url('page-modifier-visite-voiture-gestion-de-voiture')?>" >
            <input type="hidden" name="numero" class="btn btn-danger" value="<?= $papiers[0]['numero'] ?>">
            <input type="hidden" name="idVehicule" class="btn btn-danger" value="<?= $papiers[0]['id'] ?>">
            <input type="submit" class="btn btn-secondary" value="Modifier visite">
            </form>
          <?php } else { ?>
            <br />
          <li> Pas de visite technique</li>
          <br />
          <form method="post" action="<?=site_url('page-ajout-visite-voiture-gestion-de-voiture')?>">
          <input type="hidden" name="numero" class="btn btn-danger" value="<?= $papiers[0]['numero'] ?>">
          <input type="hidden" name="idVehicule" class="btn btn-danger" value="<?= $papiers[0]['id'] ?>">
          <input type="submit" class="btn btn-danger" value="Ajout visite">
          </form>
        <?php  } ?>
      </div>
    </div>
  </div>
</div>