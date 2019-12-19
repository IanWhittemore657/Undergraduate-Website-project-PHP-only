<?php
// Start the session
//session_start();
//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
//header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
//?>

<!DOCTYPE html>
<html>
<head>  
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="respweb.css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">

	<?php
    $errorMsg = "";
	if (isset($_POST['submit']))
	{
	include 'myDB.php';

	$username = $_POST['username'];
	
	$password1 =crypt($_POST['password1'],'$2a$07$usesomesillystringforsalt$');
	
	

	$sql= "SELECT * FROM userprofile WHERE Username='$username' AND Password='$password1'";
	$result = $conn->query($sql);
	$check = $result->fetch_assoc();
	
	if(isset($check))
	{
	//$_SESSION['UserID'] = $row['UserID'];
	echo 'success';
	header("Location:main.php");
	//exit();
    }
	else
	{
	$errorMsg = "<br><div class='alert alert-danger'>Invalid Username or Password</div>";
	}
	$conn->close();
	}
    ?>
	

    <style>


     
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
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
                </ul>

            </div>
        </div>
    </nav>

    <br />
    <br />
    <br />
    <br />


    <div class="container">
        <h3>Sign In</h3>
        <p class="p2"><em>Please sign in for extra features!</em></p>

        <form name="login" method="post">

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Please enter correct password " required>

            <input type="submit" name ="submit" value="Submit">

            <div class="container signin">
                <p>Dont have an account? <a href="signup.php">Sign up</a>.</p>
            </div>

        </form>
		
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
    <br />
    <br />
    <br />
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