<?php
ini_set("display_errors","off");
include "template.php";
top();
$query = "select * from `adverts` where `status`='Yayinda'";
if($_POST['emlak']){
	$query.= " and `emlak`='".$_POST['emlak']."'";
}
if($_POST['durum']){
	$query.= " and `durum`='".$_POST['durum']."'";
}
if($_POST['semt']){
	$query.= " and `semt`='".$_POST['semt']."'";
}
if($_POST['wa']){
	$query.= " and `buyukluk`>'".$_POST['wa']."'";
}
if($_POST['wb']){
	$query.= " and `buyukluk`<'".$_POST['wb']."'";
}
if($_POST['oa']){
	$query.= " and `o_sayi`>'".$_POST['wa']."'";
}
if($_POST['ob']){
	$query.= " and `o_sayi`<'".$_POST['wb']."'";
}
if($_POST['pa']){
	$query.= " and `fiyat`>'".$_POST['pa']."'";
}
if($_POST['pb']){
	$query.= " and `fiyat`<'".$_POST['pb']."'";
}
if($_POST['keyword']){
	$query.= " and `detay`='%".$_POST['keyword']."%'";
}
$sql = mysql_query($query." order by `b_tarih` desc")or die(mysql_error());
$num = mysql_num_rows($sql);
?>
		<div style="width:480px; margin-left:10px;">
			<div><img src="images/headers/search.gif" width="150" height="20"></div>
			<div style="margin-top:5px;"><img src="images/tools/sepred.gif" width="480" height="4"></div>
			<div style="margin-top:5px;">
				<table cellpadding="0" cellspacing="0" border="0" width="480">
					<tr>
						<td class="ab" width="31">&nbsp;</td>
						<td class="ab" width="10">&nbsp;</td>
						<td class="ab" width="95"><font class="font_8d">ilçe</font></td>
						<td class="ab" width="95"><font class="font_8d">semt</font></td>
						<td class="ab" width="50"><font class="font_8d">tip</font></td>
						<td class="ab" width="50"><font class="font_8d">m&sup2;</font></td>
						<td class="ab" width="50"><font class="font_8d">Fiyat</font></td>
						<td class="ab" width="20">&nbsp;</td>
						<td class="ab" width="79" align="center"><font class="font_8d">ilan tarihi</font></td>
					</tr>
					<? 
						while ($row = mysql_fetch_array($sql)){
							$sq = mysql_query("select * from `pictures` where `masterid`='".$row['masterid']."' limit 1")or die(mysql_error());
							$rw = mysql_fetch_array($sq);
							$nm = mysql_num_rows($sq);
							$nm != 0 ? $res = "<a href=\"details.php?masterid=".$row['masterid']."\"><img src=\"images/icons/picture.gif\" border=\"0\"></a>" : $res = "<img src=\"images/icons/picturepasive.gif\" border=\"0\">" ;
					?>	
					<tr>
						<td class="a"><? echo $res; ?></td>
						<td class="a">&nbsp;</td>
						<td class="a"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo $row['semt']; ?></a></td>
						<td class="a"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo $row['mahalle']; ?></a></td>
						<td class="a"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo $row['emlak'];?></a></td>
						<td class="a"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo $row['buyukluk']."m&sup2;"; ?></a></td>
						<td class="a" align="right"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo $row['fiyat']; ?></a></td>
						<td class="a"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? birim($row['birim']); ?></a></td>
						<td class="a" align="center"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo date("d.m.Y",$row['b_tarih']);?></a></td>
					</tr>
					<?
						$row = mysql_fetch_array($sql);
						if($row['id']){
							$sq = mysql_query("select * from `pictures` where `masterid`='".$row['masterid']."' limit 1")or die(mysql_error());
							$rw = mysql_fetch_array($sq);
							$nm = mysql_num_rows($sq);
							$nm != 0 ? $res = "<a href=\"details.php?masterid=".$row['masterid']."\"><img src=\"images/icons/picture.gif\" border=\"0\"></a>" : $res = "<img src=\"images/icons/picturepasive.gif\" border=\"0\">" ;
					?>
					<tr>
						<td class="ag"><? echo $res; ?></td>
						<td class="ag">&nbsp;</td>
						<td class="ag"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo $row['semt']; ?></a></td>
						<td class="ag"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo $row['mahalle']; ?></a></td>
						<td class="ag"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo $row['emlak'];?></a></td>
						<td class="ag"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo $row['buyukluk']."m&sup2;"; ?></a></td>
						<td class="ag" align="right"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo $row['fiyat']; ?></a></td>
						<td class="ag"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? birim($row['birim']); ?></a></td>
						<td class="ag" align="center"><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo date("d.m.Y",$row['b_tarih']);?></a></td>
					</tr>
					<? } } ?>
					<tr>
						<td colspan="9" style="height:30px;">
						<div style="text-align:center; border:1px solid #ccc; margin-top:10px; padding:3px;"><font class="font_8d"><b>tolam <? echo $num; ?> ilan bulundu </b></font></div>
						</td>
					</tr>
				</table>
			</div>
		</div>
<? footer(); ?>
