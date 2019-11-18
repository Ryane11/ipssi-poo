<?php


	namespace Ipssi\Evaluation;

	abstract class Form  extends Content
	{
		private $Object;
		private $size;
		public function __construct(Object $Object, $size,$x,$y)
		{
			parent::__construct($x, $y);
			$this->Object = $Object;
			$this->size = $size;
		}
		public function getSize()
		{
			return "$this->size";
		}
		public function getObject()
		{
			return "Couleur: R".$this->Object->getR()." G:".$this->Object->getG()." B:".$this->Object->getB();
		}

	}
?>	