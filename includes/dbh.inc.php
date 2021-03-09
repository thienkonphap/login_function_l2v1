<?php
 $serverName="localhost";
 $dBUserName="root";
 $dBPassword="";
 $dBName="2021-l2v1";

 $conn = mysqli_connect($serverName,$dBUserName,$dBPassword,$dBName);
 if (!$conn){
     die("Connection failed".mysqli_connect_error());
 }
?>