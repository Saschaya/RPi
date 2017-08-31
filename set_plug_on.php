<?php

	exec('python /var/www/html/set_plug_on.py'.$arg,$output);

        $ipaddress;
        exec('hostname -I'.$arg,$ipaddress);

        $webpage = "http://$ipaddress[0]/webpage.php";

        header("Location: $webpage");

	exit();

?>
