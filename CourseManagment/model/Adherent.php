<?php
  class Adherent
  {
    private string $idevent;
      private string $nameevent;
      private string $email;
      private string $subject;
      private string $date;
      private string $time;
      private  $numberparticipate;
      private string $image;
    public function __construct ( string $nameevent,string $email,string $subject,string $date,string $time, $numberparticipate,string $image )
    {
       
        $this->nameevent = $nameevent;
        $this->email= $email;
        $this->subject = $subject;
        $this->date= $date;
        $this->time= $time;
        $this->numberparticipate= $numberparticipate;
        $this->image= $image;
    }

    public function afficher()
    {
      
        echo '<td>' . $this->nameevent .'</td>';
        echo '<td>' . $this->email .'</td>';
        echo '<td>' . $this->subject .'</td>';
        echo '<td>' . $this->date .'</td>';
        echo '<td>' . $this->time .'</td>';
        echo '<td>' . $this->numberparticipate .'</td>';
        echo '<td>' . $this->image .'</td>';
    }
  function getidevent(){return $this->idevent;}
  function getnameevent(){return $this->nameevent;}
  function getemail(){return $this->email;}
  function getsubject(){return $this->subject;}
  function getdate(){return $this->date;}
  function gettime(){return $this->time;}
  function getnumberparticipate(){return $this->numberparticipate;}
  function getimage(){return $this->image;}
  function setidevent(string $idevent){$this->$idevent= $idevent;}
  function setnameevent(string $nameevent){$this->$nameevent= $nameevent;}
  function setemail(string $email){$this->$email= $email;}
  function setsubject(string $subject){$this->$subject= $subject;}
  function setdate(string $date){ $this->date= $date;}
  function settime(string $time){ $this->time= $time;}
  function setnumberparticipate(string $numberparticipate){ $this->numberparticipate= $numberparticipate;}
  function setimage(string $image){ $this->image= $image;}
}
?>

