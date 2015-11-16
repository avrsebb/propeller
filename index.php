<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to PBT, Propeller!</title>
	<meta name="description" content="">
	<meta name="author" content="Avram Sebastian">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- END CSS -->
	
	<!--[if lt IE 9]>
	   <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
<!-- HEADER -->
<div class="header">
	<div class="header-fullscreen">
		<div class="header-content">
			<img src="img/logo.png" id="logo" alt="">
			
			<!-- MENU -->
			<div id="nav-trigger">
				<span>Menu</span>
			</div>
			<nav id="nav-main">
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Menus</a></li>
					<li><a href="#">Locations</a></li>
					<li><a href="#">Bookings</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<nav id="nav-mobile"></nav>
			<!-- END MENU -->
			
			<!-- SOCIAL MEDIA ICONS -->
			<div id="socialmedia">
				<a href="#"><span><i class="fa fa-facebook-official fa-lg"></i></span></a>
				<a href="#"><span><i class="fa fa-twitter fa-lg"></i></span></a>
				<a href="#"><span><i class="fa fa-instagram fa-lg"></i></span></a>
			</div>
			<!-- END SOCIAL MEDIA ICONS -->		
		</div>
	</div>
</div>
<!-- END HEADER -->

<!-- CONTENT TOP -->
<div id="content-top">
	<div class="section group">
		<div class="col fullwidth">
			<div id="homepage-title">
				<h1>Welcome to PBT, Propeller!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
			</div>
		</div>
	</div>
	
	<div class="section group">
		<div class="boxes">
			<ul class="da-thumbs">
				<li>
					<img src="img/box1.jpg" alt="img">
					<article class="da-animate da-slideFromRight" style="display: block;">
					<h3>Book a table</h3>
					<span class="book"><a href="#"></a></span>
					<a href="#">click here</a>
					</article>
				</li>
				<li>
					<img src="img/box2.jpg" alt="img">
					<article class="da-animate da-slideFromTop" style="display: block;">
					<h3>Book a table</h3>
					<span class="book"><a href="#"></a></span>
					<a href="#">click here</a>
					</article>
				</li>
				<li>
					<img src="img/box3.jpg" alt="img">
					<article class="da-animate da-slideFromLeft" style="display: block;">
					<h3>Book a table</h3>
					<span class="book"><a href="#"></a></span>
					<a href="#">click here</a>
					</article>
				</li>
				<li>
					<img src="img/box4.jpg" alt="img">
					<article class="da-animate da-slideFromRight" style="display: block;">
					<h3>Book a table</h3>
					<span class="book"><a href="#"></a></span>
					<a href="#">click here</a>
					</article>
				</li>
			</ul>
		</div>
	</div>
		
	<div class="section group">
		<div class="col fullwidth">
			<div class="blueberry">
				<ul class="slides">
					<li><img src="img/slider.jpg" alt=""/></li>
					<li><img src="img/slider.jpg" alt=""/></li>
					<li><img src="img/slider.jpg" alt=""/></li>
				</ul>
				<ul class="pager">
					<li><a href="#"><span></span></a></li>
					<li><a href="#"><span></span></a></li>
					<li><a href="#"><span></span></a></li>
				</ul>
			</div>
		</div>
	</div>
		
</div>
<!-- END CONTENT TOP -->

<!-- CONTENT BOTTOM -->
<div id="bottom-content">
	<div id="footer">
		<div class="container">
			<div class="section group">
				<div class="col footer-widgets twitter">
					<h1>Twitter</h1>
					<div class="content">
						<h2>@PBT_propeller</h2>
						<a class="btn small" href="#">Follow</a>
						
						<?php include('include/getTweet.php'); ?>

						
					</div>
				</div>
				
				<div class="col footer-widgets instagram">
				<h1>Instagram</h1>
				<div class="content">
					<h2>PBT_propeller</h2>
					<a class="btn small" href="#">Follow</a>
					<img src="img/instagram1.jpg" alt="">
					<img src="img/instagram2.jpg" alt="">
				</div>
				</div>
				
				<div class="col footer-widgets signup">
					<h1>Sign up</h1>
					<div class="content">
					<h2>Subscribe our newsletter and never miss out our exclusive offers!</h2>
						<form id="signup" action="#" method="POST">
							<span class="main">
								<label for="name">name:</label>
								<input type="text" id="name"/>
							</span>
							<span class="main">
								<label for="email">email:</label>
								<input type="text" id="email"/>
							</span>
							<span class="main">
								<label for="name">birthday:</label>
								<span class="custom-select" >
								<select name="day" id="day" tabindex="1">
									<option value="">dd</option>
										<option value="1">01</option>
										<option value="9">02</option>
								</select>
								</span>
								<span class="custom-select" >
								<select name="month" id="month" tabindex="1">
									<option value="">mm</option>
										<option value="1">01</option>
										<option value="9">02</option>
								</select>
								</span>
							</span>
							<input type="submit" class="btn" value="Submit"/>
						</form>
					</div>
				</div>
			</div>
			
			<div class="bottom-separator"></div>
			
			<div id="bottom-links">
				<ul>
					<li><a href="#">PBT Propeller</a></li>
					<li><a href="#">1-3 Windsor court</a></li>
					<li><a href="#">Rugby</a></li>
					<li><a href="#">Warwickshire</a></li>
					<li><a href="#">CV21 3BH</a></li>
					<li><a href="#">pbt@propcom.co.uk </a></li>
					<li><a href="#">01788 566270</a></li>
					<li>
						<span><a href=""><i class="fa fa-facebook-official fa-lg"></i></a></span>
						<span><a href=""><i class="fa fa-twitter fa-lg"></i></a></span>
						<span><a href=""><i class="fa fa-instagram fa-lg"></i></a></span>
					</li>
				</ul>
			</div>
			
			<div class="signature"></div>
		</div>
	</div>
</div>
<!-- END CONTENT BOTTOM -->

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.blueberry.js"></script>
<script type="text/javascript" src="js/jquery-hover-effect.js"></script>
<script src="js/viewportchecker.js"></script>
<script src="js/scripts.min.js"></script>
<!-- END JS -->
</body>
</html>