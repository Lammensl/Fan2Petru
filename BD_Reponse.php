<?php
include Reponse::class;
include Question::class;

    function findReponse(Question $question, $dbLink){
            $queryfindQuestion = 'SELECT Reponse.Texte FROM Question_Reponse JOIN Question ON Reponse.Id_R = Question_Reponse.Id_R WHERE Reponse.Categorie= \'' .$question->getCategorie(). '\' ORDER BY RAND() LIMIT 1';

        if (!($dbResult = mysqli_query($dbLink, $queryfindQuestion))) {
            echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
            echo 'Requête : ' . $queryfindQuestion . '<br/>';
            exit();
        }
        return $dbResult;

}
?>