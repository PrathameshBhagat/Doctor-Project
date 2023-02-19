<?php 
include "conn.php";
$name= $_POST["name"];
$password= $_POST["password"]; 
$exist=0;
$insert = "SELECT * FROM patient where  Phone='$name' AND Password='$password'";
$insert1 = "SELECT * FROM doctor where  Phone='$name' AND Password='$password'";
$insert3="Delete from bookings  WHERE ID = ";
//this is to remove cancellation from table

$ins = mysqli_query($conn, $insert);/* to check if user exist*/

$ins1 = mysqli_query($conn, $insert1);/* to check if admin exist*/

$row="";//will contain either a patient or a doctor row 
 
 
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
		$row=mysqli_fetch_assoc($ins);//fetch patient name
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
//if(mysqli_num_rows($rows)>0){$rows=mysqli_fetch_assoc($insert2);

if($exist=1)	
{
	$insert2="SELECT * FROM bookings where  ID=".$row["ID"]; //fetch booking for later use
	$rows=mysqli_query($conn,$insert2);

	if (mysqli_num_rows($rows)==0&&(mysqli_num_rows($ins)>0||mysqli_num_rows($ins1)>0))
			echo "<a onclick='book.submit()' class='button login__submit'>
							<span class='button__text'>Book Slot Now</span>
							<i class='button__icon fas fa-chevron-right'></i>
						</a>	";
	else 
		{

		$bokdetails=mysqli_fetch_assoc($rows);
		if ($bokdetails['Doctor']=="0"){
			echo "<div class='button login__submit'>
							<span class='button__text'><H1>Slot Cancled </h1>by the doctor due to some reason</span>
							<i class='button__icon fas fa-chevron-right'></i>
						</div><a onclick='book.submit()' class='button login__submit'>
							<span class='button__text'>&nbsp;&nbsp;Re-Book a new Slot Now</span>
							<i class='button__icon fas fa-chevron-right'></i>
						</a>";
						$insert3=$insert3.'\''.$bokdetails["ID"].'\'';
						 mysqli_query($conn, $insert3);
						 //delete record from bookings as the patient has been informed about cancellation
		}
		else {
			if($bokdetails['Doctor']!="0"&&$bokdetails['Doctor']!=null&&$bokdetails['Prescription']==null) 
				
				echo "<div class='button login__submit'>
								<span class='button__text'><H1>Slot Booked Already </h1><br>dr.&nbsp;&nbsp;".$bokdetails['Doctor']."<br>On: ".$bokdetails['Slot'].", At : ".$bokdetails["Time"]."</span>
								<i class='button__icon fas fa-chevron-right'></i>
							</div>
			<a onclick='book.submit()' class='button login__submit'>
								<span class='button__text'>Click to Change Booking </span>
								<i class='button__icon fas fa-chevron-right'></i>
								</a>";
				else 
			{echo "<div class='button login__submit'>
								<span class='button__text'><H1>Dr. ".$bokdetails['Doctor']." Prescribed </h1><br> you : <b>".$bokdetails["Prescription"]."</b></span>
								<i class='button__icon fas fa-chevron-right'></i>
							</div>
			<a onclick='book.submit()' class='button login__submit'>
								<span class='button__text'>Click to Book Again </span>
								<i class='button__icon fas fa-chevron-right'></i>
								</a>";
								$insert3=$insert3.'\''.$bokdetails["ID"].'\'';
						 mysqli_query($conn, $insert3);
						 //delete record from bookings as the patient has been informed about cancellation

							}

		}

		}						
}

	
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
	<?php echo "<input type='hidden' name='ID' value='".$row['ID']."'>";echo "<input type='hidden' name='FirstName' value='".$row['FirstName']."'>";
	?></form></body></html>