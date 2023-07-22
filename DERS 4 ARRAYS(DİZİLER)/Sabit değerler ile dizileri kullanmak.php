<?php
//sabit değişken= define demek.
define("öğrenci",[
    "isim"=>"Ethem",
    "soyad"=>"Araç",
    "okul no"=>135,
    "matematik_notlari"=>[
        "Vize Sinavlari"=>[
        "1. Sinav"=>67,
        "2.Sinav"=>76,
        ],
        "final sinavi"=>98
        ]
    
]);
$vize_notlari=[];
foreach(öğrenci["matematik_notlari"]["Vize Sinavlari"]as $vize_not){
    array_push($vize_notlari,$vize_not);
}
$final_notu=öğrenci["matematik_notlari"]["final sinavi"];
$ortalama=$vize_notlari[0]*25/100 + $vize_notlari[1]*35/100+ $final_notu*40/100;
echo $ortalama;
echo "<br>";
$final_notu=[];
//final_notu[2] diyerek 2 vize notlarının 2 elemanını da almasını sağladık. 0 olsa 0 ve 1 değerlerini verir.
$final_notu[count($vize_notlari)]=öğrenci["matematik_notlari"]["final sinavi"];
//aşağıda iki array'i merge yani birleştirirken final notuna ekledik.
$notlar=$final_notu+$vize_notlari;
print_r($notlar);

?>