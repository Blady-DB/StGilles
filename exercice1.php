<!-- Créer une page ajout-patient.php et y créer un formulaire permettant de créer un patient.
Elle doit être accessible depuis la page index.php ( = faire un lien dans index.php qui pointe
vers ajout-patient.php donc). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôpital St Gilles</title>
</head>
<body>
    <h1>Ajouter un patient</h1>
    <form action="ajout-patient.php" method="POST">
        <input type="text" name="lastname" placeholder="Nom du patient">
        <input type="text" name="firstname" placeholder="Prénom du patient">
        <input type="date" name="birthdate" placeholder="Date de naissance">
        <input type="tel" name="phone" placeholder="Téléphone">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>