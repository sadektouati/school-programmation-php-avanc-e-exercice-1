<?php 
class Cylindre extends Forme{

    private $rayon;
    private $hauteur;

    function __construct($rayon, $hauteur){
        $this->rayon = $rayon;
        $this->hauteur = $hauteur;

        parent::__construct();
    }

    public function getRayon(){
        return $this->rayon;
    }

    public function getHauteur(){
        return $this->hauteur;
    }

    function __toString()
    {
        return  parent::__toString() . ", hauteur =". $this->getHauteur() .", rayon =" . $this->rayon. ".";
    }


    public function obtenirTypeForme(){
        return 'Cylindre';
    }

    public function obtenirSuperficie(){
        return round(2 * pi() * $this->rayon *($this->rayon + $this->hauteur), 2);

    }
    public function obtenirVolume(){
        return round($this->hauteur * pi() * ($this->rayon ** 2), 2) ;
    }


}
