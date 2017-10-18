<?php


class Cuenta
{

    public $saldo;
		public $nro;

		public function __construct(string $nro) {
			$this->saldo = 0;
			$this->nro = $nro;

		}

		public function extraer(float $montoExtraccion)
		{
			$temp = $this->saldo - $montoExtraccion;
			if($temp >= 0) {
				$this->saldo = $this->saldo - $montoExtraccion;
				echo 'Pudiste extraer el monto: ' . $montoExtraccion;
				echo 'Te quedo en cuenta: ' . $this->saldo;
			} else {
				echo 'Saldo insuficiente';
			}
		}

		public function depositar(float $montoDeposito)
		{
			// Deberia validar que pueda recibir el dinero
			// y que sea todo legal
			if(false) {
					$this->saldo +=$montoDeposito;
			}

		}
	}

	$cuenta1 = new Cuenta(9991);

	$cuenta1->depositar(10000);
	$cuenta1->saldo = 100000000;

	echo $cuenta1->extraer(1000);
?>
