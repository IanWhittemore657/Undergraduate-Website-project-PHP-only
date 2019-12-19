
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
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="question.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
  
    
</head>


<body>
<?php

	//we sppent some time to get this to work and for some reason it didnt.
    if(isset($_POST['submit'])) 
    {
	
	include 'myDB.php';
	$Q1 = $_POST['yes'];
	$Q2 = implode(',',$_POST['q2']);
	$Q3 = $_POST['q3'];
	$Q4 = $_POST['method'];
	$Q5 = $_POST['q5'];
	$Q6 = $_POST['method1'];
	$Q7 = $_POST['q7'];
	$Q8 = implode(',',$_POST['q8']);
	$Q9 = $_POST['q9'];
	$Q10 = $_POST['rate'];

	
	$sql = "INSERT INTO questionnaire (Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10) VALUES ('$Q1', '$Q2', '$Q3', '$Q4', '$Q5', '$Q6', '$Q7', '$Q8', '$Q9', '$Q10')";
	
	if ($conn->query($sql) === TRUE)
	{
	echo "successful";
	header("Location: questionnaire.php");
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	
	}
	$conn->close();
	}
    ?>


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="main.php">F-Random</a>
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
        <!--two different styles-->
        <div class="col-1"></div>

        <div class="col-2">
            <h1 style="color:white;"> Questionnaire</h1>
            <br />
            
            <form name="quest" id="quest" method="POST" >
            
                <h2 style="color:orange; font-size:16px;">
                    <em>
                        Please select one of the following choices regarding my website
                    </em>
                </h2>

                <br />

                <fieldset>
                    <legend style="color:white;">Question 1</legend>

                    <form>
                        <p> Are you a first time user to the website? </p>
                        <input type="radio" name="yes" value="Yes" /><label> Yes</label><br />
                        <input type="radio" name="yes" value="No" /><label>No</label><br />
                    </form>

                </fieldset>

                <br />

                <fieldset>

                    <legend style="color:white;">Question 2</legend>
                    <p>Which feature did you prefer the most? </p>

                    <label class="container">
                        Enjoyed the blog page
                        <input type="checkbox" name="q2[]" value="Blog" checked="checked">
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        Enjoyed the games page
                        <input type="checkbox" name="q2[]" value="Games">
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        Enjoyed the gallary / media page
                        <input type="checkbox" name="q2[]" value="Gallary">
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        Did not enjoy any pages.
                        <input type="checkbox" name="q2[]" value="No" id="myCheck" onclick="myFunction()">
                        <span class="checkmark"></span>
                    </label>

                    <p id="text1" style="display:none">Why not?</p>

                    <input type="text" id="text" name="q2[]" style="display:none" /><br />



                </fieldset>
                <br />
                <fieldset>
                    <legend style="color:white;">Question 3</legend>
                    <p>Did you enjoy the colour scheme that was used in the website? </p>

                    <input type="radio" name="q3" value="Yes" /><label>Yes</label> <br />
                    <input type="radio" name="q3" value="No" /><label>No</label><br />

                </fieldset>
                <br />
                <fieldset>
                    <legend style="color:white;">Question 4</legend>
                    <p>Where did you hear about this website? </p>

                    <select id="choice" name="method" onchange="showMore()">
                        <option value="Search"> Searched</option>
                        <option value="Friend"> Friend</option>
                        <option value="Lecturer"> Lecturer for assignement</option>
                        <option value="Newspaper"> Newspaper</option>
                        <option value="other"> Other</option>
                    </select>

                    <br />

                    <p id="method_other" style="display:none">
                        <br />Please specify <br />
                        <input type="text" name="method" /><br />
                    </p>

                </fieldset>

                <br />

                <fieldset>
                    <legend style="color:white;">Question 5</legend>

                    <p>What would you like to see in the blogs?</p>

                    <input type="text" id="text" name="q5" /><br />

                </fieldset>

                <br />

                <fieldset>
                    <legend style="color:white;">Question 6</legend>
                    <p>What location are you using this website from? </p>

                    <select id="choicess" name="method1" onchange="location()">
                        <option value="Uk"> UK</option>
                        <option value="SouthAfrica"> South Africa</option>
                        <option value="America"> America</option>
                        <option value="Wales"> Wales</option>
                        <option value="others"> Other</option>
                    </select>

                    <br />

                    <p id="method_others" style="display:none">
                        <br />Please specify <br />
                        <input type="text" name="method1" /><br />
                    </p>

                </fieldset>

                <br />

                <fieldset>
                    <legend style="color:white;">Question 7</legend>

                    <p>What features would you add? </p>

                    <input type="text" id="text" name="q7" /><br />

                </fieldset>

                <br />

                <fieldset>

                    <legend style="color:white;">Question 8</legend>
                    <p>What type of websites do you normally visit ? </p>

                    <label class="container">
                        Documentaries
                        <input type="checkbox" name="q8[]" value="Documentaries" checked="checked">
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        Articles
                        <input type="checkbox" name="q8[]" value="Articles">
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        Blogs
                        <input type="checkbox" name="q8[]" value="Blogs">
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        Entertainment
                        <input type="checkbox" name="q8[]" value="Entertainment">
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">
                        Social websites
                        <input type="checkbox" name="q8[]" value="Social">
                        <span class="checkmark"></span>
                    </label>

                </fieldset>

                <br />

                <fieldset>
                    <legend style="color:white;">Question 9</legend>
                    <p>What level of experience does this website give off ?</p>

                    <input type="radio" name="q9" value="amateur" /><label>Amateur</label> <br />
                    <input type="radio" name="q9" value="experienced" /><label>Experienced</label><br />
                    <input type="radio" name="q9" value="professional" /><label>Professional</label><br />

                </fieldset>

                <br />

                <fieldset>
                    <legend style="color:white;">Question 10</legend>

                    <p>Rate the website out of 5</p>

                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="Amazing - 5 stars">5 stars</label>

                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="Good - 4 stars ">4 stars</label>

                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="Average - 3 stars">3 stars</label>

                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="Could be better - 2 stars">2 stars</label>

                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star2" title="Bad - 1 star">1 stars</label>

                    </div>
                    <br />
                </fieldset>

            
            <br />
            
        <input type="submit" name="submit" value="submit" onclick="go();">
            
		</form>
        </div>



    </div>
    <div class=" col-3"></div>

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
	 function go() {
	 alert("sdafdsf");
	 document.getElementById("quest").submit();
	 }
        function myFunction() {
            var checkBox = document.getElementById("myCheck");
            var text = document.getElementById("text");
            if (checkBox.checked == true) {
                text.style.display = "block";
                text1.style.display = "block";

            }
            else {
                text.style.display = "none";
                text1.style.display = "none";

            }
        }
        function do_change() {
            document.getElementById("submit").style.display = "block";
        }

        function showMore() {
            var x = document.getElementById("choice");
            if (x.value == "other")
                document.getElementById("method_other").style.display = "inline";
            else
                document.getElementById("method_other").style.display = "none";
        }

        function location() {
            var x = document.getElementById("choicess");
            if (x.value == "others")
                document.getElementById("method_others").style.display = "inline";
            else
                document.getElementById("method_others").style.display = "none";
        }


    </script>


</body>
</html>