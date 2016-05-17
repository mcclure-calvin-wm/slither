<?php

// Connect to the database
require_once('connectvars.php');



// Retrieve the comment data from MySQL
$query = "SELECT * FROM games WHERE id = " . $_GET['id'];
$stmt = $dbh->prepare($query);
$stmt->execute(
//    array(
//    'gameName' => $gameName,
//    'games' => $games
//)
);
$gameData = $stmt->fetchAll();


foreach ($gameData as $it) {
    $gameName = $it['gameName'];
    $games = $it['games'];
    $image = $it['Image'];
}
?>


<!DOCTYPE html>
<head>
    <title><?php echo $gameName ?></title>
    <?php require_once ('links.php') ?>
    <link href="game.css" rel="stylesheet" type="text/css">
    <style>
        body {
            background-color: #d9d9d9;
        }
    </style>
</head>
<body>
<?php require_once ('nav.php')?>
<?php require_once ('sidebar.php') ?>
<!--<div id="ads"><img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/93a4fe16679317.562afc634e9b8.gif" style="position: fixed; top: 13em; width: 10em;"></div>-->
<div id="ads"><img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/93a4fe16679317.562afc634e9b8.gif" style="position: fixed; top: 5em; right: 0; width: 12em; height: 38em; z-index: 0;"></div>
<div id="body">
    <?php echo "$games"?>
</div>
</body>
</html>


