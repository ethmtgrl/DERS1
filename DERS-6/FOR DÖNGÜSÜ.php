<?php
//FOR DÖNGÜSÜ: initialisation değişken atamasını bir kereliğine çalıştırır.
//$i=0;=>initialisation yani değişken ataması yaptık;
//+i<10;=>ŞART KISMI.
//$i++=> DÖNGÜ SONSUZ DÖNGÜYE GİRMESİN DİYE. 
for ($i=0; $i <=10 ; $i++) { 
    ECHO "$i<br>";
}
$isimler=["ethem","tuğrul","araç"];
for ($i=count($isimler)-1; $i>=0 ; $i--) { //$İ=COUNT($İSİMLER)-1;-1 koymamızın sebebi isimler arrayin 3 elemanlı olması(count fonksiyonu), en son değerin("araç") keys'i 2 ve 2'yi yazdırmak için bizim 3. elemanı değil 2. elemanı yazdırmasını istememiz gerekiyor.
    echo $isimler[$i]."<br>";
}



?>