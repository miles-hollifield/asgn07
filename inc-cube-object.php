<?php
include('inc-rectangle-object.php');

class Cube extends Rectangle
{
  private $z;
  
  public function getZ()
	{
		return $this->z;
	}
	
	public function setZ($z)	
	{
		$this->z = $z;
	}
	
	public function getArea()
	{	
		return (2 * ($x * $y)) + (2 * ($x * $z)) + (2 *($y * $z));
	}
  
  public function getVolume()
  {
    return $x * $y * $z;
  }
}
