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
<div style="position: relative; top: 12em; left: 5em">
<table >

<div style="margin-top: 9em">
<table>
    <?php if(isset($_SESSION['password'])){
        echo "<tr><td><h3>Username: </h3><h1>" . $_SESSION["userName"] . "</h1></td></tr>";
    }else{
        echo "<h1 id='notsign'>Not signed in</h1>";
    }
    ?>

</table>


</div>
</body>
</html>