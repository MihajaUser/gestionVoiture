<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Pakainfo.com</title>
    <style>
        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

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
  <h1>Trajet en PDF</h1>
  <table id="customers">
    <thead>
      <tr>
        <th scope="col">nom</th>
        <th scope="col">reste</th>
        <th scope="col">prix Unitaire</th>
      </tr>
    </thead>
    <tbody>
      <?php /*for ($i = 0; $i < count($stocks); $i++) { ?>
        <tr>
          <td><?php echo $stocks[$i]['matieres_premiereNom'] ?></td>
          <td><?php echo $stocks[$i]['reste'] ?></td>
          <td><?php echo $stocks[$i]['matieres_premierePrix_unitaire'] ?></td>
        </tr>
      <?php } */ ?>
    </tbody>
  </table>
</div>
</body>
</html>
