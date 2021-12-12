<?php 

include '../Config.php';
include_once '../Model/Adherent.php';
include_once '../Model/eleve.php';
class AdherentC 
 {

  function afficherLienJeux() {
    $sql = "SELECT lien_jeu FROM jeux";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch(Exception $e){
    $e->getMessage();
    }
  }

  function afficheradherents()
  {
    $sql="SELECT *  FROM event";
    $db=config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur:'.$e->getMessage());
    }
  }

  function afficheradherents2()
  {
    $sql="SELECT *  FROM event2";
    $db=config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur:'.$e->getMessage());
    }
  }
  function afficheradherents3()
  {
    $sql="SELECT *  FROM elevee";
    $db=config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur:'.$e->getMessage());
    }
  }
  function SupprimerAdherent($Idevent)
  {
    $sql="DELETE FROM event WHERE Idevent=:Idevent";
    $db=config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':Idevent',$Idevent);
    try{
        $req->execute();
    }
    catch (Exception $e){
        die('Erreur:'.$e->getMessage());
    }
  }

  function ajouterAdherent($Ad)
  {
    $sql="INSERT INTO event (nameevent,email,subject,date,time,numberparticipate,image,lienJeu) values (:nameevent,:email,:subject,:date,:time,:numberparticipate,:image,:lienJeu)";
    $db=config::getConnexion();
    $req=$db->prepare($sql);
    
    try{
      $req->bindValue(':nameevent',$Ad->getnameevent());
      $req->bindValue(':email',$Ad->getemail());
      $req->bindValue(':subject',$Ad->getsubject());
      $req->bindValue(':date',$Ad->getdate());
      $req->bindValue(':time',$Ad->gettime());
      $req->bindValue(':numberparticipate',$Ad->getnumberparticipate());
      $req->bindValue(':image',$Ad->getimage());
      $req->bindValue(':lienJeu',$Ad->getlienJeu());
      $req->execute();
    }
  catch (Exception $e){
      die('Erreur:'.$e->getMessage());
  }
  }
 function ModifierAdherent($A,$idevent){

    $sql="UPDATE event  SET nameevent=:nameevent,email=:Prenom,subject=:subject,date=:DateInscription,time=:time,numberparticipate=:DateInscription2,image=:image  WHERE idevent=:NumAdherent";
    $db=config::getConnexion();
    $req=$db->prepare($sql);
    try{
      $req->bindValue(':NumAdherent',$idevent);
      $req->bindValue(':nameevent',$A->getnameevent());
      $req->bindValue(':Prenom',$A->getemail());
      $req->bindValue(':subject',$A->getsubject());
      $req->bindValue(':DateInscription',$A->getdate());
      $req->bindValue(':time',$A->gettime());
      $req->bindValue(':DateInscription2',$A->getnumberparticipate());
      $req->bindValue(':image',$A->getimage());
      $req->execute();
      
      
  } 
  catch(PDOException $e){
      $e->getMessage();
  }
}

  }


?>
  