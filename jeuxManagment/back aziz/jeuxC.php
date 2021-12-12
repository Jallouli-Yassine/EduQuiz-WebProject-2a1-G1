<?php 
    require_once "../../config.php";
    require_once "jeuxM.php";

    class jeuxC{

        function afficherJeux() {
            $sql = "SELECT * FROM jeux";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch(Exception $e){
				$e->getMessage();
			}
        }


        function ajouterJeux($jeux){
            $sql = "INSERT INTO jeux(nom_jeu,lien_jeu,prop_jeu,age_jeu,date_jeu,img_jeu,mode_jeu)
            VALUES(:nom_jeu,:lien_jeu,:prop_jeu,:age_jeu,:date_jeu,:img_jeu,:mode_jeu)";

            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'nom_jeu' => $jeux->getnom_jeu(),
                    'lien_jeu' => $jeux->getlien_jeu(),
                    'prop_jeu' => $jeux->getprop_jeu(),
                    'age_jeu' => $jeux->getage_jeu(),
                    'date_jeu' => $jeux->getdate_jeu(),
                    'img_jeu' => $jeux->getimg_jeu(),
					'mode_jeu' => $jeux->getmode_jeu(),
                ]);
            } catch(Exception $e){
				$e->getMessage();
			}
        }

        function supprimerJeux($nom_jeu){
            $db = config::getConnexion();
            $sql = "DELETE FROM jeux where nom_jeu=:nom_jeu";

            try {
                $query = $db->prepare($sql);
                $query->bindValue(':nom_jeu',$nom_jeu);
                $query->execute();
            }catch(Exception $e){
				$e->getMessage();
			}
        }
        /*
        UPDATE `adherent` SET `NumAdherent` = '2', `Nom` = 'jallouli4', `prop_jeu` = 'yassine4',
         `age_jeu` = 'rue d\'Aumale4', `Email` = 'yassinejall2oulitech@gmail.com',
          `DateInscription` = '2021-11-03' WHERE `adherent`.`NumAdherent` = 1
        */ 
		function modifierjeux($jeux, $nom_jeu){
			
	
			$sql =	"UPDATE jeux SET
				lien_jeu= :lien_jeu, prop_jeu= :prop_jeu, age_jeu= :age_jeu, date_jeu= :date_jeu, img_jeu= :img_jeu, mode_jeu= :mode=jeu
				WHERE nom_jeu= :nom_jeu";
				$db = config::getConnexion();
				try{		
					$req=$db->prepare($sql);
			//		$nom_jeu=$jeux->getnom_jeu();
					$lien_jeu=$jeux->getlien_jeu();
					$prop_jeu=$jeux->getprop_jeu();
					$age_jeu=$jeux->getage_jeu();
					$date_jeu=$jeux->getdate_jeu();
					$img_jeu=$jeux->getimg_jeu();
					$mode_jeu=$jeux->getmode_jeu();
			$datas = array( ':nom_jeu'=>$nom_jeu, ':lien_jeu'=>$lien_jeu,':prop_jeu'=>$prop_jeu,':age_jeu'=>$age_jeu,':date_jeu'=>$date_jeu,':img_jeu'=>$img_jeu,':mode_jeu'=>$mode_jeu);
				
					$req->bindValue(':nom_jeu',$nom_jeu);
					$req->bindValue(':lien_jeu',$lien_jeu);
					$req->bindValue(':prop_jeu',$prop_jeu);
					$req->bindValue(':age_jeu',$age_jeu);
					$req->bindValue(':date_jeu',$date_jeu);
					$req->bindValue(':img_jeu',$img_jeu);
					$req->bindValue(':mode_jeu',$mode_jeu);
						$s=$req->execute();
						
					    header('Location: all-games.php');
					}
				catch (PDOException $e) {
				$e->getMessage();

			}
		}

        function getOneJeux($nom_jeu) {
			$sql="SELECT * from jeux where nom_jeu= '$nom_jeu'";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$jeux=$query->fetch();
				return $jeux;
			}
			catch (Exception $e){
				echo $e->getMessage();
			}
        }

		
    }
?>