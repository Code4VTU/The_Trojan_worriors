<?php 
	require_once('includes/db.php');
	require_once('includes/functions.php');
	
	//completeOrder($mysqli);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coding pizza</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Coding Pizza</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-top left">
            <h1><big>Coding Pizza</big></h1>
            <h3>Build your own pizza</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Start coding : </a>
        </div>
		<div class="text-vertical left">
		<br><br><br>
		<h3>Pizza orders</h3>
		<h3>(123) 456-7890</h3>
		<br><br><br><br><br><br><br><br><br>
		<h1>For coders by coders</h1>
		</div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><big>Here you can build your own pizza projects</big></h2>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
				<br>
                    <h2>Cooking Options</h2>
                    <hr class="small">
					<br>
					<br>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item" >
                                <h4>
                                    <strong>DIY PIZZA</strong>
                                </h4>
                                <p>Compile your own custom pizza projects</p>
                                <br>
								<br>
								<br>
								<a href="order.php" class="btn btn-dark btn-lg">Crafting</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <h4>
                                    <strong>TEMPLATES</strong>
                                </h4>
                                <p>Choose from a wide array of pizzas</p>
                                <br>
								<br>
								<br>
								<br>
								<a href="menu.php" class="btn btn-dark btn-lg">To Menu</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
							<h4>
                                    <strong>CLASS="Random"</strong>
                                </h4>
                                <p>Choose from a random pizza that we generated for you.</p>
                                <br>
								<br>
								<br>
								<a href="orderRandom.php" class="btn btn-dark btn-lg">Random</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <h4>
                                    <strong>GPS</strong>
                                </h4>
                                <p>Where to go when you need to refresh</p>
                                <br>
								<br>
								<br>
								<a href="#contact" class="btn btn-dark btn-lg">To Map</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-vertical-top left">
                    <h2><b>Class Coding pizza</b></h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/cook.jpg" height="800" width="450">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/call_center.jpg" height="700" width="555">
                                </a>
                            </div>
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/hh.jpg" height="1000" width="555">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/pizzz.jpg" height="800" width="555">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3><big>You can find us here :</big></h3>
                </div>
            </div>
        </div>
    </aside>

    <section id="contact" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5828.760186286389!2d25.6064591!3d43.0755038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a9261a0329f98f%3A0xf92d66be18741f39!2z0JLQtdC70LjQutC-0YLRitGA0L3QvtCy0YHQutC4INCj0L3QuNCy0LXRgNGB0LjRgtC10YIg4oCe0KHQstC10YLQuCDQodCy0LXRgtC4INCa0LjRgNC40Lsg0Lgg0JzQtdGC0L7QtNC40LnigJwtINCf0LXQtNCw0LPQvtCz0LjRh9C10YHQutC4INGE0LDQutGD0LvRgtC10YI!5e0!3m2!1sbg!2sbg!4v1458990257274" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    </h4>
                    <p>bulv. „Hristo Botev“ 19<br>5000 Veliko Tarnovo</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://dribbble.com/"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Coding pizza 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
