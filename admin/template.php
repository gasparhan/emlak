<?
ini_set("display_errors","off");
function top(){
session_start();
$status = $_SESSION['status'];
	if($status != "loged"){
		header("location:login.php");
	}
ini_set("display_errors","off");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Kano Emlak | Satılık ve Kiralık Konut, Daire, Arsa, Gayrimenkul</title>
<meta http-equiv="content-Type" content="text/html; charset=windows-1254" />
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="pragma" content="no-cache" />
<link href="css/stil.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-color:#F1F1F1;">
<script type="text/javascript" language="javascript" src="scripts/findObjects.js"></script>
<table cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td><img src="images/back/01.gif" width="9" height="9" /></td>
		<td style="background-image:url(images/back/02.gif);"><img src="images/back/02.gif" /></td>
		<td><img src="images/back/03.gif" /></td>
	</tr>
	<tr>
		<td style="background-image:url(images/back/04.gif);"></td>
		<td style="background-color:#FFF; width:700px; height:136px;">
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td style="background-color:#999; padding:5px 0 5px 10px;"><font class="font_8b"><b>Menu items</b></font></td>
				<td></td>
				<td style="background-color:#999; padding:5px; text-align:center;"><font class="font_8b"><b>Structure Process</b></font></td>
			</tr>
			<tr>
				<td colspan="3" style="height:5px; "></td>
			</tr>
			<tr>
				<td style="width:188px; vertical-align:top; background-color:#f9f9f9; border:1px solid #CCC;"><menu>
					<li><a href="search.php?get=estate">Emlak no ile göster</a></li>
					<li><a href="search.php?get=owner">Mal sahibine göre ara</a></li>
					<li><a href="search.php?get=date">Tarihe göre göster</a></li>
					<li><a href="result.php?get=all">Tümünü göster</a></li>
					<li><a href="result.php?get=sales">Tüm Satılıkları Göster </a></li>
					<li><a href="result.php?get=rents">Tüm Kiralıkları Göster </a></li>
					<li><a href="result.php?get=sold">Satılan / Kiralanan İlanlar</a></li>
					<li><a href="result.php?get=wait">Beklemede Olan İlanlar </a></li>
					<li><a href="result.php?get=cancel">İptal Olan İlanlar</a></li>
					<li><a href="adverta.php">Yeni ilan ekle</a></li>
					<li><a href="search.php?get=photochg">Resim düzenle (Ekle/Kaldır)</a></li>
					<li><a href="customers.php?get=default">Müşteri Yönetim Paneli</a></li>
					<li><a href="adminu.php">Yönetici Bilgilerini Değiştir</a></li>
					<li><a href="logout.php">Güvenli Çıkış</a></li>
				</menu></td>
				<td style="width:10px; "></td>
				<td style="width:500px; vertical-align:top;">
<? } function footer(){ ?>
				</td>
			</tr>
		</table>
		</td>
		<td style="background-image:url(images/back/05.gif);"></td>
	</tr>
	<tr>
		<td><img src="images/back/06.gif" /></td>
		<td style="background-image:url(images/back/07.gif);"><img src="images/back/07.gif" /></td>
		<td><img src="images/back/08.gif" /></td>
	</tr>
</table>
</body>
</html>
<? } ?>