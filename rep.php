<html>
<head>
<html>
<head>
<link rel="stylesheet" href="css/main.css">
<style>
	button{width: 50px;background: blue;cursor: pointer;border-radius: 5px;}
	i button  {background:red}
	h1 i {font-size: 110px;display: inline-block;color: lime;}
	h1{display: inline-block;color: Black;font-size: 50px; }
</style>
</head>
<body >                             

<a  href="index.php"> <img src="images/home.png" height=50px width=50px style="margin: 40px 40px 00px 40px;"><h1>Report of <i><?php echo strftime('%B', mktime(0, 0, 0, $_GET["m"]));?></i> Month for Doctor <i><?php echo $_GET['dname']; ?></i></h1></a>
<div class=container>
<table border=1px>
	<thead><TH>ID</TH><TH>FirstName</TH>
		<TH>Slot</TH>
		<TH>Time</TH>
		<TH>Cancle</TH>
		<TH>Delete</TH>
	</thead>
	<?php	
 include "conn.php";
 $nameofdr=$_GET['dname'];
 $mon=$_GET['m'];
$QUsers="SELECT * FROM bookings where ID=
 any(SELECT id from Bookings where Doctor ='$nameofdr' and MONTH(Slot)='$mon');";


			$RmUsers	=mysqli_query($conn,$QUsers);

			while($row=mysqli_fetch_assoc($RmUsers))
			{ 
	?>
		<tr >
			<td><?php echo $row['ID'];?></td>
			<td><?php echo $row['FirstName'];?></td>
			<td><?php echo date('d-m-Y', strtotime($row['Slot'])); ;?></td>
			<td><?php echo $row['Time'];?></td>
			<td><?php echo "<button onclick=can(".'\''.$row['ID'].'\''.")>"."<b>Cancle</b>"."</button>";?></td>
			<td><?php echo "<i><button onclick=del(".'\''.$row['ID'].'\''.")>"."<b>Delete</b>"."</button><i>";?></td>
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
  xhr.open("GET", "a.php?pid="+n);
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
  xhr.open("GET", "a.php?delid="+n);
  xhr.onload = function () {
    alert(this.response);
  location.reload();
  };
  xhr.send();
	}else return;
}
</script>