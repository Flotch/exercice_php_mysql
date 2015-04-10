<?php // récupération et définition des variables (depuis le fichier exercice.html)
$sexe = $_POST['sexe'];
$nom = $_POST['nom'];
$email = $_POST['email'];
?>

<!DOCTYPE html>

<html>
    
<head>
	<title>Traitement</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
    
<?php // Affichage du message en fonction du sexe de la personne
    if ($sexe == 'Male') {
        echo "Bonjour M. $nom, votre adresse courriel est : $email";
    } else {
        echo "Bonjour Mme. $nom, votre adresse courriel est : $email";
    }
?>

</body>
</html>
