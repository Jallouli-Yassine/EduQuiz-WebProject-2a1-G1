<?php 
class User {
    private $ID;
    private $first_Name;
    private $last_Name;
    private $email;
    private $password;
    private $Date_Naissance;
    private $role;


    function __construct($first_Name,$last_Name,$email,$password,$Date_Naissance,$role){
        $this->first_Name=$first_Name;
        $this->last_Name=$last_Name;
        $this->email=$email;
        $this->password=$password;
        $this->Date_Naissance=$Date_Naissance;
        $this->role=$role;

    }

    //GETTERS
    function getID(){
        return $this->ID;
    }
    function getfirst_Name(){
        return $this->first_Name;
    }
    function getlast_Name(){
        return $this->last_Name;
    }
    function getemail(){
        return $this->email;
    }
    function getpass(){
        return $this->password;
    }
    function getDate_Naissance(){
        return $this->Date_Naissance;
    }
    function getrole(){
        return $this->role;
    }

    //SETTERS
    function setID(string $ID){
        $this->ID=$ID;
    }
    function setfirst_Name(string $first_Name){
        $this->first_Name=$first_Name;
    }
    function setlast_Name(string $last_Name){
        $this->last_Name=$last_Name;
    }
    function setemail(string $email){
        $this->email=$email;
    }
    function setpassword(string $password){
        $this->password=$password;
    }
    function setDate_Naissance(string $Date_Naissance){
        $this->Date_Naissance=$Date_Naissance;
    }

}
?>