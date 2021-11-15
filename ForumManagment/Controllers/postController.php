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


        function supprimerpost($post){
			$sql="DELETE FROM post WHERE post=:post";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':post', $post);
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
						nameuser= :nameuser, 
						content= :content, 
						title= :title, 
						date= :date,
						imageurl= :imageurl
					WHERE Idpost= :Idpost'
				);
				$query->execute([
					'nameuser' => $post->getnameuser(),
					'content' => $post->getcontent(),
					'title' => $post->gettitle(),
					'date' => $post->getdate(),
					'imageurl' => $post->getimageurl(),
					'Idpost' => $idpost
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

    }
    
?>