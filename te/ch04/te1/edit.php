<!DOCTYPE html>
<html>
<head>
	<title>Cities</title>
	<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
</head>
<body>
    
<?php
$id = $_GET[’ID’];

$dbh = new mysqli('localhost', 'cpnv', 'cpnv1234', 'world');

if ($dbh->connect_error) {

    die('Probleme de connexion (' . $dbh->connect_errno . ') '  . $dbh->connect_error);
}

$sql = "SELECT ID, Name, CountryCode, District FROM City WHERE CountryCode = 'CHE' ORDER BY Name";
$result = $dbh->query($sql);

if (!$result OR mysqli_num_rows($res) < 1){
    echo "Il y a un problème";

?>

<form name="formulaire" method="get">
	<p>ID</p>
	<input name="ID" type="text" value="" size="16"/>
	<p>Name</p>
	
	<p>CountryCode</p>
	
	<p>District</p>
	
</form>

</body>
</html>
