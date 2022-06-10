<?php   
require_once("config.php");
    try {
        $connectDb  = mysqli_connect($host,$userUser,$passUser,$database);
        $conexion->query("SET NAMES 'utf8'");
        echo "ya te cone";
    } catch (Exception $e) {
        echo "Error connecting to database: ".$e->getMessage();
    }
    //


?>