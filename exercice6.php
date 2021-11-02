<?php

require "liste-rendezvous.php";

echo "<h1>Tous les rendez-vous</h1>";

if (count($list->listRDVs()) > 0) {
  echo "<table><tr><th>Date et heure</th></tr>";

  foreach($list->listRDVs() as $row) {
    echo "<tr><td>" . $row["dateHour"] . "</td><td>" . "<a href='exercice7.php?id=" . $row['id'] . "'><button>Détails</button>" . "</td><td>" . "<a href='suppr-rendezvous.php?id=" . $row['id'] . "'><button>Supprimer</button>" . "</td></tr>";
  }
  // echo "<table><tr><th>Date et heure</th><th>Patient</th></tr>";

  // foreach($list->listRDVs() as $row) {
  //   echo "<tr><td>".$row["dateHour"]."</td><td>". $row["firstname"] . " " . $row["lastname"] . "</td><td>" . "<a href='exercice7.php?id=" . $row['id'] . "'><button>Détails</button>" . "</td></tr>";
  // }
  echo "</table>";
} else {
  echo "Aucun résultat";
}

echo "<br>" . "<a href='exercice5.php'><button>Créer un rendez-vous</button></a>";