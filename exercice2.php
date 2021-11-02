<?php

require "liste-patient.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tous les patients - St Gilles</title>
</head>
<body>
  <h1>Tous les patients</h1>
  <form action="search.php" method="get">
    <input type="search" name="search" placeholder="Rechercher un patient">
    <input type="submit" value="Rechercher">
  </form>
  <?php

  if (count($list->listUsers()) > 0) {
    echo "<table><tr><th>Prénom</th><th>Nom</th><th>Date de naissance</th><th>Téléphone</th><th>E-mail</th></tr>";

    foreach($list->listUsers() as $row) {
      echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["birthdate"]."</td><td>".$row["phone"]."</td><td>".$row["mail"] . "</td><td>" . "<a href='exercice3.php?id=" . $row['id'] . "'><button>Profil</button>" . "</td><td>" . "<a href='suppr-patient.php?id=" . $row['id'] . "'><button>Supprimer</button>" . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "Aucun résultat";
  }
  ?>
</body>
</html>