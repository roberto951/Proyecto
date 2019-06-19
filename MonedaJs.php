<?php
class Monedas
{
    public $valor;
    public $id;

    function __construct($valor, $id) 
    {
        $this->valor = $valor;
        $this->id = $id;
    
    }
}

?>