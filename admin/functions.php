<?php
	function makeSmall($file,$file_tmp){
		copy($file_tmp,"../images/pictures/small/".md5($file).".jpg");
		$filename				= "../images/pictures/small/".md5($file).".jpg";
		list($width, $height) 	= getimagesize($filename);
		$new_width 				= 75;
		$new_height 			= 60;
		$image_p 				= imagecreatetruecolor($new_width, $new_height);
		$image 					= imagecreatefromjpeg($filename);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		imagejpeg($image_p,"../images/pictures/small/".md5($file).".jpg", 100);
	}
	
	function makeBiger($file,$file_tmp){
		copy($file_tmp,"../images/pictures/biger/".md5($file).".jpg");
		$filename				= "../images/pictures/biger/".md5($file).".jpg";
		list($width, $height) 	= getimagesize($filename);
		if($width > 800){
			$percent 			= 800/$width;
			$new_width 			= $width * $percent;
			$new_height 		= $height * $percent;
		}else{
			$new_width			= $width;
			$new_height 		= $height;
		}
		$image_p 				= imagecreatetruecolor($new_width, $new_height);
		$image 					= imagecreatefromjpeg($filename);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		imagejpeg($image_p,"../images/pictures/biger/".md5($file).".jpg", 100);
	}
?>