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
    <?php if(isset($_SESSION['password'])){
        echo "<tr><td><h3>Username: </h3><h1>" . $_SESSION["userName"] . "</h1></td></tr>";
    }else{
        echo "<h1 id='notsign' style='position: absolute; top: .1em; left: 1.5em; font-size: 5em;'>Please sign in to view this page</h1>";    }
    ?>

</table>


</div>
</body>
</html>