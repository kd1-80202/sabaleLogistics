
<!DOCTYPE html>
<html lang="en-US">



<!-- Mirrored from etorisoft.com/php/packpro/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2025 11:11:29 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>PackPro - Transportation & Logistics php5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all">
	<!-- font-all-min CSS -->
	<link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<!-- <link rel="stylesheet" href="assets/css/font-awesome-pro.css" type="text/css" media="all"> -->
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="assets/css/bootstrap-icons.css" type="text/css" media="all">
	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="assets/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
	<!-- Dropdown CSS -->
	<link rel="stylesheet" href="assets/css/dropdown.css" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all">
	<!-- modernizr js -->
	<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	
   
    <link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    
	<style>
        /* Ensuring paragraphs are visible */
        p {
            display: block !important;
            visibility: visible !important;
            color: black !important;
            font-size: 16px;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f6; /* Adjust based on logo colors */
        }

        /* Header Styling */
        h2 {
            font-weight: 600;
            color: #2c3e50;
        }

        /* Office Names in One Line */
        .office-names {
            display: flex;
            justify-content: center;
            gap: 30px;
            font-size: 20px;
            font-weight: bold;
            padding: 10px 0;
            background-color: #003366; /* Adjust color based on the logo */
            color: white;
            text-align: center;
        }

        /* Address Cards */
        .address-card {
            background: linear-gradient(135deg, #ffffff, #c4bdbd54);
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            height: 100%;
            transition: transform 0.3s ease-in-out;
            text-align: center;
        }

        .address-card:hover {
            transform: scale(1.03);
        }

        .address-card h5 {
            font-size: 22px;
            font-weight: 600;
            color: #eb3d3f;
        }

		.address-card ul {
        list-style-type: disc; /* Standard bullet points */
        padding-left: 20px; /* Indentation for bullets */
    }

    .address-card ul li {
        font-size: 18px; /* Increase text size */
        line-height: 1.8; /* Improve spacing */
        font-weight: bold; /* Make it stand out */
		color: gray;
    }

    .address-card ul li::marker {
        font-size: 24px; /* Increase bullet size */
        color: #eb3d3f; /* Change bullet color */
    }

        /* Map Container */
        .map-container {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        }
		.presence-section p {
        font-size: 20px; /* Slightly reduced font size */
        font-weight: normal; /* No bold */
        text-align: center;
        line-height: 1.8; /* Improved readability */
    }

    .presence-section strong {
        font-size: 22px; /* Adjusted bullet size */
        color: #000; /* Black bullet color */
    }
		
    </style>
</head>

<?php include 'header.php'; ?>
<body>
	<!-- loder -->
	<!-- <div class="loader-wrapper">
		<div class="loader-wrap">
			<div class="preloader">
				<div id="packpro-preloader" class="packpro-preloader">
					<div class="layer layer-one"><span class="overlay"></span></div>
					<div class="animation-preloader">
						<div class="spinner"></div>
						<div class="txt-loading">
							<span data-text-preloader="P" class="letters-loading">
								P
							</span>
							<span data-text-preloader="A" class="letters-loading">
								A
							</span>
							<span data-text-preloader="C" class="letters-loading">
								C
							</span>
							<span data-text-preloader="K" class="letters-loading">
								K
							</span>
							<span data-text-preloader="P" class="letters-loading">
								P
							</span>
							<span data-text-preloader="R" class="letters-loading">
								R
							</span>
							<span data-text-preloader="O" class="letters-loading">
								O
							</span>
						</div>
					</div>  
				</div>
			</div>
		</div>
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>  -->



	<!--==================================================-->
	<!-- Start Header Area -->
	<!--==================================================-->
	
	<!--==================================================-->
	<!-- End Header Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Breatcome Area -->
	<!--==================================================-->
	<div class="breatcome-area d-flex align-items-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12 col-md-12">
					<div class="breatcome-content">
						<div class="breatcome-title">
							<h1>Contact</h1>
						</div>
						<div class="bratcome-text">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>Contact</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- --==================================================
	------- End Breatcome Area 
	  ====================================================
	 ===============================================
	-----Start of map area----------
	=============================================   -->
	<div class="container py-5">
    <h2 class="text-center">📌 Our Contact Addresses</h2>
    <p class="text-center lead">Get in touch with us at our various locations across India.</p>

    <div class="row mt-4">
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="address-card">
                <h5>Satara Office</h5>
                <ul>
                    <li>Plot no. A-2/2, Old MIDC, Satara 415004</li>
                    <li>OS 5/5 Siddhivinayak Chowk, Addl. MIDC, Satara 415004</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="address-card">
                <h5>Pune Office</h5>
                <ul>
                    <li>Sr. No.43 Chakan, Pune 412105</li>
                    <li>Gat.No.399 Lonikand, Pune 412216</li>
                    <li>Plot no.57, PCNTDA, Bhosari 411026</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="address-card">
                <h5>Kolhapur Office</h5>
                <ul>
                    <li>Plot no. B-69, Shiroli MIDC, 416122</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="address-card">
                <h5>Shirwal Office</h5>
                <ul>
                    <li>Plot no. 326, Shirwal-412800</li>
                </ul>
            </div>
        </div>
    </div>

    <h2 class="mt-5 text-center">🌍 Our Presence Across India</h2>
<div class="row">
    <div class="col-12">
        <div class="address-card presence-section">
            <p class="text-center">
                Maharashtra <strong>•</strong> Goa <strong>•</strong> Kerala <strong>•</strong> Uttar Pradesh <strong>•</strong> Rajasthan <strong>•</strong> Tamil Nadu <strong>•</strong> Punjab <strong>•</strong> Gujarat <strong>•</strong> Karnataka <strong>•</strong> Andhra Pradesh <strong>•</strong> Madhya Pradesh <strong>•</strong> Chandigarh <strong>•</strong> Bihar <strong>•</strong> Telangana <strong>•</strong> Haryana <strong>•</strong> Uttarakhand <strong>•</strong> West Bengal <strong>•</strong> Nagaland <strong>•</strong> Odisha <strong>•</strong> Jharkhand <strong>•</strong> Tripura <strong>•</strong> Himachal Pradesh <strong>•</strong> Chhattisgarh <strong>•</strong> Sikkim <strong>•</strong> Meghalaya <strong>•</strong> Arunachal Pradesh <strong>•</strong> Manipur <strong>•</strong> Lakshadweep <strong>•</strong> Jammu <strong>•</strong> Puducherry <strong>•</strong> Delhi.
            </p>
        </div>
    </div>
</div>

    <!-- Map Section -->
    <div class="map-section mt-5">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="map-container border rounded shadow-sm overflow-hidden">
                        <iframe class="w-100" height="400" frameborder="0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51160.14867520469!2d-119.50191117776947!3d36.734344738028945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8094fe53da3abc89%3A0x55e26146db33ac90!2sMinkler%2C%20CA%2093657%2C%20USA!5e0!3m2!1sen!2sbd!4v1732424916898!5m2!1sen!2sbd"
                            allowfullscreen loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!--==================================================-->
	<!-- End Map Area -->
	<!--==================================================-->

	
	<!--==================================================-->
	<!-- Start Sidebar Area -->
	<!--==================================================-->
	<div class="sidebar-group info-group">
		<div class="sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						<i class="bi bi-x-lg"></i>
					</a>
				</div>
				<div class="sidebar-textwidget">
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="sidebar-logo">
								<a href="index.php"><img src="assets/images/logo1.png" alt="logo"></a>
							</div>
							<div class="sidebar-widget-menu">
								
									<li class="dropdown"><a href="about.php" data-toggle="dropdown">About</a></li>
									<li class="dropdown"><a href="#" data-toggle="dropdown">Service <i class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="service.php">Service</a></li>
											<li><a href="service-details.php">Service Details</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#" data-toggle="dropdown">Project <i class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="projects-gallery.php">Project Gellery</a></li>
											<li><a href="projects-details.php">Project Details</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#" data-toggle="dropdown">Blog <i class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="blog.php">Blog Standard</a></li>
											<li><a href="blog-details.php">Blog Details</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#" data-toggle="dropdown">Pages <i class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="about.php">About</a></li>
											<li><a href="service.php">Service</a></li>
											<li><a href="projects-gallery.php">Project</a></li>
											<li><a href="tracking.php">Tracking</a></li>
											<li><a href="team.php">Team</a></li>
											<li><a href="blog.php">Blog</a></li>
											<li><a href="faq.php">Faq</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="contact.php" data-toggle="dropdown">Contacts</a></li>
								</ul>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-one">
									<li><i class="bi bi-geo-alt-fill"></i>6391 Elgin St. Celina, Delaware</li>
									<li><i class="bi bi-telephone-fill"></i>(+001) 123-456-789</li>
									<li><i class="bi bi-envelope"></i> info@example.com</li>
									<li><i class="bi bi-alarm-fill"></i> Week Days: 08.00 to 10.00
									</li>
								</ul>
							</div>
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
								<li class="twitter"><a href="#" class="fab fa-instagram"></a></li>
								<li class="linkedin"><a href="#" class="fab fa-twitter"></a></li>
								<li class="instagram"><a href="#" class="fab fa-pinterest-p"></a></li>
								<li class="youtube"><a href="#" class="fab fa-linkedin-in"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Sidebar Area -->
	<!--==================================================-->


	<!--==================================================-->
	<!-- Start Footer Area -->
	<!--==================================================-->
	
	<!--==================================================-->
	<!-- End Footer Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start scrollup section Area -->
	<!--==================================================-->
	<!-- scrollup section -->
	<div class="prgoress_scrollup">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>

	<!--==================================================-->
	<!-- End scrollup section Area -->
	<!--==================================================-->
    <?php include 'footer.php'; ?>
	
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<!-- jquery js -->
	<script src="assets/js/vendor/jquery-3.6.2.min.js"></script>

	<script src="assets/js/popper.min.js"></script>

	<!-- bootstrap js -->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- carousel js -->
	<script src="assets/js/owl.carousel.min.js"></script>

	<!-- counterup js -->
	<script src="assets/js/jquery.counterup.min.js"></script>

	<!-- waypoints js -->
	<script src="assets/js/waypoints.min.js"></script>

	<!-- wow js -->
	<script src="assets/js/wow.min.js"></script>

	<!-- imagesloaded js -->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>

	<!-- venobox js -->
	<script src="venobox/venobox.js"></script>

	<!--  animated-text js -->
	<script src="assets/js/animated-text.js"></script>

	<!-- venobox min js -->
	<script src="venobox/venobox.min.js"></script>

	<!-- isotope js -->
	<script src="assets/js/isotope.pkgd.min.js"></script>

	<!-- jquery meanmenu js -->
	<script src="assets/js/jquery.meanmenu.js"></script>

	<!-- jquery scrollup js -->
	<script src="assets/js/jquery.scrollUp.js"></script>

	<!-- Slick Slider -->
	<script src="assets/slick/slick.min.js"></script>

	<script src="assets/js/mixitup.min.js"></script>

	<!-- theme js -->
	<script src="assets/js/theme.js"></script>

	<!-- scroll js -->
	<script src="assets/js/script.js"></script>

</body>


<!-- Mirrored from etorisoft.com/php/packpro/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2025 11:11:29 GMT -->
</php>