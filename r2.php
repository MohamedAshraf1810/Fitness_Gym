<?php
    $dbHost="localhost";
    $dbUser="root";
    $dbpass=""; 
    $dbName="project";
    $connect = mysqli_connect($dbHost,$dbUser,$dbpass,$dbName) or die ("Connection failed");

    if(!empty($_POST['save']))
    {   
        $Email=$_POST['Email'];
        $Pass=$_POST['pass'];
        $query="SELECT * FROM users WHERE Email ='$Email' and password ='$Pass' ";
        $result  =mysqli_query($connect,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            echo "Login Successful";
        }
        else
        {
            echo "Login Not Successful";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/r2.css">
</head>
<body>
    
    <form  action="r2.php" method="POST">
        <input style= "padding: 5px; margin-left: 600px; " type="text" name="Email" placeholder="email"></input>
        <br>
        <input style= "padding: 5px; margin-left: 600px; " type="password" name="pass" placeholder="password"></input>
        <br>
        <input style= "padding: 5px; margin-left: 600px; " type="submit" name="save" value="SUBMIT"></input>
    </form>

    
</body>
</html>