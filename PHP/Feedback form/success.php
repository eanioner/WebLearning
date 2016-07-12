<?php
	session_start();	// to get $_SESSION["to"]

	if ($_GET['send'] == 1) {
		echo "You've successfully send your message to email ".$_SESSION["to"];
	}	
?>