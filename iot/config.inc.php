<?php
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

?>