<?php

	namespace Ipssi\Evaluation;
	class Text extends Content
	{
		private $couleur;
		private $size;
		private $font;
		private $content;

		public function __construct($x, $y, $couleur,$size,$font ,$content)
		{
			$this->Color = $couleur;
			$this->content=$content;
			$this->size = $size;
			$this->font = $font;
			parent::__construct($x, $y);
		}

		public function __toString()
		{
			return "Texte : couleur:".$this->couleur."  size:".$this->size."  font:".$this->font."  Postition X,Y:".$this->getX().",".$this->getY()."  Content:".$this->content;
		}
	}
?>