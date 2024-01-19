<!DOCTYPE html>
<html lang="it" class = "background">
<?php include 'connect.php';?>
<?php
session_start();
$_SESSION['counter'] = (!$_SESSION['counter']) ? 1 : $_SESSION['counter'];

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $_SESSION['counter']++;
  $cap = $_POST['capitolo'];
  $capitolo = [];
  $capitolo= explode(",", $cap);
  $numOfQues = round(70 / (count($capitolo)-1))+1;
  
  $ran =[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

  $conn=mysqli_connect($host,$username,$password,"$dbname");
  if(!$conn)
  {
    die('Could not Connect MySql Server:' );
  }
  
  $chap = 0;
  while($chap < count($capitolo) -1)
  {
    for($i = 1; $i <= $numOfQues  ; $i++)
    {
      
    $sql = "SELECT * FROM CQC WHERE chapter= '$capitolo[$chap]' and Ques_Num is not null order by rand() limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 71 ; $t++)
        {          
          if($row["Ques_Num"] == $ran[$t])
          {
            $douple = 1;
          } 
        }
        $ques[(($chap*$numOfQues)+$i)] = $row["Question"];
        $ans[(($chap*$numOfQues)+$i)] = $row["Answer"];
        $img[(($chap*$numOfQues)+$i)] = $row["Topic_No"];
        $ran[(($chap*$numOfQues)+$i)] = $row["Ques_Num"];
        if($douple == 1)
        {
          $i--;
        }  
      }
    }
    else 
    {
      echo "0 results";
    }
    }
    $chap++;
  }

}
if ($_SERVER['REQUEST_METHOD'] === 'GET') 
      {
        $cap = '';
  $_SESSION['counter'] = 1;
 
  $conn=mysqli_connect($host,$username,$password,"$dbname");
  if(!$conn)
  {
    die('Could not Connect MySql Server:' );
  }
  
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE chapter= 3 order by rand() limit 5";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q1 = $row["Question"];
        $ans1 = $row["Answer"];
        $img1 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }

    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q2 = $row["Question"];
        $ans2 = $row["Answer"];
        $img2 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }

    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q3 = $row["Question"];
        $ans3 = $row["Answer"];
        $img3 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q4 = $row["Question"];
        $ans4 = $row["Answer"];
        $img4 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q5 = $row["Question"];
        $ans5 = $row["Answer"];
        $img5 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q6 = $row["Question"];
        $ans6 = $row["Answer"];
        $img6 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q7 = $row["Question"];
        $ans7 = $row["Answer"];
        $img7 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q8 = $row["Question"];
        $ans8 = $row["Answer"];
        $img8 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q9 = $row["Question"];
        $ans9 = $row["Answer"];
        $img9 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q10 = $row["Question"];
        $ans10 = $row["Answer"];
        $img10 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q11 = $row["Question"];
        $ans11 = $row["Answer"];
        $img11 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q12 = $row["Question"];
        $ans12 = $row["Answer"];
        $img12 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q13 = $row["Question"];
        $ans13 = $row["Answer"];
        $img13 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q14 = $row["Question"];
        $ans14 = $row["Answer"];
        $img14 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q15 = $row["Question"];
        $ans15 = $row["Answer"];
        $img15 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q16 = $row["Question"];
        $ans16 = $row["Answer"];
        $img16 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q17 = $row["Question"];
        $ans17 = $row["Answer"];
        $img17 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q18 = $row["Question"];
        $ans18 = $row["Answer"];
        $img18 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q19 = $row["Question"];
        $ans19 = $row["Answer"];
        $img19 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q20 = $row["Question"];
        $ans20 = $row["Answer"];
        $img20 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q21 = $row["Question"];
        $ans21 = $row["Answer"];
        $img21 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q22 = $row["Question"];
        $ans22 = $row["Answer"];
        $img22 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q23 = $row["Question"];
        $ans23 = $row["Answer"];
        $img23 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q24 = $row["Question"];
        $ans24 = $row["Answer"];
        $img24 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q25 = $row["Question"];
        $ans25 = $row["Answer"];
        $img25 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q26 = $row["Question"];
        $ans26 = $row["Answer"];
        $img26 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q27 = $row["Question"];
        $ans27 = $row["Answer"];
        $img27 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q28 = $row["Question"];
        $ans28 = $row["Answer"];
        $img28 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q29 = $row["Question"];
        $ans29 = $row["Answer"];
        $img29 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $random = rand(1, 7146);
    $sql = "SELECT * FROM B WHERE Ques_Num=$random";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $q30 = $row["Question"];
        $ans30 = $row["Answer"];
        $img30 = $row["Topic_Nr"];
      }
    }
    else 
    {
      echo "0 results";
    }
    $ques = ["", $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20, $q21, $q22, $q23, $q24, $q25, $q26, $q27, $q28, $q29, $q30,];
    $ans =["",$ans1, $ans2, $ans3, $ans4, $ans5, $ans6, $ans7, $ans8, $ans9, $ans10, $ans11, $ans12, $ans13, $ans14, $ans15, $ans16, $ans17, $ans18, $ans19, $ans20, $ans21, $ans22, $ans23, $ans24, $ans25, $ans26, $ans27, $ans28, $ans29, $ans30,];
    $img =["",$img1, $img2, $img3, $img4, $img5, $img6, $img7, $img8, $img9, $img10, $img11, $img12, $img13, $img14, $img15, $img16, $img17, $img18, $img19, $img20, $img21, $img22, $img23, $img24, $img25, $img26, $img27, $img28, $img29, $img30,];
    $ran =[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

  }
?>


<style>
header {
    width: 300px;
    margin: auto;
    border: 1px solid red;
}
h1
{
  text-align: center;
  padding: 5px 50px 2px 5px;
  color: rgb(49, 122, 233);
  font-size: 50px;
}
.logo 
{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 40%;
    padding: 5px 20px 2px 5px;
    /*border-radius: 80%;*/
}
.cont
{
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    padding: 5px 20px 2px 5px;
    padding-bottom: 40px;
}
.button {
  background-color: #CCFFFF; 
    border: none;
    color:rgb(255, 255, 253);
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    float: center;
    font-size: 16px;
    border-radius: 8px;
  }
.button:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  }
.button1 {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border:1px solid black;
  width:200px;
  height:100px;
  border-radius: 8px;
}
.blocco_quiz{
    overflow:hidden; 
    margin:auto; 
    height:auto
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
  border-radius: 8px;
}

.button2:hover {
  background-color: #4CAF50;
  color: white;
}
#flex2{
  display: flex;
    justify-content: space-around;
    align-items: center;
    height: 50%;
    column-gap: 1%;
    padding: 0.5% 1% 0.5% 1%;
    padding-top: 20px;
    margin-right : 1%;
    flex: 1 1;
}
.intervalli_quiz3{
	display: flex;
	justify-content: center;
  float:center; 
	margin-top:10px; 
    font-size:18px; 
    color:#8FA398; 
    background-color:#FFF; 
    height: 150px;
    width:250px; 
    margin-right:auto;  
    margin-left:40%;
    padding:10px 0; 
    text-align:center;
    font-size: 50px;

}
.intervalli_quiz1{
	display: flex;
	justify-content: center;
  	text-align: center;
    float:left; 
	margin-top:10px; 
    font-size:18px; 
    color:#8FA398; 
    background-color:#FFF; 
    height: 80px;
    width:80px; 
    margin-right:1%;  
    padding:10px 0; 
    text-align:center;
    font-size: 50px;
}
.intervalli_quiz2{
	display: flex;
	justify-content: center;
  	text-align: center;
    float:left; 
	margin-top:10px; 
    font-size:18px; 
    color:#8FA398; 
    background-color:#FFF; 
    height: 80px;
    width:auto; 
    margin-right:1%;  
    padding:10px 0; 
    text-align:center;
    font-size: 50px;
}
#flex{
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    align-items: center;
    height: 40%;
    column-gap: 1.70%;
    padding: 0.5% 1% 0.5% 1%;
    margin-right : 1%;
    flex: 1 1;
}

#flex1{
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    align-items: center;
    height: 50%;
    column-gap: 1.25%;
    padding: 0.5% 0.5% 0.5% 0.5%;
    flex: 1 1;

}

.scheda_quiz{
    background-color:#CFE5D6; 
    margin: 10px; 
    height:auto; 
    padding:5px; 
    padding-bottom: 30px;
    overflow:hidden
}
#int1, #dom1, #domanda1{
    color:#C00
}
.background{
    background-size: cover;
    height: 100%;
    background-repeat:no-repeat;
    background: #00ABE1;;
}
footer {
	display : flex;
	column-gap: 50px;
	justify-content: center;
  text-align: center;
  padding-top: 10px;
  background-color: #161F6D;
  color : yellow;
  
}
.quesSize
{
  font-size: 50px;
}
table
{
    margin-left:auto;
    margin-right:auto;
    margin-top: 10px;
}
.intervalli_quiz{
	display: flex;
	justify-content: center;
  	text-align: center;
    float:left; 
	margin-top:10px; 
    font-size:25px; 
    color:#8FA398; 
    background-color:#FFF; 
    width:20%; 
    margin-right:1.2%; 
    min-width:68px; 
    padding:10px 0; 
    text-align:center
}
/*
.intervalli_quiz1{
  margin-left:auto;
    margin-right:auto;
	  margin-top:10px; 
    font-size:25px; 
    color:#8FA398; 
    background-color:#FFF; 
    width:40%; 
    margin-right:1.2%; 
    min-width:68px; 
    padding:10px 0; 
    text-align:center
}
*/
.domanda_10 {
  margin-top:20px; 
  font-weight:bold; 
  /**font size without chnaging the box */
  width:5%; 
  height: 2.5%;
  font-size:20px; 
  color:#8FA398; 
  background-color:#FFF; 
  float:left; 
  text-align:center;   
}

#sotto_int2, #sotto_int3, #sotto_int4{
    display:none
    }
#blocco_1_40{
    display:none
    }
.domanda_40 {
  margin-top:20px; 
  float:left; 
  font-size:18px; 
  width: 30px;
  color:#8FA398; 
  text-align:center; 
  padding: 0.25%; 
  background-color:#FFF; 
  
}
.flex-container 
{
  display: flex;
  flex-direction: row;
  align-content: space-between;
}
input.larger {
        transform: scale(4);
        margin: 30px;
        margin-right: 100px;
      }
      .img
{
  padding: 15px 5px 5px 25px;
  width:60%;
  height:auto;
}

.vedidomanda, .domanda{
    width:100%; 
    margin-top:4px; 
    float:left; 
    display:none; 
    height:auto; 
    margin-bottom:5px
    }
#vedidomanda1{
    display:block
    }
.segnale_quiz{
    float:left; 
    display:block; 
    margin-right:1%; 
    width:30%; 
    height:200px; 
    background-color:#FFF; 
    }
.domanda_quiz{
    display:block; 
    min-height:200px; 
    width:100%; 
    margin-right:0; 
    float:right; 
    height:auto
}
table {
  border-collapse: collapse;
  width: 90%;
}
.testo_domanda_quiz, .risposta_quiz{
    float:left; 
    width:98%; 
    padding:0 1%; 
    font-size:16px;
    font-size:1.6rem; 
    background-color:#FFF; 
    height:100px
}
.timer{
    float:left; 
    width:98%; 
    padding:0 1%; 
    font-size:16px;
    font-size:1.6rem; 
    background-color:#FFF; 
}
.img_domanda_quiz{
    float:left; 
    width:100%; 
    padding:0 1%; 
    font-size:16px;
    font-size:1.6rem; 
    background-color:#FFF; 
    height:auto;
    }

.testo_domanda_quiz{
    height:auto; 
    min-height:95px
    }
.testo_domanda_quiz, .risposta_quiz{
	height:10%
	}
.risposta_quiz{
	margin-top:5px
	}
.risposta_quiz{
	height:100px
	}
.margin_risp{
	margin:auto; 
	width:132px; 
	padding:10px; 
	overflow:auto
	}
.bg_vero{
	width:56px; 
	height:53px; 
	padding-top:16px; 
	background-image:url(images/vero_vuoto.gif); 
	background-repeat:no-repeat; 
	background-position:center; 
	display:block; 
	float:left
}
.bg_falso{
  width:56px; 
	height:53px; 
	padding-top:16px;
	background-image:url(images/falso_vuoto.gif); 
	background-repeat:no-repeat; 
	background-position:center; 
	float:right
	}
  .countdown_quiz{
	float:left; 
	padding:3px 0; 
	min-width:100px; 
	width:30%; 
	background:#fff; 
	height:auto; 
	font-size:14px; 
	text-align:left; 
	margin-top:30px;
}
a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color:#00ABE1;
  background-color: transparent;
  text-decoration: underline;
}
a.dar:hover, a.dar:active {
  color:#161F6D;
  background-color: transparent;
  text-decoration: underline;
}
.scorri_quiz{
	float:right; 
	height:auto; 
	margin-left:4px
	}
.submit_corretti{
	width:214px; 
	margin:auto
	}
.correggi{
	width:214px; 
	height:43px; 
	font-size:14px; 
	cursor:pointer; 
	text-align:center; 
	margin-top:auto;
	}
  tr
  {
    width: 95%;
    margin-top: 10px;
    border-bottom: solid;
    background-color: #CFE5D6;
  }
  h2{
    margin-left: 10px;
    text-align:  left;
    font-size: 35px;
  }
  .text
  {
    margin-left: 10px;
    font-size: 30px;
    text-align:  left;
  }
  .flex-button
{
  display: flex;
  flex-direction: row;
  align-content: space-between;
  float:left; 
    width:98%; 
    padding:0 1%; 
    font-size:16px;
    font-size:1.6rem; 
    background-color:#FFF; 
    height:180px
}
.vero
{
  width: 90%;
}
.prev
{
  width: 60%;
}
.speak
{
  padding-top:6%;
  text-align:left;
  color:#8FA398;
  width:12%;
}
  @media only screen and (max-device-width: 480px) {
  .intervalli_quiz{
    width:300px;
  }
  .speak
{
  padding-top:10%;
  text-align:left;
  color:#8FA398;
  width:20%;
}
  #flex1{

    height: 60%;
    column-gap: 1.5%;
    font-size: 30px;
}
.domanda_40 {
  width: 45px;
  
}
.vero{
  width: 100%;
}
.prev
{
  width: 90%;
}
}
</style>
<script>
 var load = <?php echo json_encode($_SESSION['counter']); ?>;
 var cap = <?php echo json_encode($cap); ?>;
var voto = 0;
var check = false;
var strQues = <?php echo json_encode($ques); ?>;
var answer = <?php echo json_encode($ans); ?>;
var image = <?php echo json_encode($img); ?>;
var ran = <?php echo json_encode($ran); ?>;
var ansGiven = ["","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""];
var question = 0;
var i = 1;
// Set the date we're counting down to
var countDownDate = new Date().getTime() + 5400000;

// Update the count down every 1 second
var x = setInterval(function() {
	// Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
 
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  
  document.getElementById("note").innerHTML =  hours +":"+minutes +":"+ seconds ;
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    correggi();
  }
}, 1000);

function question1_10() {
	question = 0;
	document.getElementById("q1").innerHTML = "1";
	document.getElementById("q2").innerHTML = "2";
	document.getElementById("q3").innerHTML = "3";
	document.getElementById("q4").innerHTML = "4";
	document.getElementById("q5").innerHTML = "5";
	document.getElementById("q6").innerHTML = "6";
	document.getElementById("q7").innerHTML = "7";
	document.getElementById("q8").innerHTML = "8";
	document.getElementById("q9").innerHTML = "9";
	document.getElementById("q10").innerHTML = "10";
}
function question11_20() {
	question = 1;
	document.getElementById("q1").innerHTML = "11";
	document.getElementById("q2").innerHTML = "12";
	document.getElementById("q3").innerHTML = "13";
	document.getElementById("q4").innerHTML = "14";
	document.getElementById("q5").innerHTML = "15";
	document.getElementById("q6").innerHTML = "16";
	document.getElementById("q7").innerHTML = "17";
	document.getElementById("q8").innerHTML = "18";
	document.getElementById("q9").innerHTML = "19";
	document.getElementById("q10").innerHTML = "20";
}
function question21_30() {
	question = 2;
	document.getElementById("q1").innerHTML = "21";
	document.getElementById("q2").innerHTML = "22";
	document.getElementById("q3").innerHTML = "23";
	document.getElementById("q4").innerHTML = "24";
	document.getElementById("q5").innerHTML = "25";
	document.getElementById("q6").innerHTML = "26";
	document.getElementById("q7").innerHTML = "27";
	document.getElementById("q8").innerHTML = "28";
	document.getElementById("q9").innerHTML = "29";
	document.getElementById("q10").innerHTML = "30";
}

function question31_40() {
	question = 3;
	document.getElementById("q1").innerHTML = "31";
	document.getElementById("q2").innerHTML = "32";
	document.getElementById("q3").innerHTML = "33";
	document.getElementById("q4").innerHTML = "34";
	document.getElementById("q5").innerHTML = "35";
	document.getElementById("q6").innerHTML = "36";
	document.getElementById("q7").innerHTML = "37";
	document.getElementById("q8").innerHTML = "38";
	document.getElementById("q9").innerHTML = "39";
	document.getElementById("q10").innerHTML = "40";
}


function question41_50() {
	question = 4;
	document.getElementById("q1").innerHTML = "41";
	document.getElementById("q2").innerHTML = "42";
	document.getElementById("q3").innerHTML = "43";
	document.getElementById("q4").innerHTML = "44";
	document.getElementById("q5").innerHTML = "45";
	document.getElementById("q6").innerHTML = "46";
	document.getElementById("q7").innerHTML = "47";
	document.getElementById("q8").innerHTML = "48";
	document.getElementById("q9").innerHTML = "49";
	document.getElementById("q10").innerHTML = "50";
}

function question51_60() {
	question = 5;
	document.getElementById("q1").innerHTML = "51";
	document.getElementById("q2").innerHTML = "52";
	document.getElementById("q3").innerHTML = "53";
	document.getElementById("q4").innerHTML = "54";
	document.getElementById("q5").innerHTML = "55";
	document.getElementById("q6").innerHTML = "56";
	document.getElementById("q7").innerHTML = "57";
	document.getElementById("q8").innerHTML = "58";
	document.getElementById("q9").innerHTML = "59";
	document.getElementById("q10").innerHTML = "60";
}

function question61_70() {
	question = 6;
	document.getElementById("q1").innerHTML = "61";
	document.getElementById("q2").innerHTML = "62";
	document.getElementById("q3").innerHTML = "63";
	document.getElementById("q4").innerHTML = "64";
	document.getElementById("q5").innerHTML = "65";
	document.getElementById("q6").innerHTML = "66";
	document.getElementById("q7").innerHTML = "67";
	document.getElementById("q8").innerHTML = "68";
	document.getElementById("q9").innerHTML = "69";
	document.getElementById("q10").innerHTML = "70";
}
function q1_11_21(){
	if(question == 0){
		q1();
	} 
	else if(question == 1){
		q11();
	}
	else if(question == 2){
		q21();
	}
  else if(question == 3){
		q31();
	}
  else if(question == 4){
		q41();
	}
  else if(question == 5){
		q51();
	}
  else if(question == 6){
		q61();
	}
}
function q2_12_22(){
	if(question == 0){
		q2();
	} 
	else if(question == 1){
		q12();
	}
	else if(question == 2){
		q22();
	}
  else if(question == 3){
		q32();
	}
  else if(question == 4){
		q42();
	}
  else if(question == 5){
		q52();
	}
  else if(question == 6){
		q62();
	}
}
function q3_13_23(){
	if(question == 0){
		q3();
	} 
	else if(question == 1){
		q13();
	}
	else if(question == 2){
		q23();
	}
  else if(question == 3){
		q33();
	}
  else if(question == 4){
		q43();
	}
  else if(question == 5){
		q53();
	}
  else if(question == 6){
		q63();
	}
}
function q4_14_24(){
	if(question == 0){
		q4();
	} 
	else if(question == 1){
		q14();
	}
	else if(question == 2){
		q24();
	}
  else if(question == 3){
		q34();
	}
  else if(question == 4){
		q44();
	}
  else if(question == 5){
		q54();
	}
  else if(question == 6){
		q64();
	}
}
function q5_15_25(){
	if(question == 0){
		q5();
	} 
	else if(question == 1){
		q15();
	}
	else if(question == 2){
		q25();
	}
  else if(question == 3){
		q35();
	}
  else if(question == 4){
		q45();
	}
  else if(question == 5){
		q55();
	}
  else if(question == 6){
		q65();
	}
}
function q6_16_26(){
	if(question == 0){
		q6();
	} 
	else if(question == 1){
		q16();
	}
	else if(question == 2){
		q26();
	}
  else if(question == 3){
		q36();
	}
  else if(question == 4){
		q46();
	}
  else if(question == 5){
		q56();
	}
  else if(question == 6){
		q66();
	}
}
function q7_17_27(){
	if(question == 0){
		q7();
	} 
	else if(question == 1){
		q17();
	}
	else if(question == 2){
		q27();
	}
  else if(question == 3){
		q37();
	}
  else if(question == 4){
		q47();
	}
  else if(question == 5){
		q57();
	}
  else if(question == 6){
		q67();
	}
}
function q8_18_28(){
	if(question == 0){
		q8();
	} 
	else if(question == 1){
		q18();
	}
	else if(question == 2){
		q28();
	}
  else if(question == 3){
		q38();
	}
  else if(question == 4){
		q48();
	}
  else if(question == 5){
		q58();
	}
  else if(question == 6){
		q68();
	}
}
function q9_19_29(){
	if(question == 0){
		q9();
	} 
	else if(question == 1){
		q19();
	}
	else if(question == 2){
		q29();
	}
  else if(question == 3){
		q39();
	}
  else if(question == 4){
		q49();
	}
  else if(question == 5){
		q59();
	}
  else if(question == 6){
		q69();
	}
}
function q10_20_30(){
	if(question == 0){
		q10();
	} 
	else if(question == 1){
		q20();
	}
	else if(question == 2){
		q30();
	}
  else if(question == 3){
		q40();
	}
  else if(question == 4){
		q50();
	}
  else if(question == 5){
		q60();
	}
  else if(question == 6){
		q70();
	}
}

function q1() {
  document.getElementById("testo").innerHTML = "1";
  i=1;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[1] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[1] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q2() {
  document.getElementById("testo").innerHTML = "2";
  i=2;
  document.getElementById("question").innerHTML = strQues[i];

  if(ansGiven[2] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";
  
  }
  else if(ansGiven[2] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}

function q3() {
  document.getElementById("testo").innerHTML = "3";
  i=3;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[3] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[3] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; 
    document.getElementById('falso').src="images/falso_vuoto.png";     
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q4() {
  document.getElementById("testo").innerHTML = "4";
  i=4;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[4] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[4] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; 
    document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q5() {
  document.getElementById("testo").innerHTML = "5";
  i=5;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[5] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[5] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q6() {
  document.getElementById("testo").innerHTML = "6";
  i=6;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[6] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[6] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; 
    document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q7() {
  document.getElementById("testo").innerHTML = "7";
  i=7;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[7] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[7] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q8() {
  document.getElementById("testo").innerHTML = "8";
  i=8;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[8] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[8] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
    
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q9() {
  document.getElementById("testo").innerHTML = "9";
  i=9;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[9] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[9] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; 
    document.getElementById('falso').src="images/falso_vuoto.png";  
  
  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";

  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q10() {
  document.getElementById("testo").innerHTML = "10";
  i=10;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[10] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[10] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
    
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q11() {
  document.getElementById("testo").innerHTML = "11";
  i=11;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[11] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[11] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; 
    document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q12() {
  document.getElementById("testo").innerHTML = "12";
  i=12;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[12] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[12] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; 
    document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q13() {
  document.getElementById("testo").innerHTML = "13";
  i=13;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[13] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[13] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
    
  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q14() {
  document.getElementById("testo").innerHTML = "14";
  i=14;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[14] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[14] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
    
  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q15() {
  document.getElementById("testo").innerHTML = "15";
  i=15;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[15] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[15] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  

  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";

  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q16() {
  document.getElementById("testo").innerHTML = "16";
  i=16;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[16] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[16] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  

  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q17() {
  document.getElementById("testo").innerHTML = "17";
  i=17;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[17] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[17] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  

  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
    
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q18() {
  document.getElementById("testo").innerHTML = "18";
  i=18;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[18] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[18] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
    
  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";

  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q19() {
  document.getElementById("testo").innerHTML = "19";
  i=19;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[19] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[19] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
    document.getElementById('falso').src="images/falso_vuoto.png";
    
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q20() {
  document.getElementById("testo").innerHTML = "20";
  i=20;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[20] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[20] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
    
  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q21() {
  document.getElementById("testo").innerHTML = "21";
  i=21;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[21] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[21] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  

  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q22() {
  document.getElementById("testo").innerHTML = "22";
  i=22;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[22] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[22] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  

  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";

  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q23() {
  document.getElementById("testo").innerHTML = "23";
  i=23;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[23] ==="")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[23] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  

  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";

  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q24() {
  document.getElementById("testo").innerHTML = "24";
  i=24;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[24] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[24] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  

  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";

  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q25() {
  document.getElementById("testo").innerHTML = "25";
  i=25;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[25] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[25] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  

  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q26() {
  document.getElementById("testo").innerHTML = "26";
  i=26;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[26] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[26] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  

  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q27() {
  document.getElementById("testo").innerHTML = "27";
  i=27;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[27] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";

  }
  else if(ansGiven[27] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q28() {
  document.getElementById("testo").innerHTML = "28";
  i=28;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[28] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[28] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q29() {
  document.getElementById("testo").innerHTML = "29";
  i=29;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[29] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[29] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
      document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q30() {
  document.getElementById("testo").innerHTML = "30";
  i=30;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[28] === "")
  {
  document.getElementById('falso').src="images/falso_vuoto.png";
  document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[28] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q31() {
  document.getElementById("testo").innerHTML = "31";
  i=31;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[31] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[31] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q32() {
  document.getElementById("testo").innerHTML = "32";
  i=32;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[32] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[32] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q33() {
  document.getElementById("testo").innerHTML = "33";
  i=33;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[33] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[33] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q34() {
  document.getElementById("testo").innerHTML = "34";
  i=34;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[34] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[34] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q35() {
  document.getElementById("testo").innerHTML = "35";
  i=35;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[35] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[35] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q36() {
  document.getElementById("testo").innerHTML = "36";
  i=36;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[36] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[36] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q37() {
  document.getElementById("testo").innerHTML = "37";
  i=37;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[37] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[37] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q38() {
  document.getElementById("testo").innerHTML = "38";
  i=38;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[38] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[38] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q39() {
  document.getElementById("testo").innerHTML = "39";
  i=39;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[39] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[39] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}
function q40() {
  document.getElementById("testo").innerHTML = "40";
  i=40;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[40] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[40] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q41() {
  document.getElementById("testo").innerHTML = "41";
  i=41;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[41] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[41] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q42() {
  document.getElementById("testo").innerHTML = "42";
  i=42;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[42] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[42] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q43() {
  document.getElementById("testo").innerHTML = "43";
  i=43;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[43] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[43] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q44() {
  document.getElementById("testo").innerHTML = "44";
  i=44;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[44] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[44] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q45() {
  document.getElementById("testo").innerHTML = "45";
  i=45;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[45] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[45] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q46() {
  document.getElementById("testo").innerHTML = "46";
  i=46;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[46] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[46] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q47() {
  document.getElementById("testo").innerHTML = "47";
  i=47;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[47] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[47] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q48() {
  document.getElementById("testo").innerHTML = "48";
  i=48;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[48] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[48] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q49() {
  document.getElementById("testo").innerHTML = "49";
  i=49;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[49] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[49] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q50() {
  document.getElementById("testo").innerHTML = "50";
  i=50;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[50] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[50] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q51() {
  document.getElementById("testo").innerHTML = "51";
  i=51;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[51] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[51] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q52() {
  document.getElementById("testo").innerHTML = "52";
  i=52;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[52] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[52] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q53() {
  document.getElementById("testo").innerHTML = "53";
  i=53;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[53] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[53] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q54() {
  document.getElementById("testo").innerHTML = "54";
  i=54;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[54] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[54] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q55() {
  document.getElementById("testo").innerHTML = "55";
  i=55;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[55] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[55] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q56() {
  document.getElementById("testo").innerHTML = "56";
  i=56;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[56] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[56] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q57() {
  document.getElementById("testo").innerHTML = "57";
  i=57;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[57] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[57] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q58() {
  document.getElementById("testo").innerHTML = "58";
  i=58;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[58] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[58] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q59() {
  document.getElementById("testo").innerHTML = "59";
  i=59;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[59] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[59] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q60() {
  document.getElementById("testo").innerHTML = "60";
  i=60;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[60] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[60] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q61() {
  document.getElementById("testo").innerHTML = "61";
  i=61;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[61] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[61] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q62() {
  document.getElementById("testo").innerHTML = "62";
  i=62;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[62] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[62] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q40() {
  document.getElementById("testo").innerHTML = "40";
  i=40;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[40] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[40] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q63() {
  document.getElementById("testo").innerHTML = "63";
  i=63;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[63] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[63] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q64() {
  document.getElementById("testo").innerHTML = "64";
  i=64;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[64] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[64] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q65() {
  document.getElementById("testo").innerHTML = "65";
  i=65;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[65] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[65] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q66() {
  document.getElementById("testo").innerHTML = "66";
  i=66;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[66] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[66] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q67() {
  document.getElementById("testo").innerHTML = "67";
  i=67;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[67] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[67] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q68() {
  document.getElementById("testo").innerHTML = "68";
  i=68;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[68] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[68] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q69() {
  document.getElementById("testo").innerHTML = "69";
  i=69;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[69] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[69] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}


function q70() {
  document.getElementById("testo").innerHTML = "70";
  i=70;
  document.getElementById("question").innerHTML = strQues[i];
  
  if(ansGiven[70] === "")
  {
    document.getElementById('falso').src="images/falso_vuoto.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
  else if(ansGiven[70] === "V")
  {
    document.getElementById('vero').src="images/vero.png"; document.getElementById('falso').src="images/falso_vuoto.png";  
  }
  else 
  {
    document.getElementById('falso').src="images/falso.png";
    document.getElementById('vero').src="images/vero_vuoto.png";
  }
    if(check == true)
  {
    if(answer[i] === "V" && ansGiven[i] === "V")
    {
      document.getElementById('vero').src="images/VXES.png";
    }
    else if(answer[i] === "F" && ansGiven[i] === "F")
    {
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "F")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      //document.getElementById('vero').src="images/VXES.png";
      document.getElementById('falso').src="images/FXER.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "V")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXER.png";
      //document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "F" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('falso').src="images/FXES.png";
    }
    else if(answer[i] == "V" && ansGiven[i] === "")
    {
      document.getElementById('b'+i).style.backgroundColor = '#ff3333';
      document.getElementById('vero').src="images/VXES.png";
    }
  }
}

function next(){
  if(i < 70){
    i++;
    let fun='q'+ i;
    window[fun]();
  }
  else
  {
    i = 70;
  }
}
function previous(){
  if(i<=1)
  {
    i=1;
  }
  else
  {
    
    i--;
    let fun='q'+ i;
    window[fun]();
  }
}

function vero()
{
  ansGiven[i] = "V";
  document.getElementById('b'+i).style.backgroundColor = '#ccffcc'; 
  document.getElementById('vero').src="images/vero.png";
  document.getElementById('falso').src="images/falso_vuoto.png";
}

function falso()
{
  ansGiven[i] = "F";
  document.getElementById('b'+i).style.backgroundColor = '#ccffcc'; 
  document.getElementById('falso').src="images/falso.png";
  document.getElementById('vero').src="images/vero_vuoto.png";
}
function correggi()
{
  for(t=1; t < 71; t++)
  {
    voto = 0
    if(answer[t]===ansGiven[t])
    {
      voto++;
    }
  }
  if(voto >=63)
  {
    alert("Hai comesso "+(70-voto) +" errori. Ha superato l'esame ");
  }
  else
  {
    alert("Hai comesso "+(70-voto) +" errori. Non ha superato l'esame ");
  }
  check = true;
  clearInterval(x);
  let fun='q'+ i;
  window[fun]();
  q70();
  q69();
  q68();
  q67();
  q66();
  q65();
  q64();
  q63();
  q62();
  q61();
  q60();
  q59();
  q58();
  q57();
  q56();
  q55();
  q54();
  q53();
  q52();
  q51();
  q50();
  q49();
  q48();
  q47();
  q46();
  q45();
  q44();
  q43();
  q42();
  q41();
  q40();
  q39();
  q38();
  q37();
  q36();
  q35();
  q34();
  q33();
  q32();
  q31();
  q30();
  q29();
  q28();
  q27();
  q26();
  q25();
  q24();
  q23();
  q22();
  q21();
  q20();
  q19();
  q18();
  q17();
  q16();
  q15();
  q14();
  q13();
  q12();
  q11();
  q10();
  q9();
  q8();
  q7();
  q6();
  q5();
  q4();
  q3();
  q2();
  q1();
}
var msg = new SpeechSynthesisUtterance();
msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
function speak()
{
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
   msg.text = strQues[i];
   msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
}
function r1()
{
  document.form1.capitolo.value= cap;
}
function checkbox()
{
  load = 1;
  if(document.getElementById("cap1").checked == true)
  {
    cap = cap + document.getElementById("cap1").value +",";
  }

  if(document.getElementById("cap2").checked == true)
  {
    cap = cap + document.getElementById("cap2").value +",";
  }

  if(document.getElementById("cap3").checked == true)
  {
    cap = cap + document.getElementById("cap3").value +",";
  }

  if(document.getElementById("cap4").checked == true)
  {
    cap = cap + document.getElementById("cap4").value +",";
  }

  if(document.getElementById("cap5").checked == true)
  {
    cap = cap + document.getElementById("cap5").value +",";
  }

  if(document.getElementById("cap6").checked == true)
  {
    cap = cap + document.getElementById("cap6").value +",";
  }

  if(document.getElementById("cap7").checked == true)
  {
    cap = cap + document.getElementById("cap7").value +",";
  }

  if(document.getElementById("cap8A").checked == true)
  {
    cap = cap + document.getElementById("cap8A").value +",";
  }

  if(document.getElementById("cap8B").checked == true)
  {
    cap = cap + document.getElementById("cap8B").value +",";
  }

  if(document.getElementById("cap9").checked == true)
  {
    cap = cap + document.getElementById("cap9").value +",";
  }

  if(document.getElementById("cap10").checked == true)
  {
    cap = cap + document.getElementById("cap10").value +",";
  }

  if(document.getElementById("cap11").checked == true)
  {
    cap = cap + document.getElementById("cap11").value +",";
  }

  if(document.getElementById("cap12A").checked == true)
  {
    cap = cap + document.getElementById("cap12A").value +",";
  }

  if(document.getElementById("cap12B").checked == true)
  {
    cap = cap + document.getElementById("cap12B").value +",";
  }

  if(document.getElementById("cap12C").checked == true)
  {
    cap = cap + document.getElementById("cap12C").value +",";
  }

  if(document.getElementById("cap13").checked == true)
  {
    cap = cap + document.getElementById("cap13").value +",";
  }

  document.form.capitolo.value= cap;
}

function load1()
{
  if(load != 1)
  {
    document.getElementById("scheda_quiz").style.display = "block";
    document.getElementById("form1").style.display = "none";
    document.getElementById("tabble").style.display = "none";
  }
  else 
  {
    document.getElementById("scheda_quiz").style.display = "none";
    document.getElementById("form1").style.display = "block";
    document.getElementById("tabble").style.display = "block";
  }
}

</script>
<head>
<link rel="icon" href="http://www.darpatente.com/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h1> <a class = "dar" href="http://www.darpatente.com/">Dar Patente Quiz</a> </h1>
    <div class="logo">
        <img src="images/logo.jpeg" class="logo" >
    </div>
</head>

<body onload="load1()">
    
<div id="scheda_quiz" class="scheda_quiz">
	<div id="flex">
		<button class="intervalli_quiz" onclick="question1_10()">Domande da 1 a 10</button>
    <button class="intervalli_quiz" onclick="question11_20()">Domande da 11 a 20</button>
    <button class="intervalli_quiz" onclick="question21_30()">Domande da 21 a 30</button>
    <button class="intervalli_quiz" onclick="question31_40()">Domande da 31 a 40</button>
    <button class="intervalli_quiz" onclick="question41_50()">Domande da 41 a 50</button>
    <button class="intervalli_quiz" onclick="question51_60()">Domande da 51 a 60</button>
    <button class="intervalli_quiz" onclick="question61_70()">Domande da 61 a 70</button>
	</div>   
	<div id="flex">
		<button class="domanda_10" onclick="q1_11_21()">	<p id="q1">1</p>	</button>
    <button class="domanda_10" onclick="q2_12_22()">	<p id="q2">2</p>	</button>
        <button class="domanda_10" onclick="q3_13_23()">	<p id="q3">3</p>	</button>
		<button class="domanda_10" onclick="q4_14_24()">	<p id="q4">4</p>	</button>
        <button class="domanda_10" onclick="q5_15_25()">	<p id="q5">5</p>	</button>
        <button class="domanda_10" onclick="q6_16_26()">	<p id="q6">6</p>	</button>
		<button class="domanda_10" onclick="q7_17_27()">	<p id="q7">7</p>	</button>
        <button class="domanda_10" onclick="q8_18_28()">	<p id="q8">8</p>	</button>
        <button class="domanda_10" onclick="q9_19_29()">	<p id="q9">9</p>	</button>
		<button class="domanda_10" onclick="q10_20_30()">	<p id="q10">10</p>	</button>
	</div>
	<div id="flex1">
    <button class="domanda_40" id="b1" onclick="q1()">1</button>
    <button class="domanda_40" id="b2" onclick="q2()">2</button>
    <button class="domanda_40" id="b3" onclick="q3()">3</button>
		<button class="domanda_40" id="b4" onclick="q4()">4</button>
    <button class="domanda_40" id="b5" onclick="q5()">5</button>
    <button class="domanda_40" id="b6"onclick="q6()">6</button>
		<button class="domanda_40" id="b7" onclick="q7()">7</button>
    <button class="domanda_40" id="b8" onclick="q8()">8</button>
    <button class="domanda_40" id="b9" onclick="q9()">9</button>
		<button class="domanda_40" id="b10" onclick="q10()">10</button>
    <button class="domanda_40" id="b11"onclick="q11()">11</button>
    <button class="domanda_40" id="b12" onclick="q12()">12</button>
    <button class="domanda_40" id="b13" onclick="q13()">13</button>
		<button class="domanda_40" id="b14" onclick="q14()">14</button>
    <button class="domanda_40" id="b15" onclick="q15()">15</button>
    <button class="domanda_40" id="b16" onclick="q16()">16</button>
		<button class="domanda_40" id="b17" onclick="q17()">17</button>
    <button class="domanda_40" id="b18" onclick="q18()">18</button>
    <button class="domanda_40" id="b19" onclick="q19()">19</button>
		<button class="domanda_40" id="b20" onclick="q20()">20</button>
		<button class="domanda_40" id="b21" onclick="q21()">21</button>
    <button class="domanda_40" id="b22" onclick="q22()">22</button>
    <button class="domanda_40" id="b23" onclick="q23()">23</button>
		<button class="domanda_40" id="b24" onclick="q24()">24</button>
    <button class="domanda_40" id="b25" onclick="q25()">25</button>
    <button class="domanda_40" id="b26" onclick="q26()">26</button>
		<button class="domanda_40" id="b27" onclick="q27()">27</button>
    <button class="domanda_40" id="b28" onclick="q28()">28</button>
    <button class="domanda_40" id="b29" onclick="q29()">29</button>
		<button class="domanda_40" id="b30" onclick="q30()">30</button>
    <button class="domanda_40" id="b31" onclick="q31()">31</button>
    <button class="domanda_40" id="b32" onclick="q32()">32</button>
    <button class="domanda_40" id="b33" onclick="q33()">33</button>
    <button class="domanda_40" id="b34" onclick="q34()">34</button>
    <button class="domanda_40" id="b35" onclick="q35()">35</button>
    <button class="domanda_40" id="b36" onclick="q36()">36</button>
    <button class="domanda_40" id="b37" onclick="q37()">37</button>
    <button class="domanda_40" id="b38" onclick="q38()">38</button>
    <button class="domanda_40" id="b39" onclick="q39()">39</button>
    <button class="domanda_40" id="b40" onclick="q40()">40</button>
    <button class="domanda_40" id="b41" onclick="q41()">41</button>
    <button class="domanda_40" id="b42" onclick="q42()">42</button>
    <button class="domanda_40" id="b43" onclick="q43()">43</button>
    <button class="domanda_40" id="b44" onclick="q44()">44</button>
    <button class="domanda_40" id="b45" onclick="q45()">45</button>
    <button class="domanda_40" id="b46" onclick="q46()">46</button>
    <button class="domanda_40" id="b47" onclick="q47()">47</button>
    <button class="domanda_40" id="b48" onclick="q48()">48</button>
    <button class="domanda_40" id="b49" onclick="q49()">49</button>
    <button class="domanda_40" id="b50" onclick="q50()">50</button>
    <button class="domanda_40" id="b51" onclick="q51()">51</button>
    <button class="domanda_40" id="b52" onclick="q52()">52</button>
    <button class="domanda_40" id="b53" onclick="q53()">53</button>
    <button class="domanda_40" id="b54" onclick="q54()">54</button>
    <button class="domanda_40" id="b55" onclick="q55()">55</button>
    <button class="domanda_40" id="b56" onclick="q56()">56</button>
    <button class="domanda_40" id="b57" onclick="q57()">57</button>
    <button class="domanda_40" id="b58" onclick="q58()">58</button>
    <button class="domanda_40" id="b59" onclick="q59()">59</button>
    <button class="domanda_40" id="b60" onclick="q60()">60</button>
    <button class="domanda_40" id="b61" onclick="q61()">61</button>
    <button class="domanda_40" id="b62" onclick="q62()">62</button>
    <button class="domanda_40" id="b63" onclick="q63()">63</button>
    <button class="domanda_40" id="b64" onclick="q64()">64</button>
    <button class="domanda_40" id="b65" onclick="q65()">65</button>
    <button class="domanda_40" id="b66" onclick="q66()">66</button>
    <button class="domanda_40" id="b67" onclick="q67()">67</button>
    <button class="domanda_40" id="b68" onclick="q68()">68</button>
    <button class="domanda_40" id="b69" onclick="q69()">69</button>
    <button class="domanda_40" id="b70" onclick="q70()">70</button>

	</div>
	
		<div class="blocco_quiz">
			<div class="vedidomanda" id="vedidomanda1" style="display: block;">
			
				<div class="domanda_quiz">
				
					<<!--  copy this for all -->
          <div class="testo_domanda_quiz">
            <div class = "flex-container">
            <div style= "flex: 50%;"> <img class= "speak" id="speak" onclick = "speak()" src="images/volume.png" > </img></div>
            <div style= "flex: 50%;"><h1 style="text-align:right;color:#8FA398;" id="testo">1</h1></div>
            
            
            </div>
						
						<div id="question" class= "quesSize">
              <script>            
              document.getElementById("testo").innerHTML = "1";
              document.getElementById("question").innerHTML = strQues[i];
              
              </script>    
                    
            </div>
					</div>
				
					<div class = "flex-button">
            <div style= "flex: 25%; align-self: center; text-align: right; padding-right:12%;">
              <img src="images/previous.png" class="prev" onclick = "previous()"> 
            </div>
            <div style= "flex: 25%; align-self: center; text-align: center; padding-right:12%;">
              <img src="images/vero_vuoto.png" class="vero" id="vero" onclick = "vero()" alt="Vero">
            </div>
            <div style= "flex: 25%; align-self: center; text-align: center; padding-right:12%;">
              <img src="images/falso_vuoto.png" class="vero" id="falso" onclick = "falso()" alt="Vero">
            </div>
            <div style= "flex: 25%; align-self: center; text-align: left;">
              <img src="images/forward.png" class="prev" onclick = "next()">
            </div> 
          </div>

          
				</div>
			</div>
      
		</div>

		<div class="countdown_quiz"><strong>Tempo a disposizione</strong>
      <div id="note" style="font-size:45px;font-weight:16;"> </div>
    </div>
    
		<div id="flex2">
    <form name = "form1" id="form2" method="post">
            <input type="hidden" name="capitolo" value="56">
            <input class="intervalli_quiz2" id="submit" onclick="r1()" type="submit" value=" Nuova Scheda ">
          </form>
            <button class="intervalli_quiz2" onclick="correggi()">  Correggi  </button>
    </div>
	</div>
  
	
</div>
<form class= "cont" name = "form" id="form1" method="post">
    <table id = "tabble">
  <tr>
        <td>
            <h2> Capitolo 1</h2>
            <p class= "text">Forze agenti sui veicoli in movemento Uso dei rapporti del cambio in velocità om mimzoine del carico del veicolo e delle caratteristche stradali</p>
        </td>
        <td>
            <input type="checkbox" class="larger"    id="cap1" name="cap" value="1">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 2</h2>
            <p class= "text">Inerzia e frenatura Elementi frenanti Impianto frenante pneumatico e oleopneumatico e organi principali</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap2" name="cap" value="2">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 3</h2>
            <p class= "text">ITS applicati alle infrastrutture Sistemi di identificazione automatica AVIS , AVI , AEI </p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap3" name="cap" value="3">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 4</h2>
            <p class= "text">Incrocio malagevole Comportamento in caso di incidente Convenzione di indennizzo diretto</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap4" name="cap" value="4">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 5</h2>
            <p class= "text">Principale cause incidenti Infortunio sul lavoro</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap5" name="cap" value="5">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 6</h2>
            <p class= "text">Periodo di guida e riposo Cronotachigrafo - norme , obbligo ed esenzioni</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap6" name="cap" value="6">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 7</h2>
            <p class= "text">Ingresso , soggiorno e circolazione in UE</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap7" name="cap" value="7">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 8A</h2>
            <p class= "text">Immagine di un'impresa di autotrasporto</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap8A" name="cap" value="8A">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 8B</h2>
            <p class= "text">Ottimizzazione dei costi di esercizio</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap8B" name="cap" value="8B">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 9</h2>
            <p class= "text">Guida e idoneità fisica e mentale</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap9" name="cap" value="9">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 10</h2>
            <p class= "text">Quanto e cosa mangia un conducente</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap10" name="cap" value="10">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 11</h2>
            <p class= "text">Merci e unità di carico Trasportazione delle cose</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap11" name="cap" value="11">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 12A</h2>
            <p class= "text">Veicoli stradali destinati al trasporto di cose </p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap12A" name="cap" value="12A">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 12B</h2>
            <p class= "text">Normative internationale sull'autotrasporto di cose</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap12B" name="cap" value="12B">
        </td>
  </tr>
  <tr>
        <td>
            <h2> Capitolo 12C</h2>
            <p class= "text">Accordo bilateriale UE - Regno Unito e svizzera</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap12C" name="cap" value="12C">
        </td>
  </tr>

  <tr>
        <td>
            <h2> Capitolo 13</h2>
            <p class= "text">Economico dell'autotrasporto di merci e dell'organizzazione del mercato</p>
        </td>
        <td>
            <input type="checkbox" class="larger"   id="cap13" name="cap" value="13">
        </td>
  </tr>
  
  <tr>
    <td>
    <input type="hidden" name="capitolo" value="56">
    <input class="intervalli_quiz3" id="submit" onclick="checkbox()" type="submit" value="Submit">
    </td>
    <td></td>
  </tr>
    </table>
</form>
</body>
<footer>
	<a href="https://www.facebook.com/Dar-Patente-242819279712109/" target="_blank"><i class="fa fa-facebook-square" style="font-size:60px"></i></a>
	<a href="https://www.instagram.com/dar.patente/?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram" style="font-size:60px"></i></a>
	<a href="https://www.youtube.com/channel/UC1SCTm1uXsVRO5h46QLBrhQ" target="_blank"><i class="fa fa-youtube-play" style="font-size:60px"></i></a>
</footer>

</html>