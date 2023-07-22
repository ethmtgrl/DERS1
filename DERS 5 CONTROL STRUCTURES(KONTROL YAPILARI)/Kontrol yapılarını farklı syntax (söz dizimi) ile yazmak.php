<?php
echo "<h1>İF ELSE FARKLI(SYNTAX) İLE YAZMAK</h1>";
$yaş=19;
if ($yaş>18):
    echo "hojgeldin";
else:
    echo "siteye giremen gardaşcım";
endif;
echo "<br>";
    echo "<h1>BİR BAŞKA SWİTCH CASE KULLANIMI</h1>";
    echo "<br>";
    $tatilgünü="pazartesi";
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
    



























?>