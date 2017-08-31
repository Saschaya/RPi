<!DOCTYPE html>
<html>
        <head>
        <title> Z-Wave / Arrowhead Framework - Charts </title>
        </head>

    <header>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
    </header>

    <body>
        <?php include("header.php"); ?>
        <?php include("menu1.php"); ?>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="height: 400px; min-width: 310px">

<script>

<?php

        //Récupération des valeurs stockées dans MySQL
        mysql_connect("localhost","root","root");       //connexion à la base de données mysql
        mysql_select_db("Chart");                       //connexion à la base de données concernées

	//GET VALUE OF THE INDOOR TEMP DATABASE
        $result = mysql_query("SELECT date,value FROM inside_temp");

        while ($row = mysql_fetch_array($result)) {

                $date = strtotime($row[0]) * 1000 + (7200 * 1000); //CONVERT DATETIME INTO TIMESTAMP IN MS
                $value = $row[1];
                $data_inside_temp[] = "[$date, $value]";

        }

        //GET VALUE OF THE OUTDOOR TEMP DATABASE
        $result = mysql_query("SELECT date,value FROM outside_temp");

        while ($row = mysql_fetch_array($result)) {

                $date = strtotime($row[0]) * 1000 + (7200 * 1000); //CONVERT DATETIME INTO TIMESTAMP IN MILLISECONDS
                $value = $row[1];
                $data_outside_temp[] = "[$date, $value]";

        }

        //GET VALUE OF THE CONSUMPTION DATABASE
        $result = mysql_query("SELECT date,value FROM consumption");

        while ($row = mysql_fetch_array($result)) {

                $date = strtotime($row[0]) * 1000 + (7200 * 1000); //CONVERT DATETIME INTO TIMESTAMP IN MS
                $value = $row[1] / 1000;
                $data_consumption[] = "[$date, $value]";

        }

        //GET VALUE OF THE THERMOSTAT SETPOINT DATABASE
        $result = mysql_query("SELECT date,value FROM thermostat_setpoint");

        while ($row = mysql_fetch_array($result)) {

                $date = strtotime($row[0]) * 1000 + (7200 * 1000); //CONVERT DATETIME INTO TIMESTAMP IN MS
                $value = $row[1];
                $data_thermostat_setpoint[] = "[$date, $value]";

        }

        //GET VALUE OF THE ENERGY DATABASE
        $result = mysql_query("SELECT date,value FROM energy");

        while ($row = mysql_fetch_array($result)) {

                $date = strtotime($row[0]) * 1000 + (7200 * 1000); //CONVERT DATETIME INTO TIMESTAMP IN MS
                $value = $row[1];
                $data_energy[] = "[$date, $value]";

        }
?>

   Highcharts.stockChart('container', {

   global: {
  	useUTC: false
   },
    rangeSelector: {
	selected: 4
   },

    title: {
        text: 'Consumption & Temperatures monitoring'
    },

    subtitle: {
       text: 'Heating experiment - LTU, Summer 2017'
    },

    xAxis: {
	type: 'datetime',
    },

    yAxis: {
        title: {
            //text: 'Measured values (°C, kW or kWh)'
        }
    },

   series: [{
        name: 'Consumption (kW)',
        data:[<?php echo join($data_consumption, ',') ?>]
	}, {
	name: 'Indoor temperature (°C)',
	data: [<?php echo join($data_inside_temp, ',') ?>]
	}, {
        name: 'Outdoor temperature (°C)',
        data:[<?php echo join($data_outside_temp, ',') ?>]
	}, {
	name: 'Thermostat setpoint (°C)',
	data:[<?php echo join($data_thermostat_setpoint, ',') ?>]
	}, {
        name: 'Energy counter (kWh)',
        data:[<?php echo join($data_energy, ',') ?>]
     }]

});

</script>

</div>

</body>



<?php

$ipaddress;
exec('hostname -I'.$arg,$ipaddress);

$page = "http://$ipaddress[0]/all_page.php";

?>

</html>

</html>


