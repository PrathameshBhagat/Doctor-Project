<?php 
include "conn.php";
$name= $_POST["name"];
$password= $_POST["password"]; 
$exist=0;
$insert = "SELECT * FROM patient where  Phone='$name' AND Password='$password'";
$insert1 = "SELECT * FROM doctor where  Phone='$name' AND Password='$password'";
$insert2="SELECT * FROM patient"; 
$insert3="UPDATE patient SET Doctor = NULL, Time = NULL,Slot=NULL WHERE FirstName = ";
// to know the no of current users to provide to admin for notification
$ins = mysqli_query($conn, $insert);/* to check if user exist*/
$admin=0;
$ins1 = mysqli_query($conn, $insert1);/* to check if admin exist*/
$s="SELECT Name FROM user";
$row="";
$sel=mysqli_query($conn, $s);/* to collect all users to show to admin*/
$user=mysqli_query($conn,$insert2);
 
?>
<html>
<head>
<link rel="stylesheet" href="css/main.css">

</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">

<a  href="index.php"> <img src="images/home.png" height=50px width=50px></a>


				<a class="button login__submit">
					<span class="button__text">
<?php
	if(mysqli_num_rows($ins)>0&&mysqli_num_rows($ins1)>0)
		{echo "<H1>ERROR</H1>(same data more than 1
 entry found)";}
	else if((mysqli_num_rows($ins)<=0)&&(mysqli_num_rows($ins1)<=0))
		{echo "<H1 style=color:red;>Error</H1>(Check username and password)";}
	else {	
		if(mysqli_num_rows($ins)>0)
		{
		echo "Hi User<H1> ";
		$row=mysqli_fetch_assoc($ins);
		echo $row["FirstName"];
		echo "</H1>";
		echo "(Logged in successfully)";
		$exist=1;
		}

		if(mysqli_num_rows($ins1)>0)
		{
		$row=mysqli_fetch_assoc($ins1);/* check for admin and redirect */ 
		try{
			echo "<script>window.location.href='logD.php?name=".$row['FirstName']."';</script>";
		}
		catch(Exception $e){echo "<script>window.location.href='logD.php?name=".$row['Name']."';</script>";}
		}
		
	}
	?>
	
	



</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</a>
<?php 
if ($row['Doctor']=="0"){
	echo "<div class='button login__submit'>
					<span class='button__text'><H1>Slot Cancled </h1>by the admin due to some reason</span>
					<i class='button__icon fas fa-chevron-right'></i>
				</div><a onclick='book.submit()' class='button login__submit'>
					<span class='button__text'>&nbsp;&nbsp;RE-Book a new Slot Now</span>
					<i class='button__icon fas fa-chevron-right'></i>
				</a>";
				$insert3=$insert3.'\''.$row["FirstName"].'\'';
				 mysqli_query($conn, $insert3);
}
else
if ($row['Slot']==""||$row["Time"]==""||$row['Slot']==null||$row["Time"]==null){
	if ($exist==1)echo "<a onclick='book.submit()' class='button login__submit'>
					<span class='button__text'>Book Slot Now</span>
					<i class='button__icon fas fa-chevron-right'></i>
				</a>	";}
else echo "<div class='button login__submit'>
					<span class='button__text'><H1>Slot Booked Already </h1><br>dr.&nbsp;&nbsp;".$row['Doctor']."<br>On: ".$row['Slot'].", At : ".$row["Time"]."</span>
					<i class='button__icon fas fa-chevron-right'></i>
				</div>
<a onclick='book.submit()' class='button login__submit'>
					<span class='button__text'>Click to Change Booking </span>
					<i class='button__icon fas fa-chevron-right'></i>
				</a>";

?>


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
</div>
<form method="post" id="book" action="bookings.php">  
	<?php echo "<input type='hidden' name='phn' value='".$row['Phone']."'>"
	?></form></body></html>