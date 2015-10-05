<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aditi Chakravarthi</title>

    <!--Circle skills -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="css/jquery.circliful.css" rel="stylesheet" type="text/css" />

    
    <script src="js/jquery.circliful.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">AC</a><!--Insert logo-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Experience</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Hi, I'm Aditi</div>
                <div class="intro-heading">Computer Science student</div>
                <a href="#services" class="page-scroll btn btn-xl">More About Me</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>

                    <div class="headshot">
                    <img class="img-circle img-responsive img-centered" src="img/headshot.jpg" alt="">
                    </div>
                    <h3 class="section-subheading text-muted">Let me introduce myself</h3>
                </div>
            </div>
           <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>I'm a Computer Science student with a minor in Psychology. I also have a business degree, specializing in Marketing and Finance. I'm passionate about making things and experimenting with new technology. </p>
                </div>
                <div class="col-lg-4">
                    <p>I am interested in artificial intelligence and machine learning. My goal - 3d printed food.</p>
                </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">My latest projects</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/find-your-pools.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Find Your Pools</h4>
                        <p class="text-muted">Web app built using MEAN stack</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/growth-plot.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Growth Plot</h4>
                        <p class="text-muted">Winner at AppForKids Hackathon</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/sailbot.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Sailbot</h4>
                        <p class="text-muted">Autonomous sailboat obstacle avoidance</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/pitch.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Pitch Perfect</h4>
                        <p class="text-muted">iOS app built with Swift</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/fish.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Fish Tag</h4>
                        <p class="text-muted">Android app at Fishackathon</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/tldr.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>TLDR</h4>
                        <p class="text-muted">Web app at nwHacks Hackathon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Education and Experience</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/ubc.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2014-2017</h4>
                                    <h4 class="subheading">University of British Columbia - Computer Science</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        Bachelors of Computer Science<br>
                                        Computer Science Outreach Activities Developer<br>
                                        Computer Science Outreach Volunteer Coordinator<br>
                                        Ladies Learning Code Mentor<br>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/one45.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2015-2016</h4>
                                    <h4 class="subheading">One45 - Software Development intern</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        <a href="http://www.one45.com/">Company website</a><br>
                                        Working with PHP<br>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/scotia.jpeg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2013-2014</h4>
                                    <h4 class="subheading">Scotiabank- Financial Advisor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Retail banking</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/essec.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2012</h4>
                                    <h4 class="subheading">ESSEC School of Business, France</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        Exchange Semester<br>
                                        International marketing and economics<br>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/schulich.jpeg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2013</h4>
                                    <h4 class="subheading">Schulich School of Business, York University</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        International Bachelors of Business Administration<br>
                                        Specialized in Finance and Marketing<br>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Skills</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                       <div id="java" data-dimension="250" data-text="Java" data-info="" data-width="30" data-fontsize="38" data-percent="70" data-fgcolor="#7ea568" data-bgcolor="#eee" data-type="" data-fill="#ddd"></div>

                       <div id="js" data-dimension="250" data-text="JavaScript" data-info="" data-width="30" data-fontsize="38" data-percent="64" data-fgcolor="#7ea568" data-bgcolor="#eee" data-type="" data-fill="#ddd"></div>

                       <div id="php" data-dimension="250" data-text="PHP" data-info="" data-width="30" data-fontsize="38" data-percent="55" data-fgcolor="#7ea568" data-bgcolor="#eee" data-type="" data-fill="#ddd"></div>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                         <div id="html" data-dimension="250" data-text="HTML/CSS" data-info="" data-width="30" data-fontsize="38" data-percent="80" data-fgcolor="#7ea568" data-bgcolor="#eee" data-type="" data-fill="#ddd"></div>

                         <div id="python" data-dimension="250" data-text="Python" data-info="" data-width="30" data-fontsize="38" data-percent="71" data-fgcolor="#7ea568" data-bgcolor="#eee" data-type="" data-fill="#ddd"></div>

                         <div id="sql" data-dimension="250" data-text="SQL" data-info="" data-width="30" data-fontsize="38" data-percent="20" data-fgcolor="#7ea568" data-bgcolor="#eee" data-type="" data-fill="#ddd"></div>
                        
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="team-member">

                        <div id="swift" data-dimension="250" data-text="Swift" data-info="" data-width="30" data-fontsize="38" data-percent="30" data-fgcolor="#7ea568" data-bgcolor="#eee" data-type="" data-fill="#ddd"></div>

                        <div id="cplus" data-dimension="250" data-text="C/C++" data-info="" data-width="30" data-fontsize="38" data-percent="20" data-fgcolor="#7ea568" data-bgcolor="#eee" data-type="" data-fill="#ddd"></div>

                        <div id="ruby" data-dimension="250" data-text="Ruby" data-info="" data-width="30" data-fontsize="38" data-percent="43" data-fgcolor="#7ea568" data-bgcolor="#eee" data-type="" data-fill="#ddd"></div>
                        
                    </div>
                </div>
            </div>
            <script>
                            $( document ).ready(function($) {
                            $('#java').circliful();
                            $('#html').circliful();
                            $('#swift').circliful();
                            $('#js').circliful();
                            $('#python').circliful();
                            $('#cplus').circliful();
                            $('#php').circliful();
                            $('#sql').circliful();
                            $('#ruby').circliful();
                            })(jQuery);
                        </script>
           <!-- <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div> -->
        </div>
    </section>
  
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Me</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Aditi Chak 2015</span>
                </div>
                <div class="col-md-4">

                    <ul class="list-inline social-buttons">
                        <li><a href="https://ca.linkedin.com/pub/aditi-chakravarthi/46/62a/61a"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="https://github.com/aditichak"><i class="fa fa-github"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <!--CHANGE THE FUCKING FONT-->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Find Your Pools</h2>
                            <p class="item-intro text-muted">
                                <a href = "https://still-badlands-4745.herokuapp.com/">Click here to view</a>
                            </p>
                            <!-- put in live link -->
                            <img class="img-responsive img-centered" src="img/portfolio/find-your-pools.png" alt="">
                            <p>This web app helps you find all the public pools in New York City, filtered by various categories. It was completed using the MEAN stack and New York City's public dataset.</p>
                            <ul class="list-inline">
                                <li>Date: July 2015</li>
                                <li>Group: 4 </li><br>
                                <li>Built with: MEAN stack, AngularJS, Javascript</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>GrowthPlot</h2>
                            <p class="item-intro text-muted">
                                <a href="http://45.55.212.148/">Click here to view</a>
                            </p>
                            <img class="img-responsive img-centered" src="img/portfolio/growth-plot.png" alt="">
                            <p> GrowthPlot was built at the AppsForKids hackathon. It was headed by a pediatrician who expressed a need for thos application for his patients. Parents can use the application to enter certain measurements for their childern and plot these measurements against standard World Health Organization curves. The application is built using Meteor and React.</p>
                            <ul class="list-inline">
                                <li>Date: June 2015</li>
                                <li>Group: 8</li><br>
                                <li>Built with: Meteor, React, HTML, CSS, Javascript</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>UBC Sailbot</h2>
                            <p class="item-intro text-muted">
                                <a href="http://ubcsailbot.org/">Click here to view</a>
                            </p>
                            <img class="img-responsive img-centered" src="img/portfolio/sailbot.jpg" alt="">
                            <p>Worked in the obstacle avoidance team as part of the boat's navigation team. Wrote an evaluation program that tested the boat's obstacle recognition system. Wrote programs to allow further control of the boat's infrared camera.</p>
                            <ul class="list-inline">
                                <li>Date: August 2015</li>
                                <li>Group: N/A </li><br>
                                <li>Built with: Python, C, C++</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Pitch Perfect</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-responsive img-centered" src="img/portfolio/pitch-preview.png" alt="">
                            <p>Pitch perfect is an iOS app where users can record audio and play it back after changing the pitch and speed of the recorded audio. The chipmunk and Darth Vader icons represent high and low pitch respectively, and the snail and kangaroo icons represent slow and fast speed.</p>
                            <ul class="list-inline">
                                <li>Date: July 2015</li>
                                <li>Group: N/A </li><br>
                                <li>Built with: Swift</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Fish Tag</h2>
                           <p class="item-intro text-muted">
                                <a href="https://github.com/aditichak/fishackathon">Click here to view code</a>
                            </p>
                            <img class="img-responsive img-centered" src="img/portfolio/fish-preview.jpg" alt="">
                            <p>Fish tag is an android app that can be used to take pictures of various fish and add any known information abou that fish including species, location and time spotted, and physical characteristics. The app also allows users to share their images within their community and search for images by location. This app was built as part of the Vancouver Fishackathon.</p>
                            <ul class="list-inline">
                                <li>Date: May 2015</li>
                                <li>Group: 4 </li><br>
                                <li>Built with: Java, Android Studio</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>TLDR</h2>
                           <p class="item-intro text-muted">
                                <a href="https://github.com/BaihaoLuo/tldr">Click here to view code</a>
                            </p>
                            <img class="img-responsive img-centered" src="img/portfolio/tldr-project.png" alt="">
                            <p>TLDR is a blogging platform that allows users to share and comment on various scientific research papers. Users search for papers in any topic as well as submit papers for discussion. </p>
                            <ul class="list-inline">
                                <li>Date: March 2015</li>
                                <li>Group: 4 </li><br>
                                <li>Built with: sails.js, HTML, CSS, Javascript</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
