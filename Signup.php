<!-- PHP CODE -->
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


  if (isset($_POST['submit'])) 
  {
    $fName=filter_var($_POST['First_Name'],FILTER_SANITIZE_STRING);
    $lName=filter_var($_POST['Last_Name'],FILTER_SANITIZE_STRING);
    $email=filter_var($_POST['Email'],FILTER_SANITIZE_EMAIL);
    $pass=filter_var($_POST['psw'],FILTER_SANITIZE_STRING);
    //Errors Array
    $errors=[];

    // Validate Email
    if (empty($email)) 
    {
      $errors[]="Email Required";
    }
    elseif(filter_var($email,FILTER_VALIDATE_EMAIL) == false)
    {
      $errors[]="Incorrect Email";
    }

    // Validate Password
    if (empty($pass)) 
    {
      $errors[]="Pass Required";
    }
    elseif(strlen($pass) < 8)
    {
      $errors[]="Password Must Be More Than 8 ";
    }

    //insert or Error
    if(empty($errors))
    {
      // $pass=password_hash($pass,PASSWORD_DEFAULT);
      $sql = "insert into users(FirstName,LastName,Email,Password) VALUES ('$fName','$lName','$email','$pass')";
      $result = mysqli_query($conn , $sql);
      if (!$result)
      {
        echo "There is problem in insert New Rec . " .mysqli_error($conn);
        exit();
      }
      else
      {
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

      $_POST['First_Name']='';
      $_POST['Last_Name']='';
      $_POST['Email']='';
      $_POST['psw']='';

    }
    else
    {
      var_dump($errors);
    }
  }


?>

<!-- HTML CODE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome.min.css">
    <link rel="stylesheet" href="CSS/SignupPage.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <script src="JS/bootstrap.js"></script>
    <link rel="stylesheet" href="CSS/mystyle.css">
</head>
<body>
  <div id="preloader">
    
  </div>

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

    <section class="SignupSection">
      <h1>SIGNUP</h1>
      <form action="Signup.php" method="POST">
  
        <div class="container">
          
          <label for="First_Name"><b class="leftin">First Name</b></label>
          <input type="text" value="<?php if(isset($_POST['First_Name'])){echo $_POST['First_Name'];} ?>" placeholder="Enter First Name" name="First_Name"  required >

          <br>
          <label for="Last_Name"><b class="leftin">Last Name</b></label>
          <input type="text" value="<?php if(isset($_POST['Last_Name'])){echo $_POST['Last_Name'];} ?>" placeholder="Enter Last Name" name="Last_Name"   required>
          <br>

          <label for="Email"><b class="leftin">Email</b></label>
          <input type="email" value="<?php if(isset($_POST['Email'])){echo $_POST['Email'];} ?>" placeholder="Enter Email" name="Email"   required>
          <br>
          <label for="psw"><b class="leftin">Password</b></label>
          <input type="text" placeholder="Enter Password" name="psw" required>
      
          <button type="submit" id="SignUp" name="submit">SignUp</button>
          <a href="login.php">Have Account ?</a>
         
        </div>

      </form>
    </section>

    <div class="RedirectionDiv" id="RedirectionDivID">
      <div class="RedDivD1">
      <p>successfully Signed Up<br> Welcome !</p>
      <p><a class="RedLink" href="login.php">Login Page ...</a></p>
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
 