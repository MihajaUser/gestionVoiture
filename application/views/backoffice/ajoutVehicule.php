<div>
  <div>
    <h2 class="h4 pd-20"> Ajout Vehicule</h2>
    <div class="card  offset-sm-3 offset-md-3 offset-lg-4   col-sm-4 col-md-6 col-lg-4 col-xl-4">
      <div class="card-body">
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