<?php

	namespace Ipssi\Evaluation;
	class Object extends Form
	{
		public function __toString()
		{
			return "Object : Color:".$this->getColor()."  size:".$this->getSize()."  Postition X,Y:".$this->getX().",".$this->getY();
		}
		public function __construct(Color $color, $size, $x, $y)
		{
			parent::__construct($color, $size, $x, $y);
		}
	}
?>	