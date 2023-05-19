<?php

abstract class Forme{
    private static $nbFormes = 0;
    private $id;

    function __construct()
    {
        $this->id = ++Forme::$nbFormes;
    }

    protected static function getNbFormes(){
        return self::$nbFormes;
    }

    public function getId(){
        return $this->id;
    }

    public function comparerAvec($f){
        $sommeInstance = $this->obtenirSuperficie() + $this->obtenirVolume();

        $sommeAComparer = $f->obtenirSuperficie() + $f->obtenirVolume();

        return $sommeInstance - $sommeAComparer;


    }

    public function __toString(){
        return $this->obtenirTypeForme().", id =" . $this->getId() . ", superficie =" . $this->obtenirSuperficie(). ", volume =". $this->obtenirVolume();
    }

    //Pour obtenirTypeForme(), je voulais utiliser  get_called_class() mais hanane m'a attiré l'attention au fait que les nom de classe doit ne pas contenir des accents ou espace, donc on "hard code" le type de forme..
    public abstract function obtenirTypeForme();
    public abstract function obtenirSuperficie();
    public abstract function obtenirVolume();

}