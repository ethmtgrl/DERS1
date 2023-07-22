<?php
// 1 trim() KIRPMAK DEMEKTİR.BAŞINDAKİ VE SONUNDAKİ HARFLERİ VS. KIRPAR.
/*$isim="AA      Ethem TUĞRUL ARAÇ AA";


$kirpilmisHali= trim(trim($isim,"A")," ");
echo $kirpilmisHali;*/
//----------------------
//2  ltrim() LEFT YANİ SOLUNDAKİ BOŞLUKLARI VEYA DİĞER KARAKTERLERİ KIRPABİLİRSİNİZ.
/*$isim="AA      Ethem TUĞRUL ARAÇ AA";


$kirpilmisHali= ltrim($isim,"A");
echo $kirpilmisHali;*/
//-------------------------
//3  rtrim()RIGHT YANİ SAĞINDAKİ BOŞLUKLARI VEYA DİĞER KARAKTERLERİ KIRPABİLİRSİNİZ.
/*$isim="AA      Ethem TUĞRUL ARAÇ AA";


$kirpilmisHali= rtrim($isim,"A");
echo $kirpilmisHali;*/
//-----------------------------
// 4 strstr() FONKSİYONU SAMANLIKTA İĞNE ARAMAKTIR.
/*$isim="Ethem TUĞRUL ARAÇ";

echo strstr($isim,"U",false[BURADA FALSE DERSEK "U" HARFİNDEN SONRASINI GÖSTERİR. TRUE DERSEK ÖNCESİNİ GÖSTERİR.]);*/

//-------------------------------
//5  ucwords() KELİMELERİN İLK HARFİNİ BÜYÜK YAPAR.
/*$isim="ethem tuğrul araç";
echo ucwords($isim);*/
//---------------------------------
//6  ucfirst() YAZDIRILMAK İSTENEN KELİMENİN İLK HARFİNİ BÜYÜK YAPAR 
/*$isim="eTHEM TUĞRUL ARAÇ";
echo ucfirst($isim);*/
//-----------------------------------------
//  strpos() ARADIĞINIZ HARF VEYA KELİMEYİ SİZE İNT OLARAK YANİ SAYI OLARAK BULUR!
/*$isim="ethem tuğrul araç";
echo strpos($isim,"em");*/
//--------------------------------------------------
//  str_repeat() KAÇ DEFA YAZDIRMAK İSTERSEN O KADAR YAZDIRIR.
/*$isim="ethem tuğrul araç";
echo str_repeat($isim,"<br>",10[KAÇ DEFA YAZILACAĞINI BELİRTİYORUZ!"]);*/
//------------------------------------------------
// "<pre>""</pre>" etiketi olduğu gibi boşlukları vs gösteren bir etikettir.
/*$isim="AA      Ethem TUĞRUL ARAÇ AA";


$kirpilmisHali= rtrim($isim,"A");
echo "<pre>".$kirpilmisHali."</pre>";*/



