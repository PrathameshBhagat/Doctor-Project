<?php 
include "conn.php";
$name= $_POST["namea"];
$lname= $_POST["lnamea"];
$gender = $_POST["gendera"];
$age = $_POST["agea"];
$password = $_POST["passworda"];
$phone = $_POST["phonea"];
$null=0;$ins;
$insert = "INSERT INTO doctor(ID, FirstName, LastName, Gender, Age,Password ,Phone) VALUES (NULL, '$name','$lname','$gender','$age','$password','$phone')";
if ($name!=''&&$lname!=''&&$gender!=''&&$age!=''&&$password!=''&&$phone!=''){
$ins = mysqli_query($conn, $insert);$null=1;}

else {echo "<H1>&nbsp&nbsp Null Values not Allowed please go back and resubmit  </H1> ";}
?>
<html>
<head>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
<?php 
if (isset($_POST['button']))
hearder("Location: index.php",TRUE,301);
?>			
<form class="login" methord="post">
			<a  href="index.php"> <img src="images/home.png" height=50px width=50px></a>

				<button name="button" class="button login__submit">
					<span class="button__text">
<?php
	if(isset($ins))
              if($ins)
        	echo "<h1>Registered Successfully</h1>";
	else echo "<h1>Error</h1>(Problem)"; 
else echo "<h1>Error</h1>(Problem)"; 

?>

</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
	
				
			</form>
			<div class="social-login">
				
			
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div></body></html>