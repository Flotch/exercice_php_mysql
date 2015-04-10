<!DOCTYPE html>

<?php

const DB_SERVER = 'localhost';
const DB_USER   = 'cpnv';
const DB_PWD    = 'cpnv1234';
const DB_NAME   = 'world';

$error_msg = '';

$dbh = @ new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);

if ($dbh->connect_errno) {

    $error_msg = sprintf('Problème de connexion : (%d) %s', $dbh->connect_errno, $dbh->connect_error);

    } else {

    $query = "select * from City where CountryCode = 'CHE'";
    if (!$result = $dbh->query($query)) {
    
        $error_msg = sprintf('Problème lors de la requête : (%d) %s', $dbh->errno, $dbh->error);
        }

$dbh->close();

}

?>

<html>
<head>
	<title>Cities</title>
	<meta charset="utf-8">
</head>
<body>
    
<?php
if ($error_msg) {
?>
        <p>Ooops, il semblerait qu'une erreur se soit produite :</p>
        <p><?= $error_msg ?></p>

<?php
    } else {
?>
        <table border='1px solid black'>
          <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Code du pays</th>
            <th>Canton</th>
            <th>Population</th>
          </tr>
<?php
        while ($country = $result->fetch_assoc()) {
?>
           <tr>
             <td><?= $country['ID'] ?></td>
             <td><?= $country['Name'] ?></td>
             <td><?= $country['CountryCode'] ?></td>
             <td><?= $country['District'] ?></td>
             <td><?= $country['Population'] ?></td>
           </tr>
<?php
}
}
?>
<?php
    {
    $nbr = $result->num_rows;
    echo "Il y a $nbr ligne(s)";
}
?>

</body>
</html>
