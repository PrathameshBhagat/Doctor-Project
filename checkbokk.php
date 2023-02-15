<?php 
include "conn.php";
$name= $_GET["date"];
$doctor= $_GET["doctor"];
$getTime = "SELECT Time FROM bookings where  Slot='$name' and Doctor='$doctor'";
$ins = mysqli_query($conn, $getTime);$s="";
for ($i=0;$i<mysqli_num_rows($ins);$i++)
{{if($i==0);else $s=$s.",";}
$s=$s.mysqli_fetch_array($ins)['Time'];
}echo $s;?>