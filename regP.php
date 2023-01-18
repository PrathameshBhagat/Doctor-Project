<?php 
include "conn.php";
$name= $_POST["name"];
$lname= $_POST["lname"];
$gender = $_POST["gender"];
$password = $_POST["password"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$null=0;
$insert = "INSERT INTO patient(ID, FirstName,LastName, Gender, Age,Password , Phone) VALUES (NULL, '$name','$lname','$gender','$password','$age','$phone')";


$check="SELECT Phone From patient WHERE Phone='$phone'";
$chk=mysqli_num_rows(mysqli_query($conn, $check));


if($chk==00)
if (isset($name)&&$lname!=''&&isset($gender)&&isset($age)&&isset($phone))
{
	$ins = mysqli_query($conn, $insert);
	$null="hi";
}
else {echo "<H1 > Some values submitted you were not Recieved by Us</H1> ";}
?>



<html>
<head>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			
<form class="login" methord="post">

<a  href="index.php"> <img src="images/home.png" height=50px width=50px></a>
		
				<a  href="registerpage.php" name="r"class="button login__submit">					<span class="button__text">
<?php	
		if ($chk==0)
		{if(isset($ins)&&$ins!=FALSE)
        			echo "<h1>Registered successfully</h1><script>document.getElementsByName('r')[0].href='index.php'</script>";
			else echo "<h1>Error</h1>(Problem)"; }
			else echo "<h1>Retry</h1><script>alert('Phone Already registered . Please try with  other Number');</script>";
	
	
?>

</span></a>
					<i class="button__icon fas fa-chevron-right"></i>


				
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