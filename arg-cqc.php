<!DOCTYPE html>
<html lang="it-IT" class = "background">
<?php include 'connect.php';?>
<?php 
  
  $arg_num = 1;
  $conn=mysqli_connect($host,$username,$password,"$dbname");
  if(!$conn)
  {
    die('Could not Connect MySql Server:' );
  }
  for($x=1; $x<511; $x++)
  {
  $i = -1;
  $query = mysqli_query($conn, "SELECT * FROM CQC WHERE Topic_No=$x;");
  $ques = ["","","","","","","","","","","","","","","","","",""];
  $ans = ["","","","","","","","","","","","","","","","","",""];
    while ($row = mysqli_fetch_assoc($query)) 
    { 
      $i++;     
      $ques[$i]=$row["Question"];  
      $ans[$i]=$row["Answer"];  
    } 
    $arrayQues[$x]=  $ques;
    $arrayAns[$x]=  $ans;
  }
  ?>
<style>
 .speak
{
  text-align:left;
  color:#8FA398;
  width:12%;
}
.ques
{
    float:right; 
    flex: 92%;
    font-size: 180%;
    padding-left: 1px;
    font-size: 50px;
}
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
footer {
	display : flex;
	column-gap: 50px;
	justify-content: center;
  text-align: center;
  padding-top: 10px;
  background-color: #161F6D;
  color : yellow;
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
    height: 100px;
    width:100px; 
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
    height: 100px;
    width:230px; 
    margin-right:1%;  
    padding:10px 0; 
    text-align:center;
    font-size: 50px;
}
.logo 
{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 60%;
    padding: 5px 20px 2px 5px;
    /*border-radius: 80%;*/
}
.bg_vero{
	width:56px; 
	height:53px; 
	padding-top:16px; 
	background-image:url(images/vero_vuoto.gif); 
	background-repeat:no-repeat; 
	background-position:center; 
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
.button {
  background-color: #CCFFFF;
    border: none;
    color:rgb(255, 255, 253);
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    float: none;
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
#flex{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    column-gap: 20px;
    padding: 5px 2px 2px 100px;
}

.background{
    background-size: cover;
    height: 100%;
    background-repeat:no-repeat;
    background: #00ABE1;;
}
#footer{
    background-color: black;
}
.img
{
  float:left; 
	width:100%; 
	padding-right:300px;
}
.flex-container {
  display: flex;
  flex-direction: column;
}

.flex {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  padding-bottom: 1%;
}
.strques
{
    float:right; 
    flex: 85%;
    font-size: 180%;
    padding-left: 1px;
    font-size: 45px;
}
.scheda_quiz{
    background-color:#CFE5D6; 
    margin: 10px; 
    height:auto; 
    padding:5px; 
    overflow:hidden
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
    text-align:center
}
.arg_row
{
    font-size:25px;
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
.quesSize{
  font-size: 30px;
}

tr
  {
    width: 95%;
    margin-top: 10px;
    border-bottom: solid;
    background-color: #CFE5D6;
  }
  .mark
{
  flex: 2%;
}
.dot
{
  font-size: 50px;
}
@media only screen and (max-device-width: 480px) 
{
  .mark
{
  flex: 15%;
}
.dot
{
  font-size: 12px;
}
  .speak
{
  width: 35px;
}
.arg_row
{
    font-size:40px;
}
.logo 
{
    width: 70%;
}
.quesSize{
  font-size: 30px;
}
}
</style> 
<script>
var arrayQues = <?php echo json_encode($arrayQues); ?>;
var arrayAns = <?php echo json_encode($arrayAns); ?>;
var argNum = 1; 
var strQues = arrayQues[argNum];
var strAns = arrayAns[argNum];
var ansGiven = ["","","","","","","","","","","","","","","","","","","","","","","","","","","",""];
var question = [];
var answer = [];
var voice = 1;
var clicks = new Array(30);
for(var f=0 ; f<30;f++)
{
    clicks[f]= 0;
}
trim();
function trim()
{
  question = [];
  answer = [];
  for(var i= 1; strQues[i] != ""; i++)
  {
    question[i-1] = strQues[i];
    answer[i-1] = strAns[i];
  }
}
shuffle();
function shuffle()
{
  for (let i = question.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    const temp = question[i];
    question[i] = question[j];
    question[j] = temp;

    const temp1 = answer[i];
    answer[i] = answer[j];
    answer[j] = temp1;
  }
}
function ans2()
{
    clicks[2]++;
    if(clicks[2] %2 === 0)
    {
        ansGiven[2] ="F";
        document.getElementById('ans2').src="images/falso.png";
    }
    else
    {
      ansGiven[2] ="V";
      document.getElementById('ans2').src="images/vero.png";
    }
}
function ans3()
{
    clicks[3]++;
    if(clicks[3] %2 === 0)
    {
        ansGiven[3] ="F";
        document.getElementById('ans3').src="images/falso.png";
    }
    else
    {
      ansGiven[3] ="V";
      document.getElementById('ans3').src="images/vero.png";
    }
}
function ans4()
{
    clicks[4]++;
    if(clicks[4] %2 === 0)
    {
        ansGiven[4] ="F";
        document.getElementById('ans4').src="images/falso.png";
    }
    else
    {
      ansGiven[4] ="V";
      document.getElementById('ans4').src="images/vero.png";
    }
}
function ans5()
{
    clicks[5]++;
    if(clicks[5] %2 === 0)
    {
        ansGiven[5] ="F";
        document.getElementById('ans5').src="images/falso.png";
    }
    else
    {
      ansGiven[5] ="V";
      document.getElementById('ans5').src="images/vero.png";
    }
}
function ans6()
{
    clicks[6]++;
    if(clicks[6] %2 === 0)
    {
        ansGiven[6] ="F";
        document.getElementById('ans6').src="images/falso.png";
    }
    else
    {
      ansGiven[6] ="V";
      document.getElementById('ans6').src="images/vero.png";
    }
}
function ans7()
{
    clicks[7]++;
    if(clicks[7] %2 === 0)
    {
        ansGiven[7] ="F";
        document.getElementById('ans7').src="images/falso.png";
    }
    else
    {
      ansGiven[7] ="V";
      document.getElementById('ans7').src="images/vero.png";
    }
}
function ans8()
{
    clicks[8]++;
    if(clicks[8] %2 === 0)
    {
        ansGiven[8] ="F";
        document.getElementById('ans8').src="images/falso.png";
    }
    else
    {
      ansGiven[8] ="V";
      document.getElementById('ans8').src="images/vero.png";
    }
}
function ans9()
{
    clicks[9]++;
    if(clicks[9] %2 === 0)
    {
        ansGiven[9] ="F";
        document.getElementById('ans9').src="images/falso.png";
    }
    else
    {
      ansGiven[9] ="V";
      document.getElementById('ans9').src="images/vero.png";
    }
}
function ans10()
{
    clicks[10]++;
    if(clicks[10] %2 === 0)
    {
        ansGiven[10] ="F";
        document.getElementById('ans10').src="images/falso.png";
    }
    else
    {
      ansGiven[10] ="V";
      document.getElementById('ans10').src="images/vero.png";
    }
}
function ans11()
{
    clicks[11]++;
    if(clicks[11] %2 === 0)
    {
        ansGiven[11] ="F";
        document.getElementById('ans11').src="images/falso.png";
    }
    else
    {
      ansGiven[11] ="V";
      document.getElementById('ans11').src="images/vero.png";
    }
}
function ans12()
{
    clicks[12]++;
    if(clicks[12] %2 === 0)
    {
        ansGiven[12] ="F";
        document.getElementById('ans12').src="images/falso.png";
    }
    else
    {
      ansGiven[12] ="V";
      document.getElementById('ans12').src="images/vero.png";
    }
}
function ans13()
{
    clicks[13]++;
    if(clicks[13] %2 === 0)
    {
        ansGiven[13] ="F";
        document.getElementById('ans13').src="images/falso.png";
    }
    else
    {
      ansGiven[13] ="V";
      document.getElementById('ans13').src="images/vero.png";
    }
}
function ans14()
{
    clicks[14]++;
    if(clicks[14] %2 === 0)
    {
        ansGiven[14] ="F";
        document.getElementById('ans14').src="images/falso.png";
    }
    else
    {
      ansGiven[14] ="V";
      document.getElementById('ans14').src="images/vero.png";
    }
}function ans15()
{
    clicks[15]++;
    if(clicks[15] %2 === 0)
    {
        ansGiven[15] ="F";
        document.getElementById('ans15').src="images/falso.png";
    }
    else
    {
      ansGiven[15] ="V";
      document.getElementById('ans15').src="images/vero.png";
    }
}function ans16()
{
    clicks[16]++;
    if(clicks[16] %2 === 0)
    {
        ansGiven[16] ="F";
        document.getElementById('ans16').src="images/falso.png";
    }
    else
    {
      ansGiven[16] ="V";
      document.getElementById('ans16').src="images/vero.png";
    }
}function ans17()
{
    clicks[17]++;
    if(clicks[17] %2 === 0)
    {
        ansGiven[17] ="F";
        document.getElementById('ans17').src="images/falso.png";
    }
    else
    {
      ansGiven[17] ="V";
      document.getElementById('ans17').src="images/vero.png";
    }
}function ans18()
{
    clicks[18]++;
    if(clicks[18] %2 === 0)
    {
        ansGiven[18] ="F";
        document.getElementById('ans18').src="images/falso.png";
    }
    else
    {
      ansGiven[18] ="V";
      document.getElementById('ans18').src="images/vero.png";
    }
}function ans19()
{
    clicks[19]++;
    if(clicks[19] %2 === 0)
    {
        ansGiven[19] ="F";
        document.getElementById('ans19').src="images/falso.png";
    }
    else
    {
      ansGiven[19] ="V";
      document.getElementById('ans19').src="images/vero.png";
    }
}function ans20()
{
    clicks[20]++;
    if(clicks[20] %2 === 0)
    {
        ansGiven[20] ="F";
        document.getElementById('ans20').src="images/falso.png";
    }
    else
    {
      ansGiven[20] ="V";
      document.getElementById('ans20').src="images/vero.png";
    }
}function ans21()
{
    clicks[21]++;
    if(clicks[21] %2 === 0)
    {
        ansGiven[21] ="F";
        document.getElementById('ans21').src="images/falso.png";
    }
    else
    {
      ansGiven[21] ="V";
      document.getElementById('ans21').src="images/vero.png";
    }
}function ans22()
{
    clicks[22]++;
    if(clicks[22] %2 === 0)
    {
        ansGiven[22] ="F";
        document.getElementById('ans22').src="images/falso.png";
    }
    else
    {
      ansGiven[22] ="V";
      document.getElementById('ans22').src="images/vero.png";
    }
}function ans23()
{
    clicks[23]++;
    if(clicks[23] %2 === 0)
    {
        ansGiven[23] ="F";
        document.getElementById('ans23').src="images/falso.png";
    }
    else
    {
      ansGiven[23] ="V";
      document.getElementById('ans23').src="images/vero.png";
    }
}function ans24()
{
    clicks[24]++;
    if(clicks[24] %2 === 0)
    {
        ansGiven[24] ="F";
        document.getElementById('ans24').src="images/falso.png";
    }
    else
    {
      ansGiven[24] ="V";
      document.getElementById('ans24').src="images/vero.png";
    }
}function ans25()
{
    clicks[25]++;
    if(clicks[25] %2 === 0)
    {
        ansGiven[25] ="F";
        document.getElementById('ans25').src="images/falso.png";
    }
    else
    {
      ansGiven[25] ="V";
      document.getElementById('ans25').src="images/vero.png";
    }
}function ans26()
{
    clicks[26]++;
    if(clicks[26] %2 === 0)
    {
        ansGiven[26] ="F";
        document.getElementById('ans26').src="images/falso.png";
    }
    else
    {
      ansGiven[26] ="V";
      document.getElementById('ans26').src="images/vero.png";
    }
}function ans27()
{
    clicks[27]++;
    if(clicks[27] %2 === 0)
    {
        ansGiven[27] ="F";
        document.getElementById('ans27').src="images/falso.png";
    }
    else
    {
      ansGiven[27] ="V";
      document.getElementById('ans27').src="images/vero.png";
    }
}function ans28()
{
    clicks[28]++;
    if(clicks[28] %2 === 0)
    {
        ansGiven[28] ="F";
        document.getElementById('ans28').src="images/falso.png";
    }
    else
    {
      ansGiven[28] ="V";
      document.getElementById('ans28').src="images/vero.png";
    }
}

function ans1()
{
    clicks[1]++;
    if(clicks[1] %2 === 0)
    {
        ansGiven[1] ="F";
        document.getElementById('ans1').src="images/falso.png";
    }
    else
    {
      ansGiven[1] ="V";
      document.getElementById('ans1').src="images/vero.png";
    }
}
function arg(){
    document.getElementById("arg").innerHTML = strQues[0];
}
function arg_num(){
    document.getElementById("arg_num").innerHTML = argNum;
}
function ques()
{
  for(let i= 2; i<question.length+2; i++ )
    {
        var myTable = document.getElementById('ques');
        myTable.innerHTML += "<div class = \"flex\" id=\"removeQues\"> <div onclick = \" speak"+i+"()\" class = \"strques\">"+ (i-1) + ". " +question[i-2]+ "  </div> <div class= \"mark\"><img src=\"images/mark.png\" style=\"cursor: pointer;width:80% \" id=\"ans"+i+"\" onclick = \"ans"+i+"()\" ></div></div>";
        myTable.innerHTML += "<div class = \"dot\" id=\"removeQues\">-----------------------------------------------------------------------------</div>"
    }   
}
var msg = new SpeechSynthesisUtterance();
msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    function speak2()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[0];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak3()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[1];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak4()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[2];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
  
}
function speak5()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[3];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
  
}
function speak6()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[4];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
  
}
function speak7()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[5];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak8()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[6];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak9()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[7];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak10()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[8];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak11()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[9];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak12()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[10];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak13()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[13-2];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak14()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[14-2];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak15()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[15-2];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak16()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[16-2];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak17()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[17-2];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak18()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[18-2];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak19()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[19-2];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function speak20()
{
  if(voice%2 ==0)
  {
  var msg = new SpeechSynthesisUtterance();
  msg.voice = speechSynthesis.getVoices().filter(function(voice) {
    return voice.name == "Microsoft Elsa - Italian (Italy)"})[0];
    msg.text = question[20-2];
    msg.lang = "it-IT";
    window.speechSynthesis.speak(msg);
  }
}
function removeRow () {
  for(let h= 0; h<question.length*2; h++ )
    {
      var myTable = document.getElementById('removeQues');
      myTable.parentNode.removeChild(myTable);
    }
}
function correggi()
{
  for(let t =2 ; t<question.length+2; t++ )
  {
    if(answer[t-2] === "V" && ansGiven[t] === "V")
    {
      document.getElementById('ans'+t).src="images/VXES.png";
    }
    else if(answer[t-2] === "F" && ansGiven[t] === "F")
    {
      document.getElementById('ans'+t).src="images/FXES.png";
    }
    else if(answer[t-2] == "V" && ansGiven[t] === "F")
    {
      document.getElementById('ans'+t).src="images/FXER.png";
    }
    else if(answer[t-2] == "F" && ansGiven[t] === "V")
    {
      document.getElementById('ans'+t).src="images/VXER.png";
    }
    else if(answer[t-2] == "F" && ansGiven[t] === "")
    {
      document.getElementById('ans'+t).src="images/falso_vuoto.png";
    }
    else if(answer[t-2] == "V" && ansGiven[t] === "")
    {
      document.getElementById('ans'+t).src="images/vero_vuoto.png";
    }
  
  }
}
function next()
{
  removeRow ();
  if(argNum <510)
  {
  argNum++;
  }
  else
  {
    argNum= 510;
  }
  strQues = ["","","","","","","","","","","","","","","","","","","",""];
  strQues = arrayQues[argNum];
  strAns = ["","","","","","","","","","","","","","","","","","","",""];
  strAns = arrayAns[argNum];
  ansGiven =  ["","","","","","","","","","","","","","","","","","","","","","","","","","","",""];
  trim();
  shuffle();
  arg();
  arg_num();
  ques();
}
function previous()
{
  removeRow ();
  if(argNum > 1)
  {
  argNum--;
  }
  else
  {
    argNum= 1;
  }
  strQues = ["","","","","","","","","","","","","","","","","","","",""];
  strQues = arrayQues[argNum];
  strAns = ["","","","","","","","","","","","","","","","","","","",""];
  strAns = arrayAns[argNum];
  ansGiven =  ["","","","","","","","","","","","","","","","","","","","","","","","","","","",""];
  trim();
  shuffle();
  arg();
  arg_num();
  ques();
}
function getInputValue() 
{
  // Selecting the input element and get its value 
  argNum = document.getElementById("inputId").value;
  if(argNum == 0)
  {
    argNum = 1;
  }
  else if (argNum > 510)
  {
    argNum = 510;
  }
  removeRow ();
  strQues = ["","","","","","","","","","","","","","","","","","","",""];
  strQues = arrayQues[argNum];
  strAns = ["","","","","","","","","","","","","","","","","","","",""];
  strAns = arrayAns[argNum];
  ansGiven =  ["","","","","","","","","","","","","","","","","","","","","","","","","","","",""];
  trim();
  shuffle();
  arg();
  arg_num();
  ques();
}
function voi()
{
  voice++;
  if(voice % 2 == 0)
  {
    document.getElementById("voice").src ="images/volume.png";
  }
  else
  {
    document.getElementById("voice").src ="images/mute.png";
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

<body>

<div  class="scheda_quiz">
        <div id="img_td"style="width: 25% ; display:block">
            <img id="img" class="img"><script>img()</script>
        </div>
       <div class="flex-container" id= "ques">
       <div class = "flex">
                <div class = "ques">
                    <b id="arg"><script>arg()</script></b>
                </div>
                <div style= "flex: 5%;">
                    <b style ="font-size: 50px; padding-right:20px;" id="arg_num"><script>arg_num()</script></b>                  
                </div>
                <div style= "flex: 10%;">
                    <img src="images/mute.png" style="cursor: pointer;width:80% " id="voice" onclick = "voi()" >
                </div>
            </div>        
            <script>ques()</script>
       </div>
    
    </div>
    <div style="padding-bottom: 30px;" id="flex2">
            <button class="intervalli_quiz1" style="width: 100px;" onclick="previous()">&laquo;</button>
            <button class="intervalli_quiz2" onclick="correggi()">Correggi</button>
            <button class="intervalli_quiz1" style="width: 100px;"onclick="next()">&raquo;</button>
            <input class="intervalli_quiz" style="width: 150px; height:80px; font-size:40px;" type="text" placeholder="Type " id="inputId">
            <button class="intervalli_quiz1" type="button" onclick="getInputValue();">Vai</button>
    </div>
</body>
<footer>
	<a href="https://www.facebook.com/Dar-Patente-242819279712109/" target="_blank"><i class="fa fa-facebook-square" style="font-size:60px"></i></a>
	<a href="https://www.instagram.com/dar.patente/?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram" style="font-size:60px"></i></a>
	<a href="https://www.youtube.com/channel/UC1SCTm1uXsVRO5h46QLBrhQ" target="_blank"><i class="fa fa-youtube-play" style="font-size:60px"></i></a>
</footer>
</html>