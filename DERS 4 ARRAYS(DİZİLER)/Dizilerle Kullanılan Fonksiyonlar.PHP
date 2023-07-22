<?php
$sayilar=array(1,2,3,4,5,6,7);
$sayilar1=[3,4,5,6,9,10];
$sayilar2=[1,2,3,4,5];//[] ile de array oluşturulabilir!
print_r ($sayilar2);
echo "<br>";
print_r($sayilar);//dizinin bütün elemanlarını bastırır.Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 )
echo "<br>";
//COUNT FONKSİYONU//
print_r ("COUNT FONKSİYONU");
echo "<br>";
print_r(count($sayilar2));//COUNT saymak demektir.5 tane elemanı vardır
echo "<br>";
//RESET FONKSİYONU//
print_r ("RESET FONKSİYONU");
echo "<br>";
print_r(reset($sayilar2));//RESET fonsiyonu ilk elemanı bize bastırır.
echo "<br>";
//END FONKSİYONU//
print_r ("END FONKSİYONU");
echo "<br>";
print_r(end($sayilar2));//END fonksiyonu son elemanı bize bastırır.

$sayilar[7]=10;//nromalde 7. sıradaki sayımız 7 iken burada 10 yazdırdık.
echo "<br>";
print_r($sayilar);
echo "<br>";
array_push($sayilar,987);//ARRAY_PUSH dizinin sonudaki sayıyı değiştirir.
print_r($sayilar);
echo "<br>";
array_pop($sayilar);//ARRAY_POP dizinin sonundaki sayıyı atar!
print_r($sayilar);
echo "<br>";
array_unshift($sayilar,5,5,5);//ARRAY_UNSHİFT ASLINDA KAYDIRMA DEMEK. DİZİNİN BAŞINA SAYILARI EKLER ($.....,NE EKLEMEK İSTİYORSAK);
echo "<br>";
print_r($sayilar);
print_r(array_merge($sayilar,$sayilar1));//2 array'i birleştirebiliyoruz. 2 array dan gelen aynı değerler 2 kez yazabilir.
echo "<br>";
print_r(array_unique(array_merge($sayilar,$sayilar1)));// 2 array'in birleştirir ama birden fazla olan değerleri tekrarlamıyor.
//DENEDİM OLDU AŞAĞIDA.
$diziler=[1,2,3,4];
$diziler1=[4,5,6,7];
echo "<br>";
print_r(array_merge($diziler,$diziler1));
echo "<br>";
print_r(array_unique(array_merge($diziler,$diziler1)));
//SORT FONKSİYONU
echo "<br>";
print_r ("SORT FONKSİYONU");
echo "<br>";
$sirasiz=[4,5,6,3,2,1,0];
sort($sirasiz);//sort fonksiyonu sırasız bir biçimde yazılmış değerleri sıralı hale getiriyor. Yalnız sort fonksiyon print_r içine yazılmaması gerekiyor.
echo "<br>";
print_r($sirasiz);
$sirasiz1=["A","C","a","G","H","J"];//ascii tablosuna(https://www.netdunyasi.com/blog/ascii-tablosu) göre küçük-büyük harf değerleri farklı olmak üzere sıralıyor!
sort($sirasiz1);
echo "<br>";
print_r($sirasiz1);
asort($sirasiz);
echo "<br>";
print_r($sirasiz);
asort($sirasiz1);//ASORT: SORT İLE AYNI İŞLEVİ GÖRÜYOR. ascii tablosuna(https://www.netdunyasi.com/blog/ascii-tablosu) göre küçük-büyük harf değerleri farklı olmak üzere sıralıyor!
sort($sirasiz1);
echo "<br>";
print_r($sirasiz1);
//ARRAY_SLİCE
echo "<br>";
echo "ARRAY_SLİCE";
echo "<br>";
print_r(array_slice($sayilar1,0,4));
echo "<br>";
echo "ARRAY_SpLİCE";
echo "<br>";
$silinmiş=array_splice($sayilar1,4);//SPLİCE ARALIĞI ORJİNAL DİZİDEN SİLİNİR. SPLİCE FONKSİYONUNU AYRI BİR ŞEKİLDE ATANMIŞ OLARAK YAZDIRMAMIZ LAZIM.array_sPlice($atama,kaçıncı değerden itibaren(dahil),bu değere kadar olan değerleri siler.);
print_r($silinmiş);//burada silinenleri yazdırdık.
echo "<br>";
print_r($sayilar1);//burada ise silinenlerden geriye kalanları yazdırdık.









?>