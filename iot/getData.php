<?php
//these are the server details
//the username is root by default in case of xampp
//password is nothing by default
//and lastly we have the database named android. if your database name is different you have to change it 
$DB_SERVER="127.0.0.1";
    $DB_USER="root";
    $DB_PASS="";
    $DB_NAME="iot";
//set timezone
    date_default_timezone_set('Asia/Calcutta');
    
//Create a database connection
    $conn = mysqli_connect($DB_SERVER,$DB_USER,$DB_PASS,$DB_NAME);
    if (!$conn) 
    {
        die("Database connection failed: ");
    }
//Select a database to use 
    $db_select = mysqli_select_db($conn,$DB_NAME);
    if (!$db_select) 
    {
        die("Database selection failed.....: ");
    }
 
//if everything is fine
 
//creating an array for storing the data 
$cord = array(); 
 
//this is our sql query 
$query = "SELECT * FROM corr";
$result = mysqli_query($conn,$query);
$temp = array();
if($result)
{
	while($row = mysqli_fetch_assoc($result))
	{
		//print_r($row);
		array_push($temp, $row);
	}
}
//creating an statment with the query
/*if($stmt = $conn->prepare($sql)){
	$stmt->execute();
 
//binding results for that statment 
	$stmt->bind_result($lat, $longi);
}else{
	echo "hello";
}
 
//executing that statment

 
//looping through all the records
while($stmt->fetch()){
 
 //pushing fetched data in an array 
 $temp = [
 'lat'=>$lat,
 'longi'=>$longi
 ];
 
 //pushing the array inside the hero array 
 array_push($cord, $temp);*/

 
//displaying the data in json format 
echo json_encode($temp);

?>