<div>
  <div>
    <h2 class="h4 pd-20"> Modifier Assurance  <?= $numero?></h2>
    <div class="card  offset-sm-3 offset-md-3 offset-lg-4   col-sm-4 col-md-6 col-lg-4 col-xl-4">   
      <div class="card-body">
        <form action="<?php echo site_url('') ?>modifier-assurance-voiture-gestion-de-voiture" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $vehicule[0]['id'] ?>">
          <input type="hidden" name="id_voiture" value="<?= $vehicule[0]['id_voiture'] ?>">
          <input type="text" onfocus="(this.type='date')" name="date_emission" value="<?= $vehicule[0]['date_emission'] ?>" placeholder="date_emission" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          <br />
          <br />
          <input type="text" onfocus="(this.type='time')" name="heure_emission" value="<?= $vehicule[0]['heure_emission']?>" placeholder="heure_emission" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          <br />
          <br />
          <input type="text" onfocus="(this.type='date')" name="date_expiration"  value="<?= $vehicule[0]['date_expiration'] ?>" placeholder="date_expiration" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          <br />
          <br />
          <input type="text" onfocus="(this.type='time')" name="heure_expiration"  value="<?= $vehicule[0]['heure_expiration']?>" placeholder="heure_expiration" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          <br />
          <br />
          <br />
          <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Modifier">
        </form>
      </div>
    </div>
  </div>
</div>


