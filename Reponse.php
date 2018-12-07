<?php
class Reponse{
    private $Id_R;
    private $Texte;
    private $Categorie;

    /**
     * Reponse constructor.
     * @param $Id_R
     * @param $Texte
     * @param $Categorie
     */
    public function __construct($Id_R, $Texte, $Categorie)
    {
        $this->Id_R = $Id_R;
        $this->Texte = $Texte;
        $this->Categorie = $Categorie;
    }

    /**
     * @return mixed
     */
    public function getIdR()
    {
        return $this->Id_R;
    }

    /**
     * @param mixed $Id_R
     */
    public function setIdR($Id_R)
    {
        $this->Id_R = $Id_R;
    }

    /**
     * @return mixed
     */
    public function getTexte()
    {
        return $this->Texte;
    }

    /**
     * @param mixed $Texte
     */
    public function setTexte($Texte)
    {
        $this->Texte = $Texte;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->Categorie;
    }

    /**
     * @param mixed $Categorie
     */
    public function setCategorie($Categorie)
    {
        $this->Categorie = $Categorie;
    }
}

?>