<? echo "\n";?>
		<table width="195" cellpadding="0" cellspacing="0" border="0" style="margin:0 5px 0 5px;">
			<tr>
				<td style="border-bottom:4px solid #ccc; padding-bottom:5px;"><img src="images/headers/soneklenen.gif" /></td>
			</tr>
			<?
				$sql = mysql_query("select * from `adverts` where `status`='Yayinda' order by `b_tarih` desc limit 1")or die(mysql_error());
				$row = mysql_fetch_array($sql);
				$sq = mysql_query("select * from `pictures` where `masterid`='".$row['masterid']."' order by RAND() limit 1");
				$rw = mysql_fetch_array($sq);
				$nm = mysql_num_rows($sq);
				$nm != 0 ? $res = $rw['picture'] : $res = "noimage.gif";
			?>
			<tr>
				<td style="padding:7px 0 7px 0; border-bottom:1px solid #eee;">
				<div style="margin-right:5px; float:left; border:1px solid #ccc;"><img src="images/pictures/small/<? echo $res;?>" width="75" height="60" style="border:2px solid #FFF;"></div>
				<div>
					<font class="font_8d"><b><? nedir($row['durum'],$row['emlak']);?></b></font><br />
					<font class="font_8g"><? echo $row['semt'];?></font><br />
					<font class="font_8g"><? echo $row['o_sayi']." + ".$row['s_sayi'];?></font><br />
					<font class="font_8d"><? echo $row['fiyat']." "; birim($row['birim']);?></font>
				</div>
				</td>
			</tr>
			<tr>
				<td style="border-bottom:4px solid #ccc; padding:5px 0 5px 0;"><img src="images/headers/sales.gif" width="150" height="20" /></td>
			</tr>
			<tr>
				<td style="padding:7px 0 7px 0; border-bottom:1px solid #eee;">
				<div><font class="font_8g">
					<li>Toplam Satýlýk Konut [<? ist("Satilik","konut");?>]</li>
					<li>Toplam Satýlýk Arsa [<? ist("Satilik","arsa");?>]</li>
					<li>Toplam Satýlýk &#304;&#351;yeri [<? ist("Satilik","dukkan");?>]</li>
				</font></div>
				</td>
			</tr>
			<tr>
				<td style="border-bottom:4px solid #ccc; padding:5px 0 5px 0;"><img src="images/headers/rents.gif" width="150" height="20" /></td>
			</tr>
			<tr>
				<td style="padding:7px 0 7px 0; border-bottom:1px solid #eee;">
				<div><font class="font_8g">
					<li>Toplam Kiralýk Konut [<? ist("Kiralik","konut");?>]</li>
					<li>Toplam Kiralýk Arsa [<? ist("Kiralik","arsa");?>]</li>
					<li>Toplam Kiralýk &#304;&#351;yeri [<? ist("Kiralik","dukkan");?>]</li>
				</font></div>
				</td>
			</tr>
			<tr>
				<td style="padding:7px 0 7px 0; border-bottom:1px solid #eee;"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="195" height="110">
					<param name="movie" value="images/swf/kredi.swf" />
					<param name="quality" value="high" />
					<embed src="images/swf/kredi.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="195" height="110"></embed>
					</object></td>
			</tr>
			<tr>
				<td style="padding:7px 0 7px 0;"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="195" height="110">
					<param name="movie" value="images/swf/sigorta.swf" />
					<param name="quality" value="high" />
					<embed src="images/swf/sigorta.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="195" height="110"></embed>
					</object></td>
			</tr>
		</table>
<? echo "\n";?>