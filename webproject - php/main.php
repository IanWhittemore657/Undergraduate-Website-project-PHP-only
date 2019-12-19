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
    <link rel="stylesheet" type="text/css" href="respweb.css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">

	 <script>
        function future() {
            alert("For future growth");
        }
    </script>
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
                    
					<li><a href="signout.php"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
                </ul>
              
            </div>
        </div>
</nav>




    <div class="row">
       
        <div class="col-1 menu">
            <br />
            <br /> 
            <ul>
                <li onclick="location.href = 'blog.html';">Blog</li>
            </ul>

            <br />
            <br />

            <ul>
                <li onclick="location.href = 'media.php';">Media Page</li>
            </ul>

            <br />
            <br />

            <ul>
                <li onclick="location.href = 'gamepage.php';">Game Page</li>
            </ul>

            <br />
            <br />

            <ul>
                <li onclick="future()">Coming soon</li>
            </ul>
        </div>

        <div class="col-2">

         
                <h3 style="font-size:48px;">WELCOME</h3>

                <p class="mainpage">
                    This website has some very random objects among itself , the reason for creating a website that is random and that has no specific field is due to the face that it actually has only one goal, and that goal
                    is to impress Hisham Al Assam with my skills and use of all sorts of different technologies that will be used in the making of this website.
                </p>
            
               

            </div>
       
        <br />

        <div class="col-3 news">


            <h3 class="timeline"> Twitter Feed</h3> <a class="twitter-timeline" href="https://twitter.com/Ianwhittemore2">Tweets by Ian Whittemore</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>
    </div>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <div class="footer">
        <a href="https://www.facebook.com/groups/515890888841420/" target="_blank" class="fa fa-facebook"></a>
        <a href="https://twitter.com/Ianwhittemore2" target="_blank" class="fa fa-twitter"></a>
        <a href="https://www.pinterest.co.uk/ianwhittemore75/boards/" target="_blank"class="fa fa-pinterest"></a>
        <a href="https://www.instagram.com/websiteforproject12/?hl=en" target="_blank" class="fa fa-instagram"></a>
    </div>


</body>


</html>