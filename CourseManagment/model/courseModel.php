<?php 
class Course {

    private $etat=null;
    private $courseID=null;
    private $profID=null;
    private $categorie=null;
    private $title=null;
    private $price=null;
    private $description=null;
    private $video_url=null;
    private $picture_url=null;


    function __construct($profID,$categorie,$title,$price,$description,$video_url,$picture_url,$etat){
        $this->profID=$profID;
        $this->categorie=$categorie;
        $this->title=$title;
        $this->price=$price;
        $this->description=$description;
        $this->video_url=$video_url;
        $this->picture_url=$picture_url;  
        $this->etat=$etat;
    }

    //GETTERS
    function getEtat(){
        return $this->etat;
    }
    function getCourseID(){
        return $this->courseID;
    }
    function getProfID(){
        return $this->profID;
    }
    function getCategorie(){
        return $this->categorie;
    }
    function getTitle(){
        return $this->title;
    }
    function getPrice(){
        return $this->price;
    }
    function getDescription(){
        return $this->description;
    }
    function getVideo_url(){
        return $this->video_url;
    }
    function getPicture_url(){
        return $this->picture_url;
    }


    //SETTERS
    function setEtat(string $etat){
        $this->etat=$etat;
    }
    function setCourseID(string $courseID){
        $this->courseID=$courseID;
    }
    function setProfID(string $profID){
        $this->profID=$profID;
    }
    function setCategorie(string $categorie){
        $this->categorie=$categorie;
    }
    function setTitle(string $title){
        $this->title=$title;
    }
    function setPrice(string $price){
        $this->price=$price;
    }
    function setDescription(string $description){
        $this->description=$description;
    }
    function setvideo_url(string $video_url){
        $this->video_url=$video_url;
    }
    function setPicture_url(string $picture_url){
        $this->picture_url=$picture_url;
    }
}

?>