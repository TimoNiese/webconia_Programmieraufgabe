//Author: Timo Niese
//Datum: 29.10.2021
//Version: 1.0

#Anbindung an die Datenbank.
<?php
$con = new MySQLi("localhost", "root", "", "anmeldeformular");
if  ($con->connect_error) {
    echo "Fehler bei der Verbindung: " . mysqli_connect_error();
    exit();
}
?>
