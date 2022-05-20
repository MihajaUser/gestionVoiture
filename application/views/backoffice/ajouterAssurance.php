<div>
  <div  >
   <br />
    <div class="card  offset-sm-3 offset-md-3 offset-lg-4   col-sm-4 col-md-6 col-lg-4 col-xl-4">
    <h2 class="h4 pd-20"> Ajout Assurance</h2>
      <div class="card-body">
      <form action="<?php echo site_url('')?>ajout-assurance-voiture-gestion-de-voiture" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id_voiture" value="<?= $idVehicule?>">
      <input type="text" onfocus="(this.type='date')"  name ="date_emission" placeholder="date_emission"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      <br />
      <br />
      <input type="text" onfocus="(this.type='time')"  name="heure_emission" placeholder="heure_emission" class="form-control"  aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      <br />
      <br />
      <input type="text" onfocus="(this.type='date')"  name="date_expiration" placeholder="date_expiration" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      <br />
      <br />
      <input type="text" onfocus="(this.type='time')" name="heure_expiration" placeholder="heure_expiration" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      <br />
      <br />
      <br />
      <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Ajout">
      </form>
      </div>
    </div>
  </div>
</div>