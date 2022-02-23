<?php
$title = 'St Gilles - Liste des RDVs';
$subtitle = 'Liste des rendez-vous';
ob_start();

if (count($list) > 0) { ?>
  <?php
  foreach($list as $row) { ?>
  <div class="flex md:flex-row flex-col text-center justify-center">
    <div class="flex flex-col px-4">
      <h1>Date et heure</h1>
      <p><?= $row["dateHour"] ?></p>
    </div>
    <div class="flex flex-col px-4">
      <h1>Prénom</h1>
      <p><?= $row["firstname"] ?></p>
    </div>
    <div class="flex flex-col px-4">
      <h1>Nom</h1>
      <p><?= $row["lastname"] ?></p>
    </div>
  </div>
   <div class="md:block flex flex-col text-center"> 
      <button class="md:my-0 my-3">
        <a href='index.php?action=profilePatient&id=<?= $row['idPatients'] ?>'><i class="fas fa-user"></i>Profil</a></button>
      <button>
        <a href='index.php?action=deleteRDV&id=<?= $row['id']?>'><i class="fas fa-times"></i>Supprimer</a></button>
    </div>
    <?php
    } ?>
    <?php
  } else { ?>
    <p>Aucun rendez-vous trouvé</p>
    <?php
  }
$content = ob_get_clean();
require ('baseView.php');