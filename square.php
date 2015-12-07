<?php

require_once "rectangle.php";

class Square extends Rectangle
{
	public function __construct($squareHeight){
		$this->height=$squareHeight;
		$this->width=$squareHeight;
	}
}

