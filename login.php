<?php
    $dbHost="localhost";
    $dbUser="root";
    $dbpass=""; 
    $dbName="project";
    $connect = mysqli_connect($dbHost,$dbUser,$dbpass,$dbName) or die ("Connection failed");

    if(!empty($_POST['save']))
    {   
        $Email=$_POST['LEmail'];
        $Pass=$_POST['Lpsw'];
        $query="SELECT * FROM users WHERE Email ='$Email' AND password ='$Pass' ";
        $result  =mysqli_query($connect,$query);
        $count=mysqli_num_rows($result);
        if($count > 0)
        {
          // echo '<span class="WelcomeMG">Welcome You Logged In Successfully</span>';
          sleep(2);
          echo
          ' 
            <style>
            .myNav , .loginSection
            {
              opacity:0.4;
            }
            
            #RedirectionDivID
            {
              display : block;
            }
            </style>
            
            ';
        }
        else
        {
          echo '<script>alert("Invalid Username or Password")</script>';
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@800&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <script src="JS/bootstrap.js"></script>
    <link rel="stylesheet" href="CSS/LogPage.css">
    <link rel="stylesheet" href="CSS/mystyle.css">

</head>
<body>

<div id="preloader"></div>

<nav class="navbar navbar-expand-lg navbar-light bg-black myNav" id="myHeader" >

    <div class="container-fluid">
        <img src="images/logo-light.png" alt="" width="190px" class="d-inline-block align-text-top">

        <button style="background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a style="color: white;" class="nav-link active" aria-current="page" href="index.php"><span>HOME</span></a>
          </li>

          <li class="nav-item">
            <a style="color: white;" class="nav-link active" aria-current="page" href="classes.php"> <span>CLASSES</span> </a>
          </li>

          <li class="nav-item">
            <a style="color: white;" class="nav-link active" aria-current="page" href="portfolio.php"> <span>PORFOLIO</span> </a>
          </li>

          <li class="nav-item">
            <a style="color: white;" class="nav-link active" aria-current="page" href="contact.php"> <span>CONTACT US</span> </a>
          </li>

          <li class="nav-item">
            <a style="color: white;" class="nav-link active" aria-current="page" href="signup.php"> <span>SIGNUP</span> </a>
          </li>

          <li class="nav-item">
            <a style="color: white;" class="nav-link active" aria-current="page" href="shop.php"> <span>SHOP</span> </a>
          </li>

          <li class="nav-item">
            <i class="fa-solid fa-magnifying-glass"></i>
          </li>

          <li class="fa-solid" id="slash">\</li>

          <li class="nav-item">
            <i class="fa-solid fa-cart-plus"></i>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
    
    <section class="loginSection">

      <form action="Login.php" method="POST">
        <div class="imgcontainer">
          <img src="images/event_left.jpg" alt="Avatar" class="avatar" height="280px">
        </div>
      
        <div class="container">
          <label for="Email"><b class="leftin">Email</b></label>
          <input type="text" placeholder="Enter Username" name="LEmail" required>
          <br>
          <label for="psw"><b class="leftin">Password</b></label>
          <input type="password" placeholder="Enter Password" name="Lpsw" required>
      
          <input class="Submitting" type="submit" name="save"></input>
          <a href="Signup.php">SignUp ?</a>
        </div>
      </form>
    </section>

    <div class="RedirectionDiv" id="RedirectionDivID">

    
    <?php

    $dbHost="localhost";
    $dbUser="root";
    $dbpass=""; 
    $dbName="project";
    $conn = mysqli_connect($dbHost,$dbUser,$dbpass,$dbName);
    if(!$conn)
    {
      die('There Is Problem Connection .. ' .mysqli_connect_error());
    }
    mysqli_select_db($conn,'project');
    $id = '75740';
    $sql = "SELECT FirstName from users where id=$id";
    $result = mysqli_query($conn , $sql);

    $resultcheck = mysqli_num_rows($result);
    if($resultcheck>0)
    {
      while ($row = mysqli_fetch_assoc($result)) 
      {
        //echo "Welcome" , $row['FirstName'];
        echo "Welcome Omar";
      }
    }

?>
      <div class="RedDivD1">
      <p>successfully logged in<br> Welcome !</p>
      <p>Click To Redirected To <a class="RedLink" href="index.html">Home Page ...</a></p>
      <p>Click To Redirected To <a class="RedLink" href="packages.php">Packages Page ...</a></p>
      </div>
    </div>



    <script>
  var loader = document.getElementById("preloader");
  window.addEventListener("load" , function()
  {
    setTimeout(() =>
    {
      loader.style.display="none";
    },1000);
  })
</script>

    
</body>
</html>