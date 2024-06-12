<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AWS EC2 Auto Scaling Lab</title>

    <!-- Custom fonts for this theme -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

    <?php
        include 'menu.php'
    ?>

    <!-- Masthead -->
    <header class="masthead bg-primary text-white text-center">
        <div class="c d-flex align-items-center flex-column">

            <!-- Masthead Avatar Image -->
            <img class="masthead-avatar mb-5" src="img/aws.png" alt="">

        </div>
    </header>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <h3>EC2 Instance Metadata</h3>
            <p></p>
             <!-- Metadata -->
             <?php

#The URL root is the AWS meta data service URL where metadata
# requests regarding the running instance can be made
$urlRoot="http://169.254.169.254/latest/meta-data/";

# Get the instance ID from meta-data and print to the screen
echo "<h6 class='masthead-front'><font color='#ff9900'>EC2 Instance ID: </font>" . file_get_contents($urlRoot . 'instance-id') . "</h6>";
echo "<p></p>";
# Availability Zone
echo "<h6 class='masthead-front'><font color='#ff9900'>Availability Zone: </font>" . file_get_contents($urlRoot . 'placement/availability-zone') . "</h6>";
echo "<p></p>";
# Instance CIDR Block
echo "<h6 class='masthead-front'><font color='#ff9900'>Private IP: </font>" . file_get_contents($urlRoot . 'local-ipv4') . "</h6>";

          ?>
        </div>
    </footer>

<div class="divider-custom">
    <div class="divider-custom-line"></div>
    <div class="divider-custom-icon">
    <i class="fas fa-star"></i>
    </div>
    <div class="divider-custom-line"></div>
</div>
<h5 class="text-center"><a href="cpu-load.php"><u>Start CPU Load Generation</u></a></h5>
<h2 class="text-center"><?php include('get-cpu-load.php'); ?></h2>

    <?php
        include 'footer-code.php'
    ?>

</body>

</html>