<!DOCTYPE html>
<html lang="en">

<head>
<?php
	echo $this->Html->css('grayscale');
		echo $this->Html->css('bootsrap.min');

?>
<style>
.navbar {
background-color: transparent !important;
}
.top-nav-collapse {
background-color: inherit !important;
}
#debug-kit-toolbar {
display: none;
}
</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scott Alexander Portfolio</title>

    <!-- Bootstrap Core CSS -->
    <link href="../startbootstrap-grayscale/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">    
<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <!--<i class="fa fa-play-circle"></i>-->  <span class="light">Scott</span> Alexander
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download1">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Welcome</h1>
                        <p class="intro-text">Web Development. UX Design.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About</h2>
                <p>Hello my name is Scott Alexander and I am 23 year old Computer Science major born and raised in Palo Alto, California. I graduated from King's College London and have multiple years of object oriented web development experience. <br><br> Thank you for visiting my portfolio. </p>
                           </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section" id="download1">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Portfolio</h2>
                    <p>The material describes my skill set and reviews past projects. The Projects are examples of my work, and the Skills are the demonstrated qualifications.</p>
		    <?php echo $this->Html->link(__('Enter'), array('controller' => 'projects', 'action' => 'display'), array('class' => 'btn btn-default btn-lg')); ?>    
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact</h2>
                <p>Please feel free to contact me with any questions</p>
                <p><a href="mailto:imscotta92@yahoo.com">imscotta92@yahoo.com</a>

                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://www.linkedin.com/in/scott-alexander-b76b0338" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">LinkedIn</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/imscotta" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    
                   <!-- <li>
                        <a href="https://soundcloud.com/imscotta" class="btn btn-default btn-lg"><i class="fa fa-soundcloud fa-fw"></i> <span class="network-name">SoundCloud</span></a>
                    </li>-->
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Scott Alexander &copy; 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../startbootstrap-grayscale/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../startbootstrap-grayscale/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../startbootstrap-grayscale/js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="../startbootstrap-grayscale/js/grayscale.js"></script>

</body>

</html>
