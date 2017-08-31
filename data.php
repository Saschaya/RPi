<?php
        header( 'Content-Type: application/json' );

        //Récupération des valeurs stockées dans MySQL
        mysql_connect("localhost","root","root");       //connexion à la base de données mysql
        mysql_select_db("Chart");                       //connexion à la base de données concernées

        //récuparation de la colonne "value" dans le tableau "temperature"
        $query = mysql_query("SELECT value FROM inside_temp");
        while($ligne = mysql_fetch_array($query)){
                $inside_temp[] = $ligne[0];
        }
        //récupération de la colonne date dans le tableau date
        $query = mysql_query("SELECT date FROM inside_temp");
        while($row = mysql_fetch_array($query)){
                //$date_inside[] = $row[0];
                $date_inside_temp[] = strtotime($row[0]) *1000;
                //$date_inside_temp[] = date_format($row[0]," Y-m-d H:i:s,");
        }
        //récuparation de la colonne "value" dans le tableau "temperature"
        $query = mysql_query("SELECT value FROM outside_temp");
        while($ligne = mysql_fetch_array($query)){
                $outside_temp[] = $ligne[0];
        }
        //récuparation de la colonne "value" dans le tableau "temperature"
        $query = mysql_query("SELECT value FROM thermostat_setpoint");
        while($ligne = mysql_fetch_array($query)){
                $therm_setpoint[] = $ligne[0];
        }
        //récuparation de la colonne "value" dans le tableau "temperature"
        $query = mysql_query("SELECT value FROM consumption");
        while($ligne = mysql_fetch_array($query)){
                $consumption[] = $ligne[0] / 1000;
        }

        echo json_encode( $date_inside_temp );
?>
