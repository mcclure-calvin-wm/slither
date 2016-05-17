<?php
require('connectvars.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <title>Slither</title>
    <?php require_once("links.php"); ?>
</head>
<body>
<?php require_once ("nav.php") ?>

<div style="margin-top: 9em">
<table>
    <?php if(isset($_SESSION['password'])){
        echo "<tr><td><h3>Username:</h3><h1>" . $_SESSION["userName"] . "</h1></td></tr><br>
            <!--<button onclick=''>Change Background Red</button>-->";
    }else{
        echo "<h1 id='notsign'>You're not signed in</h1><center><img src='https://upload.wikimedia.org/wikipedia/commons/e/e9/Sad_face.svg' style='width:10em; height:10em; align-self: center'></center>";
    }
    ?>


</table>


</div>
</body>
</html>