
<?php
$DBNAME = "iot";
$VALUE1 = $_POST['lat'];
$VALUE1 = floatval($VALUE1);
$VALUE2 = $_POST['lon'];
$VALUE2 = floatval($VALUE2);
$VALUE3 = $_POST['time'];
$VALUE4 = $_POST['Gkey'];
 

$con=mysql_connect("127.0.0.1","root","") or die(mysql_error());
if(!$con)
{
        die('Could not connect: '.mysql_error());
}
else{
        echo 'Database Connected'.'<br>';
}

mysql_select_db($DBNAME,$con);
echo $VALUE1.$VALUE2.$VALUE3.$VALUE4;
mysql_query("insert into corr (lat,longi,curr_time,Gkey) values($VALUE1,$VALUE2,'$VALUE3','$VALUE4');") or die(mysql_error());

mysql_close($con);
?>