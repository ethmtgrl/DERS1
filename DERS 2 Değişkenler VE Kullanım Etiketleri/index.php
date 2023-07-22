<!DOCTYPE html>
<html lang="en">
<head>
    <title>Değişkenler</title>
</head>
<body>
    <?php

/*$isimlisteleri=["ethem","tuğrul","araç"];
$ifade=implode(" ",$isimlisteleri);
print_r($ifade);
//explode - stringi bir takım işlemden geçirerek diziye dönüştürür.
//implode- diziyi bir takım işlemden geçirerek stringe dönüştürür.
/*$isimler="ethem,tuğrul,araç";
$isimlistesi= explode(",",$isimler);
print_r($isimlistesi);*/

    $İsim="Ethem Tuğrul";
    $surname="Araç";
    $fullname=$İsim." ".$surname;

    $takim="Galatasaray";
    print_r(strtolower/*strtolower harflerin hepsini küçültür.*/($takim));
    print_r(strtoupper/*strtoupper harflerin hepsini büyültür.*/($takim));
    //print_r(str_replace(" ","",$takim));
    //strlen kaç karakterden oluştuğunu söyler
    //print_r(strlen($takim));
    //print_r(substr($takim,6));//kaçıncı harften sonrasını almak için!
    //print_r(substr($takim,0,6));//0-6 karakteleri al!



    //----------------------------------------------------------------------

    //echo $$DegiskenDegeri;// "$$" demek: konteynıra git oradaki isimi değer olarak alıp yine konteynıra git ve yazdır!


//--------------------------------------------------------------------------------------------------------
/*$yas=25;

function yasSoyle(){
    global $yas;//{} lokal alan dışında bir değeri çağırmak için "global" değişkenini kullanıyoruz.
    echo $yas;
}


yasSoyle();
//-------------------------------------------------------------------------------
/*$isim="ETHEM";
echo "Ethem\t$isim\tTuğrul";*/
//-------------------------------------------------------------------------------
    /*$stringisim="ethem tuğrul";
    $stringisimi="26";
    $intSayi=/*tam sayı değer*/ /*5;*/
    /*$floatkesirlisayı=6.7;
    $boolAnahtar=false;/*false yazıldığında bir değeri olmadığı için yazdırılmıyor*/

    //"gettype" fonksiyonu değişkenin tipini sırasıyla yazdırır.
    /*echo gettype($stringisim)."\n";/*"\n" bir new line oluşturur*/
    /*echo gettype($stringisimi)."\n";
    echo gettype($intSayi)."\n";
    echo gettype($floatkesirlisayı)."\t";/*"\t" tab kadar boşluk bırakır*/
    //echo gettype($boolAnahtar)."\n";

    //echo $stringisim." ".$intSayi." ".$floatkesirlisayı." ".$boolAnahtar;/*isim gibi yanyana yazdırılması için "." koyulur.*/ 
    //echo "<br>",$intSayi+$stringisimi;/*"+" koyarsak toplamak ister!*/












    /*$isim= "ETHEM";
    $isim="FATİH";
    $isim=5;
    
    define("pi",3.14,false);
    define("kalp",5,false);
    //define(Sabit değerde bir veri oluşturmak için kullanılan fonksiyon, TRUE VEYA FALSE);
    echo kalp,"<br>",pi,"<br>","$isim";
    echo "<br>",kalp." ".pi;*/
    


    //$= KAPSAYICI DEMEK-CONTAİNER
     /*$isim= "ethem";
     $yas=25;
     $notortalaması=78.4;
     $_2=54;
     echo $yas+$notortalaması."<br>";*/
     //echo $isim+$yas+$notortalaması
     //yaş ve notortalaması sayı olduğu için toplama ihtiyacı oluyor o yüzden hata veriyor.
//$2h diyemeyiz $h2 diyebiliriz.
//değişkenler case-sensitive'dir. Büyük küçük harf duyarlıdır.
     //echo $isim." ".$yas." ".$notortalaması." ".$_2;
     //ARALARINA "." KOYARSAK HARFLERİ VE RAKAMLARI YAZABİLİRİZ.
     
     //echo "<br>".$isim."<br> ".$yas."<br>".$notortalaması."<br> ".$_2;
     //<br> etiketi ile alt satıra atabiliriz.
      
     
     //alphanumeric a-z 0-9

    ?>
</body>
</html>