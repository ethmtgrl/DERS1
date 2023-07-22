<?php
$ismegöreyaslar= array("ethem"=>17,"tuğrul"=>32,"muharrem"=>52);
//KEY(ETHEM)=>VALUE(17)
echo $ismegöreyaslar["ethem"];
echo"<br>";
echo $ismegöreyaslar["muharrem"];
echo"<br>";
echo $ismegöreyaslar["muharrem"]=7;//array'ın içine atamalar yapmayıp hatta başına echo yazarak değiştirdiğimiz değeri atayabiliriz.
echo"<br>";
echo gettype($ismegöreyaslar["muharrem"]);//hangi tipte olduğunu görüyoruz

?>