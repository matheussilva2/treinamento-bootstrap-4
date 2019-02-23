<?php
class Carro{
	public function __construct($placa){
		$this->placa = $placa;
	}

	function getPlaca(){
		return $this->placa;
	}
	function setPlaca($placa){
		$this->placa = $placa;
	}
}
$c = new Carro('ABC0044');
echo($c.getPlaca());
?>