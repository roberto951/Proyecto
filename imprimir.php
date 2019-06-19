<?php
 class Impresora
{
    public $mostrar;
    public function __construct($mostrar){
      $this->Mostrar = $mostrar;
    }
    public function Imprimir()
    {
      echo $this->Mostrar;
    }

}
    


?>
