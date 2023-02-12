
	<?php	
 include "conn.php";
if(isset($_GET['delname']))

{	$d=$_GET['delname'];
	$updUsers="DELETE FROM patient WHERE FirstName = '$d'";
			$delusrres	=mysqli_query($conn,$updUsers);		
		if(mysqli_affected_rows($conn))echo '! Deleted the Whole data for the user '.$d;exit();

}

if(isset($_GET['pname']))
{$n=$_GET['pname'];
	$updUsers="UPDATE patient SET Doctor = 0, Time = NULL,Slot=NULL WHERE FirstName = '$n'";
		$mxmakmxs=mysqli_query($conn,$updUsers);		
		if(mysqli_affected_rows($conn))echo '! Deleted the boooking for the user '.$n;
}
?>