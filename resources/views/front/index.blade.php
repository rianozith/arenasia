
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Soccer a Sports Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
		<script src="js/jquery.min.js"></script>
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
		 </div>	{{-- end top menu --}}	
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
<div class="banner">
		<script src="{{asset('../vendors/web/js/responsiveslides.min.js')}}"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 300,
        manualControls: '#slider3-pager',
      });
    });
  </script>

 <div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				  <img src="{{asset('../vendors/web/images/bnr3.jpg')}}" alt="">
				  <div class="banner-info">
				  <h3>Sed ultricies elementum.</h3>
				  <p>Lorem Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec a odio quam. Aenean ipsum arcu, 
				  luctus vel ultricies ut, commodo sed turpis. Phasellus tristique lorem sit amet tellus dignissim hendrerit.
				  In hac habitasse platea dictumst. Sed vehicula volutpat varius elit. consectetur adipiscing elit.</p>
				  </div>
	         </li>
	         <li>
				 <img src="{{asset('../vendors/web/images/bnr2.jpg')}}" alt="">
	        	 <div class="banner-info">
				  <h3>Curabitur turpis posuere rutrum.</h3>
				  <p>Lorem Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec a odio quam. Aenean ipsum arcu, 
				  luctus vel ultricies ut, commodo sed turpis. Phasellus tristique lorem sit amet tellus dignissim hendrerit.
				  In hac habitasse platea dictumst. Sed vehicula volutpat varius elit. consectetur adipiscing elit.</p>
				  </div>
			 </li>
	         <li>
	             <img src="{{asset('../vendors/web/images/bnr1.jpg')}}" alt="">
	        	 <div class="banner-info">
				  <h3>Sed ultricies elementum.</h3>
				  <p>Lorem Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec a odio quam. Aenean ipsum arcu, 
				  luctus vel ultricies ut, commodo sed turpis. Phasellus tristique lorem sit amet tellus dignissim hendrerit.
				  In hac habitasse platea dictumst. Sed vehicula volutpat varius elit. consectetur adipiscing elit.</p>
				  </div>
	         </li>
	      </ul>
	  </div>
  </div>
<!---->
				
	 <!---start-content----->
	 <div class="banner-bottom-grids">
		 <div class="container">
			 <div class="col-md-6 banner-text-info clr1">
				 <i class="icon1"></i>
				 <div class="bnr-text">				 
					 <h3>CHAMPIONS LEAGUE</h3>
					 <p>Vestibulum malesuada nisi sit amet justo ullamcorper, non convallis justo consequat Integer et urna bibendum elit accumsan interdum.</p>
				 </div>
			 </div>
			 <div class="col-md-6 banner-text-info clr2">	
				 <i class="icon2"></i>
				 <div class="bnr-text">
					 <h3>NEWS & EVENTS</h3>
					 <p>Vestibulum malesuada nisi sit amet justo ullamcorper, non convallis justo consequat Integer et urna bibendum elit accumsan interdum.</p>
				 </div>
			 </div>
			 <div class="clearfix"></div>
			 
			 <div class="col-md-6 banner-text-info clr3 btm">	
				 <i class="icon3"></i>
				 <div class="bnr-text">
					 <h3>TRAINING</h3>
					 <p>Vestibulum malesuada nisi sit amet justo ullamcorper, non convallis justo consequat Integer et urna bibendum elit accumsan interdum.</p>
				 </div>
			 </div>
			 <div class="col-md-6 banner-text-info clr4 btm">	
				 <i class="icon4"></i>
				 <div class="bnr-text">
					 <h3>FINAL TOURNAMENT</h3>
					 <p>Vestibulum malesuada nisi sit amet justo ullamcorper, non convallis justo consequat Integer et urna bibendum elit accumsan interdum.</p>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!-- //banner -->

<!-- content -->
<div class="content">
	 <div class="container">
		 <div class="content-grids">
			 <div class="col-md-4 content-grid1">
				 <img src="{{asset('../vendors/web/images/c1.jpg')}}" alt=""/>
				 <h3>Champion's League</h3>
				 <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
				 Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker.</p>
				 <a href="#">Read More..</a>
			 </div>
			 <div class="col-md-4 content-grid1">
				 <img src="{{asset('../vendors/web/images/c2.jpg')}}" alt=""/>
				 <h3>Women's Cup</h3>
				 <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
				 Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker.</p>
				 <a href="#">Read More..</a>
			 </div>
			 <div class="col-md-4 content-grid1">
				 <img src="{{asset('../vendors/web/images/c3.jpg')}}" alt=""/>
				 <h3>Final Tournment</h3>
				 <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
				 Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker.</p>
				 <a href="#">Read More..</a>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--- //content--->
<!-- content-bottom -->
<div class="content-info">
	 <div class="container">
		 <div class="content-bottom-grids">
			 <div class="col-md-4 popular">	
				 <h3>POPULAR TAGS</h3>
				 <ul>
					 <li><a href="#">Ut vehicula nisl ut purus tempus aliquet.</a></li>
					 <li><a href="#">Nullam a risus pharetra nisi commodo auctor.</a></li>
					 <li><a href="#">Proin venenatis velit a fringilla rutrum.</a></li>
					 <li><a href="#">Nunc facilisis dolor ac suscipit volutpat.</a></li>
					 <li><a href="#">Cras tempor justo ac mauris laoreet lacus efficitur.</a></li>
					 <li><a href="#">Sed tincidunt enim ac elit tempor erat consequat.</a></li>
					 <li><a href="#">Proin venenatis velit a fringilla rutrum.</a></li>
					 <li><a href="#"> Aliquam vulputate mi vestibulum mauris ultrices.</a></li>
				 </ul>
			 </div>
			 <div class="col-md-4 welcome-pic">
				 <h3>ABOUT</h3>
				 <h4>Morbi sed arcu mollis, elementum erat venenatis, tincidunt tellus.</h4>
				 <img src="{{asset('../vendors/web/images/cnt.ab.jpg')}}" alt=""/>
				 <p>Aenean ut condimentum magna, mattis pretium massa. Sed sollicitudin ullamcorper auctor. Duis vestibulum velit id augue pulvinar egestas. 
				 Morbi sed orci auctor, feugiat felis at, fermentum magna. In ac egestas lectus.</p>
			</div>
			<div class="col-md-4 coach">
				 <h3>OUR COACHES</h3>
				 <div class="coch-grid chr">
					 <div class="coach-pic">
						 <img src="{{asset('../vendors/web/images/ch1.jpg')}}" alt=""/>
					 </div>
					 <div class="coach-pic-info">
						 <h4><a href="#">Phasellus at Tellus</a></h4>
						 <h5>Aenean vestibulum </h5>
						 <p>Donec ornare massa at velit fringilla, condimentum magna ornare tincidunt nulla dignissim.</p>
					 </div>
					 <div class="clearfix"></div>
				 </div>
				 <div class="coch-grid">
					 <div class="coach-pic">
						 <img src="{{asset('../vendors/web/images/ch2.jpg')}}" alt=""/>
					 </div>
					 <div class="coach-pic-info">
						 <h4><a href="#">Phasellus at Tellus</a></h4>
						 <h5>Aenean vestibulum </h5>
						 <p>Donec ornare massa at velit fringilla, condimentum magna ornare tincidunt nulla dignissim.</p>
					 </div>
					 <div class="clearfix"></div>
				 </div>
			</div>
			<div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!-- //content-bottom -->
<!--footer-->
<div class="footer">
	 @include('front/frontlayout/front_footer')
</div>
<!-- //footer -->
</body>
</html>