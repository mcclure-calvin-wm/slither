<?php
    require("Connector.php");
    if(empty($_SESSION["gameName"]) or empty($_SESSION["gameId"])){
        header("Location: Index.php");
    }
?>

<html>
    <head>
        <title><?php echo "Enjoy playing " . $_SESSION["gameName"] ?></title>
        <?php require_once ('links.php') ?>
        <link rel="stylesheet" type="text/css" href="sidebar.css">
        <style>
            body {
                background-color: #d9d9d9;
            }
        </style>
    </head>
    <body>
        <?php require_once ('nav.php')?>
        <?php require_once ('sidebar.php') ?>

        <center>
            <div>
                <?php
                $statement = $dbh->prepare("SELECT * FROM games WHERE id=:id");
                $statement->execute(array(
                    "id" => $_SESSION["gameId"]
                ));
                $results = $stmt->fetchAll();
                if(count($results) == 1){
                    foreach($results as $item) {
                        echo $item["games"];
                    }
                    $_SESSION["gameId"] = null;
                    $_SESSION["gameName"] = null;
                }else{
                    //header("Index.php");
                    echo "PPRROOBBLEMS!!!! FAILED";
                }

                ?>
            </div>
        </center>
    </body>
</html>