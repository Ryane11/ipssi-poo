<?php

	use Ipssi\Evaluation\Exception\InvalideExceptionze;
	use Ipssi\Evaluation\Exception\InvalideExceptionva;
	
	require_once('vendor/autoload.php');

	$climate = new League\CLImate\CLImate;

	class Diviseur
	{
		public function division(int $index, int $diviseur)
		{
			$valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];
			if($diviseur > sizeof($valeurs)){
				throw new InvalideExceptionva('Erreur de string', "index");
			}
			return $valeurs[$index] / $diviseur;
		}
	}
	do {
		$input = $climate->input("Veillez à rentrer l'entier à Diviser: ");
		$index = $input->prompt();

		$input = $climate->input("Entrez le diviseur : ");
		$diviseur = $input->prompt();

		try {
			if (is_numeric($diviseur)===false || is_numeric($index)===false) {
				throw new InvalideExceptionva('Erreur de string', "index");
			}
			if ($diviseur == 0) {
				throw new InvalideExceptionze("Division par 0", "diviseur");
			}

			$result = (new Diviseur())->division($index, $diviseur);
			$climate->output("RESULT / : " . $result);

		} catch (InvalideExceptionze $e) {
			print ("Erreur:" . $e->getMessage());

		} catch (InvalideExceptionva $e) {
			print ("Erreur:" . $e->getMessage());
		}


} while (isset($result) === false);
?>