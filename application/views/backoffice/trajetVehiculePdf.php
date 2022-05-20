<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Trajet vehicule PDF</title>
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
  </style>
</head>
<body>
  <h1>Trajets du vehicule <?= $trajets[0]['numero']?></h1>
  <table id="customers">
    <thead>
      <tr>
        <th scope="col">Numero</th>
        <th scope="col">Lieu depart</th>
        <th scope="col">Lieu arrivé</th>
        <th scope="col">Date depart</th>
        <th scope="col">Heure depart</th>
        <th scope="col">Date arrivé</th>
        <th scope="col">Heure arrivé</th>
        <th scope="col">Chauffeur</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($trajets as $key => $trajet) { ?>
        <tr>
          <td><?= $key ?></td>
          <td><?= $trajet['lieu_depart'] ?></td>
          <td><?= $trajet['lieu_arrive'] ?></td>
          <td><?= $trajet['date_depart'] ?></td>
          <td><?= $trajet['heure_depart'] ?></td>
          <td><?= $trajet['date_arrivee'] ?></td>
          <td><?= $trajet['heure_arrivee'] ?></td>
          <td><?= $trajet['nom_chauffeur'] ?></td>
        </tr>
      <?php  } ?>
    </tbody>
  </table>
  </div>
</body>
</html>