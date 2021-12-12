<?php 
class Post {

    private $Idpost=null;
    private $Iduser=null;
    private $nameuser=null;
    private $content=null;
    private $title=null;
    private $date=null;
    private $imageurl=null;
    


    function __construct($Idpost,$Iduser,$nameuser,$content,$title,$date,$imageurl){
        $this->Idpost=$Idpost;
        $this->Iduser=$Iduser;
        $this->nameuser=$nameuser;
        $this->content=$content;
        $this->title=$title;
        $this->date=$date;
        $this->imageurl=$imageurl;  
    }

    //GETTERS
    function getIdpost(){
        return $this->Idpost;
    }
    function getIduser(){
        return $this->Iduser;
    }
    function getnameuser(){
        return $this->nameuser;
    }
    function getcontent(){
        return $this->content;
    }
    function gettitle(){
        return $this->title;
    }
    function getdate(){
        return $this->date;
    }
    function getimageurl(){
        return $this->imageurl;
    }


    //SETTERS
    function setIdpost(string $Idpost){
        $this->Idpost=$Idpost;
    }
    function setIduser(string $Iduser){
        $this->Iduser=$Iduser;
    }
    function setnameuser(string $nameuser){
        $this->nameuser=$nameuser;
    }
    function setcontent(string $content){
        $this->content=$content;
    }
    function settitle(string $title){
        $this->title=$title;
    }
    function setdate(string $date){
        $this->date=$date;
    }
    function setimageurl(string $imageurl){
        $this->imageurl=$imageurl;
    }
}

?>