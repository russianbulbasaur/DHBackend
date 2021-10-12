<?php
$con = new mysqli("localhost","id16918686_respiktbot","JustABot101%","id16918686_respikts");
if($con->connect_error)
{
    echo '404';
}
else
{
    $res = $con->query("SELECT lat,lon FROM dustbins");
    $o = '[';
    while($row=$res->fetch_assoc())
    {
        if(!(strcmp($o,'[')==0))
        {
            $o = $o.",";
        }
        $o = $o.'{"lat":'.$row['lat'].',"lon":'.$row['lon'].'}';
    }
    $o = $o.']';
    echo $o;
}
?>