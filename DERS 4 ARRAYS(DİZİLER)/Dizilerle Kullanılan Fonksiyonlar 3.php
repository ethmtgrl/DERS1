<?php
echo "<h1>ARRAY İLE BAŞLAYAN FONKSİYONLAR</h1>";
echo "<br>";
echo "<b>1)ARRAY_KEY_EXİSTS</b>";// KEY ARAR. ÇOK BOYUTLU İÇ İÇE GEÇMİŞ ANAHTARLARI BULAMAZ.
/*function my_array_key_exists($key,$array){
    foreach($array as $key=>$value){
        if ($k===$key){
            return true;
        }
        if(is_array($v)){
            return my_array_key_exists($key,$v);
        }
    }
    return false;
}*/
$bilgi=[
    "ad"=>"ethem tuğrul",
    "soyad"=>"araç",
    "Bildiği Programlama Dilleri"=>[
            "Backend"=>["C#","PHP"]
        ]
];
echo "<br>";
if (array_key_exists("Bildiği Programlama Dilleri",$bilgi)){
    echo "anahtar var";
}
echo "<br>";
echo "<b>2)ARRAY_REVERSE</b>";//ARRAYLERİN KEYS LERİNİ TAM TERSİ BİR ŞEKİLDE SIRALAR.
echo "<br>";
$bilgi= array_reverse($bilgi);
print_r($bilgi);
echo "<br>";
echo "<b>3)ARRAY_KEYS</b>";//ARRAYLERİN ALTINDA Kİ KEYS LERİ VERİR.
echo "<br>";
$bilgianahtarlari=array_keys($bilgi);
print_r($bilgianahtarlari); 
echo "<br>";
echo "<b>4)ARRAY_VALUES</b>";//ARRAYLERİN DEĞERLERİNİ BASTIRIR VE SIRALAR.
echo "<br>";
$bilgideğerleri=array_values($bilgi);
print_r($bilgideğerleri);
echo "<br>";
echo "<b>5)ARRAY_COUNT_VALUES</b>";//ARRAYİN KAÇ TANE ELEMANI OLDUĞUNU VE KAÇAR TANE OLDUĞUNU  SÖYLER.
echo "<br>";
$bilgi2=[1,2,3,4,5,6,7,4,5,6,7,8,2,3];
$bilgideğerleri=array_count_values($bilgi2);
print_r($bilgideğerleri);
echo "<br>";
echo "<b>6)ARRAY_SEARCH</b>";//ARRAYİN İÇİNDE VERDİĞİNİZ DEĞERİN ANAHTARINI ARATIYOR, VE YAZDIRIYOR.
echo "<br>";
$bilgi3=["ad"=>"ETHEM","soyad"=>"ARAÇ","yas"=>"25","meslek"=>"ÖĞRETMEN"];
$bilgiarama=array_search("ÖĞRETMEN",$bilgi3);
print_r($bilgiarama);
echo "<br>";
echo "<b>7)ARRAY_FLİP</b>";//ARRAY'İN İÇİNDEKİ KEYLERLE VALUE LARI YER DEĞİŞTİRDİ VE YAZDIRDI.
echo "<br>";
$bilgi4=["ad","soyad","yas","meslek"];
$bilgiarama=array_flip($bilgi4);
print_r($bilgiarama);
echo "<br>";
echo "<b>8)ARRAY_SUM</b>";//ARRAY'İN İÇİNDEKİ ELEMANLARI TOPLAR.
echo "<br>";
$bilgi5=[1,3,4,5];
$bilgiarama=array_sum($bilgi5);
print_r($bilgiarama);
echo "<br>";
echo "<b>9)ARRAY_PRODUCT</b>";//ARRAY'İN İÇİNDEKİ ELEMANLARI ÇARPAR.
echo "<br>";
$bilgiarama=array_product($bilgi5);
print_r($bilgiarama);
echo "<br>";
echo "<b>10)ARRAY_RAND</b>";//ARRAY'İN İÇİNDEKİ KEYSLERİ RASTGELE VERİR. 
echo "<br>";
$bilgi6=["isim"=>"ETHEM","soyad"=>"ARAÇ","yaş"=>"25","hanimi"=>"teslime"];
$bilgiarama=array_rand($bilgi6,2);//($....,kaç keys yazacağını söyleriz);
print_r($bilgiarama);
echo "<br>";
echo "<b>11)ARRAY_İNTERSECT</b>";//2 FARKLI KESİŞEN DEĞERLERİNİ YAZDIRIR.
echo "<br>";
$bilgi7=["isim"=>"ETHEM","soyad"=>"ARAÇ","yaş"=>"25","hanimi"=>"teslime"];
$bilgi8=["isim"=>"ETHEM","soyad"=>"ARAÇ",];
$bilgiarama=array_intersect($bilgi7,$bilgi8);//($....,2.$.....);
print_r($bilgiarama);
echo "<br>";
echo "<b>12)ARRAY_SHİFT</b>";//ARRAY'İMİZİN İÇİNDEKİ İLK DEĞERİ KAYDIRIR.
echo "<br>";
$bilgideğer=array_shift($bilgi7);
print_r($bilgideğer);//İLK ELEMANI KAYDIRDIĞI İÇİN SADECE ONU YAZDIRIR,YANİ ÇIKARIP YAZDIRIYOR
echo "<br>";
print_r($bilgi7);//İLK ELEMANI KAYDIRDIĞI İÇİN YANİ ÇIKARDIĞI İÇİN DİĞER KALAN ELEMANLARI GÖSTERİR.
echo "<br>";
echo "<b>13)ARRAY_UNSHİFT</b>";//ARRAY'İMİZİN İÇİNDEKİ DEĞERLERİ KAYIDIRIR VE BAŞINA İSTEDİĞİMİZ KADAR ELEMAN EKLEYEBİLİRİZ.
echo "<br>";
$bilgideğer=array_unshift($bilgi7,"HANIMI","TESLİME");
print_r($bilgideğer);//ELEMANLARI KAYDIRARAK YAZDIRDIĞI ELEMAN SAYISINI BİZE VERİYOR
echo "<br>";
print_r($bilgi7);//ELEMANLARIN KAYYDIRILMIŞ VE EKLENMİŞ HALİ İLE YAZDIRIYOR.
echo "<br>";
echo "<b>14)ARRAY_COMBİNE</b>";//BİRİ KEYS VE BİRİ VALUE OLACAK ŞEKİLDE İKİ TANE ARRAYİ TEK ÇATI ALTINDA BİRLEŞTİRİR.
echo "<br>";
$keys=["isim","soyad","yaş","hanimi"];
$value=["ethem","araç",25,"teslime"];
$bilgicombine=array_combine($keys,$value);
print_r($bilgicombine);
echo "<br>";
echo "<b>15)ARRAY_MAP</b>";//DEĞERLERİ DÖNDÜRÜR VE İŞLEM UYGULAR.
echo "<br>";
function iki_ile_carp($değer){
    return $değer*5;//HER DEĞERİ DÖNDÜREREK BİR TAKIM İŞLEMLER YAPTIRIYORUZ.
}
$sayilar=[2,3,4,5,6];

$guncellenmissayilar=array_map("iki_ile_carp",$sayilar);
print_r($guncellenmissayilar);
echo "<br>";

function basa_ekle($şehirler){
    return $şehirler."İSTANBUL";

}
$ilçeler=["kadiköy","beşiktaş","florya","atasehir"];
$ilveilçeler = array_map("basa_ekle",$ilçeler);
print_r ($ilveilçeler);
echo "<br>";
echo "<b>16)ARRAY_FİLTER</b>";//İNT YA DA STRİNG'İ FİLTRELİYORUZ.
echo "<br>";
$sayilar2=["ethem","tuğrul","teslime","teslime","merhaba"];
$filtrelenmişsayilar=array_filter($sayilar2,function ($değerler){
    //return $değerler=="teslime";//BURADA BİR STRİNG İFADEYİ FİLTRELEDİK.
    //return $değerler>1 and $değerler<3; İNT İFADEYİ DEĞERLER ARASINDA FİLTRELEDİK.
    return strstr($değerler,"et");//strstr fonksiyonu string dönderir ve needle bulmamızı sağlıyor.
});
print_r($filtrelenmişsayilar);

?>