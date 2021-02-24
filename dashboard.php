<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon  -->
    <link rel="shortcut icon" href="assests/img/cc.jpg">
    <!-- // Favicon  -->


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" href="../css/style.css">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="./css/style.css">


    <title>climate change</title>
</head>

<?php include('includes/connection.php') ?>
<?php include('includes/header.php') ?>

<body>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 bg-dark p-4">
                    <ul class="navbar-nav">
                        <li class="nav-item border-bottom"><a href="dashboard.php" class="nav-link text-warning ">
                                <h2 class="font-weight-bold">Dashboard</h2>
                            </a></li>
                        <li class="nav-item border-bottom"><a href="" class="nav-link text-light">
                                <h5 class="font-weight-bold">Profile</h5>
                            </a>
                        <li class="nav-item border-bottom"><a href="weather.php" class="nav-link text-light">
                                <h5 class="font-weight-bold">Weather</h5>
                            </a>
                        <li class="nav-item border-bottom"><a href="climate-globe.php" class="nav-link text-light">
                                <h5 class="font-weight-bold">Climate Globe</h5>
                            </a>
                        <li class="nav-item border-bottom"><a href="loggout.php" class="nav-link text-light">
                                <h5 class="font-weight-bold">Loggout</h5>
                            </a>

                    </ul>
                </div>


                <div class="col-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <?php include('cities3.html') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <script src="current.js"></script>
</body>

</html>