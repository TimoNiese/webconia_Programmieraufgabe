//Author: Timo Niese
//Datum: 29.10.2021
//Version: 1.0

<?php

#Übermittlung der Daten an die Datenbank.
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];
$firma = $_POST['firma'];

require 'verbindung.php';

$sql = "INSERT INTO anmeldeformular (vorname, nachname, email, firma) 
VALUES ('$vorname', '$nachname', '$email', '$firma')";

$ergebnis = $con->query ($sql)
    or die("Fehler bei der Datenbankabfrage.");

echo "Vielen Dank für die Anmeldung, wir freuen uns Sie auf der webconia Technology Conference zu treffen.";

mysqli_close($con);

?>
