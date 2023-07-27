<?php
$i=["galatasaray","fenerbahçe","beşiktaş","trabzon"];//BURADA SADECE YAZDIĞIMIZ STİNGLER BİR DEĞERDİR. 0=>"GALATASARAY"
$bilgi=["galatasay"=>"fatih terim","fenerbahçe"=>"ersun yanal","beşiltaş"=>"abdullah avcı","trabzonspor"=>"ünal kahraman"];//HEM KEY HEM VALUES ATAMASI YAPTIK.
foreach ($bilgi as $key=>$value){
    echo $key."=>".$value."<br>";
}
foreach($i as $key=>$value){
    echo $key."=>".$value."<br>";
}
//SAYİLARLA FOREACH KULLANDIK.
$sayilar=[0,4,5,5,6,7,8];
$toplam=0;
foreach($sayilar as $sayi){
    $toplam += $sayi;
}
echo $toplam;
echo "<br>";
$isimler=["ethem","tuğrul","araç"];
$isim=null;
foreach($isimler as $kelime){
    echo $kelime." ";
}
echo "<br>";
$hacettepe=["ilyas","derya","hasan ali","ismail"];// isimleri yan yana yazdırır
foreach ($hacettepe as $kelime){
    echo $kelime." ";
}
echo "<br>";
$ikizler=["nasuh","akasya"];
$soyadi="tari";
foreach ($ikizler as $value) {
    echo $value." ".$soyadi."<br>";
}
echo "<br>";
$a=["VOLKAN"=>"NASUH","NERMİN"=>"AKASYA"];
    foreach ($a as $ebeveynler=>$çocuklar){
        echo $ebeveynler."=>".$çocuklar."<br>";
    }













?>