<?php

function nedir($durum,$emlak){
	$durum == "Kiralik" ? $durum="Kiral&#305;k" : $durum="Sat&#305;l&#305;k";
	echo $durum;
	echo " ";
	echo $emlak;
}
function birim($cur){
	if($cur=="trl"){$tur="TL";}
	if($cur=="usd"){$tur="$";}
	if($cur=="eur"){$tur="€";}
	echo $tur;
}
function ist($durum,$emlak){
	$sql = mysql_query("select * from `adverts` where `status`='Yayinda' and `durum`='".$durum."' and `emlak`='".$emlak."'");
	echo mysql_num_rows($sql);
}

?>