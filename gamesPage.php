




<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
    <?php require('Connector.php'); require_once ("nav.php"); ?>
        <div>
            <?php
                $gameType = $_SESSION["game"];
                switch($gameType){
                    case "":

                        // game snake

                        break;

                    case "snake":
                        
                            // game snake

                        break;
                    default:

                            //A random game

                        break;
                }
            ?>
        </div>
    </body>
</html>

