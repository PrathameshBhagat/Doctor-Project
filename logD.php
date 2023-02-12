<html>
<head>
<html>
<head>
<link rel="stylesheet" href="css/main.css">
<style>
	button{width: 50px;background: blue;cursor: pointer;border-radius: 5px;}
	i button  {background:red}
	h1{display: inline-block;color: Black;}
</style>

</head>
<body >

<a  href="index.php"> <img src="images/home.png" height=50px width=50px style="margin: 40px 40px 00px 40px;"><h1>Bookings: </h1></a><!-- Cancle booking from <input type='date' name='cancledaystart'>to <input type='date' name='cancledayend'>
 -->
<div class=container>
<table border=1px>
	<thead><TH>FirstName</TH>
		<TH>LastName</TH>
		<TH>Gender</TH>
		<TH>Phone</TH>
		<TH>Age</TH>
		<TH>Slot</TH>
		<TH>Time</TH>
		<TH>Cancle</TH>
		<TH>Delete</TH>
	</thead>
	<?php	
 include "conn.php";
 $nameofdr=$_GET['name'];
$QUsers="SELECT * FROM patient where Doctor='$nameofdr'";
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
			<td><?php echo $row['Time'];?></td>			
			<td><?php echo "<button onclick=can(".'\''.$row['FirstName'].'\''.")>"."<b>Cancle</b>"."</button>";?></td>
			<td><?php echo "<i><button onclick=del(".'\''.$row['FirstName'].'\''.")>"."<b>Delete</b>"."</button><i>";?></td>
		</tr>
          
          <?php
            }
        ?>
      </table></div>
</body></html>

<script>
	function can(n)
	{
		var xhr = new XMLHttpRequest();var resp="";
  xhr.open("GET", "a.php?pname="+n);
  xhr.onload = function () {
    alert(this.response);
  location.reload();
  };
  xhr.send();
	}
	function del(n)
	{
		if(confirm("Do You really want to delete the data of "+n+" Completely ?")){
		var xhr = new XMLHttpRequest();var resp="";
  xhr.open("GET", "a.php?delname="+n);
  xhr.onload = function () {
    alert(this.response);
  location.reload();
  };
  xhr.send();
	}else return;
}
	
</script>