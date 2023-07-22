<?php
echo "<h1>İF ELSE FARKLI(SYNTAX) İLE YAZMAK</h1>";
$yaş=19;
if ($yaş>18):
    echo "Hoşgeldiniz.";
else:
    echo "Siteye Giremezsiniz.";
endif;
echo "<br>";
    echo "<h1>BİR BAŞKA SWİTCH CASE KULLANIMI</h1>";
    echo "<br>";
    $tatilgünü="sali";
    switch ($tatilgünü)://switch işleminde de süslü parantezleri yerine ":" koyabiliriz. kodu bitirincede "endswitch;" kodunu yazıyoruz.
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
        endswitch;
        echo "<br>";
        echo "<h1>İF ELSE YAPISINI HTML ETİKETLERİ İÇERİSİNDE KULLANMA</h1>";
        echo "<br>";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $yaşı=19;?>
    <?php if ($yaşı>18):?>
    <p style="color:green">Siteye Hoşgeldiniz</p>

    <?php else:?>
    <p style="color:red">Siteye Giremezsiniz</p>
    <?php endif?>
    <?php
    $yaş=19;
if ($yaş>18):
    echo "<p style=\"color:green;\">Hoşgeldiniz.</p>";// RENK AYARLARINI BURADAN YAPABİLİRİZ.
else:
    echo "Siteye Giremezsiniz.";
endif;
echo "<br>";
$YAŞ=15;
$YAŞ=$YAŞ>18?"Siteye Hoşgeldiniz": "Siteye Giremezsiniz";
//$YAŞrenk = $YAŞ>18 ? "green" : "red";
?>
<p style= "color: <?php echo $YAŞ>18 ? "green" : "red" ?>; "> <?php echo $YAŞ ?> </p> <?php //BU ŞEKİLDE DE YAPABİLİRİZ RENK AYARLARINI.
</body>
</html>