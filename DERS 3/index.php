<?php
//MATEMATİKSEL OPARETÖRLER
//-----------------------------------------
//  + toplama
/*$sayi1=12;
$sayi2=5
echo $sayi1+$sayi2;*/
//-----------------------------------------
//  - çıkarma
/*$sayi1=12;
$sayi2=5
echo $sayi1-$sayi2;*/
//-----------------------------------------
//  * çarpma
/*$sayi1=12;
$sayi2=5
echo $sayi1*$sayi2;*/
//-----------------------------------------
//  / bölme
/*$sayi1=12;
$sayi2=5
echo $sayi1/$sayi2;*/
//-----------------------------------------
//  % mod alma 9/5 -> 4 kalanı verir. 9%5==4 oluyor.
/*$sayi1=12;
$sayi2=5
echo $sayi1%$sayi2;*/
//---------------------------------------***********************-------------------***************------
//İNCREMENT VE DECREMENT DERS1
//  increment arttırmak demek.Birer birer.
//  decrement azaltmak demek. Birer birer.

/*$sayi1=12;
$sayi2=5;*/

/*$sayi=0;
echo $sayi;
echo "<br>";
//++$sayi;//$sayi++;//$sayi+=1;//$sayi= $sayi+1; aynısı.
echo $sayi--;//post-decrement önce sayıyı basıyor sonra azaltıyor.
echo "<br>";*/
//echo --$sayi;//pre-decrement önce azaltır sonra.
//echo $sayi++;// post-increment önce sayıyı basıyor sonra arttırıyor.
//echo ++$sayi;//pre-increment önce arttır sonra bastır.
/*
$sayi=0;
$bir=1;

$sayi=$bir++;//önce sayi'yi bir arttırır sonra bir'i arttırır.
echo "sayi değeri: $sayi";
echo "<br>";
echo "bir değeri: $bir";*/
//---------------------------------------------------------*************************---------------------
//İNCREMENT VE DECREMENT DERS2
/*$sayi1=4;
$sayi2=$sayi1++;// sayi2->4(sayi1 değerine ilk eşitlendiği için 4), sayi1->5
$sayi3=++$sayi1;*/// sayi3->6(sayi1 ilk arttırılıyor sonra sayi3'e eşitlendi) sayi->6
//container son hali: sayi1-6 sayi2-4 sayi3-6
/*echo "1 sayim: $sayi1";
echo "<br>";
echo "2 sayim: $sayi2";
echo "<br>";
echo "3 sayim: $sayi3";*/
// 6 4 6 oldu

/*$sayi1=10;
$sayi2=$sayi1++;// sayi1'i sayi2'ye eşitlendi sonra sayi1'i bir arttırdı. sayi1->11 sayi2->10 
$sayi3=++$sayi1;*/// sayi1'i bir arttırdı sonra sayi3'e eşitledi. sayi1->12 sayi3->12

/*echo "1 sayim: $sayi1";
echo "<br>";
echo "2 sayim: $sayi2";
echo "<br>";
echo "3 sayim: $sayi3";*/
//container son hali: sayi1-12 sayi2-10 sayi3-12
//---------------------------------------------------------*************************---------------------
// ASSİGMENT OPERATORS( ATAMA OPARETÖRLERİ)
//İŞLEM ÖNCELİĞİ VIRT ZIRT.
/*$sayi1=10;
$sayi2=20;

$Toplam= 10*$sayi1+20/$sayi2;
echo $Toplam;*/
//---------------------------------------------------------*************************---------------------
// KARŞILAŞTIRMA OPERATÖRLERİ

//echo "x"=="x"; //string olarak yazınca eşit diyor ve "1" yazdırıyor.
//echo 5==5; //int olarak yazınca eşit diyor ve "1" yazdırıyor.
//echo 1=="1" //biri int biri string olduğu halde sadece değerini sorguladığı için eşit sayar 1 yazdırır
//echo 5===5.0; //Üç tane = olunca hem değeri hem tipininde eşit olmalı.5 int'tir 5.0 double dır!
//echo "x"!="y";// "!=" EŞİT DEĞİL Mİ? DEMEKTİR! 1 YAZARSA EŞİT DEĞİL DEMEKTİR.
//echo "x"<>"y"; // FARKLI MIDIR? SORUSUNU SORARIZ! 1 YAZARSA FARKLIDIR DEMEKTİR.
//echo 1!==1.0;// hem değer hem tip olarak eşit değil mi? sorusunu soruyoruz.
//echo 5>4; // 5 4'ten büyük mü diye soruyoruz.
//---------------------------------------------------------*************************---------------------
//MANTIKSAL OPERATÖRLER
//)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))
//)AND=>&/and şeklinde kullanılabilir. 1-1=1 0-0=0 olmalı. 2 Değişkenden biri 0 olması sonucu her zaman 0 yapar.
    /*echo true and true; //İKİSİDE DOĞRU
    echo "<br>";
    echo 5>4 and 7>6;   // İKİSİDE BÜYÜK DOĞRU YANİ! 
    echo "<br>";
    echo 5>4 && 7>6;*/    // and yerine && kullanılabilir
//)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))
//)OR=> VEYA olarak kullanılabilir. Herhangi bir durumdan biri doğru olması yeter. 1-0=1 0-1=0 1-1=1 0-0=0
    /*echo true or false;
    echo "<br>";
    echo 5>4 or 7<6;
    echo "<br>";*/
//)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))
//)XOR=> AYNI ise 0 Farklı ise 1 olur.
/*echo 5>4 xor 4<3;
echo "<br>";
echo true xor false;
echo "<br>";
$A=4>3;
$B=3>4;
echo (!$A and $B) or ($A and !$B);
echo "<br>";
$anahtar=3>4;
echo !$anahtar;*/


?>