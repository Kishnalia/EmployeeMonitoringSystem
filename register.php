<?php
include 'db.php';


$errU = $userErr = "";
$errP = $passErr = "";
$inputUsername = $inputPass = "";
if($_SERVER['REQUEST_METHOD']=='POST'){

    if(empty($_POST['username'])){
        $userErr = "TANG INA MO MAGLAGAY KA NG USERNAME";
    } else {
        $inputUsername = $_POST['username'];
    }

    if(empty($_POST['password'])){
        $passErr = "tang ina mo maglagay ka ng password";

    }   $inputPass = $_POST['password'];

    $sql_check = "Select * from users where username = '$inputUsername'";
    $result = $conn->query($sql_check);

    if($result->num_rows > 0){
        echo "king ina mo gumamit ka ng ibang username";
    } else {
        

        $hashpass = password_hash($inputPass, PASSWORD_BCRYPT);
        $sql = "insert into users (username, password) values ('$inputUsername','$hashpass')";
        $query = $conn -> query($sql);
        header('location: login.php');
        exit();

    
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
    <input name="username" type="text"><br>
    <span><?php echo $errU;?></span>
    <label name="password" for="password">password</label>
    <input name="password" type="password">
    <span><?php echo $errP;?></span>
    <button type="submit">submit</button>




    </form>
</body>
</html>