<?php
class Question_Reponse{
    private $Id_Q;
    private $Id_R;

    /**
     * Question_Reponse constructor.
     * @param $Id_Q
     * @param $Id_R
     */
    public function __construct($Id_Q, $Id_R)
    {
        $this->Id_Q = $Id_Q;
        $this->Id_R = $Id_R;
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




}