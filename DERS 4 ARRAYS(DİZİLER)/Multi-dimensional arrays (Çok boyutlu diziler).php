<?php
$durumlar= array ("çevrimiçi"=>array("muharrem","metehan","talip"),"beklemede"=>array("ozan","yasir","çinar"),"çevrimdisi"=>array("teslime","betül"));
/*echo $durumlar["çevrimiçi"][0];
echo "<br>";
echo $durumlar["çevrimiçi"][1];
echo "<br>";
echo $durumlar["beklemede"][2];
echo "<br>";
echo $durumlar["çevrimdisi"][1];*/

$durumlar["çevrimiçi"][0]=null;
$durumlar["çevrimdisi"][2]="muharrem";
echo $durumlar["çevrimdisi"][2];
echo"<br>";
echo $durumlar["çevrimiçi"][0];//MUHARREM'E NULL DEDİĞİMİZ İÇİN YAZDIRILMIYOR
echo"<br>";
echo $durumlar["çevrimiçi"][1];
/*echo"<br>";
echo $durumlar["çevrimiçi"][3];*/
?>