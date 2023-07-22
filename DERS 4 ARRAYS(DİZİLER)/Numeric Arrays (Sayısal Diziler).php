<?php
// ARRAY İLE BİRDEN FAZLA DEĞİŞKEN YAZABİLİRİZ.
$isimler= array("ethem","tuğrul","araç",15,1.02);
// ÇAĞIRACAĞINIZ ELEMANLAR 0 DAN BAŞLAR 0=ETHEM MESELA.
echo $isimler[0];
echo "<br>";
echo $isimler[1];
echo "<br>";
echo $isimler[3];
echo "<br>";
echo $isimler[4];
echo "<br>";
echo $isimler[0]." ".$isimler[2];//ardı ardına böyle yazdırabiliriz.
echo "<br>";
echo $isimler[3]+$isimler[4];//İŞLEMDE YAPTIRABİLİRİZ.
echo "<br>";

$tarayiciyayollanacaklar= array("ka","<h1>me</h1>","<p>ha</p>","mee","haaaa");
echo $tarayiciyayollanacaklar[0];
echo $tarayiciyayollanacaklar[1];
echo $tarayiciyayollanacaklar[2];

?>