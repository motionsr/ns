<?php
session_start();
$domain="bootstrapcdn.com";

    //Check if there is internet connection. Anyway please download bootstrap once a month
    //Chequear si existe la conexión a internet. De todas formas descargar bootstrap una vez al mes
    function is_connected($domain) 
    {
    $connected = @fsockopen($domain, 80); 
                                        //website, port  (try 80 or 443)
    if($connected){
        $is_conn = true; //action when connected
        fclose($connected);
    }else{
        $is_conn = false; //action in connection failure
    }
    return $is_conn; //return a result

    }

    $is_connection=is_connected($domain);
?>

<html>
<!DOCTYPE HTML>
<head>
    <title>Sae Gesti&oacute;n Web </title>

    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <?php
      
    if($is_connection==true)
    {    
        echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>";
        echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>";
    }
    else
    {
        echo "no hay conexion";
    }
?>

</head>