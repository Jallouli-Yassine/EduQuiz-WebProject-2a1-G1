<?php

class formulaire
{
    private $id;
    private $image;
    private $numcorrect;
    private $question;
    private $rep1;
    private $rep2;
    private $rep3;
    private $rep4;
    private $score;
    private $titre;
    private $idCourse;
    
    
    public function __construct($idCourse,$titre,$score,$question,$rep1,$rep2,$rep3,$rep4,$numcorrect,$image)
    {   
        $this->image = $image;
        $this->numcorrect = $numcorrect;
        $this->question = $question;
        $this->rep1 = $rep1;
        $this ->rep2 = $rep2;
        $this ->rep3 = $rep3;
        $this ->rep4 = $rep4;
        $this ->score = $score;
        $this ->titre = $titre;
        $this ->idCourse = $idCourse;
    }
    
    public function getCourseID() //getters (accesseurs) permettent de renvoyer la valeur
    {
        return $this->idCourse;
    }
    
    public function getId() //getters (accesseurs) permettent de renvoyer la valeur
    {
        return $this->id;
    }
    
    public function setId($id) //setters(mutateurs) permettent de modifier une valeur
    {
        $this->id = $id;
    }
    
    public function getimage()
    {
        return $this->image;
    }
    
    public function setimage($image)
    {
        $this->image = $image;
    }

    public function getnumcorrect()
    {
        return $this->numcorrect;
    }

    public function setnumcorrect($numcorrect)
    {
        $this->numcorrect = $numcorrect;
    }

    public function getquestion()
    {
        return $this->question;
    }

    public function setquestion($question)
    {
        $this->question = $question;
    }
  
    public function getrep1()
    {
        return $this->rep1;
    }
    public function setrep1($rep1)
    {
        $this->rep1 = $rep1;
    }

    public function getrep2()
    {
        return $this->rep2;
    }
    public function setrep2($rep2)
    {
        $this->rep2 = $rep2;
    }

    public function getrep3()
    {
        return $this->rep3;
    }
    public function setrep3($rep3)
    {
        $this->rep3 = $rep3;
    }
    public function getrep4()
    {
        return $this->rep4;
    }
    public function setrep4($rep4)
    {
        $this->rep4 = $rep4;
    }
    public function getscore()
    {
        return $this->score;
    }
    public function setscore($score)
    {
        $this->score = $score;
    }
    public function gettitre()
    {
        return $this->titre;
    }
    public function settitre($titre)
    {
        $this->titre = $titre;
    }

}
?>