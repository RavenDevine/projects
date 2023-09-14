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
					Welcome to my page! Here, I embark on a digital odyssey, fusing creativity with code to shape the web's future. Every pixel, every line of code, is a canvas for innovation. Dive into my world, where I transform concepts into captivating digital experiences. Together, let's bring your visions to life in the digital realm. Buy me a coffee to download my resume and access my recorded tutorials &#128521;.
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

<!--profile-------------------------------------------------------------------------------->
<section>

        <div data-aos="fade-up" class="slider-heading">
            <h3> <span>Know Me Better</span></h3>
        </div>
            
         
        <div class="profile" data-aos="fade-up" class="slider-heading">
        	<img src="pix/about.jpeg">
        </div>

        <div class="about-container" data-aos="fade-up" class="slider-heading">

        <div class="about">
        	<a href="#" class="fa fa-graduation-cap" aria-hidden="true"></a>
        	<h4>Education</h4><br>
        	<h5>College (2018-2022): CCP</h5>
        	<h5>SHS (2016-2018): PUP</h5>
        	<h5>JHS (2012-2016): JJLHS</h5>
        </div><!--About-->

        <div class="about">
        	<a href="#" class="fa fa-trophy" aria-hidden="true"></a>
        	<h4>Experience</h4><br>
        	<h5>1 year Programmer</h5>
        	<h5>3 years PHP</h5>
        	<h5>3 years MYSQL</h5>
        </div><!--About-->

        <div class="about">
        	<a href="#" class="fa fa-star" aria-hidden="true"></a>
        	<h4>Skills</h4><br>
        	<h5>Coding</h5>
        	<h5>Debugging</h5>
        	<h5>Algorithms</h5>
        	<h5>Security</h5>
        </div><!--About-->

        </div><!--About-Container-->
          

    </section>
   <!--profile--------------------------------------------------------------------------------> 

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
       <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
       <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
       <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
       <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>

     </div>
     <p class="copyr">
     Copyright Arkeys 2023
   </p>
   </div>  
<!--   FOOTER END -->
</footer>
</html>