<?php

    include 'config.inc.php';
    //$username = 'father1';
    //$password = 'f1';

         // Check whether username or password is set from android      
     if(isset($_POST['username']) && isset($_POST['password']))
     {
                  // Innitialize Variable
                  $result='';
          $username = $_POST['username'];
          $password = $_POST['password'];

                  // Query database for row exist or not
          $sql = "SELECT * FROM usr_tbl WHERE  username = '$username' AND password = '$password'";
          $res = mysqli_query($conn,$sql);
          if($res && mysqli_num_rows($res)==1)
          {
            $sql2 = "SELECT gps_id FROM usr_tbl WHERE username = '$username'";
            $res = mysqli_query($conn,$sql2);
            $row = mysqli_fetch_assoc($res);
            $result = $row['gps_id'];
          }
          else
            $result = "false";
          echo "$result";
        }
?>
