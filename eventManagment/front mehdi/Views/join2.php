<?php
include '../Model/eleve.php';
include '../Controller/eeleve.php';
include '../Model/Adherent.php';

$erreur='';
$adherentC= new eleveC();
if (
    isset($_POST["name"]) &&
    isset($_POST["email2"]) &&
    isset($_POST["nameevent"]) 
) {

    if (
        !empty($_POST["name"]) &&
        !empty($_POST["email2"]) &&
        !empty($_POST["nameevent"]) 
    ) {

        $A= new eleve($_POST["name"],$_POST["email2"],$_POST["nameevent"]);
        $adherentC->ajoutereleve($A);
        $adherentCC= new eleveC();
        $A= new Adherent($_POST['nameevent'],$_POST['email'],$_POST['subject'],$_POST['date'],$_POST['time'],$_POST['numberparticipate'],$_POST['image'],$_POST['lienJeu']);
        
        $adherentCC->ModifierAdherent($A,$_POST['idevent']);
        if($_POST['numberparticipate']==0)
        {
            $AdherentC2= new eleveC();
            $AdherentC2->SupprimerAdherent($_POST["idevent"]);
        }
    }
else {$erreur='Veuillez remplir le formulaire';}   
}
$date = date('d-m-y h:i:s');
if($_POST['date']===$date){
    require_once "./../../back mehdi/ooo/mailEvent.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
<div class="contain">

		<div class="done">
			<svg version="1.1" id="tick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">
<path class="circ path" style="fill:#0cdcc7;stroke:#07a796;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" d="
	M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.5z"
	/>
<polyline class="tick path" style="fill:none;stroke:#fff;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" points="
	11.6,20 15.9,24.2 26.4,13.8 "/>
</svg>
			</div>
            <div class="congrats">
    <h1>  	  Congrat<span class="hide">ulation</span>s !</h1>
		<div class="text">
		<p>You have successfully booked an appointment with <?php echo $_POST["nameevent"]?> <br>Here are your details<br>Date: <?php echo $_POST['date'] ;?><br>
			Time: <?php echo $_POST['time'] ;?><br>
			ID: 12324
		</p>
        <?php echo $_POST["email2"];?>
			<p>EduQuiz awaiting your visit               
			</p>
			</div>
		<p class="regards">Regards, Team EduQuiz</p>
        <button>imprint </button>
        <script>document.querySelector("button").addEventListener('click', () => {
  window.print();
});</script>
	</div>
</div>
</body>
</html>

