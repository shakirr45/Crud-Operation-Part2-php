<?php
include 'connect.php';

// inserting data inside table  //

if(isset($_POST['submit'])){
    // echo "success";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    //insert query 
    $sql = "insert into `phpcrud` (username,email,mobile,address) values ('$username','$email','$mobile','$address')";
    $result = mysqli_query($conn,$sql);

    if($result){
       header ('location:display.php');
    }else{
        echo die("data not inserted successfully");

    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Crud Operation</h1>
<a href="display.php">View Data</a>
<form action="" method = "post">
    <input type="text" placeholder = "Enter your name" required autocomplete = "off" name = "username">
    <input type="email" placeholder = "Enter your email" required autocomplete = "off" name = "email">
    <input type="number" placeholder = "Enter your Nnumber" required autocomplete = "off" name = "mobile">
    <input type="text" placeholder = "Enter your address" required autocomplete = "off" name = "address">
    <input type = "submit" class = "btn" name = "submit">


</form>

</body>
</html>