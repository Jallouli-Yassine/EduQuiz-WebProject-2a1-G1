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

    }
    
?>