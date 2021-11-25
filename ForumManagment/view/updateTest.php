<?php
    include_once '../model/modelPost.php';
    include '../Controllers/postController.php';

    $error = "";

    // create post
    $post = null;

    // create an instance of the controller
    $postC = new postC();
    $id = (int) $_GET['idpost'];

    if (
       /*  isset($_POST["Idpost"]) &&
        isset($_POST["Iduser"]) &&
		isset($_POST["nameuser"]) &&	 */	
        isset($_POST["content"]) &&
		isset($_POST["title"]) //&& 
       /*  isset($_POST["date"]) && 
        isset($_POST["imageurl"]) */
    ) {
        if (
           /*  !empty($_POST["idpost"]) && 
            !isset($_POST["iduser"]) &&
			!empty($_POST['nameuser']) && */
            !empty($_POST["content"]) && 
			!empty($_POST["title"]) //&& 
           /*  !empty($_POST["date"]) && 
            !empty($_POST["imageurl"]) */
        ) {
            $post = new post(
                $id,
                50,
				'salma',
                $_POST['content'], 
				$_POST['title'],
                '2021-06-23',
                'test'
            );
            $postC->modifierpost($post, $_POST["idpost"]);
          
        }
        else
            $error = "Missing information";
    }    
?>

<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Post</title>
</head>
<body>

<button><a href="displayForum.php"></a></button>
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
                        <label for="title">Title:
                        </label>
                    </td>
                    <td><input type="text" name="title" id="title" value="<?php echo $post['title']; ?>" maxlength="20"></td>
                </tr>  
                <tr>
                    <td>
                        <label for="content">Content:
                        </label>
                    </td>
                    <td><input type="text" name="content" id="tcontentitle" value="<?php echo $post['content']; ?>" maxlength="20"></td>
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
        </form




<?php
		}
		?>
    </body>
</html>