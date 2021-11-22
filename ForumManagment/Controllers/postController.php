<?php 
    require_once "./../config.php";
    require_once "./../model/modelPost.php";

    class PostC{

        function ajouterPost($post){
            $sql = "INSERT INTO post(Idpost,Iduser,nameuser,content,title,date,imageurl)
            VALUES(:Idpost,:Iduser,:nameuser,:content,:title,:date,:imageurl)";

            $db = config::getConnexion();
            try {
                
                $query = $db->prepare($sql);
                
                $query->execute([
                    'Idpost' => $post->getIdpost(),
                    'Iduser' => $post->getIduser(),
                    'nameuser' => $post->getnameuser(),
                    'content' => $post->getcontent(),
                    'title' => $post->gettitle(),
                    'date' => $post->getdate(),
                    'imageurl' => $post->getimageurl(),
                ]);

            } catch(Exception $e){   
				$e->getMessage();
			}
        }

        function afficherpost(){
			$sql="SELECT * FROM post";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function afficherpostByid($idpost){
			$sql="SELECT * FROM post WHERE idpost =.$idpost";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


        function supprimerpost($idpost){
			$sql="DELETE FROM post WHERE idpost=:idpost";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idpost', $idpost);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


        function modifierpost($post, $idpost){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE post SET 
						title= :title, 
						content= :content
						imageurl= :imageurl
						nameuser= :nameuser
						date= :date
						iduser= :iduser
						
					WHERE idpost= :idpost'
				);
				$query->execute([
					'title' => $post->gettitle(),
					'content' => $post->getcontent(),
					'imageurl' => $post->getimageurl(),
					'nameuser' => $post->getnameuser(),
					'date' => $post->getdate(),
					'Iduser' => $post->getIduser(),
					'Idpost' => $idpost
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		function recupererpost($idpost){
			$sql="SELECT * from post where idpost=$idpost";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
	
				$post=$query->fetch();
				return $post;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

    }

	
    
?>