<?php
$con = new mysqli("localhost","id16918686_respiktbot","JustABot101%","id16918686_respikts");
if($con->connect_error)
{
    echo '404';
}
else
{
    $con->query("DELETE FROM dustbins");
    echo "200";
}
?>