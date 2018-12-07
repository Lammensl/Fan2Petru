<?php
include Question::class;

$dbLink = mysqli_connect('mysql-nuitinfo2018.alwaysdata.net', '172819', '1234')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , 'nuitinfo2018_bd')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

function CreerQuestion(Question $question, $dbLink){
    $queryCreateQuestion = 'INSERT INTO Question (Id_Q, Texte, Categorie)
                       VALUE (\'' . $question->getIdQ() . '\' , \'' . $question->getTexte() . '\', \'' .$question->getCategorie(). '\')';

    if (!($dbResult = mysqli_query($dbLink, $queryCreateQuestion))) {
        echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
        echo 'Requête : ' . $queryCreateQuestion . '<br/>';
        exit();
    }
}
?>