<?php
session_start();
include ("connection.php");
include ("functions.php");
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password))
    {
        
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con,$query);
        
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
       {
        $user_data = mysqli_fetch_assoc($result);
        if($user_data['password']===$password)
        {
            $_SESSION['user_id']=$user_data['user_id'];
            header("Location: index.php");
            die;
        }
       }
        }
      
    }
    else
    {
        echo "Please enter valid info";
    }
}
?>

<!DOCTYPE html>
<link rel="icon" href="img/logo.jpg" type="image/icon type">
<html >
<head>
    <link rel="stylesheet" href="style/logreg.css">
    <title>Login</title>
    <?php

include './components/navbar.php' ?>
</head>
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="mainForm"  method="post" >
        <label><b>User Name</b>    
        </label>    
        <input type="text" class="input" name="user_name" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" class="input" name="password" id="Pass" placeholder="Password">    
        <br><br>    
        <input id="submit" type="submit"  class="input submit" value="Login"/>
 
  
  
    </form>     
</div>   
<script src="javascript/login.js"></script>

</body>    
</html>