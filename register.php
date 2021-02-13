<?php
session_start();
include ("connection.php");
include ("functions.php");
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $check_duplicate = "Select user_name from users where user_name = '$user_name'";
    $resultt = mysqli_query($con,$check_duplicate);
    $count = mysqli_num_rows($resultt);

    if($count >=1){        
        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';
        header("Location: register.php");
       die();

    }

    if (!empty($user_name) && !empty($password))
    {
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    }
    else
    {
        echo '<script>alert("Username or password is missing!")</script>'; 
    }
}
?>

<!DOCTYPE html>
<link rel="icon" href="img/logo.jpg" type="image/icon type">
<html >
<head>
    <link rel="stylesheet" href="style/logreg.css">
    <title>Register</title>
    <?php
    
include './components/navbar.php' ?>

</head>
<body>    
<br>
    <div class="register">    
    <form id="register" method="post">    
        <label><b>User Name</b>    
        </label>    
        <input type="text" class="input" name="user_name" id="Uname" placeholder="Username">    
        <br><br>    

        <label><b>Password</b>    
        </label>    
        <input type="password" class="input" name="password" id="Pass" placeholder="Password">   
        <br><br> 

        <!-- <label><b>Email address </b>    
        </label>    
        <input type="text" class="input" name="Email" id="Email" placeholder="Username">    
        <br><br> 

        <label><b>Phone number</b>    
        </label>    
        <input type="tel" class="input" name="Number" id="Number" placeholder="Phone number"> 
        <br><br>     
        -->
        
        <input type="submit" name="log" class="input submit"  id="log" value="Signup" onclick="validate(1)">       
        <div id="error0"></div>    
  
    </form>     
</div>   
<script src="javascript/register.js"></script>


</body>    
</html>