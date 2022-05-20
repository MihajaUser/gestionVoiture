<div>
  <div>
    <br />
    <div class="card card  offset-sm-3 offset-md-3 offset-lg-4   col-sm-4 col-md-6 col-lg-4 col-xl-4">
      <h2 class="h4 pd-20"> Maintenance vehicules  <?= $vehicules[0]['numero'] ?></h2>
      <div class="card-body">
        <form action="<?php echo site_url('ajout-maintenance-voiture-gestion-de-voiture') ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_vehicule" value="<?= $vehicules[0]['id'] ?>">
          <select name="id_objetsMaintenance" type="text" placeholder="Object Maintenance" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          <option value="null" selected>Objet Maintenance...</option>
          <?php foreach($objetsMaintenances as $objetsMaintenance) { ?> 
            <option value="<?=$objetsMaintenance['id']?>"><?=$objetsMaintenance['nom']?></option>
            <?php }?>
          </select>
          <br />
          <br />
          <input type="text" onfocus="(this.type='number')" name="usure" placeholder="usure" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          <br />
          <br />
          <input type="text" onfocus="(this.type='number')" name="kilometrage_durant_maintenance" placeholder="kilometrage_durant_maintenance" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          <br />
          <br />
          <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Ajout">
        </form>
      </div>
    </div>
  </div>
</div>
