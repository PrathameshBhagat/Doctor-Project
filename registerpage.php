<html>
<head>
<link rel="stylesheet" href="css/register.css">
<script>
  function load(){/*
document.getElementById("datetime").style.display="none";*/
document.getElementById("formRegisterInRegist.Page0").style.display="none";
document.getElementById("formRegisterInRegist.Page1").style.display="none";}
function displayf1(d){
  load();d.style.display="none";
  document.getElementById("formRegisterInRegist.Page0").style.display="block";
  document.getElementsByName("ra")[0].style.display="none";

  /*
  document.getElementsByClassName("left")[0].style.padding="40px";
  document.getElementsByClassName("left")[0].classList.remove('left');*/

}
function displayf2(d){d.style.display="none";
  document.getElementById("formRegisterInRegist.Page1").style.display="block";

  document.getElementsByName("ru")[0].style.display="none";}
/*function displaydate(){
  load();
document.getElementById("datetime").style.display="block";
}*/
function checkU(){
if(document.getElementsByName("name").length>0
&&document.getElementsByName("lname").length>0
&&document.getElementsByName("gender").length>0
&&document.getElementsByName("age").length>0
&&document.getElementsByName("phone").length>0)
if (document.getElementsByName("cpassword")[0].value==document.getElementsByName("password")[0].value)
document.getElementsByName("ru").submit();
else{alert("Password and Confirm Password should be Same");event.preventDefault();return;}
}
function checkA(){
if(document.getElementsByName("namea").length>0
&&document.getElementsByName("lnamea").length>0
&&document.getElementsByName("gendera").length>0
&&document.getElementsByName("agea").length>0
&&document.getElementsByName("phonea").length>0)
if (document.getElementsByName("cpassworda")[0].value==document.getElementsByName("passworda")[0].value)
document.getElementsByName("ra").submit();
else{alert("Password and Confirm Password should be Same");event.preventDefault();return;}
}

</script>
</head>
<body onload="load()">
<div id="login-box">
    <div class="left">
      <form method="post" name="ru" action="regP.php">  
        <h1>Sign up(Patient)</h1>
        <div id="formRegisterInRegist.Page0" >  
         

                <input type="text" name="name" required placeholder="Patient Name" />
              <input type="text" name="lname" required placeholder="Last Name" /><!-- 
              <input type="text" name="gender" required placeholder="Male or female" /> -->
              Gender : &nbsp;&nbsp;&nbsp;<select name="gender"><option value="Male">Male</option><option value="Female">Female</option></select><br><br>
              <input type="number" name="age" required placeholder="Age(18 or 25....) " />
               <input type="text" name="password" required placeholder="Password" />
               <input type="text" name="cpassword" required placeholder="Confirm Password" />
               <input type="text" name="phone" required placeholder="Phone No(9..9)" />
             <input type="submit" onclick="checkU()" name="signup_submit" value="Sign up" />
    
        </div> 
       
            <input type="submit" onclick="displayf1(this)" value="Patient" />
      </form>
    </div>
    <div class="right">
    <form method="post" name="ra" action="regA.php">  
      <h1>Sign up(Doctor)</h1>   
    <div id="formRegisterInRegist.Page1">  
     <input type="text" name="namea"  required placeholder="Doctor Name" />
        <input type="text" name="lnamea" required placeholder="Last Name" />
        Gender : &nbsp;&nbsp;&nbsp;<select name="gendera"><option value="Male">Male</option><option value="Female">Female</option></select><br><br>
        <input type="text" name="agea" required placeholder="Age(18 or 25....)" />
        <input type="text" name="passworda" required placeholder="Password" />
        <input type="text" name="cpassworda" required placeholder="Confirm Password" />
         <input type="text" name="phonea" required placeholder="Phone No(9..9)" />
        <input type="submit" onclick="checkA()" name="signup_submit" value="Sign up" />
    </div >  
        <input type="submit" onclick="displayf2(this)"  value="Doctor" />
    </form> <!-- 
    <div class="or">OR</div> -->
     </div>
</div>
</body>
</html>