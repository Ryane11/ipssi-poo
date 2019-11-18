<?php

	namespace Ipssi\Evaluation;
	class Stars extends Form
	{
		public function __construct(Object $Object, $size, $x, $y)
		{
			parent::__construct($Object, $size, $x, $y);
		}
		public function __toString()
		{
			return "Stars : Color:".$this->getColor()."  size:".$this->getSize()." Postition X,Y:".$this->getX().",".$this->getY();
		}

	}
?>	