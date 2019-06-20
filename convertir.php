<?php
	require_once('ProductoJs.php');
	require_once('MonedaJs.php');

	class Convertidor
	{
		public $convertir;
		public $monto;
		public function __construct($convertir,$monto){
			$this->Convertir = $convertir;
			$this->Monto = $monto;
		}

		function Calcular()
		{
			
				$arrayCosto= array();
	 
				$costo = json_decode(file_get_contents('Js/precios.json'));
				foreach ($costo as $key => $value)
				 {
					array_push($arrayCosto, new Producto($value->valor, $value->id));
				}

				$arrayproducto= array();
	 
				$Producto = json_decode(file_get_contents('Js/PrecioProductos.json'));
				foreach ($Producto as $key => $value)
				 {
					array_push($arrayproducto, new Monedas($value->costo, $value->id));
				}
				

			$respuesta= $arrayCosto[$this->Convertir]->valor * $arrayproducto[$this->Monto]->valor;
			return $respuesta;
			

		}	
	}	
?>
