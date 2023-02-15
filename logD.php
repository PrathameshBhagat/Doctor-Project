<html>
<head>
<html>
<head>
<link rel="stylesheet" href="css/main.css">
<style>
	button{width: 50px;background: blue;cursor: pointer;border-radius: 5px;}
	i button  {background:red}
	h1{display: inline-block;color: Black;}
</style><?php echo 
"<script>
	function rep(){
if(document.getElementById('month').value!=0)
	window.location.href='rep.php?dname=".$_GET['name']."&m='+document.getElementById('month').value;
	}
</script>"?>
</head>
<body >

<a  href="index.php"> <img src="images/home.png" height=50px width=50px style="margin: 40px 40px 00px 40px;"><h1>Choose Month for Report: </h1></a><select id=month onchange="rep()">
	<option value="0">Selectmonth </option><option value="1">January</option><option  value="2">February</option><option  value="3">March</option><option  value="4">Apri</option><option  value="5">May</option><option  value="6">June</option><option  value="7">July</option  ><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option>
</select><h1> &nbsp;&nbsp;&nbsp;&nbsp;Bookings: </h1>
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
$QUsers="SELECT * FROM patient where ID=any(SELECT ID from Bookings where Doctor ='$nameofdr' )";
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