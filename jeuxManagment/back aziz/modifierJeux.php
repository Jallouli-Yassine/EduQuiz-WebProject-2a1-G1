<?php 
         require_once"jeuxC.php";
         require_once"jeuxM.php";

         $jeux = null;
         $jeuxC = new jeuxC();
        
        if(  isset($_POST['nom_jeu']) &&
             isset($_POST['lien_jeu']) &&
             isset($_POST['prop_jeu']) &&
             isset($_POST['age_jeu']) &&
             isset( $_POST['img_jeu']) &&
             isset($_POST['date_jeu']) &&
             isset($_POST['mode_jeu']) ){
             
        if( !empty($_POST['nom_jeu'])&&
            !empty($_POST['lien_jeu'])&&
            !empty($_POST['prop_jeu'])&&
            !empty($_POST['age_jeu'])&&
            !empty( $_POST['img_jeu'])&&
            !empty($_POST['date_jeu'])&&
            !empty($_POST['mode_jeu']))
            {
               
                $jeux = new jeux (
                $_POST['nom_jeu'],
                $_POST['lien_jeu'],
                $_POST['prop_jeu'],
                $_POST['age_jeu'],
                $_POST['date_jeu'],
                $_POST['img_jeu'],
                $_POST['mode_jeu']);

               
            }else
            echo "ERROR";
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styleCSS/index.css">
    <title>Title</title>
</head>

<body>


    <div class="container">

        <h1 style="text-align: center;">UPDATE Game</h1>

        <?php
        if (isset($_POST['nom_jeu'])){
              $jeux = $jeuxC->getOneJeux($_POST['nom_jeu']);
		?>
        <form action="" method="POST">

            <div class="form-outline">
                <input value="<?php echo $jeux['nom_jeu'] ?>" name="nom_jeu" type="text" id="nom_jeu" class="form-control" />
                <label class="form-label" for="nom_jeu">nom_jeu</label>
            </div>
            <div class="form-outline">
                <input value="<?php echo $jeux['lien_jeu'] ?>" name="lien_jeu" type="text" id="lien_jeu" class="form-control" />
                <label class="form-label" for="lien_jeu">lien_jeu</label>
            </div>
            <div class="form-outline">
                <input value="<?php echo $jeux['prop_jeu'] ?>" name="prop_jeu" type="text" id="prop_jeu" class="form-control" />
                <label class="form-label" for="prop_jeu">prop_jeu</label>
            </div>
            <div class="form-outline">
                <input value="<?php echo $jeux['age_jeu'] ?>" name="age_jeu" type="text" id="age_jeu" class="form-control" />
                <label class="form-label" for="age_jeu">age_jeu</label>
            </div>
            <div class="form-outline">
                <input value="<?php echo $jeux['date_jeu'] ?>" name="date_jeu" type="date_jeu" id="date_jeu" class="form-control" />
                <label class="form-label" for="date_jeu">date_jeu</label>
            </div>
            <div class="form-outline">

                <input value="<?php echo $jeux['mode_jeu'] ?>" name="mode_jeu" type="text" id="mode_jeu" class="form-control" />
            </div>

            <input style="float:right;" type="submit" class="btn btn-black" value="Update jeux">

        </form>
        <?php
         }	 
         $jeuxC->modifierJeux($jeux,$_POST['nom_jeu']);
         header("Location:all-games.php");
        ?>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>