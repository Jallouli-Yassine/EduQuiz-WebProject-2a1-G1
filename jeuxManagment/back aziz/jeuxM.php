<?php 
class jeux {
    private $nom_jeu;
    private $lien_jeu;
    private $prop_jeu;
    private $age_jeu;
    private $date_jeu;
    private $img_jeu;
    private $mode_jeu;

    function __construct($nom_jeu,$lien_jeu,$prop_jeu,$age_jeu,$date_jeu,$img_jeu,$mode_jeu){
        $this->nom_jeu=$nom_jeu;
        $this->lien_jeu=$lien_jeu;
        $this->prop_jeu=$prop_jeu;
        $this->age_jeu=$age_jeu;
        $this->date_jeu=$date_jeu;
        $this->img_jeu=$img_jeu;
        $this->mode_jeu=$mode_jeu;
    }
   

    //GETTERS
    function getnom_jeu(){
        return $this->nom_jeu;
    }
    function getlien_jeu(){
        return $this->lien_jeu;
    }
    function getprop_jeu(){
        return $this->prop_jeu;
    }
    function getage_jeu(){
        return $this->age_jeu;
    }
    function getdate_jeu(){
        return $this->date_jeu;
    }
    function getimg_jeu(){
        return $this->img_jeu;
    }
    function getmode_jeu(){
        return $this->mode_jeu;
    }

    //SETTERS
    function setnom_jeu(string $nom_jeu){
        $this->nom_jeu=$nom_jeu;
    }
    function setlien_jeu(string $lien_jeu){
        $this->lien_jeu=$lien_jeu;
    }
    function setprop_jeu(string $prop_jeu){
        $this->prop_jeu=$prop_jeu;
    }
    function setage_jeu(string $age_jeu){
        $this->age_jeu=$age_jeu;
    }
    function setdate_jeu(string $date_jeu){
        $this->date_jeu=$date_jeu;
    }
    function setimg_jeu(string $img_jeu){
        $this->img_jeu=$img_jeu;
    }
    function setmode_jeu(string $mode_jeu){
        $this->mode_jeu=$mode_jeu;
    }

}
?>