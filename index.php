<?php 
include_once "mysql/mysql.php"; 

include_once 'header.php';


?>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <?php include_once("nav.php"); 
    include 'func.php';
    ?>
    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h1><? echo $funnyword; ?>, <? echo $noun; ?></h1>
                    <p><strong>Wrong?</strong> Report server status by <a href="report.php">clicking here!</a></p>
                    <p><a class="btn btn-default page-scroll" href="#release-dates">Looking for more Pokemon?!</a></p>
                </div>
            </div>
            <div class="col-xs-12">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris metus lorem, accumsan a arcu eget, maximus eleifend orci. Nunc ut erat vitae urna aliquam pulvinar. Suspendisse facilisis turpis ut quam commodo aliquet. Curabitur ultrices scelerisque nunc, et commodo nunc. Nulla quam elit, vulputate vel odio ut, luctus lacinia dolor. Nunc luctus arcu in sem maximus egestas.  
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="server-status" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Server Status</h1>
                    <p>42,069 people have reported Pokemon Go is down in their region.</p>
                    <p>690 trainers have reported Pokemon Go is currently working in their region!</p>
                    <p>Current majority status is... <strong>DOWN!</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="release-dates" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Pokemon Release Dates</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="stats" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Site Information and Stats</h1>
                    <p>42,069 people have reported Pokemon Go is down in their region.</p>
                    <p>690 trainers have reported Pokemon Go is currently working in their region!</p>
                    <p>Current majority status is... <strong>DOWN!</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
