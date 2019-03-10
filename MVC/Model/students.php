<?php 
class Student {
	private $ra;
	private $name;

	public function __construct($rA, $name) {
		$this->ra = $rA;
		$this->name = $name;
	}

	public function  __set($atrib, $value)
	{
		$this->$atrib = $value;
	}

	public function  __get($atrib)
	{
		return $this->$atrib;
	}
}
?>