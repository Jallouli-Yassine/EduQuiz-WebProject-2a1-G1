<?php
    include_once '../model/modelComment.php';
    include_once '../Controllers/commentController.php';

    $error = "";

    // create adherent
    $comment = null;

    // create an instance of the controller
    $commentC = new commentC();
    if (
        isset($_POST["idcomment"]) &&
		isset($_POST["iduser"]) &&		
        isset($_POST["nameuser"]) &&
		isset($_POST["content"]) && 
        isset($_POST["date"]) && 
        isset($_POST["idpost"])
    ) {
        if (
            !empty($_POST['idcomment']) &&
            !empty($_POST['iduser']) &&		
            !empty($_POST['nameuser']) &&
            !empty($_POST['content']) && 
            !empty($_POST['date']) && 
            !empty($_POST['idpost'])
        ) {
            $comment = new comment(
                $_POST['idcomment'],
				$_POST['iduser'],
                $_POST['nameuser'], 
				$_POST['content'],
                $_POST['date'],
                $_POST['idpost']
            );
            $commentC->ajouterComment($comment);
            header('Location:post.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="apost.php">Retour à la liste des adherents</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                
				<tr>
                    <td>
                        <label for="content">comment:
                        </label>
                    </td>
                    <td><input type="text" name="content" id="content" maxlength="20"></td>
                </tr>
            
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>