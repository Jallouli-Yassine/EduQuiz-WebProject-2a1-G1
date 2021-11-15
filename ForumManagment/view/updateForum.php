<?php
    include_once '../model/modelPost.php';
    include_once '../Controllers/postController.php';

    $error = "";

    // create post
    $post = null;

    // create an instance of the controller
    $postC = new postC();
    if (
        isset($_POST["idpost"]) &&
		isset($_POST["nameuser"]) &&		
        isset($_POST["content"]) &&
		isset($_POST["title"]) && 
        isset($_POST["date"]) && 
        isset($_POST["imageurl"])
    ) {
        if (
            !empty($_POST["idpost"]) && 
			!empty($_POST['nameuser']) &&
            !empty($_POST["content"]) && 
			!empty($_POST["title"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["imageurl"])
        ) {
            $post = new post(
                $_POST['idpost'],
				$_POST['nameuser'],
                $_POST['content'], 
				$_POST['title'],
                $_POST['date'],
                $_POST['imageurl']
            );
            $postC->modifierpost($post, $_POST["idpost"]);
            header('Location:displayForum.php');
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
        <button><a href="displayForum.php">Retour à la liste des posts</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['idpost'])){
				$post = $postC->recupererpost($_POST['idpost']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idpost">Numéro post:
                        </label>
                    </td>
                    <td><input type="text" name="idpost" id="idpost" value="<?php echo $post['idpost']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nameuser">nameuser:
                        </label>
                    </td>
                    <td><input type="text" name="nameuser" id="nameuser" value="<?php echo $post['nameuser']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="content">content:
                        </label>
                    </td>
                    <td><input type="text" name="content" id="content" value="<?php echo $post['content']; ?>" maxlength="100"></td>
                </tr>
                <tr>
                    <td>
                        <label for="title">title:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="title" value="<?php echo $post['title']; ?>" id="title">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date">date:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date" id="date" value="<?php echo $post['date']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="imageurl">imageUrl:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="imageurl" id="imageurl" value="<?php echo $post['imageurl']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>