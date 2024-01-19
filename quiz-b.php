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
    /*border-radius: 80%;*/
}

.button1 {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  float: center;
  font-size: 20px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border:1px solid black;
  width:200px;
  height:100px;
  border-radius: 8px;
}

.button2 {
  background-color: #161F6D; 
  color:white;
  border: 5px solid #4CAF50;
  border-radius: 8px;
}

.button2:hover {
  background-color: #00ABE1;
  color: white;
}

.background{
    background-size: cover;
    height: 100%;
    background-repeat:no-repeat;
    background:#00ABE1;
}
#footer{
    background-color: black;
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
    margin-left:28%;
    margin-right:auto;
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
  .button1{
    font-size: 50px;
    width:400px;
    height:300px;
  }
}

</style>
<head>
<link rel="icon" href="http://www.darpatente.com/favicon.ico">
    <h1> <a href="http://www.darpatente.com/">Dar Patente Quiz </a></h1>
    <div class="logo">
        <img src="images/logo.jpeg" class="logo" >
    </div>
</head>

<body>
    
<div class = "flex-container">
        <button type="button" class = "button1 button2" onclick="window.location.href='sim-b.php';">Simulazione di Esame</button>
        <button type="button" class = "button1 button2" onclick="window.location.href='arg-b.php';">Esercizio per Argomento</button>
        <button type="button" class = "button1 button2" onclick="window.location.href='cap-b.php';">Esercizio per Capitolo</button>
    </div>

</body>

</html>