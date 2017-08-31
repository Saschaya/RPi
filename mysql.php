<!DOCTYPE html>
<html>
        <head>
        <title> Z-Wave Heating Experiment - MySQL </title>
        </head>

    <header>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
    </header>

    <body>
        <?php include("header.php"); ?>
        <?php include("menu.php"); ?>

<div id="action">

<?php

$ipaddress;
exec('hostname -I'.$arg,$ipaddress);

$page = "http://$ipaddress[0]/phpmyadmin";

?>

<iframe src="<?php echo $page; ?>" height="600" width="100%" style="border:none;">

</iframe>

</div>

</body>

</html>
