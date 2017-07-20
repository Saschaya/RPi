<?php

//Appel de la bibliotheque
	include ("jpgraph/src/jpgraph.php");
	include ("jpgraph/src/jpgraph_bar.php");
	include ("jpgraph/src/jpgraph_line.php");
	include ("jpgraph/src/jpgraph_date.php");

	//Récupération des valeurs stockées dans MySQL
	mysql_connect("localhost","root","root"); 	//connexion à la base de données mysql
	mysql_select_db("Chart");			//connexion à la base de données concernées


	// VALEURS CONSOMMATION //

	//récuparation de la colonne "value" dans le tableau "temperature"
	$query = mysql_query("SELECT value FROM consumption");
        while($ligne = mysql_fetch_array($query)){
                $consumption[] = $ligne[0];
        }
	//récupération de la colonne date dans le tableau date
	$query = mysql_query("SELECT date FROM consumption");
	while($row = mysql_fetch_array($query)){
		$date_consumption = $row[0];
	}


	//Creation du cadre du graphique

	$graph = new Graph(1280,720,"auto"); //dimensions
	$graph->SetScale("datlin"); //échelle
	$graph->xaxis->scale->SetDateFormat("H:i:s d:m");
	$graph->img->SetMArgin(40,40,40,0);
	$graph->SetShadow();
	$graph->title->Set("CONSUMPTION MONITORING");
	$graph->SetFrame(false);
	$graph->yaxis->SetLabelSide(LEFT); //position du label
	$graph->xaxis->SetLabelAngle(90); //tourne les repères de l'ordonnée à la verticale
	$graph->legend->Pos(0.7,0,"left","top");
	$graph->xgrid->Show();

	//Création courbes


	$line4= new LinePlot($consumption,$date_consumption);
	$graph->Add($line4);
	$line4->SetColor('#0063DC');
	$line4->SetFastStroke();
	$line4->SetStyle("dashed");
	$line4->SetLegend('Consumption');



	//Affichage du graph
	$graph->img->SetTransparent("white");
	$graph->Stroke();
?>


