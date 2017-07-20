<?php

	mysql_connect("localhost","root","root");
	mysql_select_db("Thermostat");

	$wished_setpoint = $_POST['setpoint_value'];
	mysql_query("UPDATE setpoint SET value=$wished_setpoint WHERE 1");

	exec('python /var/www/html/thermostat_setpoint.py'.$arg,$output);

	header('location: http://130.240.152.93/index.php');
	exit();

?>
