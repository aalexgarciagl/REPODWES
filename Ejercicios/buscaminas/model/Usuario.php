<?php

class Usuario{

  public $idUsuario;
  public $nombre;
  public $password; 
  public $correo;
  public $partidasJugadas;
  public $partidasGanadas;

	public function __construct($idUsuario, $nombre, $password, $correo, $partidasJugadas, $partidasGanadas) {

		$this->idUsuario = $idUsuario;
		$this->nombre = $nombre;
		$this->password = $password;
		$this->correo = $correo;
		$this->partidasJugadas = $partidasJugadas;
		$this->partidasGanadas = $partidasGanadas;
	}

	public function getIdUsuario() {
		return $this->idUsuario;
	}

	public function setIdUsuario($value) {
		$this->idUsuario = $value;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($value) {
		$this->password = $value;
	}

	public function getCorreo() {
		return $this->correo;
	}

	public function setCorreo($value) {
		$this->correo = $value;
	}

	public function getPartidasJugadas() {
		return $this->partidasJugadas;
	}

	public function setPartidasJugadas($value) {
		$this->partidasJugadas = $value;
	}

	public function getPartidasGanadas() {
		return $this->partidasGanadas;
	}

	public function setPartidasGanadas($value) {
		$this->partidasGanadas = $value;
	}
}