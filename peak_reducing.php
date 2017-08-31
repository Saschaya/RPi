<?php

        mysql_connect("localhost","root","root");
        mysql_select_db("peak");

        $peak_start_morning = $_POST['m_peak_start'];
        $peak_stop_morning = $_POST['m_peak_stop'];
        $peak_start_evening = $_POST['e_peak_start'];
        $peak_stop_evening = $_POST['e_peak_stop'];
	$reducing_factor = $_POST['reducing_factor'];

	mysql_query("UPDATE morning_start SET value=$peak_start_morning WHERE 1");
        mysql_query("UPDATE morning_stop SET value=$peak_stop_morning WHERE 1");
        mysql_query("UPDATE evening_start SET value=$peak_start_evening WHERE 1");
        mysql_query("UPDATE evening_stop SET value=$peak_stop_evening WHERE 1");
        mysql_query("UPDATE factor SET value=$reducing_factor WHERE 1");

        $ipaddress;
        exec('hostname -I'.$arg,$ipaddress);

        $webpage = "http://$ipaddress[0]/webpage.php";

        header("Location: $webpage");
        exit();

?>

