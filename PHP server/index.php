
<!DOCTYPE html>
<html>

<head>
	<title>shop</title>
	<link rel="stylesheet" type="text/css" href="web.css">
	<script src="https://kit.fontawesome.com/b693fdf13b.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<div class="navbar">
			<img src="img/logo2.gif" class="logo">
			<nav>
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">about</a></li>
					<li><a href="#">collections</a></li>
					<li><a href="#">category</a></li>
          
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
         
				</ul>
			</nav>
			<img src="img/cart.png" class="cart">
		</div>
		<div class="content">
			<a href="" class="btn">2021 Style</a>
			<h1>The end of an era.<br> The start of the style.</h1>
			<p>Viking style made for shocking and stylish persons.</p>
		</div>
		<div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="/img/1.png" alt="">
        </div>
        <div class="slide">
          <img src="/img/2.png" alt="">
        </div>
        <div class="slide">
          <img src="/img/3.png" alt="">
        </div>
        <div class="slide">
          <img src="/img/4.png" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>
		</div>
		</div>
	</div>
</body>

</html>
