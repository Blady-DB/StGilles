<?php

require "rendezvous.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôpital St Gilles</title>
</head>
<body>
    <h1>Information du rendez-vous</h1>
    <p>
        <?php
        foreach($rdv->detail($id) as $row) {
        echo $row['dateHour'];
        } 
        ?>
    </p>
    <form method="post">
        <input type='submit' value='Modifier' name='modify'>
    </form>
    <?php

    if (isset($_POST['modify'])) {
        echo "<form action='modif-rendezvous.php' method='post'>" .
        "Date et heure : " . "<input type='datetime-local' name='dateHour' value='" . $row['dateHour'] . "'>" .
        "<input type='hidden' name='id' value=" . $_GET['id'] . ">" .
        "<input type='submit' value='Envoyer'>" .
        "</form>";
    }

?>
</body>
</html>