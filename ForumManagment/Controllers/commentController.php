<?php 
    require_once "./../config.php";
    require_once "./../model/modelComment.php";

    class CommentC{

        function ajouterComment($comment){
            $sql = "INSERT INTO post(Idcomment,Iduser,nameuser,content,date,Idpost)
            VALUES(:Idcomment,:Iduser,:nameuser,:content,:date,:Idpost)";

            $db = config::getConnexion();
            try {
                
                $query = $db->prepare($sql);
                
                $query->execute([
                    'Idcomment' => $post->getIdpost(),
                    'Iduser' => $post->getIduser(),
                    'nameuser' => $post->getnameuser(),
                    'content' => $post->getcontent(),
                    'date' => $post->getdate(),
                    'Idcomment' => $post->getIdcomment(),
                ]);

            } catch(Exception $e){
				$e->getMessage();
			}
        }

        function affichercomment(){
			$sql="SELECT * FROM comment";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


        function supprimercomment($comment){
			$sql="DELETE FROM comment WHERE comment=:comment";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':comment', $comment);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


        function modifiercomment($comment, $idcomment){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE comment SET 
						nameuser= :nameuser, 
						content= :content, 
						date= :date,
					WHERE Idcomment= :Idcomment'
				);
				$query->execute([
					'nameuser' => $comment->getnameuser(),
					'content' => $comment->getcontent(),
					'date' => $comment->getdate(),
					'Idcomment' => $idcommennt
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

    }
    
?>