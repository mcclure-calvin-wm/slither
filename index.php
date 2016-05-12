<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <title>Slither</title>
        <?php require_once("links.php"); ?>
</head>
<body>
<?php require_once ("nav.php") ?>
<div id="center-table">
    <table cellspacing="130" style="border-left: 1px;">

        <tr>
            <td><a href="game.php?id=1"><img class="gameop" src="images/btd5.jpeg" style="width: 200px;height: 200px;"></a><h5>BlOONS TD5</h5></td>
            <td><a href="game.php?id=2"><img class="gameop" src="images/bullet.jpg" style="width: 200px;height: 200px;"></a><h5>Bullet Bill</h5></td>
            <td><a href="game.php?id=3"><img class="gameop" src="images/flight.jpeg" style="width: 200px;height: 200px;"></a><h5>Flight</h5></td>
        </tr>
        <tr>
            <td><a href="game.php?id=4"><img class="gameop" src="images/flappy.jpg"
                     style="width: 200px;height: 200px;"></a><h5>Flappy Bird</h5></td>
            <td><a href="game.php?id=5"><img class="gameop"
                     src="images/happywheels.jpg"
                     style="width: 200px;height: 200px;"></a><h5>Happy Wheels</h5></td>
            <td><a href="game.php?id=6"><img class="gameop" src="images/pac%20man.png"
                     style="width: 200px;height: 200px;"></a><h5>Pac Man</h5></td>
        </tr>
        <tr>
            <td><a href="game.php?id=7"><img class="gameop"
                     src="images/quiz.png"
                     style="width: 200px;height: 200px;"></a><h5>The Impossible Quiz</h5></td>
            <td><a href="game.php?id=8"><img class="gameop" src="images/stick.jpg"
                     style="width: 200px;height: 200px;"></a><h5>Stick Wars</h5></td>
            <td><a href="game.php?id=9"><img class="gameop" src="images/pigs.png"
                     style="width: 200px;height: 200px;"></a><h5>Bad Piggies</h5></td>
        </tr>
    </table>
</div>

<center><iframe src="http://slither.io/" width="1080" height="610" ></iframe></center>

</body>
</html>