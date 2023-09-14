<?php
include "style.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.php">
	<link rel="icon" href="pix/favicon.png">
	
	<title>Arkeys</title>
</head>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<body>
	<!--nav menu-------------------------------------------------------------------------------->
	<nav>
		<div class="nav-cont">
			<div class="logo"><a href="#">Raven Kane's Profile</a></div>
			<label for="check" class="checkbox">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</label>
			<input type="checkbox" name="check" id="check">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Projects</a></li>
				<li><a href="#">contact</a></li>
			</ul>	
		</div>
	</nav>
	<!--nav menu-------------------------------------------------------------------------------->
	<!--lnding page-------------------------------------------------------------------------------->
	<section class="section">
		<div class="section-container">
			<div class="content">
				<p class="subtitle">Hi!</p>
				<h1 class="title">
					I'm <span>Raven Kane<br>a</span> <span class="auto-type"></span> 
				</h1>
				<p class="description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<div class="action-btns">
					<button class="btn1">Buy Me a Coffee</button>
					<button class="btn2">View my Portfolio</button>
				</div>
			</div>
			<div class="image">
				<img src="pix/profile.png" alt="profile">
			</div>
			
		</div>
	</section>
	<!--lnding page-------------------------------------------------------------------------------->

<!--Fixed-------------------------------------------------------------------------------->
	<div class="featured_photo"></div>
<!--Fixed-------------------------------------------------------------------------------->



<!--Past proj-------------------------------------------------------------------------------->
<section>

        <div data-aos="fade-up" class="slider-heading">
            <h3> <span>Past Projects</span></h3>
        </div>
            
          <div data-aos="fade-up" class="collection">
              
            <img class="image-grid-col-2 image-grid-row-2" src="pix/1.png">
            <img class="coll2" src="pix/2.png">
            <img class="coll3" src="pix/3.jpg">
            <img class="coll4" src="pix/4.jpg">
            <img class="coll5" src="pix/5.jpg">

          </div>  

          <div class="action-btns2">
					<button class="btn3">View All Projects</button>
				</div>

          

    </section>
   <!--Past proj--------------------------------------------------------------------------------> 

<!--Typing Script-------------------------------------------------------------------------------->
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

	<script>
		AOS.init();
		var typed = new Typed(".auto-type", {
			strings: ["Programmer","Professor","Player","Provider","Padilla, Daniel","Please Hire me"],
			typeSpeed: 150,
			backSpeed: 150,
			loop: true
		})
	</script>
<!--Typing Script-------------------------------------------------------------------------------->

</body>
<footer>
<!--  FOOTER START -->
   <div class="ftter">
     <div class="social">
       <a href="https://www.facebook.com/chasyyyph"><i class="fa fa-facebook" aria-hidden="true"></i></a>
       <a href="https://www.instagram.com/chasyyyph/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
     </div>
     <p class="copyr">
     Copyright Arkeys 2023
   </p>
   </div>  
<!--   FOOTER END -->
</footer>
</html>