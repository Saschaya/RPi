<!DOCTYPE html> <html>

	<head>
	<title> LTU Heating Experiment - Login </title>
	</head>

<div id="index">

<?php

$ipaddress;
exec('hostname -I'.$arg,$ipaddress);

$webpage = "http://$ipaddress[0]/webpage.php";
$webpage1 = "http://$ipaddress[0]/webpage1.php";

?>
<link rel="stylesheet" href="style.css" />
    <img src="IMAGE_HEADER.png"
	ALIGN="CENTER"
	width="100%"
	style="position:top"
	/>


	<div id="corps_mdp">
	<br />
	<br />
	<br />
        <h2>LOGIN PAGE</h2><br /> <br />

	<body>

	<p> Please enter the password : </p>

	<form action="#" method="post">
		<p>
		<input type="password" name="passwd" />
		<input type="submit" value="Submit" />
		</p>
	</form>

	<?php

	if(isset($_POST['passwd']) AND $_POST['passwd'] == "raspberry")
	{
	 header("Location: $webpage");
	 exit();
	}
	?>

	<?php
	if(isset($_POST['passwd']) AND $_POST['passwd'] != "raspberry")
	{
	echo '<p style="color:red;"> Wrong password </p>';
	}
	?>

	<br />
	<br />

	<form action="webpage1.php" method="post">
		<p><input type="submit" value="I do not have a password" /></p>
	</form>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    	</body>

	</div>
</div>
</html>
