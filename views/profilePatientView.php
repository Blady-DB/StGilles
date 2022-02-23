<?php
$title = 'St Gilles - Profil';
$subtitle = 'Profil du patient';
ob_start();
?>

<?php
    foreach($profile as $row) { ?>
    <div class="flex flex-col text-center justify-center">
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
            <h1>E-mail</h1>
        <p><?= $row["mail"] ?></p>
        </div>
    </div>
    <?php } ?>
    <div class="flex flex-col text-center justify-center text-xl">
        <h1>Rendez-vous</h1>
        <?php
        if (count($rdv) > 0) {
            foreach($rdv as $row) { ?>
            <p><?= $row["dateHour"] ?></p>
    </div>
    <?php
        } 
    } else { ?>
            <p>Aucun rendez-vous assigné</P>
        <?php
        }
    ?>

    <!-- Bouton "Modifier" permettant la modification des informations du patient -->
    <div class="flex flex-col text-center justify-center">
    <form method="post">
        <button>
            <i class="fas fa-user"></i><input type='submit' value='Modifier les informations du patient' name='modifyPatient'>
        </button>
        <!-- Si le patient a un rendez-vous, alors le bouton "Modifier le rendez-vous" apparait -->
        <?php if (count($rdv) > 0) { ?>
        <button>
            <i class="fas fa-clipboard-list"></i><input type='submit' value='Modifier le rendez-vous' name='modifyRDV'>
        </button>
        <?php } ?>
    </form>
        </div>
    <br>
    <?php
    
    // Si le bouton "Modifier" a été cliqué, alors faire apparaitre les champs pour modifier les informations

    if (isset($_POST['modifyPatient'])) {
        foreach($profile as $row) {  ?>
        <div class="flex flex-col text-center justify-center">
            <form action='index.php?action=modifyPatient' method='POST'>
                <input name='firstname' value='<?= $row["firstname"] ?>' placeholder="Prénom">
                <input name='lastname' value='<?= $row["lastname"] ?>' placeholder="Nom">
                <input type='date' name='birthdate' value='<?= $row["birthdate"] ?>' placeholder="Date de naissance">
                <input type='tel' name='phone' value='<?= $row["phone"] ?>' pattern="^[0-9]{10}$" placeholder="Téléphone">
                <input type='mail' name='mail' value='<?= $row["mail"] ?>' placeholder="Mail">
                <input type='hidden' name='id' value='<?= $_GET['id'] ?>'>
                <button>
                    <input type="submit" value="Envoyer"><i class="fas fa-arrow-right"></i>
                </button>
            </form>
        </div>
        <?php
        }
    }
    if (isset($_POST['modifyRDV'])) { 
        foreach($rdv as $row) { ?>
        <div class="flex flex-col text-center justify-center">
            <form action='index.php?action=modifyRDV' method='POST'>
                <input type='datetime-local' name='date' value='<?= $row["dateHour"] ?>'>
                <input type='hidden' name='id' value=' <?= $row['id'] ?> '>
                <button>
                    <input type="submit" value="Envoyer"><i class="fas fa-arrow-right"></i>
                </button>
            </form>
        </div>
        <?php
        }
    }

$content = ob_get_clean();
require ('baseView.php');