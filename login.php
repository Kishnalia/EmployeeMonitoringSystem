<?php 

include 'db.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == 'POST'){

  $inputemail = 



}















?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">

  <title>Document</title>
  <style></style>
</head>

<body>
<nav class="navbar navbar-light bg-body-tertiary" style="margin-bottom:20px">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img
        src="image/2.jpg"
        class="me-2"
        height="60"
        alt="MDB Logo"
        loading="lazy"
      />
      <small>HANDLING INNOVATION INC.</small>
      
    </a>
    <small style="font-size:15px; color:black;">Personal Information Management System </small>
  </div>
</nav>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" style="margin-bottom:20px">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
          <form method="post" action="index.php">
					<label for="username" class="label">Username</label>
					<input id="username" name="username" type="text" class="input" style="margin-bottom:20px">
		
					<label for="password" class="label">Password</label>
					<input id="password"name="password" type="password" class="input" data-type="password" style="margin-bottom:20px">
		
					<input type="submit" class="button" value="Sign In">
</form>
				</div>
				<div class="hr"></div>
				
			</div>
		
		</div>
	</div>
</div>


<footer class=" text-white text-center text-lg-start" style="margin-top:20px; background:rgba(0, 0, 0, 0.56);">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">ABOUT THE SYSTEM</h5>

        <p>
        The Personal Information Management System (PIMS) is a centralized platform designed to store, manage, and organize personal information of individuals within the company. This system enables efficient handling of individual profiles, providing secure access to personal data, documents, and records while ensuring data privacy and compliance.
        </p>
      </div>
     
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.95);">
    © 2020 Copyright:
    <a class="text-white" href="">NERI ESCOBELLA</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>