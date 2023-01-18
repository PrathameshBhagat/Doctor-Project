<?php
 include "conn.php";
$QUsers="SELECT * FROM patient";
?>
<html>
<head>
<link rel="stylesheet" href="css/main.css">

</head>
<body >

<a  href="index.php"> <img src="images/home.png" height=50px width=50px style="margin: 40px 40px 00px 40px;"></a>

<div class=container>
<table border=1px>
	<thead><TH>FirstName</TH>
		<TH>LastName</TH>
		<TH>Gender</TH>
		<TH>Phone</TH>
		<TH>Age</TH>
		<TH>Slot</TH>
		<TH>Time</TH>
	</thead>
	<?php	
			$RmUsers	=mysqli_query($conn,$QUsers);
			while($row=mysqli_fetch_assoc($RmUsers))
			{ 
	?>
		<tr >
			<td><?php echo $row['FirstName'];?></td>
			<td><?php echo $row['LastName'];?></td>
			<td><?php echo $row['Gender'];?></td>
			<td><?php echo $row['Phone'];?></td>
			<td><?php echo $row['Age'];?></td>
			<td><?php echo date('d-m-Y', strtotime($row['Slot'])); ;?></td>
			<td><?php echo $row['Time'];?></td></tr>


			              
          <?php
            }
        ?>
      </table></div>
</body></html>

