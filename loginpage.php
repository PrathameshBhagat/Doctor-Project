<html>
<head>
<link rel="stylesheet" href="css/main.css">
<script>
function check(){
if(document.getElementsByName("name").length>0&&document.getElementsByName("password").length>0)

document.getElementsByName("lform").submit();
}
</script>
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" name="lform" method="post" action="log.php">

<a  href="index.php"> <img src="images/home.png" height=50px width=50px></a>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text"name="name" required class="login__input" placeholder="Phone No(9..9)/Username">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="text" name="password" required class="login__input" placeholder="Password">
				</div>
				<button onclick="check()" class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<div class="social-login">
				
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div></body></html>