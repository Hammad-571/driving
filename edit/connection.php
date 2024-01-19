<?php 
   $host='patente.ctbuvmr8rm2y.eu-south-1.rds.amazonaws.com';
   $username='admin571';
   $password='1H13a4571';
   $dbname = "patente";
    $conn = mysqli_connect($host,$username,$password,"$dbname");
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
    
    ?>