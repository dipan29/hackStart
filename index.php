<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HackStart - Official MinD Webs Hackathon</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="css/slicknav.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/default.css" media="screen">
<link rel="icon" type="image" href="images/favicon.png"/>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Dipan Roy">
<meta name="content-type" content="text/html">

<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="">


<style>
	.blur {
		width:100%;
		height:100%;
		position: relative;
		background-image:url('images/silver.png');
		background-size:cover;
		-webkit-filter: blur(20px);
		-moz-filter: blur(20px);
		-ms-filter: blur(20px);
		-o-filter: blur(20px);
		filter: blur(20px);
	}
</style>

</head>
<body>

<header id="header-wrap">

    <div class="navigation-menu">
        <nav class="navbar navbar-default navbar-event">
            <div class="container">
            
            <div class="navbar-header col-md-2">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index"><img src="images/logo1.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
            <li class="active"><a >Home</a></li>
            <li><a href="register">Register</a></li>
            <li><a href="https://www.mindwebs.org/events/techtronista/">Techtronista</a></li>
            <?php if(isset($_SESSION['team_id'])) { ?>
           	<li class=" animated bounceIn"><a href="home">Welcome, <?php echo $_SESSION['team_name'] ; ?></a></li>
            <li><a href="logout">Logout</a>
            <?php } else { ?>
            <li><a href="login">Login</a></li>
            <?php } ?>
            <li><a href="#contact">Contact</a></li>
            
            
            </ul>
            </div>
            </div>
        
        <ul class="wpb-mobile-menu">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="register">Register</a></li>
            <li><a href="http://www.mindwebs.org/events/techtronista/">Techtronista</a></li>
            <?php if(isset($_SESSION['team_id'])) { ?>
           	<li class=" animated bounceIn"><a href="home">Welcome, <?php echo $_SESSION['team_name'] ; ?></a></li>
            <li><a href="logout">Logout</a>
            <?php } else { ?>
            <li><a href="login">Login</a></li>
            <?php } ?>
            <li><a href="#contact">Contact</a></li> 
        </ul>        
        </nav>
    </div>

</header>


<div id="carousel-area">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
    
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img id="s" src="images/bg-1.jpg" alt="">
                <div class="carousel-caption">
                <h2 class="wow fadeInRight" data-wow-delay="300ms">HackStart - Prime Hackathon<br> The Official Hackathon of MW TechTronista 2K19</h2>
                <div class="buttons wow fadeInDown" data-wow-delay="0.2s"><a class="btn btn-lg btn-border" href="register">Registration</a></div>
                <a data-scroll="" href="#sc">
                <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                <span></span>
                </div>
                </a>
                </div>
            </div>
            <div class="item">
            <img id="s" src="images/bg-2.jpg" alt="">
            <div class="carousel-caption">
            <h2 class="wow fadeInUp" data-wow-delay="300ms">Opportunity to showcase<br> your product and get mentorship</h2>
            <div class="buttons">
            <a class="btn btn-lg btn-common wow fadeInLeft" data-wow-delay="300ms" href="../techtronista">Buy Tickets</a>
            <a class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="300ms" href="#details">Know More</a>
            </div>
            <a data-scroll="" href="#sc">
            <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
            <span></span>
            </div>
            </a>
            </div>
            </div>
            <div class="item">
            <img id="s" src="images/bg-3.jpg" alt="">
            <div class="carousel-caption">
            <h2 class="wow fadeInDown" data-wow-delay="300ms">Expert and Love to Speak? <br> Apply as Speaker/Panelist for the Session</h2>
            
                <div class="buttons wow fadeInDown" data-wow-delay="0.2s"><a class="btn btn-lg btn-border" href="mailto:contact@mindwebs.org?Subject=TechTronista%20Panelist%20Request">Mail Us Now</a></div>
            <a data-scroll="" href="#sc">
            <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
            <span></span>
            </div>
            </a>
            </div>
            </div>
        </div>
        
        <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
        	<span class="icon-arrow-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
        	<span class="icon-arrow-right" aria-hidden="true"></span>
        </a>
    </div>
</div>


<section class="countdown-timer section">
    <div class="container">
        <div class="row">
            <div id="sc" class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="text">                
                    <h3>VENUE - TBD<br><br>Expected Prelims - 14 Jan, 2019 </h3><br>
                    <a href="../techtronista/eventRegister" class="btn btn-lg btn-common">Buy Tickets</a>
                    &nbsp;<a href="register" class="btn btn-lg btn-common btn-success">Enroll For HackStart</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.2s">                
                <div class="time-countdown">
                	<div id="clock" class="time-count"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="event" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="tab-block wow fadeInDown" data-wow-delay="0s">
            <div class="icon">
            <i class="icon-location-pin"></i>
            </div>
            <div class="desc">
            <h4>Location</h4>
            <p>To Be Decided</p>
            </div>
            </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="tab-block wow fadeInDown" data-wow-delay="0.2s">
            <div class="icon">
            <i class="icon-calendar"></i>
            </div>
            <div class="desc">
            <h4>Date & Time</h4>
            <p>Expected 14 Jan'19 - 11 AM</p>
            </div>
            </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="tab-block wow fadeInDown" data-wow-delay="0.4s">
            <div class="icon">
            <i class="icon-star"></i>
            </div>
            <div class="desc">
            <h4>Panelists</h4>
            <p>5+ Tech Icons and Professionals</p>
            </div>
            </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="tab-block last-block wow fadeInDown" data-wow-delay="0.6s">
            <div class="icon">
            <i class="icon-wallet"></i>
            </div>
            <div class="desc left">
            <h4>Tickets</h4>
            <p>3000 People</p>
            </div>
            </div>
            </div>
            <div class="col-md-12">
                <div class="content-text">
                    <h3 class="wow fadeInUp" data-wow-delay="0.8s">HackStart Prelims</h3>
                    <p class="wow fadeInUp" data-wow-delay="1s">20+ Teams, competing for top 5 positions who will make into the finals. And the winner team gets mentorship from prominent business/tech icons.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="featured" class="section">
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="section-title wow fadeInUp" data-wow-delay="0s">How to Join</h2>
<p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">The Team Leader and the participants must be registered with the main event. <a href="../techtronista/eventRegister">Click here, if not done yet.</a>
<br>After Payment confirmation of every team member, The Team can Participate in the Prelims. <span style="color:red">Payment is non-refundable & non-transferable.</span></p>
<div class="col-md-4 col-sm-4">
<div class="featured-box wow fadeInLeft" data-wow-delay="0.1s">
<div class="icon">
<i class="icon-energy"></i>
</div>
<div class="featured-content">
<h4>Get Your Tickets</h4>
<p>Every Team Member must register and pay for the Main Event, then can participate. Ticket ID should be kept for ready-reference.</p>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="featured-box wow fadeInLeft" data-wow-delay="0.2s">
<div class="icon">
<i class="icon-people"></i>
</div>
<div class="featured-content">
<h4>Create Your Team</h4>
<p>Team Leader <a href="register">Register Here</a> first. Then Using the password provided via email, <a href="login">Login</a> and add your team members.</p>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="featured-box wow fadeInLeft" data-wow-delay="0.3s">
<div class="icon">
<i class="icon-graph"></i>
</div>
<div class="featured-content">
<h4>Dashboard & Insights</h4>
<p>After Complete Registration, access your questions, track your progress, get online guidance, using the most advanced hackathon portal.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<a name="details"></a>

<section id="schedule" class="section">
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="section-title wow fadeInUp" data-wow-delay="0s">Schedule</h2>
<p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">This will be a hackathon in two stages. Prelims in January and Finals in March. The winning teams gets Mentorships and Internships. Internships for Runners-up also.<br> Partially Online, Partially Offline, the first of its kind, Hackathon, in Kolkata. The Hackathon Details is given below.</p>

<div class="main-board wow fadeInDown" data-wow-delay="0.3s">

<ul class="nav nav-tabs day" role="tablist">
<li role="presentation" class="active"><a href="#day1" aria-controls="day1" role="tab" data-toggle="tab">14 JAN (TBD) <br> <span>PRELIMS</span></a></li>
<li role="presentation"><a href="#day2" aria-controls="day2" role="tab" data-toggle="tab">17 MAR (TBD) <br> <span>FINALS</span> </a></li>
</ul>

<div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="day1">
    <div class="row">
    <div class="col-md-12 board text-center">
    <div class="column-1 col-md-3 col-sm-5">
    <ul class="nav nav-pills event-time-list">
    <li><a>Time Line</a>
    <ul>
    <li class="color-1"><a >T-48 H : Problem Statement</a></li>
    <li class="color-4"><a >T-24 H : Abstract Submission</a></li>
    <li class="color-2"><a >T : 11:00 Hrs</a></li>
    <li class="color-3"><a >T+4 H : Submission</a></li>
    
    </ul>
    </li>
    </ul>
    </div>
    <div class="col-md-4 col-sm-6">
    <div class="member stephen">
    <div class="button">
    <a  class="btn-large bg-1"><img src="images/star.png" alt=""> Problem Statement</a>
    </div>
    <h4>6 Set Of Problems</h4>
    <p>to chose from, will be <strong>uploaded here</strong>, 48 Hrs before the main event.</p>
    </div>
    <div class="member jeson">
    <div class="button">
    <a  class="btn-large bg-2"><img src="images/star.png" alt=""> Abstract Submission</a>
    </div>
    <h4>24 Hrs after Problem Launch</h4>
    <p>Abstract Submission carries 10 Credit Points towards the Final Event in March. Check Points Evaluation <a href="prelims_points.pdf">Here</a></p>
    <p><a href="prelims_rulebook.pdf">Download Entire Rule-Book here</a></p>
    </div>
    </div>
    <div class="col-md-1 col-sm-1">
    <div class="coffee">
    <div class="coffee-icon">
    <img src="images/event.png" alt="">
    </div>
    <p>
    P <br>R <br>E <br>L <br>I <br>M <br>S <br> <br>E <br>V <br>E <br>N <br>T
    </p>
    </div>
    </div>
    <div class="col-md-4 col-sm-12">
    <div class="member jon">
    <div class="button">
    <a  class="btn-large bg-3"><img src="images/star.png" alt=""> Prelims</a>
    </div>
    <h4>HackStar Day 1</h4>
    <p>The team can prepare, Hardware and/or Software Solutions for the Project.</p>
    <p>The teams progress will be monitored and will be questioned by the judges.</p>
    <p>The top five teams will be going to the final round, and will be judged on the basis of <strong>idea, abstract, development, presentation, answers,</strong>  and lot more.<br />
    Team with the Best Idea will recieve mentorships from renowned persons</p>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div role="tabpanel" class="tab-pane" id="day2">
    <div class="row">
    <center><h3>To Be Revealed on 10 Jan, 2019</h3></center>
    <div class="col-md-12 board text-center blur">
    <div class="column-1 col-md-3 col-sm-5">
    <ul class="nav nav-pills event-time-list">
    <li><a >Time</a>
    <ul>
    <li class="color-1"><a >10am - 12pm</a></li>
    <li class="color-2"><a >12pm - 2pm</a></li>
    <li class="color-3"><a >2pm - 3pm</a></li>
    <li class="color-4"><a >3pm - 5pm</a></li>
    </ul>
    </li>
    </ul>
    </div>
    <div class="col-md-4 col-sm-6">
    <div class="member stephen">
    <div class="button">
    <a  class="btn-large bg-1"><img src="images/star.png" alt="">Bushra Ahsani</a>
    </div>
    <h4>Main Topic</h4>
    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
    </div>
    <div class="member jeson">
    <div class="button">
    <a  class="btn-large bg-2"><img src="images/star.png" alt="">John Berry</a>
    </div>
    <h4>Main Topic</h4>
    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
    </div>
    </div>
    <div class="col-md-1 col-sm-1">
    <div class="coffee">
    <div class="coffee-icon">
    <img src="images/event.png" alt="">
    </div>
    <p>
    C <br> O <br> F <br> F <br>E <br>E <br> <br> B <br> R <br> E <br> A <br> K
    </p>
    </div>
    </div>
    <div class="col-md-4 col-sm-12">
    <div class="member jon">
    <div class="button">
    <a  class="btn-large bg-3"><img src="images/star.png" alt="">Martin Jones</a>
    </div>
    <h4>Main Topic</h4>
    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
    </div>
    </div>
    </div>
    </div>
    </div>

<!--
<div role="tabpanel" class="tab-pane" id="day3">
<div class="row">
<div class="col-md-12 board text-center">
<div class="column-1 col-md-3 col-sm-5">
<ul class="nav nav-pills event-time-list">
<li><a >Time</a>
<ul>
<li class="color-1"><a >8am - 12 pm</a></li>
<li class="color-2"><a >12pm - 1 pm</a></li>
<li class="color-3"><a >1pm - 1.30 pm</a></li>
<li class="color-4"><a >2pm - 3 pm</a></li>
</ul>
</li>
</ul>
</div>
<div class="col-md-4 col-sm-6">
<div class="member stephen">
<div class="button">
<a  class="btn-large bg-1"><img src="images/star.png" alt="">Jon Doe</a>
</div>
<h4>Main Topic</h4>
<p>Lorem ipsum dolor sit amet, consec-tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
</div>
<div class="member jeson">
<div class="button">
<a  class="btn-large bg-2"><img src="images/star.png" alt="">Leo Amber</a>
</div>
<h4>Main Topic</h4>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
</div>
</div>
<div class="col-md-1 col-sm-1">
<div class="coffee">
<div class="coffee-icon">
<img src="images/coffee-cup.png" alt="">
</div>
<p>
C <br> O <br> F <br> F <br>E <br>E <br> <br> B <br> R <br> E <br> A <br> K
</p>
</div>
</div>
<div class="col-md-4 col-sm-12">
<div class="member jon">
<div class="button">
<a  class="btn-large bg-3"><img src="images/star.png" alt="">Natali Aero</a>
</div>
<h4>Main Topic</h4>
<p>Lorem ipsum dolor sit amet, consec-tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
<p>Lorem ipsum dolor sit amet, consec-tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
<p>Lorem ipsum dolor sit amet, consec-tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
</div>
</div>
</div>
</div>
</div>

<div role="tabpanel" class="tab-pane" id="day4">
<div class="row">
<div class="col-md-12 board text-center">
<div class="column-1 col-md-3 col-sm-5">
<ul class="nav nav-pills event-time-list">
<li><a >Time</a>
<ul>
<li class="color-1"><a >3pm - 5pm</a></li>
<li class="color-2"><a >5pm - 7pm</a></li>
<li class="color-3"><a >7pm - 7.30 pm</a></li>
<li class="color-4"><a >8pm - 10pm</a></li>
</ul>
</li>
</ul>
</div>
<div class="col-md-4 col-sm-6">
<div class="member stephen">
<div class="button">
<a  class="btn-large bg-1"><img src="images/star.png" alt="">Julia Merry</a>
</div>
<h4>Main Topic</h4>
<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
</div>
<div class="member jeson">
<div class="button">
<a  class="btn-large bg-2"><img src="images/star.png" alt="">Jeson Eva</a>
</div>
<h4>Main Topic</h4>
<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
</div>
</div>
<div class="col-md-1 col-sm-1">
<div class="coffee">
<div class="coffee-icon">
<img src="images/coffee-cup.png" alt="">
</div>
<p>
C <br> O <br> F <br> F <br>E <br>E <br> <br> B <br> R <br> E <br> A <br> K
</p>
</div>
</div>
<div class="col-md-4 col-sm-12">
<div class="member jon">
<div class="button">
<a  class="btn-large bg-3"><img src="images/star.png" alt="">David Ramon</a>
</div>
<h4>Main Topic</h4>
<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
</div>
</div>
</div>
</div>
</div>
-->
</div>

</div>

</div>
</div>
</div>
</section>


<section id="speakers" class="section">
<div class="container"  style="margin-top:-50px">
<div class="row">

<div class="col-md-12">
    <br><br>
<h2 class="section-title wow fadeInUp" data-wow-delay="0s">Get in Touch</h2>
</div>
</div>
</div>
</section>

<!--
<section id="sponsors" class="section">
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="section-title wow fadeInUp" data-wow-delay="0s">Our Sponsors</h2>
<p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. A <br> enean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="spnsors-logo wow fadeInUp" data-wow-delay="0.1s">
<a ><img src="images/logo-01.png" alt=""></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="spnsors-logo wow fadeInUp" data-wow-delay="0.2s">
<a ><img src="images/logo-02.png" alt=""></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="spnsors-logo wow fadeInUp" data-wow-delay="0.3s">
<a ><img src="images/logo-03.png" alt=""></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="spnsors-logo wow fadeInUp" data-wow-delay="0.4s">
<a ><img src="images/logo-04.png" alt=""></a>
</div>
</div>
</div>
</div>
</section>

<section id="speakers" class="section">
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="section-title wow fadeInUp" data-wow-delay="0s">Meet Our Speakers</h2>
<p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. A <br> enean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
<div class="speakers-member wow fadeIn" data-wow-delay="0.1s">
<div class="member-img">
<img src="images/img-1.png" alt="">
</div>
<div class="member-desc">
<h3>Jon Doe</h3>
<h5>CEO, Peloton Cycle</h5>
<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
<div class="social-icon">
<a class="social"  target="_blank"><i class="fa fa-facebook"></i></a>
<a class="social"  target="_blank"><i class="fa fa-twitter"></i></a>
<a class="social"  target="_blank"><i class="fa fa-linkedin"></i></a>
<a class="social"  target="_blank"><i class="fa fa-dribbble"></i></a>
<a class="social"  target="_blank"><i class="fa fa-behance"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
<div class="speakers-member wow fadeIn" data-wow-delay="0.3s">
<div class="member-img">
<img src="images/img-2.png" alt="">
</div>
<div class="member-desc">
<h3>Natali Aero</h3>
<h5>Co-founder, Hometeam</h5>
<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
<div class="social-icon">
<a class="social"  target="_blank"><i class="fa fa-facebook"></i></a>
<a class="social"  target="_blank"><i class="fa fa-twitter"></i></a>
<a class="social"  target="_blank"><i class="fa fa-linkedin"></i></a>
<a class="social"  target="_blank"><i class="fa fa-dribbble"></i></a>
<a class="social"  target="_blank"><i class="fa fa-behance"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
<div class="speakers-member wow fadeIn" data-wow-delay="0.5s">
<div class="member-img">
<img src="images/img-3.png" alt="">
</div>
<div class="member-desc">
<h3>Leo Amber</h3>
<h5>Director, Via</h5>
<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
<div class="social-icon">
<a class="social"  target="_blank"><i class="fa fa-facebook"></i></a>
<a class="social"  target="_blank"><i class="fa fa-twitter"></i></a>
<a class="social"  target="_blank"><i class="fa fa-linkedin"></i></a>
<a class="social"  target="_blank"><i class="fa fa-dribbble"></i></a>
<a class="social"  target="_blank"><i class="fa fa-behance"></i></a>
</div>
</div>
</div>
</div>

</div>
</div>
</section>
    
-->


<div class="main-content">

<section id="contact">
     
<div class="container"  style="margin-top:-50px; margin-bottom:-50px">
  
<div class="row wow fadeInDown" data-wow-delay="0.3s">
    
<div id="mw" class="col-md-8 col-sm-7 contact-form">
    
<form role="form" id="contactForm" action="scripts/contact.php" method="post" data-toggle="validator">
    <div class="title-header">
        <br><br>
    <h2 class="title-medium pull-left">Send us a message</h2>
    <div class="icon pull-right"><i class="icon-envelope"></i></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="label-line">
            <span class="span"></span>
            <label class="label transition">Name</label>
            <input type="text" name="cf-name" class="input" id="name" required data-error="Please enter your name">
            <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="label-line">
            <span class="span"></span>
            <label class="label transition">Email</label>
            <input type="email" name="cf-email" class="input" id="email" required data-error="Please enter your email">
            <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="label-line">
            <span class="span"></span>
            <label class="label transition">Message</label>
            <input type="text" class="input" name="cf-about" id="name" required data-error="Please enter subject">
            <div class="help-block with-errors"></div>
            </div>
        </div>
       
        <div class="col-md-12">
            
        <button type="submit" id="form-submit" class="btn btn-common">Send Message<i class="icon-paper-plane" aria-hidden="true"></i></button>
            <br><br>
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
        </div>
    </div>
</form>
</div>
<div class="col-md-4 col-sm-5 information">
<div class="title-header">
<h3 class="title-medium">Contact Information</h3>
</div>
<div class="contact-datails">
<div class="icon">
<i class="fa fa-map-marker"></i>
</div>
<div class="info">
<span class="detail">Rishi Arabindo Road, Madhyamgram<br> Kolkata, WB, IN</span>
</div>
</div>
<div class="contact-datails">
<div class="icon">
<i class="fa fa-phone"></i>
</div>
<div class="info">
<span class="detail">+91 91630 34929</span>
</div>
</div>
<div class="contact-datails">
<div class="icon">
<i class="fa fa-envelope"></i>
</div>
<div class="info">
<span class="detail">contact@mindwebs.org</span>
<!--<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c3aaada5ac83a2a1a0a7eda0acae">[email&#160;protected]</a>-->
</div>
</div>
<div class="social text-center">
<a class="social" href="https://www.facebook.com/mindwebs" target="_blank"><i class="fa fa-facebook"></i></a>
<a class="social" href="https://www.twitter.com/mind_webs" target="_blank"><i class="fa fa-twitter"></i></a>
<a class="social"  target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</section>

</div>   

<!--
<footer id="w" class="section">
<div  class="container">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-12">
<h3><img src="images/footer-logo.png" alt=""></h3>
<p>
If you think you have the passion,
attitude and capability to join us
the next big software company
s so that we can get the convers.
</p>
</div>
<div class="col-md-3 col-sm-3 col-xs-12">
<h3>Support</h3>
<ul>
<li><a >Support</a></li>
<li><a >Docs</a></li>
<li><a >Contact Us</a></li>
</ul>
</div>
<div class="col-md-3 col-sm-3 col-xs-12">
<h3>Learn More</h3>
<ul>
<li><a >How it Works</a></li>
<li><a >Blog</a></li>
<li><a >Log In</a></li>
<li><a >Sign Up</a></li>
</ul>
</div>
<div class="col-md-3 col-sm-3 col-xs-12">
<h3>Quick Link</h3>
<ul>
<li><a >Schedule</a></li>
<li><a >Gallery</a></li>
<li><a >Team</a></li>
<li><a >Blog</a></li>
<li><a >Pricing</a></li>
</ul>
</div>
</div>
</div>
</footer>

</div>

-->
<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="copyright-text text-center">
                Developed by <a href="https://github.com/ShubhayanS">Shubhayan S</a> |
                <a href="https://mindwebs.org" >MinD Webs Team</a>
                </p>
            </div>
        </div>
    </div>
</section>


<a  class="back-to-top">
<i class="icon-arrow-up"></i>
</a>
<div class="bottom"> <a  class="settings"></a> </div>

<script data-cfasync="false" src="js/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/wow.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/nivo-lightbox.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript" src="js/jquery.mapit.min.js"></script>
<script src="js/initializers.js"></script>
</body>
</html>