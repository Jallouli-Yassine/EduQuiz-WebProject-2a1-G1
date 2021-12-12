<?php
  class eleve
  {
      private string $id;
      private string $Name; 
      private string $email;
      private string $event;
    public function __construct (string $Name,string $email,string $event )
    {
     
        $this->Name = $Name;
        $this->email = $email;
        $this->event = $event;
    }

    public function afficher()
    {
        echo '<td>' . $this->id .'</td>';
        echo '<td>' . $this->Name.'</td>';
        echo '<td>' . $this->email.'</td>';
        echo '<td>' . $this->event.'</td>';
    }
  function getid(){return $this->id;}
  function getName(){return $this->Name;}
  function getemail(){return $this->email;}
  function getevent(){return $this->event;}
  function setid(string $id){$this->$id= $id;}
  function setName(string $Name){$this->$Name= $Name;}
  function setemail(string $email){$this->$email= $email;}
  function setevent(string $event){$this->$event= $event;}
  }
?>

