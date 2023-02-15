<?php	
 include "conn.php";
if(isset($_GET['delid']))

{	$d=$_GET['delid'];
	$updUsers="DELETE FROM patient WHERE id = '$d'";
			$delusrres	=mysqli_query($conn,$updUsers);		
		if(mysqli_affected_rows($conn))echo '! Deleted the Whole data for the user with id ='.$d;exit();

}

if(isset($_GET['pid']))
{$n=$_GET['pid'];
	$updUsers="Delete FRom bookings  WHERE ID = '$n'";
		$mxmakmxs=mysqli_query($conn,$updUsers);		
		if(mysqli_affected_rows($conn))echo '! Deleted the boooking for the user with id = '.$n;
}
?>