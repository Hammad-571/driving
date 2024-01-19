<?php
  include "connection.php";
  $Ques_Num="";
  $Question="";
  $Answer="";
  $Chapter="";
  $Topic_No="";
  $Topic_Num="";
  $Per_topic="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['Ques_Num'])){
      header("am.php");
      exit;
    }
    $Ques_Num = $_GET['Ques_Num'];
    $sql = "select * from AM where Ques_Num=$Ques_Num";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("am.php");
      exit;
    }
    $Question=$row["Question"];
    $Answer=$row["Answer"];
    $Chapter=$row["Chapter"];
    $Topic_No=$row["Topic_No"];
    $Topic_Num=$row["Topic_Num"];
    $Per_topic=$row["Per_topic"];

  }
  else{
    $Ques_Num = $_POST["Ques_Num"];
    $Question=$_POST["Question"];
    $Answer=$_POST["Answer"];
    $Chapter=$_POST["Chapter"];
    $Topic_No=$_POST["Topic_No"];
    $Topic_Num=$_POST["Topic_Num"];
    $Per_topic=$_POST["Per_topic"];

    $Question = str_ireplace("'","''",$Question);
    
    $sql = "update AM set Question='$Question',Topic_No='$Topic_No',Topic_Num='$Topic_Num',Per_topic='$Per_topic', Answer='$Answer', Chapter='$Chapter' where Ques_Num='$Ques_Num'";
    $result = $conn->query($sql);
    
  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="am.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="am.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create_am.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update </h1>
 </div><br>

 <input type="hidden" name="Ques_Num" value="<?php echo $Ques_Num; ?>" class="form-control"> <br>

 <label>Chapter: </label>
 <input type="text" name="Chapter" value="<?php echo $Chapter; ?>" class="form-control"> <br>

 <label>Our Topic: </label>
 <input type="text" name="Topic_No" value="<?php echo $Topic_No; ?>" class="form-control"> <br>

 <label>Topic: </label>
 <input type="text" name="Topic_Num" value="<?php echo $Topic_Num; ?>" class="form-control"> <br>

 <label>Question num of Topic: </label>
 <input type="text" name="Per_topic" value="<?php echo $Per_topic; ?>" class="form-control"> <br>

 <label> Question: </label>
 <input type="text" name="Question" value="<?php echo $Question; ?>" class="form-control"> <br>

 <label> Answer: </label>
 <input type="text" name="Answer" value="<?php echo $Answer; ?>" class="form-control"> <br>

 

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="am.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>