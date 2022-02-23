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
<body>
    <header id="header">
        <div class="p-2 flex flex-col text-center text-white">
            <span id="logo">
                <center><a href="index.php"><img src="stgilles-logo.svg" alt="Logo St Gilles" class="h-32"></a></center>
            </span>
            <span>
                <h1 class="font-bold uppercase text-2xl">Hôpital St Gilles - Administration</h1>
            </span>
            <ul class="p-2 flex flex-col md:block">
                <li class="my-2 md:m-0 rounded-full">
                    <button><a href="index.php?action=addRDV"><i class="fas fa-plus"></i>Ajouter un rendez-vous</a></button>
                </li>
                <li class="my-2 md:m-0 rounded-full">
                    <button><a href="index.php?action=addPatient"><i class="fas fa-user"></i>Ajouter un patient</a></button>
                </li>
                <li class="my-2 md:m-0 rounded-full">
                    <button><a href="index.php?action=listPatients"><i class="fas fa-users"></i>Liste des patients</a></button>
                </li>
                <li class="my-2 md:m-0 rounded-full">
                    <button><a href="index.php?action=listRDVs"><i class="fas fa-clipboard-list"></i>Liste des rendez-vous</a></button>
                </li>
            </ul>
        </div>
    </header>
    <main class="p-4">
        <div><h2 class="font-bold text-center text-2xl"><?= $subtitle ?></h2></div>
        <?= $content ?>
    </main>
    <footer id="footer" class="text-center text-white p-4">
        <p>© 2021-2022 - Hôpital St Gilles - v1.3</p>
    </footer>
</body>
</html>