<?php
include 'db.php';


$nameError ="";
$passwordError ="";

$inputUsername = $inputPass = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $inputUsername = htmlspecialchars($_POST['username']);
    $inputPass = htmlspecialchars($_POST['password']);


    if(empty($_POST['username'])){
        $nameError = "TANG INA MO MAGLAGAY KA NG USERNAME";
    } else {
        if(!preg_match("/^[a-zA-z]+$/", $inputUsername)){
            $nameError="tang ina mo  bawal hacker dito";
        } else {
             if (!empty($_POST['username'])){
                $sql_checker = "Select * from users where username = '$inputUsername'";
                $result = $conn->query($sql_checker);

                if($result -> num_rows >0){
                    $nameError = "tang ina mo meron ng username na ganyan palitan mo!";
                }
             }
        }
    }

    if(empty($_POST['password'])){
        $passwordError = "tang ina mo maglagay ka ng password";

    }   
    
    if (empty($nameError) && empty($passwordError)) {
    $hash = password_hash($inputPass, PASSWORD_DEFAULT);
    $sql = "insert into users (username , password) values ('$inputUsername','$hash')";

    if($conn->query($sql)){
    header('location:login.php');
    exit();
    }
    }

}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="POST">
    <label name="username" for="username">Username</label>
    <input name="username" type="text"> <span style="color:red"><?php echo $nameError;?></span><br>
    
    <label name="password" for="password">password</label>
    <input name="password" type="password">
    <span  style="color:red"> <?php echo $passwordError;?></span>
    <button type="submit">submit</button>




    </form>
</body>
</html>