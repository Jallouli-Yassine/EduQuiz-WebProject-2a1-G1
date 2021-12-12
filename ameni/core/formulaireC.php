<?php
require_once 'C:/xampp/htdocs/EduQuiz-WebProject-2a1-G1/ameni/config.php';
require_once "C:/xampp/htdocs/EduQuiz-WebProject-2a1-G1/ameni/entites/formulaire.php";

class formulaireC
{

    function affichageformulaire()
    {

        $sql="select * from formulaire";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    

    function afficherformulaire($id)
    {

        $sql="select * from formulaire where id ='$id'";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
        
    }


    function modifierformulaire($id,$image, $numcorrect, $question, $rep1, $rep2, $rep3, $rep4,$score,$titre)
    {
        $sql="UPDATE formulaire SET  image='$image', numcorrect='$numcorrect', question='$question', rep1='$rep1', rep2='$rep2',rep3='$rep3',rep4='$rep4',score='$score',titre='$titre'  where id='$id'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerformulaire($id){
        $sql="DELETE FROM formulaire where id=:id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function ajouterformulaire($formulaire){

        $titre=$formulaire->gettitre();
        $score=$formulaire->getscore();
        $question=$formulaire->getquestion();
        $formulaire->getquestion(); 
        $rep1=$formulaire->getrep1();
        $rep2=$formulaire->getrep2();
        $rep3=$formulaire->getrep3();
        $rep4=$formulaire->getrep4();
        $numcorrect=$formulaire->getnumcorrect();
        $image=$formulaire->getimage();
        $idCourse=$formulaire->getCourseID();

        $sql="INSERT INTO formulaire (idCourse,Titre,score,question,rep1,rep2,rep3,rep4,numcorrect,image) VALUES ('$idCourse','$titre','$score','$question','$rep1','$rep2','$rep3','$rep4','$numcorrect','$image')";

        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur'.$e->getMessage());
        }
    }


    function getQuiz($idCourse)
    {
      $sql="select * from formulaire WHERE idCourse='$idCourse'  LIMIT 1 ";
      $db= config::getConnexion();
      try
      {
        return $db->query($sql);
      }
      catch (Exception $e)
      {
        echo 'Error: '.$e->getMessage();
      }

    }
    function getNextQuiz($id,$idCourse)
    {
      $sql="select * from formulaire where id >'$id' and idCourse='$idCourse' LIMIT 1";
      $db= config::getConnexion();
      try
      {
          if($db->query($sql))
        return $db->query($sql);
        else header('Location:./finQuiz.php');
      }
      catch (Exception $e)
      {
        echo 'Error: '.$e->getMessage();
      }

    }

    function addScore($userID , $score){
        $db = config::getConnexion();
        $query = $db->prepare("UPDATE usertable SET score= score+'$score' WHERE ID = :ID");
        $query->execute(['ID' => $userID]);
    }


    function corrigeQuiz($numReponseJuste, $numReponseChoisi){
        if ($numReponseJuste===$numReponseChoisi){
            return 1;
        }else{
            return 0;
        }           
    }
      

    
}
?>