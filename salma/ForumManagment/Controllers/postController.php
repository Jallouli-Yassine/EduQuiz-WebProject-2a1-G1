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
			$sql="DELETE FROM post WHERE  idpost=:idpost;
		     DELETE FROM comment WHERE idpost='$idpost';";
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
			$sql = "UPDATE post(Idpost,Iduser,nameuser,content,title,date,imageurl)
            VALUES(:Idpost,:Iduser,:nameuser,:content,:title,:date,:imageurl)";
			var_dump($post);
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE post SET 
						iduser= :iduser,
						nameuser= :nameuser,
						content= :content,
						title= :title, 
						date= :date,
						imageurl= :imageurl
						
					WHERE idpost= :idpost'
				);
				$query->execute([
					'iduser' => $post->getIduser(),
					'nameuser' => $post->getnameuser(),
					'content' => $post->getcontent(),
					'title' => $post->gettitle(),
					'date' => $post->getdate(),
					'imageurl' => $post->getimageurl(),
					'idpost' => $idpost
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

		function rechercher($value){
            $db = config::getConnexion();
            $SEARCH=$db->prepare("SELECT * FROM post WHERE title LIKE :value");
            $value="%".$value."%";
            $SEARCH->bindParam("value",$value);
            $SEARCH->execute();
            return $SEARCH;
        }


    }

	
    
?>