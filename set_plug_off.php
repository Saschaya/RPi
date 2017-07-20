<?php

	exec('python /var/www/html/set_plug_off.py'.$arg,$output);

	header('location: http://130.240.152.93/index.php');
	exit();

?>