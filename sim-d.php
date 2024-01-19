<!DOCTYPE html>
<html lang="it" class = "background">
<?php include 'connect.php';?>
<?php
 
  $conn=mysqli_connect($host,$username,$password,"$dbname");
  if(!$conn)
  {
    die('Could not Connect MySql Server:' );
  }
  $q1;$q2;$q3;$q4;$q5;$q6;$q7;$q8;$q9;$q10;$q11;$q12;$q13;$q14;$q15;$q16;$q17;$q18;$q19;$q20;$q21;$q22;$q23;$q24;$q25;$q26;$q27;$q28;$q29;$q30;$q31;$q32;$q33;$q34;$q35;$q36;$q37;$q38;$q39;$q40;
  $ans1;$ans2;$ans3;$ans4;$ans5;$ans6;$ans7;$ans8;$ans9;$ans10;$ans11;$ans12;$ans13;$ans14;$ans15;$ans16;$ans17;$ans18;$ans19;$ans20;$ans21;$ans22;$ans23;$ans24;$ans25;$ans26;$ans27;$ans28;$ans29;$ans30;$ans31;$ans32;$ans33;$ans34;$ans35;$ans36;$ans37;$ans38;$ans39;$ans40;
  $img1;$img9;$img3;$img4;$img5;$img6;$img7;$img8;$img9;$img10;$img11;$img12;$img13;$img14;$img15;$img16;$img17;$img18;$img19;$img20;$img21;$img22;$img23;$img24;$img25;$img26;$img27;$img28;$img29;$img30;$img31;$img32;$img33;$img34;$img35;$img36;$img37;$img38;$img39;$img40;
  $ran1=0;$ran2=0;$ran3=0;$ran4=0;$ran5=0;$ran6=0;$ran7=0;$ran8=0;$ran9=0;$ran10=0;$ran11=0;$ran12=0;$ran13=0;$ran14=0;$ran15=0;$ran16=0;$ran17=0;$ran18=0;$ran19=0;$ran20=0;$ran21=0;$ran22=0;$ran23=0;$ran24=0;$ran25=0;$ran26=0;$ran27=0;$ran28=0;$ran29=0;$ran30=0;$ran31=0;$ran32=0;$ran33=0;$ran34=0;$ran35=0;$ran36=0;$ran37=0;$ran38=0;$ran39=0;$ran40=0;$ran41=0;

  $random = rand(1,9);
  
  switch($random)
  {
    case 1:
      type1(); break;
    case 2:
      type2();  break;
    case 3:
      type3();  break;
    case 4:
      type4();  break;
    case 5:
      type5();  break;
    case 6:
      type6();  break;
    case 7:
      type7();  break;
    case 8:
      type8();  break;  

    default:
      type1(); break;
    
  }
  function type1()
  {
    $num = 0;
    $num = g1($num);
    $num = g2($num);
    $num = g3($num);
    $num = g4($num);
    $num = g5($num);
    $num = g6($num);
    $num = g7($num);
    $num = g8($num);

  }
  function type2()
  {
    $num = 0;
    $num = g2($num);
    $num = g3($num);
    $num = g4($num);
    $num = g5($num);
    $num = g6($num);
    $num = g7($num);
    $num = g8($num);

    $num = g1($num);
  }
  function type3()
  {
    $num = 0;
    $num = g3($num);
    $num = g4($num);
    $num = g5($num);
    $num = g6($num);
    $num = g7($num);
    $num = g8($num);

    $num = g1($num);
    $num = g2($num);
  }
  function type4()
  {
    $num = 0;
    $num = g4($num);
    $num = g5($num);
    $num = g6($num);
    $num = g7($num);
    $num = g8($num);

    $num = g1($num);
    $num = g2($num);
    $num = g3($num);
  }
  function type5()
  {
    $num = 0;
    $num = g5($num);
    $num = g6($num);
    $num = g7($num);
    $num = g8($num);

    $num = g1($num);
    $num = g2($num);
    $num = g3($num);
    $num = g4($num);
  }
  function type6()
  {
    $num = 0;
    $num = g6($num);
    $num = g7($num);
    $num = g8($num);

    $num = g1($num);
    $num = g2($num);
    $num = g3($num);
    $num = g4($num);
    $num = g5($num);
  }
  function type7()
  {
    $num = 0;
    $num = g7($num);
    $num = g8($num);
    $num = g1($num);
    $num = g2($num);
    $num = g3($num);
    $num = g4($num);
    $num = g5($num);
    $num = g6($num);
  }
  function type8()
  {
    $num = 0;
    $num = g8($num);
    $num = g1($num);
    $num = g2($num);
    $num = g3($num);
    $num = g4($num);
    $num = g5($num);
    $num = g6($num);
    $num = g7($num);
  }
  
  function g1($num)
  {
    $num = c12($num);
    $num =c10($num);
    $num =c2($num);
    $num =c1($num);
    $num =c2($num);
    return $num;
  }
  
  function g2($num)
  {
    $num =c3($num);
    $num =c8($num);
    $num =c7($num);
    $num =c12($num);
    $num =c10($num);
    return $num;
  }
  function g3($num)
  {
    $num =c11($num);
    $num =c13($num);
    $num =c14($num);
    $num =c14($num);
    $num =c1($num);
    return $num;
  }
  function g4($num)
  {
    $num =c8($num);
    $num =c6($num);
    $num =c8($num);
    $num =c7($num);
    $num =c13($num);
    return $num;
  }
  function g5($num)
  {
    $num =c11($num);
    $num =c11($num);
    $num =c3($num);
    $num =c4($num);
    $num =c7($num);
    return $num;
  }
  function g6($num)
  {
    $num =c7($num);
    $num =c10($num);
    $num =c10($num);
    $num =c11($num);
    $num =c14($num);
    return $num;
  }
  function g7($num)
  {
    $num =c14($num);
    $num =c9($num);
    $num =c3($num);
    $num =c4($num);
    $num =c9($num);
    return $num;
  }
  function g8($num)
  {
    $num =c10($num);
    $num =c10($num);
    $num =c11($num);
    $num =c12($num);
    $num =c4($num);
    return $num;
  }
  function c1($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 1 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];

      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c2($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 2 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c3($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 3 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c4($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 4 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c5($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 5 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c6($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 6 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c7($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 7 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c8($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 8 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c9($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 9 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c10($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 10 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c11($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 11 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c12($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 12 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c13($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 13 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  function c14($num)
  {
    $num++;
    do{
        $sql = "SELECT * FROM D WHERE chapter= 14 and Ques_Num is not null order by rand() limit 1";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) 
    {
      if($row = $result->fetch_assoc()) 
      {
        $douple =0;
        for($t= 1; $t<= 41 ; $t++)
        {          
          if($row["Ques_Num"] == $GLOBALS['ran'.$t])
          {
            $douple = 1;
          }
        }
        $GLOBALS['q'.$num] = $row["Question"];
        $GLOBALS['ans'.$num] = $row["Answer"];
        $GLOBALS['img'.$num] = $row["Topic_No"];
        $GLOBALS['ran'.$num] = $row["Ques_Num"];
      }
    }
    else 
    {
      echo "0 results";
    }
    }while( $douple == 1);
    
    return $num;
  }
  
     
  $ques = ["", $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20, $q21, $q22, $q23, $q24, $q25, $q26, $q27, $q28, $q29, $q30, $q31, $q32, $q33, $q34, $q35, $q36, $q37, $q38, $q39, $q40];
  $ans =["",$ans1, $ans2, $ans3, $ans4, $ans5, $ans6, $ans7, $ans8, $ans9, $ans10, $ans11, $ans12, $ans13, $ans14, $ans15, $ans16, $ans17, $ans18, $ans19, $ans20, $ans21, $ans22, $ans23, $ans24, $ans25, $ans26, $ans27, $ans28, $ans29, $ans30, $ans31, $ans32, $ans33, $ans34, $ans35, $ans36, $ans37, $ans38, $ans39, $ans40];
  $img =["",$img1, $img9, $img3, $img4, $img5, $img6, $img7, $img8, $img9, $img10, $img11, $img12, $img13, $img14, $img15, $img16, $img17, $img18, $img19, $img20, $img21, $img22, $img23, $img24, $img25, $img26, $img27, $img28, $img29, $img30, $img31, $img32, $img33, $img34, $img35, $img36, $img37, $img38, $img39, $img40];
  $ran =["",$ran1, $ran2, $ran3, $ran4, $ran5, $ran6, $ran7, $ran8, $ran9, $ran10, $ran11, $ran12, $ran13, $ran14, $ran15, $ran16, $ran17, $ran18, $ran19, $ran20, $ran21, $ran22, $ran23, $ran24, $ran25, $ran26, $ran27, $ran28, $ran29, $ran30, $ran31, $ran32, $ran33, $ran34, $ran35, $ran36, $ran37, $ran38, $ran39, $ran40];

?>

<style>
header {
    width: 300px;
    margin: auto;
    border: 1px solid red;
}
h1{
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
    column-gap: 0.5%;
    padding: 0.5% 0.5% 0.5% 0.5%;
    flex: 1 1;
}

@media only screen and (max-width: 600px) {
  
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
    width: 100%;
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
    width:24.1%; 
    margin-right:1.2%; 
    min-width:68px; 
    padding:10px 0; 
    text-align:center;
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

.domanda_10 {
  margin-top:20px; 
  font-weight:bold; 
  /**font size without chnaging the box */
  width:5%; 
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
	display: flex;
	justify-content: center;
  text-align: center;
  margin-top:20px; 
  float:left; 
  font-size:15px; 
  color:#8FA398; 
  text-align:center; 
  padding:2px ; 
  background-color:#FFF; 
  width:2%
}
.domanda_40_first{
  margin-top:10px; 
  float:left; 
  font-size:9px; 
  color:#8FA398; 
  text-align:center; 
  padding:2px 0; 
  background-color:#FFF; 
  margin-right:0.5%; 
  width:2.012820512820512820512820512820513%
}
.img
{
  padding: 15px 5px 5px 25px;
  width:60%;
  height:auto;
}

.vedidomanda, .domanda
{
  width:100%; 
  margin-top:4px; 
  float:left; 
  display:none; 
  height:auto; 
  margin-bottom:5px
}
#vedidomanda1
{
  display:block
}
.segnale_quiz
{
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
    width:69%; 
    margin-right:0; 
    float:right; 
    height:auto
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
    height:500px;
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
  .quesSize
{
  font-size: 50px;
}
.margin_risp{
	margin:auto; 
	width:132px; 
	padding:10px; 
	overflow:auto
	}
.bg_vero, .bg_falso{
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
@media only screen and (max-device-width: 1000px) and (orientation: landscape) {
  .intervalli_quiz{
    width:400px;
    font-size: 20px;
  }
  #flex1{

    height: 60%;
    column-gap: 1.5%;
    font-size: 30px;
}
.domanda_40 {
  width: 32px;
}
}
.intervalli_quiz3{
	display: flex;
	justify-content: center;
  	text-align: center;
    float:left; 
	  margin-top:10px;  
    color:#8FA398; 
    background-color:#FFF; 
    height: 80px;
    width:230px; 
    margin-right:1%;  
    padding-top: 3%; 
    text-align:center;
    font-size: 30px;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}
.flex-container 
{
  display: flex;
  flex-direction: row;
  align-content: space-between;
}
.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<script>
var voto = 0;
var check = false;
var strQues = <?php echo json_encode($ques); ?>;
var answer = <?php echo json_encode($ans); ?>;
var image = <?php echo json_encode($img); ?>;
var ran = <?php echo json_encode($ran); ?>;
var ansGiven = ["","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""];
var question = 0;
var i = 1;
// Set the date we're counting down to
var countDownDate = new Date().getTime() + 1800000 + 600000;

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
  
  document.getElementById("note").innerHTML =  minutes +":"+ seconds ;
  
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
}

function q1() {
  document.getElementById("testo").innerHTML = "1";
  i=1;
  document.getElementById("question").innerHTML = strQues[i];
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
  img();
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
function next(){
  if(i < 40){
    i++;
    let fun='q'+ i;
    window[fun]();
  }
  else
  {
    i = 40;
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
function img()
{
  if(parseInt(image[i]) === 5 || parseInt(image[i]) === 6 || (parseInt(image[i]) > 18 && parseInt(image[i]) < 30 ) || (parseInt(image[i]) > 47 && parseInt(image[i]) < 58 ) || (parseInt(image[i]) > 58 && parseInt(image[i]) < 68 )  || (parseInt(image[i]) > 282 && parseInt(image[i]) < 300 ) )
  {
    document.getElementById('img').src="images/d/"+image[i]+".png";
  }
  else
  {
    document.getElementById('img').src="images/white.jpg";   
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
  voto = 0
  for(t=1; t < 41; t++)
  {
    if(answer[t]===ansGiven[t])
    {
      voto++;
    }
  }
  if(voto >=36)
  {
    alert("Hai comesso "+(40-voto) +" errori. Ha superato l'esame ");
  }
  else
  {
    alert("Hai comesso "+(40-voto) +" errori. Non ha superato l'esame ");
  }
  check = true;
  clearInterval(x);
  let fun='q'+ i;
  window[fun]();
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
function fun()
{
  var modal = document.getElementById("myModal");
  var modalImg = document.getElementById("img01");
  modal.style.display = "block";
  modalImg.src = document.getElementById("img").src;
}
function span01()
{
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}
function r1()
{
  window.location.reload();
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

<body>
   
<div  class="scheda_quiz">
	<div id="flex">
		<button class="intervalli_quiz" onclick="question1_10()">Domande da 1 a 10</button>
    <button class="intervalli_quiz" onclick="question11_20()">Domande da 11 a 20</button>
    <button class="intervalli_quiz" onclick="question21_30()">Domande da 21 a 30</button>
    <button class="intervalli_quiz" onclick="question31_40()">Domande da 31 a 40</button>
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

	</div>
	
		<div class="blocco_quiz">
			<div class="vedidomanda" id="vedidomanda1" style="display: block;">
		<div class="segnale_quiz" id="segnale_quiz_1">
			<div class="img_domanda_quiz">
      <img id="img" class="img" onclick = "fun()"> </img>
         <!-- The Modal -->
         <div id="myModal" class="modal">
          <img class="modal-content" id="img01" onclick = "span01()" >
        </div>
				</div>
				</div>
				<div class="domanda_quiz">
				<!--  copy this for all -->
        <div class="testo_domanda_quiz">
            <div class = "flex-container">
            <div style= "flex: 50%;"> <img class= "speak" id="speak" onclick = "speak()" src="images/volume.png" > </img></div>
            <div style= "flex: 50%;"><h1 style="text-align:right;color:#8FA398;" id="testo">1</h1></div>
            
            
            </div>
						
						<div id="question" class= "quesSize">
              <script>
              document.getElementById("testo").innerHTML = "1";
              document.getElementById("question").innerHTML = strQues[i];
              img();
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
            <button class="intervalli_quiz2" onclick="r1()">Nuova Scheda</button>
            <button class="intervalli_quiz2" onclick="correggi()">Correggi</button>
    </div>
	</div>
  
	
</div>
</body>
<footer>
	<a href="https://www.facebook.com/Dar-Patente-242819279712109/" target="_blank"><i class="fa fa-facebook-square" style="font-size:60px"></i></a>
	<a href="https://www.instagram.com/dar.patente/?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram" style="font-size:60px"></i></a>
	<a href="https://www.youtube.com/channel/UC1SCTm1uXsVRO5h46QLBrhQ" target="_blank"><i class="fa fa-youtube-play" style="font-size:60px"></i></a>
</footer>

</html>