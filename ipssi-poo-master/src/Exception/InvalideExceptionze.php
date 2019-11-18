<?php

	namespace Ipssi\Evaluation\Exception;

	class InvalideExceptionze extends \Exception
	{
		private $Invalidedata;
		private $propriete;

		public function __construct($Invalidedata, string $propriete)
		{
			$this->propriete = $propriete;

			$this->Invalidedata = $Invalidedata;

			$this->message = "InvalideExceptionze " . $this->propriete;
		}

		public function getInvalidedata()
		{
			return $this->Invalidedata;
		}

		public function getpropriete(): string
		{
			return $this->propriete;
		}


	}
?>