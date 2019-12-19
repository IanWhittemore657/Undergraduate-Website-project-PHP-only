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
<title>Contact page</title>
    <link rel="stylesheet" type="text/css" href="respweb.css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">



<?php
if(isset($_POST['submits'])) 
{
include "myDB.php" ;
$firstname = $_POST['firstname'];
$Email = $_POST['Email'];
$subject = $_POST['subject'];
	
$sql = "INSERT INTO contact (FirstName, Email, Subject) VALUES ('$firstname', '$Email' , '$subject' )";

	
if ($conn->query($sql) === TRUE) 
{
	echo "Submission successful";
	header("Location: main.php");
	} else 
	{
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	}
?>


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

    <div class="container-fluid text-center">

        <div class="row content">

            <div class="col-sm-2  ">
            
                <br />

            </div>

            <div class="col-sm-9  text-left">
                <h3> Want to talk to? </h3>
                <p class="p2"><em>Can be contacted at any time!</em></p>
   
                <hr>

                <div class="container" style="background-color:RGB(180,197,207); border-color:darkslategrey;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div style="text-align:center">
                        <h3>Contact Us</h3>
                
                    </div>
                    
                    <div class="row">

                        <div class="column">
                            <img src="Buckingham.jpg" style="width:100% ; padding:8px ; border-radius:30px; ">

                            <br />
                            <br />
                            <br />

                            <p class="p2"><span class="glyphicon glyphicon-earphone"></span> Phone number :</p>
                            <p class="p2" style=" color: orangered;"> 082 234 5158</p>

                            <br />

                            <p class="p2"><span class="glyphicon glyphicon-map-marker"></span> Location : </p>
                            <p class=" p2" style=" color: orangered;">Buckingham MK18 1SZ, United Kingdom</p>

                            <br />

                            <p class="p2"><span class="glyphicon glyphicon-inbox"></span> Email address :</p>
                            <p class="p2" style=" color: orangered;"> 1700870@buckingham.ac.uk</p>


                        </div>

                        <div class="column">

                            <form name = "contact" method="post">
                                <label for="fname">First Name</label>

                                <input type="text" id="fname" name="firstname" style="border-radius:12px; border-color:black;" placeholder="Your name..">

                                <label for="eMail">Email address</label>

                                <input type="text" id="eMail" name="Email" style="border-radius:12px; border-color:black;" placeholder="Your last name..">


                                <label for="subject">Subject</label>
                                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                                <br />
                                <br />

                                <input type="submit" name ="submits" value="Submit" />

                            </form>
                        </div>
                    </div>
                
                           </div>

            <div class="col-sm-2">

                <br />


            </div>

        </div>
    </div>
        </div>

        <br />
        <br />

 
    <div class="footer">
        <a href="https://www.facebook.com/groups/515890888841420/" target="_blank" class="fa fa-facebook"></a>
        <a href="https://twitter.com/Ianwhittemore2" target="_blank" class="fa fa-twitter"></a>
        <a href="https://www.pinterest.co.uk/ianwhittemore75/boards/" target="_blank" class="fa fa-pinterest"></a>
        <a href="https://www.instagram.com/websiteforproject12/?hl=en" target="_blank" class="fa fa-instagram"></a>
    </div>




</body>
</html>
