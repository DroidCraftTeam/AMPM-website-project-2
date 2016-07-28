<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About</title>

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
<h2 class="text-center">Track</h2>
<hr>

<div class="container">

  <div class="row text-center">
 
<?php

$tnumber = $_POST['tnumber'];
	session_start();
	$_SESSION['track'] = $tnumber;
	    	$conn = mysql_connect("sql310.byethost7.com","b7_18180348","xfn61kmt");
mysql_select_db("b7_18180348_website", $conn);
$seetable = "Select tnumber,desc from track where tnumber = '".$_SESSION['track']."'";



$result1 = mysql_query($seetable, $conn);
while ($row = mysql_fetch_assoc($result1))   {
   print "$row[desc]";            
                 }

mysql_close();
	


include('footer.html');
?>


</div>

</div>
<script src="New folder/js/jquery-1.11.2.min.js"></script> 
<script src="New folder/js/bootstrap.min.js"></script>
</body>
</html>