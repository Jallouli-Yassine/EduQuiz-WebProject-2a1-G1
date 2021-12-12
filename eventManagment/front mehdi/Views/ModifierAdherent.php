
<!DOCTYPE html>
<html>
<head>
<title></title>

</head>
<body>

<form action="a.php" method='POST'>
    <?php
    $idevent=$_POST["idevent"];
    $nameevent=$_POST["nameevent"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $date=$_POST["date"];
    $Dateinscription=$_POST["time"];
    $numberparticipate=$_POST["numberparticipate"];
    ?>
    <label for="">
    idevent
    </label>
   <input type="text" name='idevent1' value = <?php echo $idevent; ?> disabled >
    <input type="hidden" name='idevent' value = <?php echo $idevent;?>  >
    <label for="">Nameevent</label>
    <input type="text" name='nameevent' value = <?php echo $nameevent;?>  >
    <label for="">email</label>
    <input type="text" name='email' value = <?php echo $email;?>  >
    <label for="">subject</label>
    <input type="text" name='subject' value = <?php echo $subject;?>  >
    <label for="">date</label>
    <input type="text" name='date' value = <?php echo $date?>  >
    <label for="">time</label>
    <input type="text" name='time' value = <?php echo $Dateinscription;?>  >
    <label for="">numberparticipate</label>
    <input type="text" name='numberparticipate' value = <?php echo $numberparticipate;?>  >
    <label for="">image</label>
    <input type="text" value=<?php echo $_POST['image'] ;?> name='image'>  
    <input type="submit" value='Modifier'>
    <input type="reset" value='Annuler'>
</form>

</body>
</html>