<?php
include "convertir.php";
include "imprimir.php";


$producto=($_POST["producto"]);
$convertir=($_POST["moneda"]);
$tv=0;
$pc=1;
$lap=2;
$pho=3;
switch ($producto) {
	case 'tv':
		$convertidor = new Convertidor($convertir, $tv);
		$resultado = $convertidor->Calcular();
				$impresora = new Impresora($resultado);
				$impresora->Imprimir();
		break;

	case 'pc':
		$convertidor = new Convertidor($convertir, $pc);
		$resultado = $convertidor->Calcular();
				$impresora = new Impresora($resultado);
				$impresora->Imprimir();
		break;

	case 'lap':
		$convertidor = new Convertidor($convertir, $lap);
		$resultado = $convertidor->Calcular(); 
				$impresora = new Impresora($resultado);
				$impresora->Imprimir();
		
		break;

	case 'pho':
		$convertidor = new Convertidor($convertir, $pho);
		$resultado = $convertidor->Calcular();
				$impresora = new Impresora($resultado);
				$impresora->Imprimir();
		
		break;
		
}
?>
