<div>
  <div style="margin-left: 25%;">
    <h2 class="h4 pd-20"> Ajout information</h2>
    <div class="card" style="width: 50%;">
      <div class="card-body" style="margin-left: 20%;">
      <form action="<?php echo site_url('')?>ajoutInformation-rechauffement-climatique" method="post" enctype="multipart/form-data">
      <input type="text"  name ="titre" placeholder="Titre"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      <br />
      <br />
      <input type="textarea"  name="description" placeholder="Description" class="form-control"  aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      <br />
      <br />
      <input type="file" name="photo" placeholder="Photo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      <br />
      <br />
      <br />
      <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Ajout">
      </form>
      </div>
    </div>
  </div>
</div>