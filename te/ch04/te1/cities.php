<!DOCTYPE html>
<html>
<head>
	<title>Cities</title>
	<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
</head>
<body>
<?php
$dbh = new mysqli('localhost', 'cpnv', 'cpnv1234', 'world'); //connexion à db

if ($dbh->connect_error) { //gestion des erreurs

    die('Probleme de connexion (' . $dbh->connect_errno . ') '  . $dbh->connect_error);
}
$sql = "SELECT ID, Name, CountryCode, District FROM City WHERE CountryCode = 'CHE' ORDER BY Name"; //selection des enregistrements
$result = $dbh->query($sql); 

while($row = $result->fetch_array()){ //affichage des enregistrements
	echo $row['ID'] . ' ';
	echo $row['Name'] . ' ';
	echo $row['CountryCode'] . ' '; 
	echo $row['District'] . '<br/>';
}
$result->close();
$dbh->close();
echo "edit.php" ;
echo $result->num_rows ; //affichage du nombre d'enregistrements

?>

</body>
</html>
