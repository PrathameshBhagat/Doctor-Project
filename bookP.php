<?php 
include "conn.php";
$id= $_POST["showid"];
$date= $_POST["showd"];
$time= $_POST["showt"];
$doctor=$_POST['doctor'];
$FirstName=$_POST['FirstName'];
$getTime = "REPLACE into bookings (ID, FirstName,Doctor, Slot,Time) values ('$id','$FirstName','$doctor','$date','$time')";
?>
<head>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
											
			<form class="login" methord="post">
				<a  href="index.php"> <img src="images/home.png" height=50px width=50px></a>

				<a style="text-decoration: none;" onclick='history.back();history.back();'class="button login__submit">
				<span class="button__text">
			<?php
				if(isset($getTime))        	
		mysqli_query($conn, $getTime);
		if(mysqli_affected_rows($conn))
{echo "<h1>Booked Successfully</h1><br>For: Dr. ".$doctor." <br><BR>On&nbsp;&nbsp;".$_POST['showd']." At :&nbsp; ".$_POST['showt'];echo "<script>var xhr = new XMLHttpRequest();
  xhr.open('GET', 'm.php?txt=Appointment Booking&sub=Appointment Booking Confirmed for 
  Dr.".$doctor." on ".$_POST['showd']." At ".$_POST['showt']."');
  xhr.send();</script>";}
		else
		 echo "<h1 >Error</h1>(Problem)"; 

			?>
			</span>
				<i class="button__icon fas fa-chevron-right"></i>
			</a>
			
			</form>
		</div>
	</div>
</div>
</body></html>
