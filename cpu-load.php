<!DOCTYPE html>
<html lang="en">

  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Generate CPU Load</title>

      <!-- Custom fonts for this theme -->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

      <!-- Theme CSS -->
      <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <!-- Masthead -->
    <header class="masthead bg-primary text-black text-center">
        <div class="container d-flex align-items-center flex-column">

            <!-- Masthead Avatar Image -->
            <img class="masthead-avatar mb-5" src="img/aws.png" alt="">

            <!-- CPU Load Generation -->
            <?php
      # Start PHP Session to keep track of whether or not load is getting generated
      session_start();
      
      echo "<meta http-equiv=\"refresh\" content=\"5,URL=/index.php\" />";

      $idleCpu = exec('vmstat 1 2 | awk \'{ for (i=1; i<=NF; i++) if ($i=="id") { getline; getline; print $i }}\'');

      if ($idleCpu > 50) {

        echo exec('dd if=/dev/zero bs=100M count=500 | gzip | gzip -d  > /dev/null &');
        echo "Generating CPU Load! (auto refresh in 5 seconds)";
      }
      else {
        echo "Under High CPU Load! (auto refresh in 5 seconds)";
      }
          ?>


        </div>
    </header>
  </body>
</html>