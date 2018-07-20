<?php
// Mail processing script 
$errors = array();
$missing = array();
// check if the form has been submitted
if(isset($_POST['submit'])) {
	$to = 'selemani@selianordev.co.za'; 
	$subject = 'Feedback Selemani Online'; 
	
	$expected = array('name', 'email', 'telephone', 'comment');
	$required = array('name', 'email', 'telephone', 'comment');
	
	//create additional headers
	$headers = "From: Selemani Online<selemani@selianordev.co.za>\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	require('./includes/processmail.php');
	if ($mailSent) {
		header("Location: http://www.selianordev.co.za/thank-you.php");
		exit;
          //$success = "Your message has been successfully sent. I'll get back to you as soon as possible!";
		
	}	
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<!--Global site tag(gtag.js)- Google Analytics-->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112914824-1"></script>
	<script>
		window.dataLayer=window.dataLayer||[];
		function gtag(){dataLayer.pish(arguments);}
		gtag('js' new Date());
		gtag('config', 'UA-112914824-1');
	</script>
	<!--end of google analytics--->
	
	<!--- google tag manger-->
		<script>
			(function(w,d,s,l,i){w[l]||[];w[l].push({'gtm.start':new Date().getTime(), event: 'gtm.js}'); var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s), dl=l!= 'dataLayer '?' &l=' +l: ' ' ; j.async=true; j.src='https://www.googletagmanager.com/gtm.js?id= 'i+dl;f.parentNode.insertBefore(j,f);
			})(window,document, 'script','dataLayer0','GTM-5F8BQMQ');
		</script>
		
	<!--end of tag manger-->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content ="IE=edge" />
	<meta charset='utf-8' />
	<meta name="description" content="selemani portfolio, web development IT facilitator, Computer training Apps design" />
	<meta name="keywords" content="Web design, graphic design, web development, wordpress site development, computer training, IT training, mobile IT training, .Net web development, ASP.NET, ASP.NET MVC, ASP.NET Web API, full-stack .net development, front-end development, back-end development, web application development, software engineering, Single Page Application" />
	<meta name="keywords"> 
	<link rel="shortcut icon" href="images/favicon.png">
	<title> SELIANORDEV | PORTFOLIO</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css" />

	<!--[if lt IE9]>
	    <script src="js/respond.min.js"></script>
	    <script src="js/html5shiv.js"></script>
    <![endif] -->
	
	
	<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '165197227447834');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=165197227447834&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>
<body id="home" data-spy="scroll" data-target="#scrollSpy" data-offset="85">

	<!--google tag manager-->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5F8BQMQ" height="0" width="0" style="display:none; visibility:hidden;"</iframe></noscript>
	<!--end of google tag manager-->
	<!-- Page header - company logo and main navigation menu -->
	<div class="navbar navbar-default navbar-fixed-top" id="scrollSpy">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#home" class="navbar-brand tooltips" title=""><span>SELIANOR</span><span style="color:#006699;">DEV</span></a>
			</div>
			<div class="collapse navbar-collapse bs-js-navbar-scrollspy" id="mainNav">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#home"> Home</a>
					</li>
					<li>
						<a href="#about">About Me </a>
					</li>
					<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
                        Our Services <i class="fa fa-angle-down" style="font-size:1em;"></i>
                    </a>
                    <ul class="dropdown-menu">
                            <li>
                                <a href="#service">
                                    Web Development
                                </a>
                            </li>
							<div class="divider"></div>
                            <li>
                                <a href="#">
                                    Digital Marketing
                                </a>
                            </li>
							<div class="divider"></div>
                            <li>
                                <a href="#">
                                    Logo
                                </a>
                            </li>
							<div class="divider"></div>
                            <li>
                                <a href="#">
                                    Others
                                </a>
                            </li>
                    </ul>                
                </li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contacts">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div><!-- end page header -->
<!-- Home Section -->
<div id="home-banner">
<div class="dark-overlay">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<h1 class="text-center"><strong><i><span style="text-decoration: overline;">TIGER</span> <span style="color:#fff; text-decoration: underline;">SOFT</span></i></strong></h1>
				<div class="page-header text-center">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 intro">
							<p>Whether you are looking to create a website,  database systems, designing, testing, and implementing new software application or the acquisition of third party developed software, Selianordev is the platform to get all the solution to your problems.Should you have any concerns please feel free to contact us at:<strong> <span style="color:#006699;" class="glyphicon glyphicon-earphone"></span> +27 (0) 796 855 739</strong> or <span style="color:#006699;"class="glyphicon glyphicon-envelope"></span>  us  <strong>selemani@selianordev.co.za</strong></p>
							<div class="call_to_action text-center">
							<a href="#contacts" role="button" class="btn btn-primary btn-lg"><div> GET A QUOTATION <span class="raquo">&raquo;</span></div></a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div><!-- end home section -->

	<!-- A propos de nous -->
	<div id="about">
		<div class="container">
			<div class="row">
				<!--<div class="page-header text-center">
					
				</div>-->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<figure style="margin-top:50px;" id="me">
						<a href="https://za.linkedin.com/in/lusukama-selestin-selemani-5363a1136" target="_blank" title="LUSUKAMA SELEMANI"><img src="images/about-me/picture.png" alt="Picture of Selemani Lusukama" class="img-responsive" /></a>
					</figure>
					
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<h1>About Selemani L.</h1>
					<p class="">I am a passionate web developer and programmer, who specialize in creating dynamic and complex web pages, E-commerce website using the latest web technologies. I have been in the field for nearly  three years, and have been loving every minute of it. I am a proactive thinker and self-motivated workaholic. I have earned a three years national Diploma in system development at <a href="http:www.rgit.co.za" target="_blank" style="color:#006699; text-decoration: none;">Richfield Graduate Institute of Technology</a> known previously PC training with major subject in Programming and Business management. Google certified in digital skills for Africa and Cisco certified in IT Essentials. 
I am proficient in HTML5, CSS, CSS3, Bootstrap, JavaScript, JQuery/UI,  Microsoft Office (MS Access, Excel, and PowerPoint etc.) and I also have  knowledge of several content management systems (WordPress, Joomla, Dupra etc.).  I also have knowledge of system development, PHP/MySQL,   ASP.NET MVC C#, etc.
I have experience with responsive web development and ability to produce complex web pages. I also have experience in custom WordPress theme and plugin.

</p>
					<a href="https://za.linkedin.com/in/lusukama-selestin-selemani-5363a1136" target="_blank" class="button">
						<div>Read my full profile <span class="raquo">&raquo;</span></div>
					</a>
				</div>	
				
				
			</div><!--.row -->
			
		</div><!--.container -->
	</div><!--#about -->

<!-- nos services -->
<div id="service">
	<div class="container">
		<div class="row">
			<div class="page-header text-center">
			<h1>What <span style="color:#006699;">I Do</span></h1>
			</div>
			<div class="col-md-4 col-lg-4">
				<div>
					<figure>
						<img src="images/services/digital-service.png" class="img-responsive img-thumbnail">
						<figcaption>
                        <h2> Data driven marketing</h2>
                        <p>A cohesive brand can be an incredibly potent tool in business, regardless of your product. </p>
						</figcaption>
					</figure>
					<div class="featuredService">
						<div class="page-header text-center">
						<h2>Digital Marketing</h2>
					</div>
					<div class="readMore">
					<a href="#" class="read">Read More</a>
					</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-lg-4">
				<div>
					<figure>
						<img src="images/services/network-service.png" class="img-responsive img-thumbnail">
						<figcaption>
                        <h2>Desktop  and  laptop  maintenance </h2> 
						<p>software and hardware Installation IT maintenance, Computer security 
</p>
						</figcaption>
					</figure>
					<div class="featuredService">
						<div class="page-header text-center">
						<h2>Hardware & Software</h2>
					</div>
					<div class="readMore">
					<a href="#" class="read">Read More</a>
					</div>
					</div>
				</div>
			</div>
			
			
			<div class="col-md-4 col-lg-4">
				<div>
					<figure>
						<img src="images/services/web-service.png" class="img-responsive img-thumbnail">
						<figcaption>
                        
							<h2>Simplifying web application </h2>
							<p>We build something that can grow and evolve with your business by putting customer experience first.</p>
						</figcaption>
					</figure>
					<div class="featuredService">
						<div class="page-header text-center">
						<h2>Web Development</h2>
					</div>
					<div class="readMore">
					<a href="#" class="read">Read More</a>
					</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<!--porforlio-->
<div id="portfolio">
      <div class="container">
        <div class="row">
            <div class="page-header text-center">
			<h1>PORT<span style="color:#006699;">FOLIO</span></h1>
			<h4>Check out some of the links bellow to see what we have been up to lately</h4>
			</div>
             <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="work" id="patriotic">
                  <figure class="transparent-border">
                     <a href="http://www.phealth-care.co.za" target="_blank" title=" welcome to PHealth Care"><img src="images/portfolio/ph-home1.png" class="img-responsive img-thumbnail" alt="patriotic health care"></a>
                  </figure>
                </div>   
             </div> 
             <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="work" id="selianord">
                  <figure class="transparent-border">
                    <a href="https://za.linkedin.com/in/lusukama-selestin-selemani-5363a1136" target="_blank" title="LSS"><img src="images/portfolio/lss.png" class="img-responsive img-thumbnail" alt=" LSS"></a>
					
                  </figure>
                </div>
             </div>
          </div>
      </div>
	  
    </div>
		 	
<!-- contacts -->
<div id="contacts">
	<div class="container">
		<div class="row">
		<div class="overlay">
			<div class="page-header text-center">
				<h1>CONTACT US</h1>
				<hr class="star-primary">
			</div>
			<div class="col-md-8 col-md-offset-2">
				<div class="errorMessage">
                    	<?php if($_POST && $suspect || ($_POST && isset($errors['mailfail']))) {?>
                 			<p class="warning">Sorry, your message could not be sent. Please try again later!</p>
            			 <?php } elseif ($missing || $errors) { ?>
				 			<p><strong><span class="warning">ERROR:</span></strong> Please fix the below item(s) in red!</p>
						<?php } ?>
                    </div>
				<form name="sentMessage" id="contactForm" method="post" action="index.php">
                        
                            <div class="form-group">
                                <label>Name <span class="warning">*</span> <?php if($missing && in_array('name', $missing)) {?>
                  					<span class="warning">Please fill in your name!</span>
                  				<?php }?></label>
                                <input type="text" class="form-control" placeholder="Type your name here" id="name"  required name="name" <?php if($missing || $errors) {
								echo 'value="'.htmlentities($name, ENT_COMPAT, 'UTF-8') . '"'; }?>>
                            </div>
                        
                        
                            <div class="form-group">
                                <label>Email Address <span class="warning">*</span> <?php if($missing && in_array('email', $missing)) {?>
                        			<span class="requiredField">Please enter your email address!</span>
                    			<?php } elseif (isset($errors['email'])) { ?>
                        			<span class="requiredField">Invalid Email Address!</span>
                    			<?php } ?></label>
                                <input type="email" class="form-control" placeholder="someone@example.com" id="email" required name="email" <?php if($missing || $errors) {
								echo 'value="' .htmlentities($email, ENT_COMPAT, 'UTF-8'). '"';}?>>
                            </div>
                       
                            <div class="form-group">
                                <label>Phone Number <span class="warning">*</span><?php if($missing && in_array('telephone', $missing)) {?><span class="warning">Your contact number is mandatory!</span>
                  				<?php }?></label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required  name="telephone" pattern="^([0])[0-9]{9}$" <?php if($missing || $errors) {
								echo 'value="' .htmlentities($telephone, ENT_COMPAT, 'UTF-8'). '"';}?>>
                            </div>
                        
                            <div class="form-group">
                                <label>Message <span class="warning">*</span> <?php if($missing && in_array('comment', $missing)) {?>
                     				<span class="warning">Your message is mandatory!</span>
                     			<?php } ?></label>
                                <textarea rows="5" class="form-control" placeholder="Type your message here" id="message" required name="comment"><?php if($missing || $errors) {
                                	echo htmlentities($comment, ENT_COMPAT, 'UTF-8'); }?></textarea>
                            </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Send Your Message" />
                            </div>
                        </div>
                    </form>
			</div><!--.col-md-8-->
			</div>
		</div><!--.row-->
	</div><!--.container-->
</div><!-- end contacts -->

<!-- Footer Above -->
<div id="footer-above">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center col-sm-6 col-xs-12">
				<h3>Location</h3>
				<p>44 Abel Road, Berea<br />
				Johannesburg, 405 Northcrest</p>
			</div>
			<div class="col-md-4 text-center col-sm-6 col-xs-12">
				<h3>Connect with Selemani Online</h3>
				<?php require_once './includes/social-media.php';?>
			</div>
			<div class="col-md-4 text-center col-sm-6 col-xs-12">
				<h3>Contact Details</h3>
				<p>Contact Number: (+27) (0) 796855739 <br />
				Email: selemani@selianordev.co.za</p>
			</div>
		</div><!--.row-->
	</div><!--.container-->
</div><!--#footer-above -->
<!-- footer Below -->
<div id="footer-below">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php require_once './includes/template_footer.php';?>
			</div>
		</div><!--.row-->
	</div><!--.container-->
</div><!--#footer-below-->	
<!-- include javascript library -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/mainScript.js"></script>
<script src="js/custom_validation.js"></script>
<script src="js/jquery-prettyPhoto.js"></script>
<!-- Bootstrap Dropdown Hover JS -->
<script src="js/bootstrap-dropdownhover.min.js"></script>

<script>
    $(document).ready(function(){
      $("#, #").hover(function(){
          $(this).addClass("animated").addClass("zoomIn", "1000");
      },
      function(){
        $(this).removeClass("animated").removeClass("zoomIn","1000");
      });
	  
	  /*---hide and show function-*/
    $("#hide").click(function(){
        $("#hobby").hide();
    });
    $("#show").click(function(){
        $("#hobby").show();
    });
	 


	/*-----hide portfolio text-*/
	
	
	
    $("p").click(function(){
    $(this).hide();
	});

	/*---slideup home-banner text--*/
	
	
    });
  </script>

<?php if($_POST && $suspect || ($_POST && isset($errors['mailfail']))) : ?>
	<script>
		$(document).ready(function(){
			$('#name').focus();
		})
	</script>
<?php elseif ($missing || $errors) : ?>
	<script>
		$(document).ready(function(){
			$('#name').focus();
		})
	</script>
<?php endif;?>
</body>
</html>
