<?php 
class PaveDroit extends Forme{

    private $longueur;
    private $largeur;
    private $hauteur;

    function __construct($longueur, $largeur,$hauteur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;

        parent::__construct();
    }

    public function getLongueur(){
        return $this->longueur;
    }

    public function getLargeur(){
        return $this->largeur;
    }

    public function getHauteur(){
        return $this->hauteur;
    }

    function __toString()
    {
        return parent::__toString() . ", largeur =". $this->getLargeur() .", hauteur =". $this->getHauteur() . ".";
    }


    public function obtenirTypeForme(){
        return 'Pavé droit';
    }

    public function obtenirSuperficie(){
        return round(2 *( $this->longueur * $this->largeur + $this->longueur  * $this->hauteur * $this->largeur) , 2);
        
    }
    public function obtenirVolume(){
        return round($this->hauteur * $this->longueur * $this->largeur, 2) ;
    
    }


}
