<?php
// Start the session
//session_start();
//if (!isset($_SESSION['UserID'])) {
//header('Location: Login.php');
//exit();
//}
//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
//header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
//?>

<!DOCTYPE html>
<html>
<head>
    <title>Buckingham </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="respweb.css" media="all" />

    <style>

        .carousel-caption
        {
            color:white;
        }

    </style>

</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="main.php"><p>F-Random</p></a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav">
                    <li class="active"><a href="main.php" style="height:50px;">Home</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="questionnaire.php"><span class="glyphicon glyphicon-list-alt"></span>Questionnaire</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="signout.php"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
                </ul>

            </div>
        </div>
    </nav>



    <div class=" col-1"></div>

    <div class=" col-2">

        <h2>Carousel of Buckingham University </h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
           
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

           
            <div class="carousel-inner">
                <div class="item active">
                    <img src="Buckingham.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Buckingham</h3>
                        <p>This is the converted church that is known as the radcliff centre</p>
                    </div>
                </div>

                <div class="item">
                    <img src="car1.jpg" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>The OTM</h3>
                        <p>Where the beer is!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="car2.jpg" alt="New york" style="width:100%; ">
                    <div class="carousel-caption">
                        <h3>Verny park</h3>
                        <p>Where I spend most of my days..</p>
                    </div>
                </div>
            </div>

            
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>





    <div class=" col-3"></div>

    
</body>
</html>
