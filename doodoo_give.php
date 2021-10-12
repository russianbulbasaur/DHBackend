<?php
$lat = $_POST['lat'];
$lon = $_POST['lon'];
$con = new mysqli("localhost","id16918686_respiktbot","JustABot101%","id16918686_respikts");
if($con->connect_error)
{
    echo '404';
}
else
{
    $con->query("INSERT INTO dustbins(lat,lon) VALUES('".$lat."','".$lon."')");
    echo '{"result":"200"}';
}
?>