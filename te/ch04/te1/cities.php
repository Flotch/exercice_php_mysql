<!DOCTYPE html>
<html>
<head>
	<title>Cities</title>
	<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
</head>
<body>

<table border="solid">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country Code</th>
        <th>District</th>
        <th>Lien edit</th>
   </tr>
<?php
$dbh = new mysqli('localhost', 'cpnv', 'cpnv1234', 'world');

if ($dbh->connect_error) {

    die('Probleme de connexion (' . $dbh->connect_errno . ') '  . $dbh->connect_error);
}
$sql = "SELECT ID, Name, CountryCode, District FROM City WHERE CountryCode = 'CHE' ORDER BY Name";
$result = $dbh->query($sql);

if (!$result OR mysqli_num_rows($res) < 1){
    echo "Il y a un problème";
}


while($row = $result->fetch_array()){
    echo '<tr>';
    echo '<td>';
    echo $row['ID'];
    echo '</td>';
    echo '<td>';
	echo $row['Name'];
    echo '</td>';
    echo '<td>';
	echo $row['CountryCode'];
    echo '</td>';
    echo '<td>';
	echo $row['District'];
    echo '</td>';
    echo '<td>';
    echo '<a href="edit.php?ID=' . $row['ID'] . '">Modifier</a>';
    echo '</td>';
    echo '</tr>';

}

echo '</table>';

if ($result = $dbh->query($sql)) {
    $nbr = $result->num_rows;
    echo "Il y a $nbr ligne(s)";
}

$result->close();
$dbh->close();
?>


</body>
</html>
