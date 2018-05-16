<?php

	$x = $_GET["num1"];
	$y = $_GET["num2"];
	$op = $_GET["operacao"];

	switch ($op) {
		case 'soma':
			echo "O valor da soma é: ".Soma($x,$y);
			break;
		case 'subtracao':
			echo "O valor da subtração é: ".Subtracao($x,$y);
			break;
		case 'multiplicacao':
			echo "O valor da multiplicação é: ".Multiplica($x,$y);
			break;
		case 'divisao':
			echo "O valor da divisão é: ".Divide($x,$y);
			break;
		
		default:
			echo "Operação não definida!";
			break;
	}


	function Soma($valor1,$valor2){
		$soma = $valor1 + $valor2;
		return $soma;
	}

	function Subtracao($valor1,$valor2){
		$subtracao = $valor1 - $valor2;
		return $subtracao;
	}

	function Multiplica($valor1,$valor2){
		$multiplicacao = $valor1 * $valor2;
		return $multiplicacao;
	}

	function Divide($valor1,$valor2){
		$divisao = $valor1 / $valor2;
		return $divisao;
	}



?>