<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><?= $title ?></title>
</head>
<body class="p-4">
    <div class="flex justify-between">
        <div>
        <h1 class="font-bold uppercase text-2xl pb-3">Hôpital St Gilles - Administration</h1>
        </div>
        <div>
            <p>
                <button><a href="index.php?action=addRDV"><i class="fas fa-plus"></i>Ajouter un rendez-vous</a></button>
                <button><a href="index.php?action=addPatient"><i class="fas fa-user"></i>Ajouter un patient</a></button>
                <button><a href="index.php?action=listPatients"><i class="fas fa-users"></i>Liste des patients</a></button>
                <button><a href="index.php?action=listRDVs"><i class="fas fa-clipboard-list"></i>Liste des rendez-vous</a></button>
            </p>
        </div>
    </div>
    <h2 class="font-bold text-center text-2xl pt-3"><?= $subtitle ?></h2>
    <?= $content ?>
</body>
</html>