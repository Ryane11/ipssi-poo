<?php


namespace Ipssi\Evaluation;

class Document
{


	private $nom;
	private $couleur;
	private $hauteur;
	private $largeur;
	private $content=[];

	/**
	 * Document constructor.
	 *
	 * @param string $nom
	 * @param int $hauteur
	 * @param int $largeur
	 */
	public function __construct($nom, $couleur, $hauteur, $largeur)
	{
		$this->nom = $nom;
		$this->couleur = $couleur;
		$this->hauteur = $hauteur;
		$this->largeur = $largeur;
	}
	public function getnom()
	{
		return $this->nom;
	}
	public function getCouleur()
	{
		return $this->couleur;
	}
	public function getlargeur()
	{
		return $this->largeur;
	}
	public function getHeight()
	{
		return $this->heighauteurht;
	}
	public function addElement($objet)
	{
		$element=array_push($this->content,$objet);
	}
	function getdata(){

		foreach ($this->content as $data){
			$data->__toString();
		}
	}
	public function __toString()
	{
		foreach ($this->content as $data){
			print($data->__toString().PHP_EOL);
		}
		return "Texte : couleur:".$this->couleur->getColor()." Postition Hauteur,:".$this->hauteur."Largeur".$this->Largeur."  nom:".$this->nom;

	}
}
?>