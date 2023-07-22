<?php
//1)3 TANE ÇEMBER OLUŞTURACAĞIZ. GENİŞLİK VE YÜKSEKLİK DEĞERLERİ AYNI OLABİLİR
//---- ALANI VE ÇEVRESİ MERKEZDE YAZSIN.
define("PI",3.14,true);

$yükseklik=250;
$genislik= 250;

$alan=PI *($yükseklik/2)*($genislik/2);
$çevre=2 * PI * ($genislik/2);

$yükseklik.="px";
$genislik.="px";
//AŞAĞIDA BORDER-RADİUS İLE ÇEMBER HALE GETİRDİK.
//AŞAĞIDA display:inline-block; DİV{ARASINA} YAZARAK YAN YANA ÇEMBERLERİMİZİ YAZDIRDIK.
echo "<style>
div{
    display:inline-block;
}
.cember{
    height:$yükseklik;
    width:$genislik;
    background-color:blue;
    border-radius: 50%;
}
</style>";
echo "<div class=\"cember\" style=\"color: red; text-align:center; \">Alan: $alan <br> Çevre: $çevre </div>
<div class=\"cember\" style=\"color: red; text-align:center; \">Alan: $alan <br> Çevre: $çevre </div>
<div class=\"cember\" style=\"color: red; text-align:center; \">Alan: $alan <br> Çevre: $çevre </div>";
// 3 TANE ÇEMBERİ YAPABİLMEK İÇİN;

































?>