<?php
    include "connection.php";
    if(isset($_GET['Ques_Num'])){
        $Ques_Num = $_GET['Ques_Num'];
        $sql = "DELETE from `CQC` where Ques_Num = $Ques_Num";
        $conn->query($sql);
        if ($conn->query($sql) === TRUE) 
        {
          echo "New record deleted successfully";
        } else 
        {
          echo "Error: " . $q . "<br>" . $conn->error;
        }
    }
    header('cqc.php');
    exit;
?>
