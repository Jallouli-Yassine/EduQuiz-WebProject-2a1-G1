<?php 
    require_once "./../config.php";
    require_once "./../model/courseModel.php";

    class CourseC{

        function ajouterCourse($course){
            $sql = "INSERT INTO courses(profID,title,price,Descrip,video_url,picture_url,categorie,etat)
            VALUES(:profID,:title,:price,:Descrip,:video_url,:picture_url,:categorie,:etat)";

            $db = config::getConnexion();
            try {
                
                $query = $db->prepare($sql);
                
                $query->execute([
                    'profID' => $course->getProfID(),
                    'title' => $course->getTitle(),
                    'price' => $course->getPrice(),
                    'Descrip' => $course->getDescription(),
                    'video_url' => $course->getVideo_url(),
                    'picture_url' => $course->getPicture_url(),
                    'categorie' => $course->getCategorie(),
                    'etat' => $course->getEtat(),
                ]);

            } catch(Exception $e){
				$e->getMessage();
			}
        }

        function afficherCourses() {
            $sql = "SELECT * FROM courses";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch(Exception $e){
				$e->getMessage();
			}
        }

        function getTrueCourses($true) {
			$sql="SELECT * FROM courses WHERE etat=$true";
			$db = config::getConnexion();
			try{
                $liste = $db->query($sql);
                return $liste;
			}
			catch (Exception $e){
				echo $e->getMessage();
			}
        }

        function getDeclinedCourses($declined){
            $sql="SELECT * FROM courses WHERE etat=$declined";
			$db = config::getConnexion();
			try{
                $liste = $db->query($sql);
                return $liste;
			}
			catch (Exception $e){
				echo $e->getMessage();
			}
        }

        function activeStateCourse($courseID){
            $db = config::getConnexion();
            $query = $db->prepare("UPDATE courses SET etat= 1 WHERE courseID= :courseID");
            $query->execute(['courseID' => $courseID]);
            echo $query->rowCount() . " records UPDATED successfully <br>";

        }
        
        function desactivéStateCourse($courseID){
            $db = config::getConnexion();
            $query = $db->prepare("UPDATE courses SET etat= 0 WHERE courseID= :courseID");
            $query->execute(['courseID' => $courseID]);
            echo $query->rowCount() . " records UPDATED successfully <br>";

        }

        function deleteCourse($courseID){
            $db = config::getConnexion();
            $sql = "DELETE FROM courses where courseID=:courseID";

            try {
                $query = $db->prepare($sql);
                $query->bindValue(':courseID',$courseID);
                $query->execute();
            }catch(Exception $e){
				$e->getMessage();
			}
        }

        function modifierCourse($course, $courseID){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
				'UPDATE courses SET
				title= :title, price= :price, Descrip= :Descrip, video_url= :video_url, picture_url= :picture_url
				WHERE courseID= :courseID');
				$query->execute([
					'title' => $course->getTitle(),
					'price' => $course->getPrice(),
					'Descrip' => $course->getDescription(),
					'video_url' => $course->getVideo_url(),
					'picture_url' => $course->getPicture_url(),
					'courseID' => $courseID
				]);
			//	echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();

			}
		}

        function getProfCourses() {
			$sql="SELECT * from courses WHERE profID = 8";
			$db = config::getConnexion();
			try{
                $liste = $db->query($sql);
                return $liste;
			}
			catch (Exception $e){
				echo $e->getMessage();
			}
        }
        
        function getOneCourse($courseID) {
			$sql="SELECT * from courses where courseID=$courseID";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$course=$query->fetch();
				return $course;
			}
			catch (Exception $e){
				echo $e->getMessage();
			}
        }
        
        function declineState($courseID){
            $db = config::getConnexion();
            $query = $db->prepare("UPDATE courses SET etat= -1 WHERE courseID= :courseID");
            $query->execute(['courseID' => $courseID]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        }

        function getFalseCourses($false) {
			$sql="SELECT * FROM courses WHERE etat=$false";
			$db = config::getConnexion();
			try{
                $liste = $db->query($sql);
                return $liste;
			}
			catch (Exception $e){
				echo $e->getMessage();
			}
        }

        function rechercher($value){
            $db = config::getConnexion();
            $SEARCH=$db->prepare("SELECT * FROM courses WHERE title LIKE :value and etat=1");
            $value="%".$value."%";
            $SEARCH->bindParam("value",$value);
            $SEARCH->execute();
            return $SEARCH;

        }

    }
    
?>