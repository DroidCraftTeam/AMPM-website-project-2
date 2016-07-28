<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registration</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="New folder/css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
include('header.html');
?>


<hr>
<h2 class="text-center">Registration</h2>
<hr>
<div class="container">
<nav class="text-center">
    <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
<style>
 tr {
   height:40px;
 }
</style>
  <form action="register.php" method="post" name="registration"> 
<table align="center" cellpadding="10"> 
 <p>
     <tr><td> <label for="fname">First Name:</label></td>
    <td> &nbsp; <input type="text" name="fname" id="fname"></tr></td>
    </p>

 <p>
      <tr><td>  <label for="lname">Last Name:</label></td>
      <td> &nbsp; <input type="text" name="lname" id="lname"></tr></td>
    </p>
 <p>
     <tr><td>   <label for="email">E-Mail:</label></td>
    <td> &nbsp;   <input type="text" name="email" id="email"></tr></td>
    </p>
    <p>
      <tr><td>  <label for="password">Password:</label></td>
     <td>  &nbsp; <input type="password" name="password" id="password" maxLength=10></tr></td>
    </p></table>
    <p>
   </br>   <button type="submit" name="button" id="button" value="Submit" class="btn btn-primary">Submit</button>
	<button type="reset" name="reset" value="Reset" class="btn btn-primary">Reset</button>
    </p>
   
</form>
  </nav>
</div>
<?php
include('footer.html');
?>
<script src="New folder/js/jquery-1.11.2.min.js"></script> 
<script src="New folder/js/bootstrap.min.js"></script>
</body>
</html>