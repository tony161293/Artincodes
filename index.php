<?php 
	$name= $email= $message = $Err = $test="";
	if($_SERVER["REQUEST_METHOD"]=="POST")
		{   
			$test = true;
			if(empty($_POST["name"]))
				{
					$Err= "Name is required";
					$test= false;	
				}
			else
				{
					$name= test_input($_POST["name"]);
				// check if name only contains letters and whitespace
			    if (!preg_match("/[a-zA-Z]{2,}$/",$name))
			      {
			      $Err = "Only letters and white space allowed for name"; 
			      $test= false;
			      }
			 	}
			if(empty($_POST["email"]))
				{

					$Err= "Email is required";
				  	$test= false;	
				}
			else
			{
				$userEmail= test_input($_POST["email"]);
					// check if e-mail address syntax is valid
				    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
				      {

				      $Err = "Invalid email format"; 
				      $test= false;
				      }

			}
			if(empty($_POST["message"]))
				{
					$Err= "Message is required";
				  	$test= false;	
				}
			else
			{
				$userEmail= test_input($_POST["message"]);
			}
	 	

			if ($test) {
				$to = "contact@artincodes.com";
				$headers = "From: www.artincodes.com\r\n";
				$headers .= "Reply-To: Plese don't reply to this email\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				$subject  = 'Enquiry submitted';
				$message  = '
		        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		        <html xmlns="http://www.w3.org/1999/xhtml">
		        <head>
		        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		        <title> Enquiry</title>
		        </head>
		        <html>
		        <body>
		        <table width="100%" border="1" cellpadding="5" style="padding:10px; border:0px solid #eaeaea;">
		        <tr style="font-size:16px; color:#000;">
		        <td width="50%" height="40" class="image"><strong>User Specification</strong></td>
		        <td width="50%"><strong>Value</strong></td>
		        </tr>
		        <tr>
		        <td width="50%" height="43" align="left" valign="middle">Name</td>
		        <td width="50%" height="43" align="left" valign="middle">'.$name.'</td>
		        </tr>
		        <tr>
		        <td width="50%" height="43" align="left" valign="middle">Email</td>
		        <td width="50%" height="43" align="left" valign="middle">'.$email.'</td>
		        </tr>
		        <tr>
		        <td width="50%" height="43" align="left" valign="middle">Phone</td>
		        <td width="50%" height="43" align="left" valign="middle">'.$message.'</td>
		        </tr>
		        </table>
		        </body>
		        </html>
		        ';
		        mail($to, $subject, $message, $headers);
		        $messagetouser  = '
		        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		        <html xmlns="http://www.w3.org/1999/xhtml">
		        <head>
		        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		        <title> Automated Reply</title>
		        </head>
		        <html>
		        <body>
		        <p>Hello</p>
		        <br />
		        Your response has been submitted to concerned authority. Your concern will be taken care of within 24 hours. 

		        Thank you for writing to us. 

		        Sincerely,
		        Team ARTINCODES
		        </body>
		        </html>
		        ';
		        mail($email, $subject, $message, $headers);
				}
			}

			function test_input($data)
			{
				$data= trim($data);
				$data= stripslashes($data);
				$data= htmlspecialchars($data);
				return $data;	
			}
?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>ARTINCODES | The art of programming</title>
		<meta name="description" content="ARTINCODES is a digital agency, providing services on cloud and mobile platforms">
		<meta name="keywords" content="ART, CODING, DESIGN, html, websites, mobile-applications, miniera, android">
		<meta name="Tony Tom" content="artincodes.com">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.png">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.png" alt="Worthy"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="#banner">ARTINCODES</a></div>
								<div class="site-slogan">Building Art in Technology</div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="#banner">Home</a></li>
												<li><a href="#about">About</a></li>
												<li><a href="#services">Services</a></li>
												<li><a href="#portfolio">Portfolio</a></li>
												<li><a href="#contact">Contact</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
							<h1 class="text-center">We <span>Are</span></h1>
							<p class="lead text-center">Technopreneurs swimming against the flow with a deep mission and vision of success, chasing dreams and living with an aim to make our world more better than we are.</p>
							<p class="lead text-center">We built <a href="http://www.getminiera.com" target="_blank" style="text-decoration:none;font-weight:bold;">MINIERA</a>, have you tried yet</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">About <span>Us</span></h1>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-12 center-text space-bottom">
								<p>Technoprenerus since college days. ARTINCODES is the fruit of our vision to serve the society from what we're learning in this journey together. We live with a mission to 
									bring the world to a better exposed on, to technology and users up to their best experience through our products. </p>
								<br />
								<p>We live to be the change that is happening, being an entreprenur giving back to the society, what we acquire through renumerations. Taping the learning curve of the outter world 
									through what we possess.</p>
							</div>
							<div class="space-bottom"></div>
							<div class="col-md-6 center-text" >
								<img src="images/section-image-2.png" alt="">
								<div class="col-md-12 center-text space-bottom">
								<p><br />Jayadeep S<br />Co-founder, CEO</p>
								<a href="https://www.facebook.com/sjaideep" target="_blank"><i class="fa fa-facebook pad-left"></i></a>
								<a href="https://twitter.com/thisisjayadeep" target="_blank"><i class="fa fa-twitter pad-left"></i></a>
								<a href="https://in.linkedin.com/in/jayadeeps" target="_blank"><i class="fa fa-linkedin pad-left"></i></a>
								<a href="https://angel.co/jayadeep-s-1" target="_blank"><i class="fa fa-angellist pad-left"></i></a>
								</div>
							</div>
							<div class="col-md-6" center-text>
								<img src="images/section-image-1.png" alt="">
								<div class="col-md-12 center-text space-bottom">
								<p><br />Tony Tom<br />Co-founder, COO</p>
								<a href="https://www.facebook.com/Tony161293" target="_blank"><i class="fa fa-facebook pad-left"></i></a>
								<a href="https://twitter.com/tony161293" target="_blank"><i class="fa fa-twitter pad-left"></i></a>
								<a href="https://in.linkedin.com/in/tonytom" target="_blank"><i class="fa fa-linkedin pad-left"></i></a>
								<a href="https://angel.co/tony161293" target="_blank"><i class="fa fa-angellist pad-left"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section translucent-bg blue">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="services"  class="text-center title f-color">Services worth every single penny you spend.</h1>
				<div class="space"></div>
				<div class="space"></div>
				<div class="row">
					<div class="col-sm-6">
						<div class="media">
							<div class="media-body text-right">
								<h4 class="media-heading f-color">Web design/development/CMS</h4>
								<p class="f-color">Responsive web designs, dynamic websites hosted on shared servers using agile development strategy. Reliable quotes in the industry.</p>
							</div>
							<div class="media-right">
								<i class="fa fa-code"></i>
							</div>
						</div>
						<div class="space"></div>
						<div class="space"></div>
						<div class="media">
							<div class="media-body text-right">
								<h4 class="media-heading f-color">Mobile app development</h4>
								<p class="f-color">Providing the best and fast android app development with perfection in UI/UX and implementation. With a great experience in dealing
									with international clients, we give best in industry with reliable pricing.</p>
							</div>
							<div class="media-right">
								<i class="fa fa-mobile-phone"></i>
							</div>
						</div>
					</div>
					<div class="space visible-xs"></div>
					<div class="col-sm-6">
						<div class="media">
							<div class="media-left">
								<i class="fa fa-cloud"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading f-color">Cloud application development/SaaS</h4>
								<p class="f-color">Extra secure and fast cloud applicatoin development using Django-Python framework and REST model APIs with high level perfomance. </p>
							</div>
						</div>
						<div class="space"></div>
						<div class="space"></div>
						<div class="media">
							<div class="media-left">
								<i class="fa fa-paint-brush"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading f-color">UI/UX design</h4>
								<p class="f-color">With the enhanced result of research in UI/UX for the last year, our designs has been rolled out to the clients as the best. We provide 
									the touch of art in our designs. And engagin the user level. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
				<h1 class="text-center title" id="portfolio">Our <span>Works</span></h1>
				<div class="separator"></div>
				<p class="lead text-center">Take a look at some of our important works.</p>
				<br>			
				<div class="row object-non-visible" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- portfolio items start -->
						<div class="isotope-container row grid-space-20">
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-1.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-1">
											<i class="fa fa-search-plus"></i>
											<span>Web Development</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">Online consultation portal</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-1-label">Consultation portal</h4>
											</div>
											<div class="modal-body">
												<h3>Project Description</h3>
												<div class="row">
													<div class="col-md-6">
														<p>A website developed exclusively for the clients of an ayurvedic hostpital. This works as a portal between the consulting doctor and patients. The patients are able to give information about their difficulties, and pay the consultation fee online. The doctor will be replying according to the reports he receive. Patients are able to attach additional inormations along with the description of their problem. </p>
														<p>Once registered the patients are able to consult up to 5 times, after the limit patients are prompted to pay again for the consultation. The payment gateway used is PayuMoney, integration is simple and secure. Ensuring the clients, best service. </p>
														<p>For live project <a href="http://sreeparthasarathyayurveda.com/">click here</a></p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-1.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-2.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-2">
											<i class="fa fa-search-plus"></i>
											<span>CMS/WordPress</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">E-Commerce website</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-2-label">E-Commerce website for selling homecare products</h4>
											</div>
											<div class="modal-body">
												<h3>Project Description</h3>
												<div class="row">
													<div class="col-md-6">
														<p>A usual e-commerce implementation using CMS tool WordPress. The website allows the users to register in the website to purchase the homecare products in wholesale from the dealer. The website provides a detailed catalog for the items available with remaining stock count in the inventory. Different images and attributes are also made available in the catalog provided. Once the user registers for the product, the dealer will be receiving an emaail saying the specifications. </p>
														<p>The website is implemented purely using CMS, all the cusomisations are done using the regular codex of WordPress. Several plugins are also used to implement some features in the website.</p>
														<p>For live project <a href="http://www.homecarenovelties.com/">click here</a></p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-2.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-3.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-3">
											<i class="fa fa-search-plus"></i>
											<span>Web Design/Development</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Dynamic website</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-3-label">Dynamic website with admin automation</h4>
											</div>
											<div class="modal-body">
												<h3>Project Description</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Dynamic website build for a kindergarten based in Dubai, with complete automation for admin to upload gallery pictures, testimonials and rules and regulatios update. The dynamicity is built using PHP to provide shared server uploading facility. Also language switchin facility is enabled. The website was built to be user friendly and in harmony with kids envrionment. Javascript and PHP are major things used for the dynamic side. The website is bootstrapped and Reponsive as well. </p>
														<p>Dealt completely with international client and the contact was through mail. The client was happy about the work, and still maintaining an updated website.</p>
														<p>For live project <a href="http://kwclc.org/">click here</a></p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-3.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-4.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-4">
											<i class="fa fa-search-plus"></i>
											<span>Site Building</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">Admin automation</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-4-label">Admin automation for KIMSAUDI</h4>
											</div>
											<div class="modal-body">
												<h3>Project Description</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Kimsaudi is an international moving company. The site was built completely responsive and attractive, keeping up to the international recognition of the company. The website allows admin to receive the automated emails from the contact page. Also allows the admin to update the testimonials in the home page as well as testimonial page. Image upload is also arranged as per the requirment.</p>
														<p>The website is completely built with HTML, CSS, JavaScript and PHP. Automation and the dyanamic side is dealt by PHP. SQL database is also used, and hosted on a shared server. </p>
														<p>For live project <a href="http://kimsaudi.com/">click here</a></p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-4.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-5.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-5">
											<i class="fa fa-search-plus"></i>
											<span>Responsive Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-5">Product Website</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-5-label">Product Website for Android Launcher MINIERA</h4>
											</div>
											<div class="modal-body">
												<h3>Project Description</h3>
												<div class="row">
													<div class="col-md-6">
														<p>This website is built for the product, MINIERA, android launcher. Built completely reponsive and mobile friendly. Designed to perfection. Bootstrap is used for responsive design.</p>
														<p>For live project <a href="http://getminiera.com/">click here</a></p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-5.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-6.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-6">
											<i class="fa fa-search-plus"></i>
											<span>Android app development</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-6">Perpetual Diary - application</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-6-label">Android applicatoin - perpetual diary</h4>
											</div>
											<div class="modal-body">
												<h3>Project Description</h3>
												<div class="row">
													<div class="col-md-6">
														<p>An android application to store day to day activites and retreive them according to the need. A powerful contextual event organization and search is the speciality of this application. Developed exclusively for an italian client. </p>
														<p>The project is not live yet. Still under development. </p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-6.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-7.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-7">
											<i class="fa fa-search-plus"></i>
											<span>Branding/Icon Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-7">Icon for QUEUE IN APP</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-7" tabindex="-1" role="dialog" aria-labelledby="project-7-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-7-label">Icon for QUEUE IN APP</h4>
											</div>
											<div class="modal-body">
												<h3>Project Description</h3>
												<div class="row">
													<div class="col-md-6">
														<p>This icon is designed exclusively for queue in application. An android application that allows to post the status queues to facebook. </p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-7.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-8.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-8">
											<i class="fa fa-search-plus"></i>
											<span>Logo design/Branding</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-8">LIGHT FINGER Studio</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-8" tabindex="-1" role="dialog" aria-labelledby="project-8-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-8-label">Logo for LIGHT FINGER Studio</h4>
											</div>
											<div class="modal-body">
												<h3>Project Description</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Logo was designed exclusively for Light finger studio which is a digital studio based in New Delhi. Was designed using PHOTOSHOP. </p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-8.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-9.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-9">
											<i class="fa fa-search-plus"></i>
											<span>UI/UX design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-9">MINIERA CONCEPTUAL</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-9" tabindex="-1" role="dialog" aria-labelledby="project-9-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-9-label">Conceptual design for MINIERA Launcher</h4>
											</div>
											<div class="modal-body">
												<h3>Project Description</h3>
												<div class="row">
													<div class="col-md-6">
														<p>This design was created to deliver teh concept to the early stage developers and programmers. The UI/UX was done by specific consideration to the homescreen users of android. </p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-9.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-10.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-10">
											<i class="fa fa-search-plus"></i>
											<span>UI/UX Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-10">Click Food</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-10" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-10-label">UI/UX design for click food</h4>
											</div>
											<div class="modal-body">
												<h3>Project Description</h3>
												<div class="row">
													<div class="col-md-6">
														<p>User interface designed for a food delivery app. Also the website model was designed for the same, to keep the rhythm of the design. </p>
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-10.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>




						</div>
						<!-- portfolio items end -->

						<!-- isotope filters start -->
<!-- 						<div class="filters text-center">
							<div class="space"></div>
							<ul class="nav nav-pills">
								<li class="dwld"><a href="#">Download Portfolio</a></li>
							</ul>
						</div> -->
						<!-- isotope filters end -->
					
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- Section start -->
		<div class="default-bg space">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 ">
						<h1 class="text-center f-reduce" >Our clients are happy to work with us, so will you !</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

			<!-- .footer start -->
			<!-- ================ -->
			<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="contact">Contact <span>Us</span></h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								<p class="large">If you have any queries regarding our services, please drop us a mail at <a href="mailto:contact@artincodes.com">contact@artincodes.com</a>, or 
									fill this form with your message. We're always happy to hear from you. </p> 
									<br />
								<p class="large">If you want a quote for a project, please specify so in your message. We'll get back to you. </p>
								<ul class="list-icons">
									<li><i class="fa fa-map-marker pr-10"></i> Valloor Road, Champakkara, Cochin - 38</li>
									<li><i class="fa fa-phone pr-10"></i> +91 949 553 2248, +91 960 541 1679</li>
									<li><i class="fa fa-envelope-o pr-10"></i> <a href="mailto:contact@artincodes.com">contact@artincodes.com</a></li>
								</ul>
								<ul class="social-links">
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
									<li class="angellist"><a target="_blank" href="http://www.angel.co"><i class="fa fa-angellist"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="footer-content">
								<form role="form" id="footer-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
									<div class="form-group has-feedback">
										<label class="sr-only" for="name">Name</label>
										<input type="text" class="form-control" id="name2 placeholder="Name" name="name" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email">Email address</label>
										<input type="email" class="form-control" id="email2" placeholder="Enter email"  name="email" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="message">Message</label>
										<textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<input type="submit" value="Send" class="btn btn-default">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .footer end -->

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2015 Website By ARTINCODES</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
