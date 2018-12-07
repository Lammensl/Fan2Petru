<?php
include Question::class;

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