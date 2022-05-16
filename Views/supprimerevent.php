<?php
	include '../Controller/eventC.php';
	$eventC=new eventC();
	$eventC->supprimerevent($_GET["id"]);
	header('Location:afficherListeevent.php');
?>