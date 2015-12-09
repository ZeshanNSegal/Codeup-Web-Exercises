<?php

class Rectangle
{
	private $height;
	private $width;

	public function __construct($height, $width)
	{
		$this->setHeight($height);
		$this->setWidth($width);
	}

	protected function setHeight($height)
	{
		$this->height=(is_numeric(trim($height)) ? $height = 0;
	}

	protected function setWidth($width)
	{
		$this->width=(is_numeric(trim($width)) ? $width = 0;
	}

	public function getArea()
	{
		return $this->height * $this->width;
	}

	public function getPerimeter()
	{
		 return $this->height * 2 + $this->width * 2; 	 
	}
}

