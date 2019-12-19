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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="gameiron.css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">


    <script>

        var myGamePiece;
        var myObstacles = [];
        var myScore;

        function startGame() {
            myGamePiece = new component(30, 30, "iron.gif", 10, 120, "image");
            myGamePiece.gravity = 0.05;
            myScore = new component("30px", "Consolas", "White", 280, 40, "text");
            myGameArea.start();
        }

        var myGameArea = {
            canvas: document.createElement("canvas"),
            start: function () {
                this.canvas.width = 480;
                this.canvas.height = 270;
                this.context = this.canvas.getContext("2d");
                document.body.insertBefore(this.canvas, document.body.childNodes[0]);
                this.frameNo = 0;
                this.interval = setInterval(updateGameArea, 20);
            },
            clear: function () {
                this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
            }
        }

        function component(width, height, color, x, y, type) {
            this.type = type;
            if (type == "image") {
                this.image = new Image();
                this.image.src = color;

            }

            this.score = 0;
            this.width = width;
            this.height = height;
            this.speedX = 0;
            this.speedY = 0;
            this.x = x;
            this.y = y;
            this.gravity = 0;
            this.gravitySpeed = 0;
            this.update = function () {
                ctx = myGameArea.context;
                if (this.type == "text") {
                    ctx.font = this.width + " " + this.height;
                    ctx.fillStyle = color;
                    ctx.fillText(this.text, this.x, this.y);
                }
                else if (type == "image") {
                    ctx.drawImage(this.image,
                        this.x,
                        this.y,
                        this.width, this.height);
                }

                else {
                    ctx.fillStyle = color;
                    ctx.fillRect(this.x, this.y, this.width, this.height);
                }
            }
            this.newPos = function () {
                this.gravitySpeed += this.gravity;
                this.x += this.speedX;
                this.y += this.speedY + this.gravitySpeed;
                this.hitBottom();
            }
            this.hitBottom = function () {
                var rockbottom = myGameArea.canvas.height - this.height;
                if (this.y > rockbottom) {
                    this.y = rockbottom;
                    this.gravitySpeed = 0;
                }
            }
            this.crashWith = function (otherobj) {
                var myleft = this.x;
                var myright = this.x + (this.width);
                var mytop = this.y;
                var mybottom = this.y + (this.height);
                var otherleft = otherobj.x;
                var otherright = otherobj.x + (otherobj.width);
                var othertop = otherobj.y;
                var otherbottom = otherobj.y + (otherobj.height);
                var crash = true;
                if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
                    crash = false;
                }
                return crash;
            }
        }

        function updateGameArea() {
            var x, height, gap, minHeight, maxHeight, minGap, maxGap;
            for (i = 0; i < myObstacles.length; i += 1) {
                if (myGamePiece.crashWith(myObstacles[i])) {
                    return;
                }
            }
            myGameArea.clear();
            myGameArea.frameNo += 1;
            if (myGameArea.frameNo == 1 || everyinterval(150)) {
                x = myGameArea.canvas.width;
                minHeight = 20;
                maxHeight = 200;
                height = Math.floor(Math.random() * (maxHeight - minHeight + 1) + minHeight);
                minGap = 50;
                maxGap = 200;
                gap = Math.floor(Math.random() * (maxGap - minGap + 1) + minGap);
                myObstacles.push(new component(10, height, "Purple", x, 0));
                myObstacles.push(new component(10, x - height - gap, "Purple", x, height + gap));
            }
            for (i = 0; i < myObstacles.length; i += 1) {
                myObstacles[i].x += -1;
                myObstacles[i].update();
            }
            myScore.text = "SCORE: " + myGameArea.frameNo;
            myScore.update();
            myGamePiece.newPos();
            myGamePiece.update();
        }

        function everyinterval(n) {
            if ((myGameArea.frameNo / n) % 1 == 0) { return true; }
            return false;
        }

        function accelerate(n) {
            myGamePiece.gravity = n;
        }
    </script>

</head>
<body onload="startGame()">

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
        </div>


        <div class="col-2">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            




            <button onmousedown="accelerate(-0.2)" onmouseup="accelerate(0.05)">BOOST</button>
            <br />
            <p>Click the button to make him fly!</p>
        </div>

    <div class="col-3 news"> </div>

    </div>
</body>
</html>

