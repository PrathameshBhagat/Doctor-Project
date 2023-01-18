<?php 
include "conn.php";
$name= $_GET["date"];
$getTime = "SELECT Time FROM patient where  Slot='$name' ";
$ins = mysqli_query($conn, $getTime);$s="";
for ($i=0;$i<mysqli_num_rows($ins);$i++)
{{if($i==0);else $s=$s.",";}
$s=$s.mysqli_fetch_array($ins)['Time'];
}echo $s;?>