<?php
/* 
1) Kategoriler dizisini oluştur.
2) Bütün kategorileri göster.
3) Bütün telefon kategorilerini, televizyon markalarını ve beyaz eşya kategorilerini göster.
4) Bütün android telefon markalarını göster.
5) Bütün iphone telefon markalarını göster.
6) Bütün televizyon markalarını göster.
7) Bütün buzdolabı markalarını göster.




KATEGORİLER
    1.ELEKTRONİK
        1.TELEFONLAR
            1.ANDROİD
                1.SAMSUNG
                2.HUAWEİ
            2.IPHONE
                1.7 PLUS
                2.8 PLUS
            3.DİĞER
        2.TELEVİZYONLAR
            1.SAMSUNG
            2.LG
            3.VESTEL
            4.PHİLİPS
    2.BEYAZ EŞYA
        1.ÇAMAŞIR MAKİNESİ
        2.BULAŞIK MAKİNESİ
        3.BUZDOLABI
            1.HOTPOİNT
            2.BOSH
            3.SAMSUNG
*/
//1)Kategoriler dizisini oluştur.
//altında eleman varsa boş bırakmalıyız sonra doldurabiliriz. KATMAN KATMAN İLERLENMELİ.
$kategoriler=[
    "Elektronik"=>[
        "Telefonlar"=>[
            "Android"=>[
                "Samsung",
                "Huawei"
            ],
            "Iphone"=>[
                "7 PLUS",
                "8 PLUS"
            ],
            0=>"Diğer"
        ],
        "Televizyonlar"=>[
            "Samsung",
            "LG",
            "Vestel",
            "Philips"
        ]
    ],
    "Beyaz Eşya"=>[
        "Çamaşir Makinesi",
        "Bulaşik Makinesi",
        "Buzdolabi"=>[
            "Hotpoint",
            "Bosh",
            "Samsung"
        ]
    ]
];
echo "<b>BÜTÜN KATEGORİLERİ VE ALTLARINI GÖSTERDİK BURADA</b>";
echo "<br>";
foreach ($kategoriler as $kategori){
    print_r ($kategori);
    echo "<br>";
}
echo "<b>SADECE ELEKTRONİK VE BEYAZ EŞYA OLAN BİR ALT KATEGORİLERİNİ GÖSTERDİK.</b>";
echo "<br>";
foreach ($kategoriler as $key=>$value){
    echo $key."<br>";
}
echo "<br>";
echo "<b>3) Bütün telefon kategorilerini, televizyon markalarını ve beyaz eşya kategorilerini göster.</b>";
echo "<br>";

foreach ($kategoriler["Elektronik"]["Telefonlar"] as $key=>$value){
    if(gettype($key)=="string"){//KEY STRİNG İSE $KEY BASTIR DEĞİL İSE VALUE BASTIR DEMEK İSTEDİK VE "DİĞER'İ" BASTIRABİLDİK
        echo $key,"<br>";
    }
    else{
        echo $value."<br>";
    }
    
}
echo "<br>";
echo "<b>4) Bütün android telefon markalarını göster.</b>";
echo "<br>";

foreach ($kategoriler["Elektronik"]["Telefonlar"]["Android"]as $telefon){
    echo $telefon."<br>";

}
echo "<br>";
echo "<b>5)Bütün iphone telefon markalarını göster.</b>";
echo "<br>";
foreach ($kategoriler["Elektronik"]["Telefonlar"]["Iphone"]as $telefon){
    echo $telefon."<br>";
}

echo "<br>";
echo "<b>6) Bütün televizyon markalarını göster.</b>";
echo "<br>";
foreach($kategoriler["Elektronik"]["Televizyonlar"]as $televizyon){
    echo $televizyon."<br>";
}

echo "<br>";
echo "<b>7) Bütün buzdolabı markalarını göster.</b>";
echo "<br>";
foreach ($kategoriler ["Beyaz Eşya"]["Buzdolabi"] as $buzdolabi) {
    echo $buzdolabi."<br>";
}
echo "<br>";
echo "AŞAĞIDA MARKALARA . KOYABİLMEK İÇİN HTML KODLARI İLE BODY'NİN İÇİNE KODLARIMIZI YAZDI.";
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
    <ul>
        <?php
    foreach ($kategoriler ["Beyaz Eşya"]["Buzdolabi"] as $buzdolabi) {
    echo "<li>$buzdolabi.</li>";
}
echo "<br>";
?>
<?php foreach ($kategoriler ["Beyaz Eşya"]["Buzdolabi"] as $buzdolabi): ?>
<li> <?php echo $buzdolabi ?> </li>
<?php endforeach; ?>
    </ul>
</body>
</html>