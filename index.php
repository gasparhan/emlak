<?php
include "template.php";
top();
echo "\n";
?>
		<div style="width:480px; margin-left:10px;">
			<div><img src="images/headers/kanoemlak.gif" width="150" height="20"></div>
			<div style="margin-top:5px;"><img src="images/tools/sepred.gif" width="480" height="4"></div>
			<div style="margin-top:5px; padding-bottom:10px;"><font class="font_8g">
			<?php
				$sql = mysql_query("select * from `mainpage`")or die(mysql_error());
				$row = mysql_fetch_array($sql);
				echo $row['content'];
			?>
			</font></div>
			<div style="margin-top:5px;"><img src="images/headers/vitrindekiler.gif" width="150" height="20"></div>
			<div style="margin-top:5px;"><img src="images/tools/sepred.gif" width="480" height="4"></div>
				<?php
					$sql = mysql_query("select * from `adverts` where `status`='Yayinda' order by RAND() desc limit 8")or die(mysql_error());
					while($row = mysql_fetch_array($sql)){
						$sq = mysql_query("select * from `pictures` where `masterid`='".$row['masterid']."' limit 1");
						$rw = mysql_fetch_array($sq);
						$nm = mysql_num_rows($sq);
						$nm != 0 ? $res = $rw['picture'] : $res = "noimage.gif";
						echo "\n";
				?>
				<div class="vitL" onClick="javascript:location='details.php?masterid=<?php echo $row['masterid']; ?>';">
					<div style="margin-right:5px; float:left; border:1px solid #ccc;"><img src="images/pictures/small/<? echo $res;?>" width="75" height="60" style="border:2px solid #FFF;"></div>
					<div><font class="font_8d"><b><?php nedir($row['durum'],$row['emlak']);?></b></font><br />
						<font class="font_8g"><? echo $row['semt'];?></font><br />
						<font class="font_8g"><? echo $row['cesit']." ".$row['o_sayi']." + ".$row['s_sayi'];?></font><br />
						<font class="font_8d"><? echo $row['fiyat']." "; birim($row['birim']);?></font></div>
				</div>
				<? 
					$row = mysql_fetch_array($sql);
					if($row['id']){
						$sq = mysql_query("select * from `pictures` where `masterid`='".$row['masterid']."' limit 1");
						$rw = mysql_fetch_array($sq);
						$nm = mysql_num_rows($sq);
						$nm != 0 ? $res = $rw['picture'] : $res = "noimage.gif";
						echo "\n";
				?>				
				<div class="vitR" onClick="javascript:location='details.php?masterid=<?php echo $row['masterid']; ?>';">
					<div style="margin-right:5px; float:left; border:1px solid #ccc;"><img src="images/pictures/small/<? echo $res;?>" width="75" height="60" style="border:2px solid #FFF;"></div>
					<div><a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8d"><b><?php nedir($row['durum'],$row['emlak']);?></b></a><br />
						<a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo $row['semt'];?></a><br />
						<a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8g"><? echo $row['cesit']." ".$row['o_sayi']." + ".$row['s_sayi'];?></a><br />
						<a href="details.php?masterid=<?php echo $row['masterid']; ?>" class="font_8d"><? echo $row['fiyat']." "; birim($row['birim']);?></a></div>
				</div>
				<? } } echo "\n";?>
		</div>
<? echo "\n"; footer(); ?>