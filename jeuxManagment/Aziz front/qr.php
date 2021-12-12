<?php
require_once ('phpqrcode/qrlib.php');//On inclut la librairie au projet
$lien=$_POST['lien_jeu']; // Vous pouvez modifier le lien selon vos besoins
QRcode::png($lien, 'image-qrcode.png'); // On crée notre QR Code
?>
<html>
<img src="image-qrcode.png" alt="">
</html>