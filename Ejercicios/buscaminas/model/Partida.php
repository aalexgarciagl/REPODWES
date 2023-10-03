<?php 

class Partida{

  public $idPartida;
  public $idPersona;
  public $tablaOculta; 
  public $tablaJugador; 
  public $finalizda;  


	public function __construct($idPartida, $idPersona, $tablaOculta, $tablaJugador, $finalizda) {

		$this->idPartida = $idPartida;
		$this->idPersona = $idPersona;
		$this->tablaOculta = $tablaOculta;
		$this->tablaJugador = $tablaJugador;
		$this->finalizda = $finalizda;
	}

	public function getIdPartida() {
		return $this->idPartida;
	}

	public function setIdPartida($value) {
		$this->idPartida = $value;
	}

	public function getIdPersona() {
		return $this->idPersona;
	}

	public function setIdPersona($value) {
		$this->idPersona = $value;
	}

	public function getTablaOculta() {
		return $this->tablaOculta;
	}

	public function setTablaOculta($value) {
		$this->tablaOculta = $value;
	}

	public function getTablaJugador() {
		return $this->tablaJugador;
	}

	public function setTablaJugador($value) {
		$this->tablaJugador = $value;
	}

	public function getFinalizda() {
		return $this->finalizda;
	}

	public function setFinalizda($value) {
		$this->finalizda = $value;
	}
}