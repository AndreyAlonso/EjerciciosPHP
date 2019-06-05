<?php
class Persona
{
	private $nombre;
	private $edad;

	function __construct($edad, $nomb)
	{
		$this->edad= $edad;
		$this->nombre = $nomb;
	}

	public function dameNombre()
	{
		return $this->nombre;
	}
	public function dameEdad()
	{
		
		return $this->edad;
	}

}

?>