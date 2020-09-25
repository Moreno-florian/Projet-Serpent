<?php
class Weight
{
    private $_Id_weight;
    private $_Weight;
    private $_Date;
    private $_Id_serpent;

    public function __construct($Id_weight, $Weight, $Date, $Id_serpent)
    {
        $this->_Id_weight = $Id_weight;
        $this->_Weight = $Weight;
        $this->_Date = $Date;
        $this->_Id_serpent = $Id_serpent;
    }

    /*****************************ACCESSEURS*************************/



    public function get_Id_weight()
    {
        return $this->_Id_weight;
    }


    public function get_Weight()
    {
        return $this->_Weight;
    }

    public function get_Date()
    {
        return $this->_Date;
    }

    public function get_Id_serpent()
    {
        return $this->_Id_serpent;
    }
}
