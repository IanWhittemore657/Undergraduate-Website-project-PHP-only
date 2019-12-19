<?php
// Start the session
//session_start();
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

	<?php
    if (isset($_POST['submit'])) {
	include 'myDB.php';
	$name = $_POST['Names'];
	$email = $_POST['Emails'];
	$username = $_POST['username'];

	$password =crypt($_POST['pwd1'],'$2a$07$usesomesillystringforsalt$');
	$sql = "INSERT INTO userprofile (Name,Email,Username,Password) VALUES ('$name' , '$email' , '$username' , '$password')";
 
	
	if ($conn->query($sql) === TRUE) 
	{
		//$sql= "SELECT UserID FROM userprofile WHERE username='$username' AND password='$password'";

		//$result = $conn->query($sql);
		//$row = $result->fetch_assoc();
		//$_SESSION['UserID'] = $row['UserID'];

		echo "Submission successful";
		header("Location: main.php");
		//exit();
		} else 
		{
		echo "Error: " . $sql . "<br>" . $conn->error;
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

   
        .message {
            display: none;
            background: #f1f1f1;
            color: #000;
            position: relative;
            padding: 10px;
            margin-top: 10px;
        }

            .message p {
                padding: 10px 35px;
                font-size: 18px;
            }

        .valid {
            color: green;
        }

            .valid:before {
                position: relative;
                left: -35px;
                content: "&#10004;";
            }

        .invalid {
            color: red;
        }
            .invalid:before {
                position: relative;
                left: -35px;
                content: "&#10006;";
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
        <h3>Sign Up</h3>
        <p class="p2"><em>Please sign up for future updates!</em></p>

        <form name ="signup" method="post" onsubmit="return checkForm(this);">

            <label for="Names">Name</label>
            <input type="text" id="name" name="Names" required>

            <label for="Emails">Email</label>
            <input type="text" id="email" name="Emails" required>


            <label for="usrname">Username</label>
            <input type="text" id="usrname" name="username" required>

            <label for="psw">Password</label>
            <input type="password" id="psw" name="pwd1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

            <label for="psw">Re-type Password</label>
            <input type="password" name="pwd2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>


            <input type="submit" name="submit" value="Submit">

            <div class="container signin">
                <p>Already have an account? <a href="Login.html">Sign in</a>.</p>
            </div>

        </form>
    </div>

    <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum of <b>8 characters</b></p>
    </div>

    <br />
    <br />
    <br />

    <div class="footer">
        <a href="https://www.facebook.com/groups/515890888841420/" target="_blank" class="fa fa-facebook"></a>
        <a href="https://twitter.com/Ianwhittemore2" target="_blank" class="fa fa-twitter"></a>
        <a href="https://www.pinterest.co.uk/ianwhittemore75/boards/" target="_blank" class="fa fa-pinterest"></a>
        <a href="https://www.instagram.com/websiteforproject12/?hl=en" target="_blank" class="fa fa-instagram"></a>
    </div>


    <script>
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

    
        myInput.onfocus = function () {
            document.getElementById("message").style.display = "block";
        }

   
        myInput.onblur = function () {
            document.getElementById("message").style.display = "none";
        }

       
        myInput.onkeyup = function () {
            
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }
            
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

           
            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }

        function checkForm(form) {

            if (form.pwd1.value == form.username.value) {
                alert("Error: Please enter a password that is different from username!");
                form.pwd1.focus();
                return false;
            }
            if (form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
                if (!checkPassword(form.pwd1.value)) {
                    alert("The password you have entered is not valid!");
                    form.pwd1.focus();
                    return false;
                }
            } else {
                alert("Error: Please check that you've entered and confirmed your password!");
                form.pwd1.focus();
                return false;
            }
            return true;
        }

    </script>

</body>
</html>