<?php
include "dbconn.php";

if(isset($_GET['fileurl'])){
	$fileurl = $_GET['fileurl'];
	$res = mysql_query($con,"SELECT * FROM upload WHERE fileurl=? ");
	var_dump($res);
	$res->bindParam(33,$fileurl);
	$res->execute();
	$data = $stat->fetch();
	$file = 'uploads/'.$data['fileurl'];
	if(file_exists($file)){
	header('Content-Description:'.$data['description']);
	header('Content-Type:'.$data['type']);
	header('Content-Disposition: ' .$data['disposition'].'; fileurl="'.basename($file).'"');
	header('Expires: ' .$data['expires']);
	header('Cache-Control: ' .$data['cache']);
	header('Pragma: ' .$data['pragma']);
	header('Content-Length: ' .filesize($file));
	readfile($file);
	exite;
	}
}





?>