<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$how = $_POST['how']

	$mailto = "tech@cbs-group.co.ke";
	$headers = "From: ".$email;
	$txt = "You have received an email from ".$name.".\n\n".$message."Who heard about you through ".$how;

	mail($mailto, $subject, $txt, $headers);
	header("Location:mainsite/contact.html?mailsend");
}
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<title>Caribben Business Solutions</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
			<a class="navbar-brand" href="#"><img src="images/cbs2.png" class="img-responsive"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav float-left">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="About.html">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact Us</a>
					</li>   
					<li class="nav-item">
						<a class="nav-link" href="gallery.html">Gallery</a>
					</li> 
				</ul>
			</div>  
		</nav>
  	<div id="content-wrapper">
     <div class="container">
      <div id="columns">
       <div class="columns-inner clearfix">
        <div id="content-column">
         <div class="content-inner">
          <section id="main-content">
            <header id="main-content-header" class="clearfix">
               <h1 id="page-title">CONTACT US</h1>
            </header>
              <div id="content">
                <div id="block-system-main" class="block block-system no-title odd first last block-count-2 block-region-content block-main">  
                <div class="webform-confirmation">
            <p><strong>Dear Guest,</strong>Thank you for contacting <em><strong>CBS Group</strong></em>.Your inquiry has been received. Our staff will process your request and get back to you shortly.</p>
                </div>

                 <div class="links">
                     <a href="mainsite/contact.html">Go back to the form</a>
                 </div>
          </div>              
         </div>
          </section>
        </div>
    </div>            
      </div>
  </div>
    </div>
</div>
<section class="footer1 bg-dark" >
		<div class="container">
			<div class="row">
				<div class="col" >
					<ul>
						<li>Riara Road,</li>
						<li>Off Dagoretti Garden,</li>
						<li>Next to Riara Springs Annexe 3 </li>
						<li>Nairobi, Kenya</li>
					</ul>
				</div>
				<div class="col" >
					<img src="images/cbs2.png" class="img-responsive">
				</div>
				<div class="col d-none d-md-block">
					<ul>
						<li>P.O. Box 3397 - 00506</li>
						<li>Nairobi, Kenya</li>
						<li>+254 202 691 880</li>
						<li>logistics@cbs-group.co.ke</li>
					</ul>
				</div>
				
			</div>
		</div>
			
	</section>

	<footer class="footer2 container">
		
		<span style="float:left;"> Copyright © 2019 All Rights Reserved.  CBS Group</span>

		<!-- <span style="float:right;"> Privacy  |  Terms  |  Sitemap</span> -->

		<span style="float:right">
			<a href="#" class="fa fa-lg fa-facebook"></a>
			<a href="#" class="fa fa-lg fa-twitter"></a>
			<a href="#" class="fa fa-lg fa-linkedin"></a>
		</span>
		</div>
	</footer>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  </body>
  </html>