<?php
/*
1) DİV etiketi ile dinamik bir dikdörtgen oluşturma. Yüksekliği ve genişliği verilen bir dikdörtgenin alanını hesaplama.
*/
$yükseklik=500;
$genişlik=750;
$alan= $yükseklik*$genişlik;
$çevre= 2*$yükseklik+2*$genişlik;

$yükseklik.= "px";
$genişlik.="px";
echo $yükseklik;
echo"<br>";
echo $genişlik;
echo"<div style=\"width:$genişlik; height: $yükseklik; border:5px solid red;\"> Dikdörtgenin alan: $alan <br> Dikdörtgenin çevresi: $çevre</div>";

?>