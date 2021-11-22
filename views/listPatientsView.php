<?php
$title = 'St Gilles - Liste des patients';
$subtitle = 'Liste des patients';
ob_start();
?>

<?php

if (count($list) > 0) { ?>
<div>
  <table>
    <tr><th><p>
      Prénom
    </p></th><th><p>
      Nom
    </p></th><th><p>
      Date de naissance
    </p></th><th><p>
      Téléphone
    </p></th><th><p>
      E-mail
    </p></th></tr>

  <?php
  foreach($list as $row) { ?>
    <tr><td><p>
      <?= $row["firstname"] ?>
    </p></td><td><p>
      <?= $row["lastname"] ?>
    </p></td><td><p>
      <?= $row["birthdate"] ?>
    </p></td><td><p>
      <?= $row["phone"] ?>
    </p></td><td><p>
      <?= $row["mail"] ?> 
    </p></td><td><p>
    <button>
      <a href='index.php?action=profilePatient&id=<?= $row['id'] ?>'><i class="fas fa-user"></i>Profil</a></button>
    </p></td><td><p>
    <button>
      <a href='index.php?action=deletePatient&id=<?= $row['id'] ?>'><i class="fas fa-times"></i>Supprimer</a></button>
    </p></td></tr>
    <?php
    } ?>
    </table>
  </div>
    <?php
  } else {
    echo "Aucun résultat";
  }

$content = ob_get_clean();
require ('baseView.php');