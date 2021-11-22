<?php
$title = 'St Gilles - Liste des RDVs';
$subtitle = 'Liste des rendez-vous';
ob_start();

if (count($list) > 0) { ?>
<div>
  <table>
    <tr><th><p>
      Date et heure
    </p></th><th><p>
      Prénom
    </p></th><th><p>
      Nom
    </p></th></tr>

  <?php
  foreach($list as $row) { ?>
    <tr><td><p>
      <?= $row["dateHour"] ?>
    </p></td><td><p>
      <?= $row["firstname"] ?>
    </p></td><td><p>
      <?= $row["lastname"] ?>
    </p></td><td><p>
    <button>
      <a href='index.php?action=profilePatient&id=<?= $row['idPatients'] ?>'><i class="fas fa-user"></i>Profil</a></button>
    </p></td><td><p>
    <button>
      <a href='index.php?action=deleteRDV&id=<?= $row['id']?>'><i class="fas fa-times"></i>Supprimer</a></button>
    </p></td></tr>
    <?php
    } ?>
    </table>
  </div>
    <?php
  } else {
    echo "Aucun rendez-vous";
  }

$content = ob_get_clean();
require ('baseView.php');