<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="r.php">
    <input style= "padding: 5px; margin-left: 600px; " type="text" name="Email" placeholder="email"></input>
    <br>
    <input style= "padding: 5px; margin-left: 600px; " type="password" name="pass" placeholder="password"></input>
    <br>
    <input style= "padding: 5px; margin-left: 600px; " type="submit" name="submit" value="SUBMIT"></input>
</form>
    

<?php
     
?>


    
    
<?php
$mye = $_POST['Email'];
$mypass = $_POST['pass'];

$dbHost="localhost";
$dbUser="root";
$dbpass=""; 
$dbName="project";
$conn = mysqli_connect($dbHost,$dbUser,$dbpass,$dbName);
$sql = "SELECT * FROM users where email ='$mye' ";
$result = mysqli_query($conn,$sql);

    if(isset($_POST['submit']))
     {
          
         // echo $mye;
         if($mye == "a@a.com" && $mypass == "m")
         {
             echo "Correct";
         }
         else
         {
             echo "Incorrect";
         }
     }








    
    if(!$result)
    {
        echo "There Is Problem in retrive user data" . mysqli_error($conn);
    }

    // $user = mysqli_fetch_array($result);

?>

<table> 
    <tr> 
    <th>User ID</th>
    <th>User First Name</th>
    <th>User Last Name</th>
    <th>User Email</th>
    <th>User Password</th>
    </tr>

<?php

    while($user = mysqli_fetch_array($result)){
?>




    <tr>
        <td><?php echo $user['ID'];?></td>
        <td><?php echo $user['FirstName'];?></td>
        <td><?php echo $user['LastName'];?></td>
        <td><?php echo $user['Email'];?></td>
        <td><?php echo $user['password'];?></td>
    </tr>
    <?php
    
    }

    ?>




</table>













</body>
</html>