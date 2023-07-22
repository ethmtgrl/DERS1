<?php
//VAR_DUMP FONSİYONU
echo "A=>VAR_DUMP FONSİYONU";
echo "<br>";
$isim=["ethem"=>"teacher","yaşi:"=>25];
var_dump($isim);
echo "<br>";
echo "<br>";
//İS_ARRAY FONSİYONU
echo "B=>İS_ARRAY FONSİYONU";
$bilgi="ethem";
echo "<br>";
if(is_array($bilgi)){
    echo "okey";
}
else
echo "no";
echo "<br>";
echo "<br>";
//İN_ARRAY FONKSİYONU= SAMANLIĞIN İÇİNDE İĞNE ARAMAK.
echo "C=>İN_ARRAY FONKSİYONU SAMANLIĞIN İÇİNDE İĞNE ARAMAK.";
echo "<br>";
$bilgi2=["İSİM"=>"ETHEM TUĞRUL ARAÇ", "MESLEK"=>"TEACHER","YAŞ"=>"25"];
if(in_array("ETHEM TUĞRUL ARAÇ",$bilgi2)){
    echo "okey";
}
else
echo "no";
echo "<br>";
echo "<br>";
//COUNT FONSİYONU= BİR DİZİNİN İÇİNDEKİ ELEMAN SAYISINI SÖYLER.
echo "D=>COUNT FONKSİYONU BİR DİZİNİN İÇİNDEKİ ELEMAN SAYISINI SÖYLER";
echo "<br>";
$bilgi3=["İSİM"=>"ETHEM TUĞRUL ARAÇ", "MESLEK"=>"TEACHER","YAŞ"=>"25"];
echo count ($bilgi3);
echo "<br>";
echo "<br>";
//İMPLODE FONSİYONU= ARRAYİN ELEMANLARINI "STRİNG" YAPAR.
echo "E=>İMPLODE FONKSİYONU= ARRAYİN ELEMANLARINI STRİNG YAPAR.";
echo "<br>";
$bilgi4=["İSİM"=>"ETHEM TUĞRUL ARAÇ", "MESLEK"=>"TEACHER","YAŞ"=>"25"];
$bilgi4= implode("X",$bilgi4);// "x" KELİMESİYLE BİRLEŞTİRİR HER DEĞERİ.
echo $bilgi4;
echo "<br>";
echo "<br>";
//EXPLODE FONKSİYONU=PARÇALAMAK,PATLATMAK LAZIM.DEĞERİ AYIRIR.
echo "F=>EXPLODE FONKSİYONU=PARÇALAMAK,PATLATMAK DEMEK.DEĞERİ 1,2,3,4 vb  AYIRIR.";
echo "<br>";
$bilgi5="GALATASARAY,FENERBAHÇE,BEŞİKTAŞ";
$takimlar=explode(",",$bilgi5);
print_r($takimlar);
echo "<br>";
echo "<br>";
//SHUFFLE FONKSİYONU= KARIŞTIRMAK DEMEK. DEĞERLERİ KARIŞTIRIR.
echo "G=>SHUFFLE FONKSİYONU= KARIŞTIRMAK DEMEK. DEĞERLERİ KARIŞTIRIR.";
echo "<br>";
$bilgi5=["1","2","3","4","5","6"];
shuffle($bilgi5);
print_r($bilgi5);
echo "<br>";
echo "<br>";
//CURRENT VE NEXT,PREV,RESET,END FONKSİYONU= DİZİNİN İLK ELEMANI DÖNDERİR YANİ YAZDIRIR. .PREV EN SON HANGİ DEĞERİ ELE ALDIYSAK ONU YAZDIRIR
echo "H=>CURRENT FONKSİYONU= DİZİNİN İLK ELEMANI DÖNDERİR YANİ YAZDIRIR.";
echo "<br>";
$bilgi6=[1,2,3,4,5,6,7];
echo current($bilgi6);
echo "<br>";
next($bilgi6);
next($bilgi6);
next($bilgi6);//NEXT BİR SONRAKİ DİZİNİN ELEMANI YAZDIRIR NE KADAR ÇOK KODU TEKRAR EDERSEK O KADAR İLERİ DEĞERİ YAZDIRIR.
echo current($bilgi6);
echo "=>NEXT BİR SONRAKİ DİZİNİN ELEMANI YAZDIRIR NE KADAR ÇOK KODU TEKRAR EDERSEK O KADAR İLERİ DEĞERİ YAZDIRIR.";
echo "<br>";
prev($bilgi6);//PREV EN SON HANGİ DEĞERİ ELE ALDIYSAK ONU YAZDIRIR
echo current($bilgi6);
echo "=>PREV EN SON HANGİ DEĞERİ ELE ALDIYSAK ONU YAZDIRIR";
echo "<br>";
reset($bilgi6);
echo current($bilgi6);

echo "=>RESET FONKSİYONU DÖNGÜYÜ SIFIRLAR VE BİZE 0. yani 1  DEĞERİ VERİR.";
echo "<br>";
end ($bilgi6);
echo current ($bilgi6);
echo "=>SON ELEMANIN ADRESİNİ EŞİTLİYOR VE 7 ELEMANINI YAZDIRILIYOR. ";
echo "<br>";
echo "<br>";
//EXTRACT FONKSİYONU= ARRAYLARIN İÇİNDEKİ KEYLERİ DEĞİŞKEN ($....) YAPAR.
echo "J=>EXTRACT FONKSİYONU= ARRAYLARIN İÇİNDEKİ KEYLERİ DEĞİŞKEN ($....) YAPAR.";
echo "<br>";
$bilgi7=["ADI"=>"ETHEM", "SOYADI"=>"KILINÇ"];
extract($bilgi7);
echo $ADI;
echo "<br>";
echo $SOYADI;
echo "<br>";
echo "<br>";
//ASORT FONKSİYONU= SORT SIRALAMA DEMEK. SIRALAMA YAPAR.
echo "K=>ASORT FONKSİYONU= SORT SIRALAMA DEMEK. SIRALAMA YAPAR.";
echo "<br>";
$bilgi8=["ADI"=>"ETHEM", "SOYADI"=>"KILINÇ","EŞİ"=>"TESLİME","MESLEK"=>"ÖĞRETMEN","YAŞI"=>"25"];
asort($bilgi8);
print_r($bilgi8);
echo "<br>";
echo "<br>";
//ARSORT FONKSİYONU= SORT SIRALAMA DEMEK. SIRALAMA YAPAR.
echo "L=>ARSORT FONKSİYONU= ALFABENİN TERSİNE SIRALAMA YAPAR.";
echo "<br>";
arsort($bilgi8);
print_r($bilgi8);
echo "<br>";
echo "<br>";
//KSORT FONKSİYONU= KEYLERİ BAZ ALARAK ALFABETİK SIRALAMA YAPAR.
echo "M=>KSORT FONKSİYONU= KEYLERİ BAZ ALARAK ALFABETİK SIRALAMA YAPAR.";
echo "<br>";
ksort($bilgi8);
print_r($bilgi8);
echo "<br>";
echo "<br>";
//KRSORT FONKSİYONU= KEYLERİ BAZ ALARAK TERSİNE ALFABETİK SIRALAMA YAPAR..
echo "N=>KRSORT FONKSİYONU= KEYLERİ BAZ ALARAK TERSİNE ALFABETİK SIRALAMA YAPAR.";
echo "<br>";
krsort($bilgi8);
print_r($bilgi8);
echo "<br>";
echo "<br>";
//RANGE FONKSİYONU= ELEMANLARIN ARASINI KAÇAR KAÇAR ATLAYACAĞINI AYARLABİLDİĞİMİZ BİR FONKSİYON.
echo "O=>RANGE FONKSİYONU= ELEMANLARIN ARASINI KAÇAR KAÇAR ATLAYACAĞINI AYARLABİLDİĞİMİZ BİR FONKSİYON.";
echo "<br>";
$sayilar=range(1,100,9);//(BAŞLANGIÇ SAYISI,BİTİŞ SAYISI,KAÇAR ATLAYACAĞI)
print_r($sayilar);






?>