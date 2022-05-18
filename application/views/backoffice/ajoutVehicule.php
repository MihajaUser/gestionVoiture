<div>
  <div style="margin-left: 25%;">
    <h2 class="h4 pd-20"> Ajout Vehicule</h2>
    <div class="card" style="width: 50%;">
      <div class="card-body" style="margin-left: 20%;">
      <form action="<?php echo site_url('')?>ajout-voiture-gestion-de-voiture" method="post" enctype="multipart/form-data">
      <input type="text"  name ="numero" placeholder="numero"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      <br />
      <br />
      <input type="textarea"  name="marque" placeholder="marque" class="form-control"  aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      <br />
      <br />
      <input type="text" name="modele" placeholder="modele" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      <br />
      <br />
      <input type="text" name="type" placeholder="type" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      <br />
      <br />
      <br />
      <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Ajout">
      </form>
      </div>
    </div>
  </div>
</div>