<?php
session_start();
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
<body style="background-color:#F1F1F1; margin-top:100px;">
<table cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td><img src="images/back/01.gif" width="9" height="9" /></td>
		<td style="background-image:url(images/back/02.gif);"><img src="images/back/02.gif" /></td>
		<td><img src="images/back/03.gif" /></td>
	</tr>
	<tr>
		<td style="background-image:url(images/back/04.gif);"></td>
		<td style="background-color:#FFF; padding:10px;">
		<div style="margin-bottom:5px; background-color:#999;  padding-left:5px;"><font class="font_8b" style="line-height:2.0em;"><b>Kano Emlak cPanel Log in Form</b></font></div>
		<div style="float:left; width:70px; text-align:center;">
			<img src="images/tools/lock.gif" width="60" height="60" />
		</div>
		<div style="margin-left:80px;">
		<form name="login" action="action.php" method="post" style="margin:0; padding:0;">
		<table border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td width="100" style="height:1.4em; "><font class="font_8s">Username</font></td>
				<td width="10"><font class="font_8s">:</font></td>
				<td width="152"><input type="text" name="uin" class="FormStyle" style="width:149px; height:1.30em;" /></td>
			</tr>
			<tr>
				<td  style="height:1.4em; "><font class="font_8s">Password</font></td>
				<td ><font class="font_8s">:</font></td>
				<td ><input type="password" name="pwd" class="FormStyle" style="width:149px; height:1.30em;" /></td>
			</tr>
			<tr>
				<td ><font class="font_8s"><b><?php if($_GET['error']=="true"){echo "Login Error";}?>&nbsp;</b></font></td>
				<td >&nbsp;</td>
				<td align="right"><input type="submit" value="Login" style="width:70px;" class="ButtonStyle" /></td>
			</tr>
		</table>
		</form>
		</div>
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