
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Soccer a Sports Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>	
 <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>		
	<!--//fonts-->
		<link href="{{asset('../vendors/web/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
		<link href="{{asset('../vendors/web/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="soccer Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
</head>
<body>
<!-- header -->
<div class="header">
	 <div class="container">
		 <div class="logo">
			   <h1><a href="index.html">SOCCER</a></h1>
		 </div>	
		 <div class="top-menu">
			 @include('front/frontlayout/front_topmenu')			 
		 </div>
		 <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
		 <div class="clearfix"></div>
	 </div>
</div>
<!-- //header -->
<!-- banner -->
<div class="strip">
	 <div class="container">
	 <div class="search">
		    <form>
		    	<input type="text" value="" placeholder="Search...">
				<input type="submit" value="">
			</form>
     </div>     
	 <div class="social">			 
			 <a href="#"><i class="facebook"></i></a>
			 <a href="#"><i class="twitter"></i></a>
			 <a href="#"><i class="dribble"></i></a>	
			 <a href="#"><i class="google"></i></a>	
			 <a href="#"><i class="youtube"></i></a>	
	 </div>
		<div class="clearfix"></div>
		</div>
</div>
<!-- banner -->
<!-- //header -->
<div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Contact</li>
		 </ol>
</div>
<!-- //header -->
<div class="contact">
	 <div class="container">
		 <div class="contact-grids">
			 <h2>CONTACT</h2>
			 <p class="design">Design is not the narrow application of formal skills, it is a way of thinking.</p>
			 <div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13342.126931081319!2d106.8177558209543!3d-6.17917693527715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNational+Monument!5e0!3m2!1sen!2sid!4v1499067613159" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			 </div>
			 <div class="contact-icons">
				<div class="contact-grid">
					<div class="contact-fig">
						<span> </span>
					</div>
					<p>555-222-333</p>
				</div>
				<div class="contact-grid">
					<div class="contact-fig1">
						<span> </span>
					</div>
					<p>T317 Timber Oak Drive
						<span>Sundown,TX 79372</span></p>
				</div>
				<div class="contact-grid">
					<div class="contact-fig2">
						<span> </span>
					</div>
					<p><a href="mailto:info@example.com">somemail@hotmail.com</a></p>
				</div>
				<div class="clearfix"> </div>
			 </div>
			 <form>
				<input type="text" placeholder="Name" required=" ">
				<input type="text" placeholder="Email" required=" ">
				<input type="text" placeholder="Website" required=" ">
				<textarea placeholder="Message..." required=" "></textarea>
				<input type="submit" value="SEND">
			 </form>
		 </div>
	 </div>
</div>
<!-- contact -->

<!--footer-->
<div class="footer">
	 @include('front/frontlayout/front_footer')
</div>
<!-- //footer -->
</body>
</html>