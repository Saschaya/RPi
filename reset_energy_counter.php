<?php

	exec('python /var/www/html/reset_energy_counter.py'.$arg,$output);

	header('location: http://130.240.152.93/index.php');
	exit();

?>