<?php
$i=["galatasaray","fenerbahçe","beşiktaş","trabzon"];//BURADA SADECE YAZDIĞIMIZ STİNGLER BİR DEĞERDİR. 0=>"GALATASARAY"
$bilgi=["galatasay"=>"fatih terim","fenerbahçe"=>"ersun yanal","beşiltaş"=>"abdullah avcı","trabzonspor"=>"ünal kahraman"];//HEM KEY HEM VALUES ATAMASI YAPTIK.
foreach ($bilgi as $key=>$value){
    echo $key."=>".$value."<br>";
}
foreach($i as $key=>$value){
    echo $key."=>".$value."<br>";
}


















?>