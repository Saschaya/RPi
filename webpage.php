<!DOCTYPE html>
<html>
	<head>
	<title> Z-Wave Heating Experiment - Home </title>
	</head>

    <header>
        <meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
    </header>

    <body>
	<?php include("header.php"); ?>
	<?php include("menu.php"); ?>

<div id="corps">

	<div id="gauche">
<br/>
<h2> FIBARO WALL PLUG </h2>
<?php


// EXECUTE THE DATA_ACQUISITION PYTHON PROGRAM AND PUT THE PYTHON PRINT IN THE PHP $OUTPUT ARRAY
$output = array();
exec('python /var/www/html/data_acquisition.py'.$arg,$output);


// FUNCTION TO EXTRACT THE CONSUMPTION VALUE OF THE JSON REQUEST (PYTHON CODE)
	$consumption = substr($output[1],633,7);
	$zero = substr($consumption,0,1);
	$premier = substr($consumption,1,1);
	$second = substr($consumption,2,1);
	$troisieme = substr($consumption,3,1);
	$quatrieme = substr($consumption,4,1);
	$cinquieme = substr($consumption,5,1);
	$sixieme = substr($consumption,6,1);


	if ($zero == "0" || $zero == "1" || $zero == "2" || $zero == "3" || $zero == "4" || $zero == "5" || $zero == "6" || $zero == "7" || $zero == "8" || $zero == "9" || $zero == ".")
	{
	}else{
		$zero = "";
	}

	if ($premier == "0" || $premier == "1" || $premier == "2" || $premier == "3" || $premier == "4" || $premier == "5" || $premier == "6" || $premier == "7" || $premier == "8" || $premier == "9" || $premier == ".")
	{
	}else{
		$premier = "";
	}

	if ($second == "0" || $second == "1" || $second == "2" || $second == "3" || $second == "4" || $second == "5" || $second == "6" || $second == "7" || $second == "8" || $second == "9" || $second == ".")
	{
	}else{
		$second = "";
	}

	if ($troisieme == "0" || $troisieme == "1" || $troisieme == "2" || $troisieme == "3" || $troisieme == "4" || $troisieme == "5" || $troisieme == "6" || $troisieme == "7" || $troisieme == "8" || $troisieme == "9" || $troisieme == ".")
	{
	}else{
		$troisieme = "";
	}

	if ($quatrieme == "0" || $quatrieme == "1" || $quatrieme == "2" || $quatrieme == "3" || $quatrieme == "4" || $quatrieme == "5" || $quatrieme == "6" || $quatrieme == "7" || $quatrieme == "8" || $quatrieme == "9" || $quatrieme == ".")
	{
	}else{
		$quatrieme = "";
	}

	if ($cinquieme == "0" || $cinquieme == "1" || $cinquieme == "2" || $cinquieme == "3" || $cinquieme == "4" || $cinquieme == "5" || $cinquieme == "6" || $cinquieme == "7" || $cinquieme == "8" || $cinquieme == "9" || $cinquieme == ".")
	{
	}else{
		$cinquieme = "";
	}

	if ($sixieme == "0" || $sixieme == "1" || $sixieme == "2" || $sixieme == "3" || $sixieme == "4" || $sixieme == "5" || $sixieme == "6" || $sixieme == "7" || $sixieme == "8" || $sixieme == "9" || $sixieme == ".")
	{
	}else{
		$sixieme = "";
	}

	echo '<br>';

	$consumption = $zero . $premier . $second . $troisieme . $quatrieme . $cinquieme . $sixieme;

	//DISPLAYING OF THE CONSUMPTION VALUE AS TEXT
	echo "The actual consumption is ";echo $consumption;echo " W";

	echo '<br>';


//FUNCTION TO EXTRACT THE ENERGY VALUE OF THE JSON REQUEST (PYTHON CODE)

	$energy = substr($output[7],890,7);
	$zero2 = substr($energy,0,1);
	$premier2 = substr($energy,1,1);
	$second2 = substr($energy,2,1);
	$troisieme2 = substr($energy,3,1);
	$quatrieme2 = substr($energy,4,1);
	$cinquieme2 = substr($energy,5,1);
	$sixieme2 = substr($energy,6,1);

	if ($zero2 == "0" || $zero2 == "1" || $zero2 == "2" || $zero2 == "3" || $zero2 == "4" || $zero2 == "5" || $zero2 == "6" || $zero2 == "7" || $zero2 == "8" || $zero2 == "9" || $zero2 == ".")
	{
	}else{
		$zero2 = "";
	}

	if ($premier2 == "0" || $premier2 == "1" || $premier2 == "2" || $premier2 == "3" || $premier2 == "4" || $premier2 == "5" || $premier2 == "6" || $premier2 == "7" || $premier2 == "8" || $premier2 == "9" || $premier2 == ".")
	{
	}else{
		$premier2 = "";
	}

	if ($second2 == "0" || $second2 == "1" || $second2 == "2" || $second2 == "3" || $second2 == "4" || $second2 == "5" || $second2 == "6" || $second2 == "7" || $second2 == "8" || $second2 == "9" || $second2 == ".")
	{
	}else{
		$second2 = "";
	}

	if ($troisieme2 == "0" || $troisieme2 == "1" || $troisieme2 == "2" || $troisieme2 == "3" || $troisieme2 == "4" || $troisieme2 == "5" || $troisieme2 == "6" || $troisieme2 == "7" || $troisieme2 == "8" || $troisieme2 == "9" || $troisieme2 == ".")
	{
	}else{
		$troisieme2 = "";
	}

	if ($quatrieme2 == "0" || $quatrieme2 == "1" || $quatrieme2 == "2" || $quatrieme2 == "3" || $quatrieme2 == "4" || $quatrieme2 == "5" || $quatrieme2 == "6" || $quatrieme2 == "7" || $quatrieme2 == "8" || $quatrieme2 == "9" || $quatrieme2 == ".")
	{
	}else{
		$quatrieme2 = "";
	}

	if ($cinquieme2 == "0" || $cinquieme2 == "1" || $cinquieme2 == "2" || $cinquieme2 == "3" || $cinquieme2 == "4" || $cinquieme2 == "5" || $cinquieme2 == "6" || $cinquieme2 == "7" || $cinquieme2 == "8" || $cinquieme2 == "9" || $cinquieme2 == ".")
	{
	}else{
	$cinquieme2 = "";
	}

	if ($sixieme2 == "0" || $sixieme2 == "1" || $sixieme2 == "2" || $sixieme2 == "3" || $sixieme2 == "4" || $sixieme2 == "5" || $sixieme2 == "6" || $sixieme2 == "7" || $sixieme2 == "8" || $sixieme2 == "9" || $sixieme2 == ".")
	{
	}else{
	$sixieme2 = "";
	}

	$energy = $zero2 . $premier2 . $second2 . $troisieme2 . $quatrieme2 . $cinquieme2 . $sixieme2;

	//DISPLAYING OF THE ENERGY VALUE AS TEXT
	echo "The total used energy is ";echo $energy;echo " kWh";

	echo '<br>';echo '<br>';


//FUNCTION TO EXTRACT THE PLUG STATE (ACTIVATE OR NOT) FROM THE JSON REQUEST (PYTHON CODE)

	$plug_state = substr($output[3],56,5);

	//DISPLAYING OF THE STATE AS TEXT
	if ($plug_state == "True,")
	{
		echo "The plug is currently ON";
	}else{
		echo "The plug is currently OFF";
	}
?>
<!-- //HTML FORM TO MANUALLY ACTIVATE OR DESACTIVATE THE PLUG THROUGH HTTP REQUESTS (PYTHON CODE) -->
	<form action="set_plug_on.php" method="post">   <input type="submit" value="ON" />   </form>
	<form action="set_plug_off.php" method="post">  <input type="submit" value="OFF" />  </form>

<!-- //HTML FORM TO MANUALLY RESET THE ENERGY COUNTER THROUGH A HTTP REQUEST (PYTHON CODE) -->
	<form action="reset_energy_counter.php" method="post">  <input type="submit" value="Reset Energy" />  </form>

<br/>

<h2> DANFOSS THERMOSTAT - VALVE </h2>
<br />
<?php

//FUNCTION TO GET THE VALUE OF THE THERMOSTAT SETPOINT FROM THE JSON REQUEST (PYTHON CODE)

	$thermostat_setpoint_value = substr($output[5],641,4);
	$zero1 = substr($thermostat_setpoint_value,0,1);
	$premier1 = substr($thermostat_setpoint_value,1,1);
	$second1 = substr($thermostat_setpoint_value,2,1);
	$troisieme1 = substr($thermostat_setpoint_value,3,1);
	$quatrieme1 = substr($thermostat_setpoint_value,4,1);

	if ($zero1 == "0" || $zero1 == "1" || $zero1 == "2" || $zero1 == "3" || $zero1 == "4" || $zero1 == "5" || $zero1 == "6" || $zero1 == "7" || $zero1 == "8" || $zero1 == "9" || $zero1 == ".")
	{
	}else{
		$zero1 = "";
	}

	if ($premier1 == "0" || $premier1 == "1" || $premier1 == "2" || $premier1 == "3" || $premier1 == "4" || $premier1 == "5" || $premier1 == "6" || $premier1 == "7" || $premier1 == "8" || $premier1 == "9" || $premier1 == ".")
	{
	}else{
		$premier1 = "";
	}

	if ($second1 == "0" || $second1 == "1" || $second1 == "2" || $second1 == "3" || $second1 == "4" || $second1 == "5" || $second1 == "6" || $second1 == "7" || $second1 == "8" || $second1 == "9" || $second1 == ".")
	{
	}else{
		$second1 = "";
	}

	if ($troisieme1 == "0" || $troisieme1 == "1" || $troisieme1 == "2" || $troisieme1 == "3" || $troisieme1 == "4" || $troisieme1 == "5" || $troisieme1 == "6" || $troisieme1 == "7" || $troisieme1 == "8" || $troisieme1 == "9" || $troisieme1 == ".")
	{
	}else{
		$troisieme1 = "";
	}

	$thermostat_setpoint_value = $zero1 . $premier1 . $second1 . $troisieme1;

	//DISPLAYING OF THE THERMOSTAT SETPOINT VALUE AS TEXT
	echo "The current value of the thermostat setpoint is ";echo $thermostat_setpoint_value;echo" °C"

?>

<?php


//FUNCTION TO GET THE BATTERY LEVEL OF THE THERMOSTAT FROM THE JSON REQUEST (PYTHON CODE)

	$thermostat_battery_level = substr($output[9],100,4);
	$zero3 = substr($thermostat_battery_level,0,1);
	$premier3 = substr($thermostat_battery_level,1,1);
	$second3 = substr($thermostat_battery_level,2,1);
	$troisieme3 = substr($thermostat_battery_level,3,1);

	if ($zero3 == "0" || $zero3 == "1" || $zero3 == "2" || $zero3 == "3" || $zero3 == "4" || $zero3 == "5" || $zero3 == "6" || $zero3 == "7" || $zero3 == "8" || $zero3 == "9" || $zero3 == ".")
	{
	}else{
	$zero3 = "";
	}

	if ($premier3 == "0" || $premier3 == "1" || $premier3 == "2" || $premier3 == "3" || $premier3 == "4" || $premier3 == "5" || $premier3 == "6" || $premier3 == "7" || $premier3 == "8" || $premier3 == "9" || $premier3 == ".")
	{
	}else{
		$premier3 = "";
	}

	if ($second3 == "0" || $second3 == "1" || $second3 == "2" || $second3 == "3" || $second3 == "4" || $second3 == "5" || $second3 == "6" || $second3 == "7" || $second3 == "8" || $second3 == "9" || $second3 == ".")
	{
	}else{
		$second3 = "";
	}

	if ($troisieme3 == "0" || $troisieme3 == "1" || $troisieme3 == "2" || $troisieme3 == "3" || $troisieme3 == "4" || $troisieme3 == "5" || $troisieme3 == "6" || $troisieme3 == "7" || $troisieme3 == "8" || $troisieme3 == "9" || $troisieme3 == ".")
	{
	}else{
		$troisieme3 = "";
	}

	$thermostat_battery_level = $zero3 . $premier3 . $second3 . $troisieme3;

	echo '<br>';
	//DISPLAYING THE BATTERY LEVEL OF THE THERMSTAT AS TEXT
	echo "The thermostat's battery level is ";echo $thermostat_battery_level;echo " %";

?>

<!-- //HTML FORM TO SELECT AND CHANGE THE THERMOSTAT SETPOINT -->

<br/> <br/>

<form method="post" action="thermostat_setpoint.php">
<p> Choose the wished setpoint value : </p>
	 <select name="setpoint_value">
   	 <option value="4.5">4.5</option>
   	 <option value="5.0">5.0</option>
   	 <option value="5.5">5.5</option>
   	 <option value="6.0">6.0</option>
	 <option value="6.5">6.5</opton>
	 <option value="7.0">7.0</option>
	 <option value="7.5">7.5</option>
	 <option value="8.0">8.0</option>
	 <option value="8.5">8.5</option>
   	 <option value="9.0">9.0</option>
   	 <option value="9.5">9.5</option>
   	 <option value="10.0">10.0</option>
   	 <option value="10.5">10.5</option>
	 <option value="11.0">11.0</opton>
	 <option value="11.5">11.5</option>
	 <option value="12.5">12.0</option>
	 <option value="13.0">13.0</option>
	 <option value="13.5">13.5</option>
   	 <option value="14.0">14.0</option>
   	 <option value="14.5">14.5</option>
	 <option value="15.0">15.0</opton>
	 <option value="15.5">15.5</option>
	 <option value="16.0">16.0</option>
	 <option value="16.5">16.5</option>
	 <option value="17.0">17.0</option>
	 <option value="17.5">17.5</option>
   	 <option value="18.0">18.0</option>
   	 <option value="18.5">18.5</option>
	 <option value="19.0">19.0</opton>
	 <option value="19.5">19.5</option>
	 <option value="20.0">20.0</option>
   	 <option value="20.5">20.5</option>
	 <option value="21.0">21.0</opton>
	 <option value="21.5">21.5</option>
	 <option value="22.5">22.0</option>
	 <option value="23.0">23.0</option>
	 <option value="23.5">23.5</option>
   	 <option value="24.0">24.0</option>
   	 <option value="24.5">24.5</option>
	 <option value="25.0">25.0</opton>
	 <option value="25.5">25.5</option>
	 <option value="26.0">26.0</option>
	 <option value="26.5">26.5</option>
	 <option value="27.0">27.0</option>
	 <option value="27.5">27.5</option>
   	 <option value="28.0">28.0</option>
	<input type="submit" value="OK">
	</select>

</form>

<?php

//CONNECTION TO THE MYSQL DATABASE

	mysql_connect("localhost","root","root");
	mysql_select_db("Thermostat");

	//GET THE LAST SET THERMOSTAT SETPOINT VALUE FROM DATABASE
	$query = mysql_query("SELECT * FROM setpoint WHERE 1");

        while($row = mysql_fetch_array($query)){
		echo '<br>';
                echo"The last set value is ".$row['value'];echo " °C";
			$setpoint_value = $row[0];
        }

	echo '<br>';echo'<br>';

?>

<h2> 1-WIRE TEMP. SENSOR </h2>

<br/>

<?php
	//INSIDE 1 WIRE TEMPERATURE SENSOR //

		// File to read
			$file = "/sys/bus/w1/devices/28-80000026d935/w1_slave";
		// Reading line per line
			$lines = file($file);
		// Get the second line
			$temp_inside = explode('=', $lines[1]);
		// Temperature value formating (mC to C)
			$temp_inside = number_format($temp_inside[1]/1000,2, '.', '');
		// Displaying the temperature value as text
			echo "The current indoor temperature value is ";echo $temp_inside;
echo '<br>';

	//OUTSIDE 1 WIRE TEMPERATURE SENSOR//

                // File to read
                        $file = "/sys/bus/w1/devices/28-80000026bce4/w1_slave";
                // Reading line per line
                        $lines = file($file);
                // Get the second line
                        $temp_outside = explode('=', $lines[1]);
                // Temperature value formating (mC to C)
                        $temp_outside = number_format($temp_outside[1]/1000,2, '.', '');
                // Displaying the temperature value as text
                        echo "The current outdoor temperature value is ";echo $temp_outside;

?>

</div> <!-- END DIV GAUCHE -->

<div id="droite">

<h2> PEAK CONSUMPTION REDUCING </h2>

<br/>
<h3> Peak reducing settings: </h3>

        <form action="peak_reducing.php" method="post">
                <p>
		<br>
		Morning peak beginning:
		<input type="text" name="m_peak_start" value="For 6:00 type 6"/>
		<br>
		Morning peak end:
		<input type="text" name="m_peak_stop" value="For 9:00 type 9"/><br>
		Evening peak beginning:
		<input type="text" name="e_peak_start" value="For 16:00 type 16"/><br>
		Evening peak end:
		<input type="text" name="e_peak_stop" value="For 20:00 type 20"/><br>
                <br>
		Temperature reducing factor:
		<input type="text" name="reducing_factor" value="Format: 1 or 1.5" /><br>
		<input type="submit" value="Submit" />
                <br/>
		</p>
        </form>

<?php

        mysql_connect("localhost","root","root");
        mysql_select_db("peak");

        //GET THE SET VALUE FOR THE PEAK REDUCING INTERVAL TIME VALUES FROM DATABASE
        $query = mysql_query("SELECT * FROM morning_start WHERE 1");

        while($ligne = mysql_fetch_array($query)){
                        $morning_start = $ligne[0];
        }
        $query = mysql_query("SELECT * FROM morning_stop WHERE 1");

        while($ligne = mysql_fetch_array($query)){
                        $morning_stop = $ligne[0];
        }

        $query = mysql_query("SELECT * FROM evening_start WHERE 1");

        while($ligne = mysql_fetch_array($query)){
                        $evening_start = $ligne[0];
        }
        $query = mysql_query("SELECT * FROM evening_stop WHERE 1");

        while($ligne = mysql_fetch_array($query)){
                        $evening_stop = $ligne[0];
        }
        $query = mysql_query("SELECT * FROM factor WHERE 1");

        while($ligne = mysql_fetch_array($query)){
                        $temp_reducing = $ligne[0];
        }

echo '<br>';
echo "To reduce the both consumption peaks, the temperature set point is reduced by ";echo $temp_reducing;echo" °C ";
echo '<br>';
echo "from ";echo $morning_start;echo":00 to ";echo $morning_stop;echo ":00";echo " and from "; echo $evening_start;echo ":00 to ";echo $evening_stop;echo ":00.";

$hour = date('H');

	if ((($hour >= $morning_start) && ($hour < $morning_stop)) || (($hour >= $evening_start) && ($hour < $evening_stop)))
	{
		$setpoint_value = $setpoint_value - $temp_reducing;
	}


// HEATING REGULATION

        if ($temp_inside > $setpoint_value) {
                exec('python /var/www/html/set_plug_off.py');

        }

        if ($temp_inside < $setpoint_value) {
                exec('python /var/www/html/set_plug_on.py');
        }

?>
<br/><br/>
<h2> HEATING - REGULATION </h2>
<br/>
<?php
echo "The current temperature set point value is ";echo $setpoint_value;echo " °C and the current indoor temperature is ";echo $temp_inside;echo " °C.";
?>

<br/>
<br/>


<?php

//CONNECTION TO AN OTHER MYSQL DATABASE TO SEND THE MEASURED VALUES

        mysql_connect("localhost","root","root");
        mysql_select_db("Chart");
        mysql_query("INSERT INTO inside_temp VALUES (NOW(),$temp_inside)"); //Add a line with the date and the inside value
        mysql_query("INSERT INTO outside_temp VALUES (NOW(),$temp_outside)"); //Add a line with the date and the outside temperature value
        mysql_query("INSERT INTO consumption VALUES (NOW(),$consumption)"); //Add a line with the date and the consumption value
        mysql_query("INSERT INTO thermostat_setpoint VALUES (NOW(),$setpoint_value)"); //Add a line with the date and the setpoint value
	mysql_query("INSERT INTO energy VALUES (NOW(), $energy)"); //Add a line with the date the measured energy
?>


	</div> <!-- END DIV DROITE -->
    </div> <!--- END DIV CORPS--->

</body>

<?php

$ipaddress;
exec('hostname -I'.$arg,$ipaddress);

$page = "http://$ipaddress[0]/webpage.php";

?>

<head>
<META HTTP-EQUIV="Refresh" CONTENT="15; URL="<?php echo $page;?>"">
</head>

</html>
