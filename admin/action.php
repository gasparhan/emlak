<?php
session_start();
include_once "config.inc.php";
$uin = $_POST['uin'];
$pwd = $_POST['pwd'];
if($pwd == "" ){
	header ("location:login.php?error=true");  
	exit;
}
if($uin == "" ){
	header ("location:login.php?error=true");  
	exit;
}
$qry = mysql_query("SELECT * FROM `admin` WHERE `uin`='$uin'") or die ("Error !" .mysql_error()) ;
$row = mysql_fetch_array($qry);

         if ($row['pwd'] != $pwd){
		    header ("location:login.php?error=true");  
			exit;
		}else{
			if (($row['uin'] == $uin) && ($row['pwd'] == $pwd))	{
				$status		= "loged";
				session_register("status");
				header ("location:index.php");
		 	}
	 
	  	}

?>