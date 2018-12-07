<?php
$dbLink = mysqli_connect('mysql-nuitinfo2018.alwaysdata.net', '172819', '1234')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , 'nuitinfo2018_bd')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
?>