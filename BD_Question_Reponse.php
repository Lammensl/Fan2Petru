<?php

class BD_Question_Reponse{
    function createQuestionReponse(Question_Reponse $QR, $dbLink)
    {
        $queryCreateQuestionReponse = 'INSERT INTO Question_Reponse (Id_Q, Id_R)
                       VALUE (\'' . $QR->getIdQ() . '\' , \'' . $QR->getIdR() . '\')';

        if (!($dbResult = mysqli_query($dbLink, $queryCreateQuestionReponse))) {
            echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
            echo 'Requête : ' . $queryCreateQuestionReponse . '<br/>';
            exit();
        }
    }
}
?>