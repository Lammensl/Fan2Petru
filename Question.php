<?php
class Question{
    private $Id_Q;
    private $Texte;
    private $Categorie;

    /**
     * Question constructor.
     * @param $Id_Q
     * @param $Texte
     * @param $Categorie
     */
    public function __construct($Id_Q, $Texte, $Categorie)
    {
        $this->Id_Q = $Id_Q;
        $this->Texte = $Texte;
        $this->Categorie = $Categorie;
    }

    /**
     * @return mixed
     */
    public function getIdQ()
    {
        return $this->Id_Q;
    }

    /**
     * @param mixed $Id_Q
     */
    public function setIdQ($Id_Q)
    {
        $this->Id_Q = $Id_Q;
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