<?php


class Persona{
  public $dni;
  public $nombre; 
  public $clave;
  public $telef;

	public function __construct($dni, $nombre, $clave, $telef) {

		$this->dni = $dni;
		$this->nombre = $nombre;
		$this->clave = $clave;
		$this->telef = $telef;
	}

	public function getDni() {
		return $this->dni;
	}

	public function setDni($value) {
		$this->dni = $value;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getClave() {
		return $this->clave;
	}

	public function setClave($value) {
		$this->clave = $value;
	}

	public function getTelef() {
		return $this->telef;
	}

	public function setTelef($value) {
		$this->telef = $value;
	}
}