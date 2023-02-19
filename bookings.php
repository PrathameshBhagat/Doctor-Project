
<html>
<head>
<link rel="stylesheet" href="css/register.css">

<script>
  function pppproblem(){
  var problem=prompt("Please explain the medical issues you are facing ");
  if (problem==null||problem==""){alert("Please provide proper information"); location.reload();}
  else {var z=
    document.getElementById("bk").innerHTML;
    document.getElementById("bk").innerHTML=
    z+"<Select STYLE='display:none'NAME=problems><OPTION>"+problem+"</OPTION>";}
}    
function checkU(){
  var xhr = new XMLHttpRequest();var resp="";
  xhr.open("GET", "checkbokk.php?date="+document.getElementsByName("date")[0].value+"&doctor="+document.getElementsByName("doctor")[0].value);
  xhr.onload = function () {
    resp=this.response.replace(/:30:00/g,"c").replace(/:00:00/g,"a").replace(/:15:00/g,"b").replace(/:45:00/g,"d");
inactivate(resp);
  };
  xhr.send();

}//add to bodu load
function inactivate(s){
  a=s.split(",");
  var tabb=document.querySelectorAll('[class=inactive]');
  for (var i=0;i<tabb.length;i++)
    {tabb[i].classList.remove("inactive");}
  for (var i=0;i<a.length;i++)
    {document.getElementsByName(a[i])[0].classList.add("inactive");
}
}//add to bodu load
function setdate(){
  today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //As January is 0.
  var yyyy = today.getFullYear();
  if(dd<10) dd='0'+dd;
  if(mm<10) mm='0'+mm;
  document.getElementsByName("date")[0].min=yyyy+'-'+mm+'-'+dd;
  if(mm==12)mm="01";else mm=today.getMonth()+2;
  if(dd<10) dd='0'+dd;
  if(mm<10) mm='0'+mm;
  document.getElementsByName("date")[0].max=yyyy+'-'+mm+'-'+dd;
pppproblem();
}//add to bodu load
 

function no(me){
  if(me.classList.contains("inactive"))alert("This Slot is Already Booked !");
  else {
    var tabb=document.querySelectorAll('[class=selected]');
    for(i=0;i<tabb.length;i++)
      tabb[i].classList.remove("selected");
    me.classList.add("selected");
    document.getElementsByName("showt")[0].value=me.value;
  }
}

function chdate(){if( document.getElementsByName("doctor")[0].value==""){alert("Please Select your doctor first");location.reload();return;}
  document.getElementsByName("showd")[0].value=document.getElementsByName("date")[0].value;
    checkU();
}

function sub(event) { 
if(document.getElementsByName("showt")[0].value=="")
{alert("Please Select The Time");event.preventDefault();}
}
</script>
</head>
<body onload="setdate()">
<div id="login-box">
  <div style="padding: 40px;display: block;">
    <h1 name="de">Booking an Appointment :</h1>
<form id="bk" onsubmit="sub(event)" action="bookP.php" method="post">   
              
  Doctor's Name :&nbsp;<select name=doctor onchange="chdate()" required></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Of Appointment :&nbsp;&nbsp;&nbsp;&nbsp; <input type="date"  name="date"  style="margin-bottom:15px" onchange="chdate()" required />
  <br>Time Slots Available (All slots are of 15 mins) :  <p>   
                <input type="button"  onClick="no(this)" name="09a" value="9:00" />
                <input type="button"  onClick="no(this)" name="09b" value="9:15" />
                <input type="button"  onClick="no(this)" name="09c"value="9:30" />
                <input type="button"  onClick="no(this)" name="09d"value="9:45" />
                <input type="button"  onClick="no(this)" name="10a"value="10:00" />
                <input type="button"  onClick="no(this)" name="10b"value="10:15" />
                <input type="button"  onClick="no(this)" name="10c"value="10:30" />
                <input type="button"  onClick="no(this)" name="10d"value="10:45" />
                <input type="button"  onClick="no(this)" name="11a"value="11:00" />
                <input type="button"  onClick="no(this)" name="11b"value="11:15" />
                <input type="button"  onClick="no(this)" name="11c"value="11:30" />
                <input type="button"  onClick="no(this)" name="11d"value="11:45" />
                <input type="button"  onClick="no(this)" name="12a"value="12:00" />
                <input type="button"  onClick="no(this)" name="12b"value="12:15" />
                <input type="button"  onClick="no(this)" name="12c"value="12:30" />
                <input type="button"  onClick="no(this)" name="12d"value="12:45" /><br><br>
                <input type="button"  onClick="no(this)" name="01a"value="1:00" />
                <input type="button"  onClick="no(this)" name="01b"value="1:15" />
                <input type="button"  onClick="no(this)" name="01c"value="1:30" />
                <input type="button"  onClick="no(this)" name="01d"value="1:45" />
                <input type="button"  onClick="no(this)" name="02a"value="2:00" />
                <input type="button"  onClick="no(this)" name="02b"value="2:15" />
                <input type="button"  onClick="no(this)" name="02c"value="2:30" />
                <input type="button"  onClick="no(this)" name="02d"value="2:45" />
                <input type="button"  onClick="no(this)" name="03a"value="3:00" />
                <input type="button"  onClick="no(this)" name="03b"value="3:15" />
                <input type="button"  onClick="no(this)" name="03c"value="3:30" />
                <input type="button"  onClick="no(this)" name="03d"value="3:45" />
                <input type="button"  onClick="no(this)" name="04a"value="4:00" />
                <input type="button"  onClick="no(this)" name="04b"value="4:15" />
                <input type="button"  onClick="no(this)" name="04c"value="4:30" />
                <input type="button"  onClick="no(this)" name="04d"value="4:45" />
              </p>
              <label><b>Book for date :</b></label>&nbsp;
                  <input type="show" name="showd" readonly  style="background:#4d6d09;font-size: 1.5rem;width:150px">&nbsp;

              <label><b>At :</b> </label>&nbsp;
                  <input type="show" name="showt" readonly style="background:#4d6d09;font-size: 1.5rem;width:150px"><br><br>

               <?php if (isset($_POST['ID']))echo "<input type=hidden name='showid' value=".$_POST['ID'].">";
               if (isset($_POST['FirstName']))echo "<input type=hidden name='FirstName' value=".$_POST['FirstName'].">";

               ?>  



              <input type="submit" value="Confirm" style="background:#0063fd;padding: 0px 20px ;font-size: 1.2rem;width:200px;height:50px;margin-left: 150px;">

   </form>
  </div>
  
</div>
</body>
</html>
<?php

include "conn.php";
$getdoctor = "SELECT FirstName FROM doctor where 1";
$getd = mysqli_query($conn, $getdoctor);
echo "<script>document.getElementsByName('doctor')[0].innerHTML=\"";
for ($i=0;$i<mysqli_num_rows($getd);$i++)
{{if($i==0);}
$doctorname=mysqli_fetch_array($getd)['FirstName'];
echo "<option value=".$doctorname.">".$doctorname."</option>";
}
echo "\";</script>";
?>