<?php 
    require_once "./../config.php";
    require_once "./../modele/usermodele.php";

    class UserC{

        function afficherUser() {
            $sql = "SELECT * FROM usertable";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch(Exception $e){
				$e->getMessage();
			}
        }
        function afficherProf() {
            $sql = "SELECT * FROM usertable";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch(Exception $e){
				$e->getMessage();
			}
        }

        function ajouterUser($user){
            $sql = "INSERT INTO usertable(first_Name,last_Name,email,pass,Date_Naissance,role)
            VALUES(:first_Name,:last_Name,:email,:pass,:Date_Naissance,:role)";

            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'first_Name' => $user->getfirst_Name(),
                    'last_Name' => $user->getlast_Name(),
                    'email' => $user->getemail(),
                    'pass' => $user->getpass(),
                    'Date_Naissance' => $user->getDate_Naissance(),
                    'role' => $user->getrole()

                ]);
            } catch(Exception $e){
				$e->getMessage();
			}
        }

        function supprimeruser($ID){
            $db = config::getConnexion();
            $sql = "DELETE FROM usertable where ID=:ID";

            try {
                $query = $db->prepare($sql);
                $query->bindValue(':ID',$ID);
                $query->execute();
            }catch(Exception $e){
				$e->getMessage();
			}
        }
        
		function modifieruser($user, $ID){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
				'UPDATE usertable SET
				first_Name= :first_Name,last_Name = :last_Name, email= :email, Date_Naissance= :Date_Naissance
				WHERE ID= :ID');
				$query->execute([
					'first_Name' => $user->getfirst_Name(),
					'last_Name' => $user->getlast_Name(),
					'email' => $user->getemail(),
					'Date_Naissance' => $user->getDate_Naissance(),
					'ID' => $ID
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();

			}
		}

        function getOneUser($ID) {
			$sql="SELECT * from usertable where ID=$ID";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				echo $e->getMessage();
			}
        }
        function getOneUseremail($email) {
			$sql="SELECT * from usertable where email='$email'";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$adherent=$query->fetch();
				return $adherent;
			}
			catch (Exception $e){
				echo $e->getMessage();
			}
        }
        
        function connexionUser($email,$password){
            $sql="SELECT * FROM usertable WHERE email='" . $email . "' and pass = '". $password."'";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                    $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    $message = $x['role'];
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $message;
        }

        function rechercher($value){
            $db = config::getConnexion();
            $SEARCH=$db->prepare("SELECT * FROM usertable WHERE role LIKE :value");
            $value="%".$value."%";
            $SEARCH->bindParam("value",$value);
            $SEARCH->execute();
            return $SEARCH;
        }

        function bloquerclient($client, $ID){
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE usertable SET 
                        bloqué= 1
                        -- dateb= :dateb
                    WHERE ID= :ID'
                );
                $query->execute([
                    'ID' => $ID
                    // 'dateb' => $client->getdateb(),
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        function debloquerclient($client, $ID){
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE usertable SET 
                        bloqué= 0
                        -- dateb= :dateb
                    WHERE ID= :ID'
                );
                $query->execute([
                    'ID' => $ID
                    // 'dateb' => $client->getdateb(),
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

    }
?>