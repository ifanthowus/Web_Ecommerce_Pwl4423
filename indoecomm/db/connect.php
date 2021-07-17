<?php
	$db = new mysqli('sql105.epizy.com','epiz_29149618','EGVH7ZoEZXYum2','epiz_29149618_db_furniture_store');

	if($db->connect_errno) {
		die('Sorry, we are unable to connect to the database at the moment.');
	}

?>