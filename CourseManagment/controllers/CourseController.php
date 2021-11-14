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

        function activeStateCourse($courseID){
            $db = config::getConnexion();
            $query = $db->prepare('UPDATE courses SET etat= 1 WHERE courseID= :courseID');
            $query->execute(['courseID' => $courseID]);
            echo $query->rowCount() . " records UPDATED successfully <br>";


        }

    }
    
?>