<?php 
class Comment {

    private $Idcomment=null;
    private $Iduser=null;
    private $nameuser=null;
    private $content=null;
    private $date=null;
    private $Idpost=null;
    


    function __construct($Idcomment,$Iduser,$nameuser,$content,$date,$Idpost){
        $this->Idcomment=$Idcomment;
        $this->Iduser=$Iduser;
        $this->nameuser=$nameuser;
        $this->content=$content;
        $this->date=$date;
        $this->Idpost=$Idpost;  
    }

    //GETTERS
    function getIdcomment(){
        return $this->Idcomment;
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
    function getdate(){
        return $this->date;
    }
    function getIdpost(){
        return $this->Idpost;
    }


    //SETTERS
    function setIdcomment(string $Idcomment){
        $this->Idcomment=$Idcomment;
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
    function setdate(string $date){
        $this->date=$date;
    }
    function setIdpost(string $Idpost){
        $this->Idpost=$Idpost;
    }
}

?>