<?php

	mysql_connect("localhost","root","root");
	mysql_select_db("Thermostat");

	$wished_setpoint = $_POST['setpoint_value'];
	mysql_query("UPDATE setpoint SET value=$wished_setpoint WHERE 1");

	exec('python /var/www/html/thermostat_setpoint.py'.$arg,$output);

	$ipaddress;
        exec('hostname -I'.$arg,$ipaddress);

        $webpage = "http://$ipaddress[0]/webpage.php";

        header("Location: $webpage");
	exit();

?>
