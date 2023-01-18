<?php 
include "conn.php";
$number= $_POST["shown"];
$date= $_POST["showd"];
$time= $_POST["showt"];
$getTime = "UPDATE patient SET Slot='$date',Time='$time' where  Phone='$number'";
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

				<a style="text-decoration: none;" href="register.php" class="button login__submit">
				<span class="button__text">
			<?php
				if(isset($getTime))        	
		mysqli_query($conn, $getTime);
		if(mysqli_affected_rows($conn))
echo "<h1>Booked Successfully</h1><BR>On&nbsp;&nbsp;".$_POST['showd']." At :&nbsp; ".$_POST['showt'];
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
