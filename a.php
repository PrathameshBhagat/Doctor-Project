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
	$updUsers="UPDATE bookings SET Doctor=0,Slot=null,Time=null WHERE ID = '$n'";
		$mxmakmxs=mysqli_query($conn,$updUsers);	
		if(mysqli_affected_rows($conn))echo '! Deleted the boooking for the user with id = '.$n;
}
if(isset($_GET['ppid'])&&isset($_GET['pres']))
{ $n=$_GET['ppid'];$pres=$_GET['pres'];
 if($pres=="") echo "Please give proper prescription";
	
	else {$updUsers="UPDATE bookings SET 	Prescription='$pres' WHERE ID = ".$n;
		$mxmakmxs=mysqli_query($conn,$updUsers);	
		if(mysqli_affected_rows($conn))echo '! Prescribed the user with id = '.$n." a prescription of ".$pres ;}
}
?>