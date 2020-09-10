<?php
class Weight
{
    private $_Id_weight;
    private $_Weight;
    private $_Date;
    private $_Id_snake;

    public function __construct($Id_weight, $Weight, $Date, $Id_snake)
    {
        $this->_Id_snake = $Id_snake;
        $this->_Weight = $Weight;
        $this->_Date = $Date;
        $this->_Id_snake = $Id_weight;
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



    public function get_Id_snake()
    {
        return $this->_Id_snake;
    }


    public function get_Date()
    {
        return $this->_Date;
    }
}
