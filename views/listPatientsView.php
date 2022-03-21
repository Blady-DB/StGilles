<?php
$title = 'St Gilles - Liste des patients';
$subtitle = 'Liste des patients';
ob_start();
?>

<?php
if (count($list) > 0) { ?>

  <?php
  foreach($list as $row) { ?>
  <div class="liste-patients">
    <div class="patient">
      <h1>Prénom</h1>
      <p><?= $row["firstname"] ?></p>
    </div>
    <div class="patient">
      <h1>Nom</h1>
      <p><?= $row["lastname"] ?></p>
    </div>
    <div class="patient">
      <h1>Date de naissance</h1>
      <p><?= $row["birthdate"] ?></p>
    </div>
    <div class="patient">
      <h1>Téléphone</h1>
      <p><?= $row["phone"] ?></p>
    </div>
    <div class="patient">
      <h1>Adresse e-mail</h1>
      <p><?= $row["mail"] ?></p>
    </div>
  </div>
   <div> 
      <button>
        <a href='index.php?action=profilePatient&id=<?= $row['id'] ?>'><i class="fas fa-user"></i>Profil</a></button>
      <button>
        <a href='index.php?action=deletePatient&id=<?= $row['id'] ?>'><i class="fas fa-times"></i>Supprimer</a></button>
    </div>
    <?php
    } ?>
    <?php
  } else { ?>
    <p>Aucun résultat</p>
    <?php
  }

$content = ob_get_clean();
require ('baseView.php');