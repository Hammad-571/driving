<!DOCTYPE html>
<html lang="en-US" class = "background">
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
    
}
.background{
    background-size: cover;
    height: 100%;
    background-repeat:no-repeat;
    background: #00ABE1;
}
.button {
    background-color: #161F6D; 
    border: none;
    color:white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    float: center;
    font-size: 20px;
    border-radius: 8px;
  }
.button:hover {
    box-shadow: white;
  }

.flex-container {
  display: flex;
  flex-direction: row;
  font-size: 30px;
  text-align: center;
  justify-content: center;
  column-gap: 20px;
  padding-top: 10%;
  padding-bottom: 100px;
}
@media only screen and (max-device-width: 480px) {
  
  .flex-container {
    flex-direction: column;
    row-gap: 20px;
    margin-left:25%;
    margin-right:25%;
    padding-top: 10%;
    height: 40vh;
  }
  .logo{
    width: 70%;
    padding-top: 5%;
  }
  h1
  {
    font-size: 80px;
    margin-top: 10%;
  }
  .button{
    font-size: 50px;
    height: 150px;
  }
}


footer {
	display : flex;
	column-gap: 50px;
	justify-content: center;
  text-align: center;
  padding-top: 10px;
  background-color: #ffffff;
  color : yellow;
}
table
{
    margin-left:auto;
    margin-right:auto;
    margin-top: 10px;
}
a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color:#161F6D;
  background-color: transparent;
  text-decoration: underline;
}
</style>
<head>
<link rel="icon" href="http://www.darpatente.com/favicon.ico">
    <h1> <a href="http://www.darpatente.com/">Dar Patente Quiz</a> </h1>
    <div class="logo">
        <img src="images/logo.jpeg" class="logo" >
    </div>
</head>

<body>
    <div class = "flex-container">
        <button type="button" class = "button" onclick="window.location.href='quiz-am.php';">Quiz Patente AM</button>
        <button type="button" class = "button" onclick="window.location.href='quiz-b.php';">Quiz Patente B</button>
        <button type="button" class = "button" onclick="window.location.href='quiz-c.php';">Quiz Patente C</a></button>
        <button type="button" class = "button" onclick="window.location.href='quiz-cqc.php';">Quiz Patente CQC</a></button>
        <button type="button" class = "button" onclick="window.location.href='quiz-d.php';">Quiz Patente D</a></button>
    </div>

</body>

</html>