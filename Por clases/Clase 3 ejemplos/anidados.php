<?php

$miAuto = [
	"Color" => "Rojo",
	"Marca" => "Ford",
	"Puertas" => [
		"Delanteras" => 2,
		"Traseras" => 2,
		"Maletero" => 1,
	]
];



foreach( $miAuto as $prop => $valor ){
		if( is_array($valor) ){
      echo "<br>Las $prop:";
			foreach( $valor as $inside => $value ){
				echo "<br>Las ".$inside." son: ".$value;
			}
    }else{
      echo "<br>La propiedad ".$prop." es:". $valor;
    }
}
?>
