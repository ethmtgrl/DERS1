<?php
//BİR ŞEY DÖNGÜSEL HALDE DEVAM EDİYORSA WHİLE DÖNGÜSÜNÜ YAPIYORUZ.
$i=0;
while($i<=10){// while:-iken "i<10 iken" demek.
    echo "$i -";
    $i++; //arttırıyoruz birer birer.
}
echo "<br>";
$o=10;
while ($o>=0) {
    echo "$o -";
    $o--;
}
echo "<br>";
$isimler= ["ethem","tuğrul","araç"];
$index=0;
while ($index<count($isimler)) {//İsimler eleman sayısı kadar demek istedik.
    echo $isimler[$index]." ";//KAÇINCI İNDEX'E DENK GELEN İSİMLERİ YAZDIRICAK.
    $index++;
}
echo "<br>";
echo count($isimler);// ARRAYİN İÇİNDE KAÇ ELEMAN OLDUĞUNU SÖYLER CUNT FONKSİYONU.
echo "<br>";
$i=0;
while($i<=50){
    echo "$i -";
    $i+=2; 
}


?>