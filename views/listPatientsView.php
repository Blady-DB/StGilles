<?php
$title = 'St Gilles - Liste des patients';
$subtitle = 'Liste des patients';
ob_start();
?>

<?php
if (count($list) > 0) { ?>

  <?php
  foreach($list as $row) { ?>
  <div class="flex md:flex-row flex-col text-center justify-center">
    <div class="flex flex-col px-4">
      <h1>Prénom</h1>
      <p><?= $row["firstname"] ?></p>
    </div>
    <div class="flex flex-col px-4">
      <h1>Nom</h1>
      <p><?= $row["lastname"] ?></p>
    </div>
    <div class="flex flex-col px-4">
      <h1>Date de naissance</h1>
      <p><?= $row["birthdate"] ?></p>
    </div>
    <div class="flex flex-col px-4">
      <h1>Téléphone</h1>
      <p><?= $row["phone"] ?></p>
    </div>
    <div class="flex flex-col px-4">
      <h1>Adresse e-mail</h1>
      <p><?= $row["mail"] ?></p>
    </div>
  </div>
   <div class="md:block flex flex-col text-center"> 
      <button class="md:my-0 my-3">
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