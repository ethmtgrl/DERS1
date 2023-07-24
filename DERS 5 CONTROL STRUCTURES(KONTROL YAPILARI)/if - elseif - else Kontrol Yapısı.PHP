<?php
//0-45 Sınıfta kaldınız
//45-70 belge alamadınız       
//70-85 teşekkür aldınız         
//85-100 takdir aldınız
echo "<h1> İF ELSE KULLANIMI</h1>";
$NotOrt=151;
if($NotOrt>100){
    echo "lütfen 0-100 arası not ortalaması giriniz.";
}
elseif($NotOrt>=85 ){
            echo "TAKDİR ALDINIZ";
}
elseif($NotOrt>=70){//ELSEİF KOMUTU ÜSTTEKİ KOMUT ÇALIŞMAZ BUNA GEÇİRİR KONT EDER.
    echo "TEŞEKKÜR ALDINIZ";
} 
elseif($NotOrt>=45){
    echo "Belge alamadınız";
}
elseif ($NotOrt>=0){
    echo "SINIFTA KALDINIZ";
}
else{
    echo "lütfen 0-100 arası not ortalaması giriniz.";
}




/*$sayi1=20;
$sayi2=10;
$karsilastirma= $sayi1>$sayi2;
echo gettype($karsilastirma);
echo "<br>";
echo $karsilastirma;
echo "<br>";
if ($karsilastirma==true){
    echo "İşlem Doğru";
}
else{
    echo "İşlem Yanliş";
}*/
echo "<h1> ELSEİF KULLANIMI</h1>";
echo "<br>";

$sayi1=10;
$sayi2=20;
$islem="ASDASD";

if($islem=="toplama"){
    echo $sayi1+$sayi2;
}
elseif($islem=="cikarma"){
    echo $sayi1-$sayi2;
}
elseif($islem=="carpma"){
    echo $sayi1*$sayi2;
}
elseif($islem=="bölme"){
    echo $sayi1/$sayi2;
}
elseif ($islem != "toplama" or $islem!="cikarma" or $islem!="carpma" or $islem!="bölme"){
    echo "böle bir islem yapımaamış";
}
ECHO "<BR>";


$olasilik= 0.2; //0 la 1 arası olasiliktir.
if ($olasilik>=1) {
    echo "OLASILIK DEĞİL OLACAKTIR";
}
elseif ($olasilik>0.7){
    echo "yüksek olasilik";
}
elseif ($olasilik>0.4) {
    echo "normal olasilik";
}
elseif ($olasilik>0.1) {
    echo "düşük olasilik";
}
elseif ($olasilik>0){
    echo "çok düşük olasilik";
}
else {
    echo "Olasilik değeri her zaman 0 ile 1 arasında olmalıdır";
}
echo "<br>";
echo "<h1>BİR BAŞKA ŞEKİLDE İF ELSE KULLANIMI</h1>";
echo "<br>";

$sayi3=20;
$sayi4=10;
$değer=$sayi3>$sayi4 ? "Büyüktür":"Küçük ya da eşittir.";
echo $değer;
echo "<br>";
$sayi5=25;
$sayi6=15;
$değer2 =$sayi5>$sayi6?"$sayi5 $sayi6 ten Büyüktür":"$sayi6 $sayi5 ten küçük ya da eşittir."; //İF ELSE YUKARIDAKİ KOMUTLARI BÖYLEDE KULLANABİLİYORUZ.
echo $değer2;
echo "<br>";
$değer1="pazartesi";//0 dışında her rakamı true olarak kabul eder. 0 false demek.
switch ($değer1) {
    case false:
        echo "false";
    break;
    case true:
        echo "true";        
    break;
    default:// her iki case tutmazsa default bir durum oluştarabiliriz.
    echo "0 ya da 1 değeri olmalidir.";
    }
    echo "<br>";
    echo "<h1>SWİTCH CASE KULLANIMI</h1>";
    echo "<br>";
    $gun="salı";
    switch ($gun) {
        case 'pazartesi':
            echo "HAFTANIN 1. GÜNÜ.";
            break;
        case "salı";
            echo "HAFTANIN 2. GÜNÜ.";
            break;
        case 'çarşamba':
            echo "HAFTANIN 3. GÜNÜ.";
            break;
        case 'perşembe':
            echo "HAFTANIN 4. GÜNÜ.";
            break;
        case 'cuma':
            echo "HAFTANIN 5. GÜNÜ.";
            break;
        case 'cumartesi':
            echo "HAFTANIN 6. GÜNÜ.";
            break;
        case 'pazar':
            echo "HAFTANIN 7. GÜNÜ.";
            break;
           
        default:
            echo "LÜTFEN HAFTANIN BİR GÜNÜNÜ GİRİNİZ.";
    }
    echo "<br>";
    echo "<h1>BİR BAŞKA SWİTCH CASE KULLANIMI</h1>";
    echo "<br>";
    $tatilgünü="pazartesi";
    switch ($tatilgünü) {
        case 'pazartesi':
        case "sali":
        case "çarşamba":
        case "perşembe":
        case "cuma":
            echo "Bugün çalışma günüdür.";
            break;
        case 'cumartesi':
        case "pazar":
            echo "Bugün tatil günüdür";
            break;
        default:
            echo "LÜTFEN HAFTANIN BİR GÜNÜNÜ GİRİN.";
            break;
    }
    echo "<br>";
if ($tatilgünü=="pazartesi" or $tatilgünü=="sali" or $tatilgünü=="çarşamba" or $tatilgünü=="perşembe" or $tatilgünü=="cuma") {
    echo "bugün çalışma günüdür";
}
elseif ($tatilgünü== "cumartesi" or $tatilgünü=="pazar") {
    echo "bugün tatik günüdür";
}
else {
    echo "LÜTFEN HAFTANIN BİR GÜNÜNÜ GİRİN";
}

echo "<br>";
    echo "<h1>TERNARY OPERATOR-ÜÇLÜ OPERATOR</h1>";
    echo "<br>";
$age=17;
if($age>18){
    echo "siteye hoşgeldin";
}
else {
    echo "18+";
}
echo "<br>";
$yaş=17;
$yaşa= $yaş>18?"siteye hoşgeldinn":"Siteye giremezsin";// 18 den büyükse : solunu yazdırır deüil ise sağındakileri yazdırır.
echo $yaşa;


?>