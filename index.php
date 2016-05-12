
<?php
    require("Connector.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="index-table.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <title>Slither</title>
            <?php require_once("links.php"); ?>
    </head>
    <body>
        <?php require_once ("nav.php") ?>
        <div id="center-table">
            <form method="get">
                <table cellspacing="130" style="border-left: 1px;">

                    <tr>
                        <td><button name="submit" value="1" type="submit"><img class="gameop" src="images/btd5.jpeg" style="width: 200px;height: 200px;"><h5>BlOONS TD5</h5></button></td>

                        <td><button name="submit" value="2" type="submit"><img class="gameop" src="images/bullet.jpg" style="width: 200px;height: 200px;"><h5>Bullet Bill</h5></button></td>

                        <td><button name="submit" value="3" type="submit"><img class="gameop" src="images/flight.jpeg" style="width: 200px;height: 200px;"><h5>Flight</h5></button></td>
                    </tr>
                    <tr>
                        <td><button name="submit" value="4" type="submit"><img class="gameop" src="images/flappy.jpg" style="width: 200px;height: 200px;"><h5>Flappy Bird</h5></button></td>

                        <td><button name="submit" value="5" type="submit"><img class="gameop" src="images/happywheels.jpg" style="width: 200px;height: 200px;"><h5>Happy Wheels</h5></button></td>

                        <td><button name="submit" value="6" type="submit"><img class="gameop" src="images/pac%20man.png" style="width: 200px;height: 200px;"><h5>Pac Man</h5></button></td>
                    </tr>
                    <tr>
                        <td><button name="submit" value="7" type="submit"><img class="gameop" src="images/quiz.png" style="width: 200px;height: 200px;"><h5>The Impossible Quiz</h5></button></td>

                        <td><button name="submit" value="8" type="submit"><img class="gameop" src="images/stick.jpg"style="width: 200px;height: 200px;"><h5>Stick Wars</h5></button></td>

                        <td><button name="submit" value="9" type="submit"><img class="gameop" src="images/pigs.png" style="width: 200px;height: 200px;"><h5>Bad Piggies</h5></button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>