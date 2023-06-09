<?php

class Realisateur extends Personne
{
    private array $_films;

//Constructeur pour définir un Réalisateur//
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->_films = [];
    }


///////////////////////////////////////////////////////////
//Méthode pour ajouter un film à un réalisateur
    public function addFilm(Film $film)
    {
        $this->_films[] = $film;
    }

//Méthode pour afficher la filmographie d'un réalisateur//
public function FilmographieRealisateur()
{
    $result = "<p>************************</p>";
    $result .= "<p>". $this->getNom() . " " . $this->getPrenom() . " a réalisé :</p>";
    foreach($this->_films as $film)
    {
        $result .= $film->getTitre() . "<br>";
    }
    return $result;
}
}

?>