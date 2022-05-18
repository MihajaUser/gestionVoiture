<div>
  <div style="">
    <h2 class="h4 pd-20"> Ajout Trajet</h2>
    <div class="card">
      <div class="card-body">
        <form action="<?php echo site_url('') ?>ajout-trajet-gestion-de-voiture" method="post" enctype="multipart/form-data">
          <select name="id_voiture" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            <option value="null" selected>voiture...</option>
            <?php foreach ($voitures as $key => $voiture) { ?>
              <?php echo "<option  value=" . $voiture['id'] . ">" . $voiture['numero'] . "</option>" ?>
            <?php } ?>
          </select>
          <br />
          <br />
          <select name="id_chauffeur" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            <option value="null" selected>chauffeur...</option>
            <?php foreach ($chauffeurs as $key => $chauffeur) { ?>
              <?php echo "<option value=" . $chauffeur['id'] . ">" . $chauffeur['nom'] . "</option>" ?>
            <?php } ?>
          </select> <br />
          <input type="date" name="dat_edepart" placeholder="dat_edepart" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> <br />
          <input type="time" name="heure_depart" placeholder="heure_depart" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> <br />
          <input type="text" name="lieu_depart" placeholder="lieu_depart" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> <br />
          <input type="number" name="kilometre_depart" placeholder="kilometre_depart" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> <br />
          <input type="date" name="date_arrivee" placeholder="date_arrivee" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> <br />
          <input type="time" name="heure_arrivee" placeholder="heure_arrivee" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> <br />
          <input type="text" name="lieu_arrive" placeholder="lieu_arrive" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> <br />
          <input type="number" name="kilometre_arrive" placeholder="kilometre_arrive" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> <br />
          <input type="number" name="prix_carburant" placeholder="prix_carburant" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> <br />
          <input type="number" name="quantite_carburant" placeholder="quantite_carburant" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> <br />
          <input type="text" name="motif" placeholder="motif" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          <br />
          <br />
          <br />
          <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Ajout">
        </form>
      </div>
    </div>
  </div>
</div>