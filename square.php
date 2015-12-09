<?php

require_once "rectangle.php";

class Square extends Rectangle
{
	public function __construct($height)
	{
		// $this->setHeight($squareHeight);
		// $this->setWidth($squareHeight);
		parent:: __construct($height, $height)
	}
}

