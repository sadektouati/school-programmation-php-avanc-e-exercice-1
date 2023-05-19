<?php

class Sphere extends Forme{

    private $rayon;

    function __construct($rayon)
    {
        $this->rayon = $rayon;
        parent::__construct();

    }

    public function getRayon(){
        return $this->rayon;
    }

    function __toString()
    {
        return  parent::__toString() . ", rayon =" . $this->rayon. ".";
    }

    public function obtenirTypeForme(){
        return 'Sphère';
    }

    public function obtenirSuperficie(){
        return round(4 * pi() * ($this->rayon ** 2), 2);
    }
    public function obtenirVolume(){
        return round(4 / 3 * pi() * ($this->rayon ** 3), 2) ;
    }


}
