<?php 
class Cube extends PaveDroit{

    private $cote;

    function __construct($cote){
        $this->cote = $cote;
        
        parent::__construct($cote, $cote,$cote);
    }

    public function getCote(){
        return $this->cote;
    }

    

    function __toString()
    {
        return parent::__toString() . ", cote =". $this->getCote() .".";
    }


    public function obtenirTypeForme(){
        return 'Cube';
    }

    public function obtenirSuperficie(){
        return round(6 *( $this->cote ** 2), 2);
        
    }
    public function obtenirVolume(){
        return round($this->cote ** 3, 2) ;
    
    }
}
