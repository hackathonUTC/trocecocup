
<?php


$mysqli = new mysqli("127.0.0.1", "root", '', "swift");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
