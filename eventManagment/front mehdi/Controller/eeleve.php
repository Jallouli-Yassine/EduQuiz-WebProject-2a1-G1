<?php 

include '../Config.php';
include_once '../Model/eleve.php';
class eleveC 
 {
    public function afficheralbum()
{
    $N=1;
    $sql="SELECT * FROM adherent where genre =:idgenre";
    $db=config::getConnexion(); 
   

    try{
        $req = $db->prepare($sql);
        $req->bindValue(':idgenre',$N);
        $req->execute();
        return $req->fetchAll();
    }
    catch (Exception $e){
        die('Erreur:'.$e->getMessage());
    }
 }
 function ajoutereleve($Ad)
 {
   $sql="INSERT INTO elevee (name,email,event) values (:name,:email,:event)";
   $db=config::getConnexion();
   $req=$db->prepare($sql);
   
   try{
     $req->bindValue(':name',$Ad->getName());
     $req->bindValue(':email',$Ad->getemail());
     $req->bindValue(':event',$Ad->getevent());
     $req->execute();
   }
 catch (Exception $e){
     die('Erreur:'.$e->getMessage());
 }
 }
 function ModifierAdherent($A,$idevent){

  $sql="UPDATE event2  SET nameevent=:nameevent,email=:Prenom,subject=:subject,date=:DateInscription,time=:time,numberparticipate=:DateInscription2,image=:image  WHERE idevent=:NumAdherent";
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
function SupprimerAdherent($Idevent)
{
  $sql="DELETE FROM event2 WHERE Idevent=:Idevent";
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
 }
?>
  