<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $Ques_Num = $_POST["Ques_Num"];
        $Question=$_POST["Question"];
        $Answer=$_POST["Answer"];
        $Chapter=$_POST["Chapter"];
        $Topic_No=$_POST["Topic_No"];
        $Topic_Num=$_POST["Topic_Num"];
        $Per_topic=$_POST["Per_topic"];

        $Question = str_ireplace("'","''",$Question);
        
        $q = " INSERT INTO AM (Chapter, Topic_No, Topic_Num, Ques_Num, Per_topic, Question, Answer) VALUES ( $Chapter, $Topic_No, $Topic_Num, $Ques_Num, $Per_topic, '$Question', '$Answer' )";

        if ($conn->query($q) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $q . "<br>" . $conn->error;
        }
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="am.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="am.php">Home</a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-primary nav-link active" href="create_am.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Member </h1>
 </div><br>
 <label>Question Number: </label>
 <input type="text" name="Ques_Num"  class="form-control"> <br>

 <label>Chapter: </label>
 <input type="text" name="Chapter"  class="form-control"> <br>

 <label>Our Topic: </label>
 <input type="text" name="Topic_No"  class="form-control"> <br>

 <label>Topic: </label>
 <input type="text" name="Topic_Num" class="form-control"> <br>

 <label>Question num of Topic: </label>
 <input type="text" name="Per_topic"  class="form-control"> <br>

 <label> Question: </label>
 <input type="text" name="Question" class="form-control"> <br>

 <label> Answer: </label>
 <input type="text" name="Answer" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="am.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>