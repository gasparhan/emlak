<?
	include "config.inc.php";
	include "functions.php";
	$sql = mysql_query("select * from `adverts` where `masterid`='".$_GET['masterid']."' and `status`='Yayinda'");
	$row = mysql_fetch_array($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Patlat.NET - By Enfeksiyonel | Satılık ve Kiralık Konut, Kiralık Daire, Satılık Arsa, Satılık Gayrimenkul</title>
<meta http-equiv="content-Type" content="text/html; charset=windows-1254" />
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="pragma" content="no-cache" />
<meta name="Title" content="MEDIATASARIM" />
<meta name="author" content="Cem KURT cem@mediatasarim.com" />
<meta name="publisher" content="Media Tasarım" />
<meta name="copyright" content="Media Tasarım" />
<meta name="keywords" content="kiralık daire, satılık daire, kiralık dükkan, satılık dükkan, kiralık arsa, satılık arsa, gayrimenkul, gayri menkul, daire, konut, emlak" />
<meta name="description" content="kiralık daire, satılık daire, kiralık dükkan, satılık dükkan, kiralık arsa, satılık arsa, gayrimenkul, gayri menkul, daire, konut, emlak" />
<meta name="page-topic" content="trade" />
<meta name="audience" content="all" />
<meta name="robots" content="index,follow" />
<map name="Map" id="Map">
	<area shape="rect" coords="50,171,133,188" href="index.php" />
	<area shape="rect" coords="146,171,241,188" href="about.php" />
	<area shape="rect" coords="256,171,338,188" href="sales.php" />
	<area shape="rect" coords="353,171,438,188" href="rents.php" />
	<area shape="rect" coords="452,171,568,188" href="search.php" />
	<area shape="rect" coords="583,170,648,187" href="contact.php" />
</map>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/stil.css" rel="stylesheet" type="text/css" />
</head>
<body style="margin:0px; background-color:#e3e5e7;">
<script type="text/javascript" language="javascript">
<!--
	function popIt(image){
		var image,wind;
		wind = window.open(image,"","width=800,height=600,scrollbars=no,resizable=no");
		with (wind.document){
			writeln("<body style='margin:0;'>");
			writeln("<img src="+image+" style='display:block'></body>");
		}
	}
-->
</script>
<!-- HEADER -->
<p style="background-color:#003366; text-align:center; margin:0;"><img src="images/tools/banner.gif" border="0" usemap="#Map" /></p>

<!-- MAIN -->
<table width="700" align="center" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td style="background-color:#ffffff; vertical-align:top; width:500px; padding-top:5px;">
		<div style="width:480px; margin-left:10px;">
			<div><img src="images/headers/details.gif" width="150" height="20"></div>
			<div style="margin-top:5px;"><img src="images/tools/sepred.gif" width="480" height="4"></div>
			<div style="margin-top:5px;">
				<table cellspacing="0" cellpadding="0" border="0" style="border:1px solid #ccc;">
					<tr>
						<td class="detailL"><font class="font_8g">&#304;lan Numaras&#305;&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['masterid'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">&#304;lan Tarihi&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo date("d.m.Y",$row['b_tarih']);?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Emlak Tipi&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? nedir($row['durum'],$row['emlak']);?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Emlak &Ccedil;e&#351;idi&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['cesit'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">&#350;ehir Ad&#305;&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['sehir'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Semt Ad&#305;&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['semt'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Mahalle Ad&#305;&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['mahalle'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Emlak Fiyat&#305;&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['fiyat']." "; birim($row['birim'])?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Depozito&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['depozit'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Aidat&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['aidat'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Emlak Büyüklügü&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['buyukluk'];?> m&sup2;</font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Oda Say&#305;s&#305;&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['o_sayi'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Salon Say&#305;s&#305;&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['s_sayi'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Banyo Sayisi&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['b_sayi'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Kat Sayisi&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['k_sayi'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Binan&#305;n Yap&#305;m Y&#305;l&#305;&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['yas'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Manzara&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['manzara'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Havuz&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['havuz'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Otopark&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['otopark'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Is&#305;tma Sistemi&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['isitma'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Yak&#305;t&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['yakit'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Asansör&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['asansor'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">TV / Uydu&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR"><font class="font_8s">&nbsp;<? echo $row['tv'];?></font></td>
					</tr>
					<tr>
						<td class="detailL" style="vertical-align:top; border:0;"><font class="font_8g">Detaylar&nbsp;</font></td>
						<td><font class="font_8g">:&nbsp;</font></td>
						<td class="detailR" style="vertical-align:top; border:0;"><font class="font_8s">&nbsp;<? echo $row['detaylar'];?></font></td>
					</tr>
				</table>
				<p style="margin:15px 0 15px 0;">
				<table width="480" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #ccc;">
					<?
						$sql = mysql_query("select * from `mainpage`")or die(mysql_error());
						$row = mysql_fetch_array($sql);
					?>
					<tr>
						<td class="detailL"><font class="font_8g">Yetkili&nbsp;</font></td>
						<td class="detailR"><font class="font_8g">: &nbsp;<? echo $row['yetkili'];?></font></td>
					</tr>
					<tr>
						<td class="detailL" valign="top"><font class="font_8g">Adres&nbsp;</font></td>
						<td class="detailR" valign="top"><font class="font_8g">: &nbsp;<? echo $row['adres'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Telefon 1&nbsp;</font></td>
						<td class="detailR"><font class="font_8g">: &nbsp;<? echo $row['telefon1'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Telefon 2&nbsp;</font></td>
						<td class="detailR"><font class="font_8g">: &nbsp;<? echo $row['telefon2'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Faks&nbsp;</font></td>
						<td class="detailR"><font class="font_8g">: &nbsp;<? echo $row['faks'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Email&nbsp;</font></td>
						<td class="detailR"><font class="font_8g">: &nbsp;<? echo $row['email1'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Email&nbsp;</font></td>
						<td class="detailR"><font class="font_8g">: &nbsp;<? echo $row['email2'];?></font></td>
					</tr>
					<tr>
						<td class="detailL"><font class="font_8g">Email&nbsp;</font></td>
						<td class="detailR"><font class="font_8g">: &nbsp;<? echo $row['email3'];?></font></td>
					</tr>
				</table>
				</p>
			</div>
		</div>
		</td>
		<td style="background-color:#ffffff; vertical-align:top; width:200px; padding-top:5px;">
		<div><img src="images/headers/pictures.gif" width="150" height="20"></div>
		<div style="margin-top:5px;"><img src="images/tools/sepred.gif" width="190" height="4"></div>
		<?php
			$s = mysql_query("select * from `pictures` where `masterid`='".$_GET['masterid']."'")or die(mysql_error());
			$nm = mysql_num_rows($s);
			
			if($nm == 0){
		?>
			<div style="margin:5px; float:left; border:1px solid #ccc;"><img src="images/pictures/small/noimageBig.gif" width="188" height="140" style="border:2px solid #FFF;"></div>
		<? }else{
			while($r = mysql_fetch_array($s)){
		?>
			<div style="margin:5px 10px 5px 1px; float:left; border:1px solid #ccc; cursor:hand;"><img src="images/pictures/small/<? echo $r['picture'];?>" onclick="popIt('images/pictures/biger/<? echo $r['picture'];?>');" width="75" height="60" style="border:2px solid #FFF;"></div>
		<? } } ?>
		</td>
	</tr>
</table>

<!-- FOOTER -->
<p class="white">
	Kano Emlak 2006&reg; Tüm hakları saklıdır. All rights reserved.E-Mail &nbsp;&nbsp;: <a href="mailto:kanoemlak@kanoemlak.com" style="color:#FFFFFF; ">kanoemlak@kanoemlak.com</a><br />
	Site içerisinde kullanılan içerik ve tüm metaryeller izin alınmaksızın hiçbir mecrada kullanılamaz ve kopyalanamaz.<br />
	Web tasarım ve hosting : <a href="http://www.execreative.com" target="_blank" style="color:#FFFFFF; ">EXE Creative</a>
</p>
</body>
</html>