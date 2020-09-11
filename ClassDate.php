<?php
class Date
{
    private $_Id_dateRepas;
    private $_DateRepas;
    private $_Type;
    private $_Id_serpent;

    public function __construct($Id_dateRepas, $DateRepas, $Type, $Id_serpent)
    {
        $this->_Id_dateRepas = $Id_dateRepas;
        $this->_DateRepas = $DateRepas;
        $this->_Type = $Type;
        $this->_Id_serpent = $Id_serpent;
    }
    /*******************************************************************ACCESSEURS****************************************************************************/

    public function get_Id_dateRepas()
    {
        return $this->_Id_dateRepas;
    }


    public function get_DateRepas()
    {
        return $this->_DateRepas;
    }

    public function get_Type()
    {
        return $this->_Type;
    }

    public function get_Id_serpent()
    {
        return $this->_Id_serpent;
    }
}
