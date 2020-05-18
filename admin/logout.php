<?php
session_start();
unlink("sess_".session_id());
session_destroy();
header("location:".$_SERVER['HTTP_REFERER']."");
exit;

?>