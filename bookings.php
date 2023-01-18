
<html>
<head>
<link rel="stylesheet" href="css/register.css">
<script>
function checkU(){
  var xhr = new XMLHttpRequest();var resp="";
  xhr.open("GET", "checkbokk.php?date="+document.getElementsByName("date")[0].value);
  xhr.onload = function () {
    resp=this.response.replace(/:30:00/g,"b").replace(/:00:00/g,"a"); 
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

function chdate(){
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
    <h3>Date Of Appointment :</h3>
<form id="bk" onsubmit="sub(event)" action="bookP.php" method="post">   
                <p>Date :&nbsp; <input type="date"  name="date"  onchange="chdate()" required /></br></br>
                Time Slots Available :<br><br>  
                <input type="button"  onClick="no(this)" name="09a" value="9:00" />
                <input type="button"  onClick="no(this)" name="09b"value="9:30" />
                <input type="button"  onClick="no(this)" name="10a"value="10:00" />
                <input type="button"  onClick="no(this)" name="10b"value="10:30" />
                <input type="button"  onClick="no(this)" name="11a"value="11:00" />
                <input type="button"  onClick="no(this)" name="11b"value="11:30" />
                <input type="button"  onClick="no(this)" name="12a"value="12:00" />
                <input type="button"  onClick="no(this)" name="12b"value="12:30" />
                <input type="button"  onClick="no(this)" name="01a"value="1:00" />
                <input type="button"  onClick="no(this)" name="01b"value="1:30" />
                <input type="button"  onClick="no(this)" name="02a"value="2:00" />
                <input type="button"  onClick="no(this)" name="02b"value="2:30" />
                <input type="button"  onClick="no(this)" name="03a"value="3:00" />
                <input type="button"  onClick="no(this)" name="03b"value="3:30" />
                <input type="button"  onClick="no(this)" name="04a"value="4:00" />
                <input type="button"  onClick="no(this)" name="04b"value="4:30" />
              </p>
              <label><b>Book for date :</b></label>&nbsp;
                  <input type="show" name="showd" readonly  style="background:#4d6d09;font-size: 1.5rem;width:150px">&nbsp;

              <label><b>At :</b> </label>&nbsp;
                  <input type="show" name="showt" readonly style="background:#4d6d09;font-size: 1.5rem;width:150px"><br><br>

               <?php if (isset($_POST['phn']))echo "<input type=hidden name='shown' value=".$_POST['phn'].">";?>  



              <input type="submit" value="Confirm" style="background:#0063fd;padding: 0px 20px ;font-size: 1.2rem;width:200px;height:50px;margin-left: 150px;">

   </form>
  <div>
  
</div>
</body>
</html>