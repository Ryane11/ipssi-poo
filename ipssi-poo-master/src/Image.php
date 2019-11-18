<?php


	namespace Ipssi\Evaluation;


	class Image extends Content
	{

		private $nom;
		private $height;
		private $width;

		/**
		 * Image constructor.
		 *
		 * @param string $nom
		 * @param int $height
		 * @param int $width
		 * @param $x
		 * @param $y
		 */
		public function __construct($nom, $height, $width,$x,$y)
		{
			parent::__construct($x, $y);
			$this->nom = $nom;
			$this->height = $height;
			$this->width = $width;
		}
		public function getnom()
		{
			return $this->nom;
		}
		public function getHeight()
		{
			return $this->height;
		}
		public function getWidth()
		{
			return $this->width;
		}

		public function __toString()
		{
			return "Image Nom:".$this->nom."  Width:".$this->getWidth()."  height:".$this->height;
		}
	}
?>	