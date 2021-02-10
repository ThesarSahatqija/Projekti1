
<!DOCTYPE html>
<link rel="icon" href="logo.jpg" type="image/icon type">
<html>
  
<head>
    <style>
        body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}


.column {
  float: left;
  width: 45%;
  margin-bottom: 16px;
  padding: 0 30px;  
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
  background-color: rgba(68, 64, 64, 0.8);
  text-align: center;
}

.title {
  color: black;
  background-color: white;
  font-size: 25px;
}
img{
    margin-left: auto;
  margin-right: auto;
  display: block;
}
h2{
font-size: 40px;
text-shadow: 1px 1px #ff0000;
}
p{
 font-size: 20px;
 color: whitesmoke;
}



    </style>
    <link rel="stylesheet" href="style/style.css">
<title>About us</title>
<?php

include './components/navbar.php' ?>
</head>
<body>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/avatar3.png" alt="Jane" style="width:50%">
      <div class="container">
        <h2>Thesar Sahatqija</h2>
        <p class="title">CEO & Founder</p>
        <p>I was born in Gjakova.Im a bachelor student in UBT.</p>

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img class="img1" src="img/avatar4.png" alt="Mike" style="width:50%">
      <div class="container">
        <h2>Rinor Shala</h2>
        <p class="title">CEO & Founder</p>
        <p>I was born in Gjakova.Im a bachelor student in UBT.</p>
 
 
      </div>
    </div>
  </div>

  
</body>

</html>
