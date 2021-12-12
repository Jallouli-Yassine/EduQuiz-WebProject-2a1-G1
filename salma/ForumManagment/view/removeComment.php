<?php 
	include '../Controllers/commentController.php';
    if(isset($_POST['commentID'])){
        $commentC = new CommentC();
        $commentC->supprimercomment($_POST['commentID']);
        header("Location: ./addPost.php");
    }


?>