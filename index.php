<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <title>Slither</title>
        <?php require_once("links.php"); ?>
</head>
<body style="background:<?php if(!empty($_SESSION["backGroundColor"])){echo $_SESSION['backGroundColor'];}?>">
<?php require_once ("nav.php"); if(!empty($_SESSION["backGroundColor"])){echo $_SESSION['backGroundColor'];}?>

<div id="center-table">

    <table cellspacing="130" style="border-left: 1px;">
        <tr>
            <td><a href="game.php?id=1"><img class="gameop" src="images/applez.jpeg"
                                             style="width: 200px;height: 200px;"></a><h5>Apple Shooter</h5></td>
            <td><a href="game.php?id=2"><img class="gameop" src="images/qwop.png"
                     style="width: 200px;height: 200px;"></a><h5>QWOP</h5></td>
            <td><a href="game.php?id=3"><img class="gameop" src="images/flight.jpeg"
                     style="width: 200px;height: 200px;"></a><h5>Flight</h5></td>
        </tr>
        <tr>
            <td><a href="game.php?id=4"><img class="gameop" src="images/Cat%20Mario.png"
                     style="width: 200px;height: 200px;"></a><h5>Cat Mario</h5></td>
            <td><a href="game.php?id=5"><img class="gameop"
                     src="images/Age%20of%20war.png"
                     style="width: 200px;height: 200px;"></a><h5>Age of War</h5></td>
            <td><a href="game.php?id=6"><img class="gameop" src="images/pac%20man.png"
                     style="width: 200px;height: 200px;"></a><h5>Pac Man</h5></td>
        </tr>
        <tr>
            <td><a href="game.php?id=7"><img class="gameop"
                     src="images/Gun%20blood.png"
                     style="width: 200px;height: 200px;"></a><h5>Gun Blood</h5></td>
            <td><a href="game.php?id=8"><img class="gameop" src="images/stick.jpg"
                     style="width: 200px;height: 200px;"></a><h5>Stick Wars</h5></td>
            <td><a href="game.php?id=9"><img class="gameop" src="images/pigs.png"
                     style="width: 200px;height: 200px;"></a><h5>Bad Piggies</h5></td>
        </tr>
    </table>
</div>



</body>
</html>