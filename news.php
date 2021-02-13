<?php 
    include ("array.php");

?>
<?php

include './components/session.php' ?>
<!DOCTYPE html>
<link rel="icon" href="img/logo.jpg" type="image/icon type">
<html style="background-color: rgb(216, 214, 214);">
  
<head>
<style>
.lajmi {
  border: 1px solid black;
  width: 20%;
  margin: 5px 1%;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  border-radius: 5px;
  background-color: cadetblue;
}

.main * {
  font-family: sans-serif;
}

.main {
  margin:100px;
  width: 95vw;
  height: 230px;
  display: flex;
  flex-direction: row;
}</style>
    <link rel="stylesheet" href="style/style.css">
    
<title>About us</title>
<?php

include './components/navbar.php' ?>
<div class="main">
    <?php 
        foreach($listaLajmeve as $lajmi){
            echo "<div class='lajmi'>";
            echo "<h1>".$lajmi["Titulli"]."</h1>";
            echo "<p>".$lajmi["Pershkrimi"]."</p>";
            echo "</div>";
            if(true){}
        }

    ?>
    
</div>
