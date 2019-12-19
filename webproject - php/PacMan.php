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
    <title>PacMan Game!!</title>
    <link rel="stylesheet" type="text/css" href="pacman.css" media="all" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">

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
        <div class="col-1">

        </div>
        <div class="col-2">


            <br />
            <br />
            <div class="container">

                <div class="row">

                    <div id='world'>

                    </div>

                </div>

            </div>


        </div>

        <div class="col-3">

        </div>


    </div>
</body>

<script>

    pacman = {
        x: 6,
        y: 4
    }
    map = [
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 2, 2, 2, 2, 2, 1, 2, 2, 2, 2, 2, 1],
        [1, 2, 1, 1, 1, 2, 1, 2, 1, 1, 1, 2, 1],
        [1, 2, 1, 2, 2, 2, 2, 2, 2, 2, 1, 2, 1],
        [1, 2, 1, 1, 2, 1, 5, 1, 2, 1, 1, 2, 1],
        [1, 2, 1, 2, 2, 2, 2, 2, 2, 2, 1, 2, 1],
        [1, 2, 1, 1, 2, 1, 1, 1, 2, 1, 1, 2, 1],
        [1, 2, 2, 2, 2, 2, 1, 2, 2, 2, 2, 2, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    ]
    var el = document.getElementById('world');

    function drawWorld() {
        el.innerHTML = '';
        for (var y = 0; y < map.length; y = y + 1) {
            for (var x = 0; x < map[y].length; x = x + 1) {
                if (map[y][x] === 1) {
                    el.innerHTML += "<div class='wall'></div>";
                }
                else if (map[y][x] === 2) {
                    el.innerHTML += "<div class='coin'></div>";
                }
                else if (map[y][x] === 3) {
                    el.innerHTML += "<div class='ground'></div>";
                }
                else if (map[y][x] === 4) {

                }
                else if (map[y][x] === 5) {
                    el.innerHTML += "<div class='pacman'></div>";
                }
            }
            el.innerHTML += "<br>";
        }
    }
    drawWorld();
    document.onkeydown = function (event) {

        // PACMAN MOVE LEFT
        if (event.keyCode === 37) {
            if (map[pacman.y][pacman.x - 1] !== 1) {
                map[pacman.y][pacman.x] = 3;
                pacman.x = pacman.x - 1;
                map[pacman.y][pacman.x] = 5;
                drawWorld();
            }
        }


        // PACMAN MOVE UP
        else if (event.keyCode === 38) {
            if (map[pacman.y - 1][pacman.x] !== 1) {
                map[pacman.y][pacman.x] = 3;
                pacman.y = pacman.y - 1;
                map[pacman.y][pacman.x] = 5;
                drawWorld();
            }
        }

        // PACMAN MOVE RIGHT
        else if (event.keyCode === 39) {
            if (map[pacman.y][pacman.x + 1] !== 1) {
                map[pacman.y][pacman.x] = 3;
                pacman.x = pacman.x + 1;
                map[pacman.y][pacman.x] = 5;
                drawWorld();
            }
        }

        // PACMAN MOVE DOWN
        else if (event.keyCode === 40) {
            if (map[pacman.y + 1][pacman.x] !== 1) {
                map[pacman.y][pacman.x] = 3;
                pacman.y = pacman.y + 1;
                map[pacman.y][pacman.x] = 5;
                drawWorld();
            }
        }
        console.log(map)
    }

</script>
</html>