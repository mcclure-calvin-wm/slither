

<?php

    require('Connector.php');
    if(isset($_SESSION['password'])){
        header("Location: index.php");
    }


        if(isset($_POST['pass'])) {
            $username = $_POST['userName'];
            $password = $_POST['pass'];

            $prepData = array(
                "password" => $password,
                "username" => $username
            );
            $stmt = $dbh->prepare("SELECT username, password FROM Signin WHERE username=:username AND password=:password;");
            $stmt->execute($prepData);
            $results = $stmt->fetchAll();
            if(count($results) == 1){
                if(isset($_SESSION['password'])) {
                    unset($_SESSION['password']);
                    unset($_SESSION['userName']);
                }
                $_SESSION["password"] = $password;
                $_SESSION["userName"] = $username;
                $_SESSION['registered'] = 1;
                echo "Registered.";
                echo $username;
                echo $password;
                header("Location: index.php");
            }else {
                var_dump($result);
                echo "Error... Reloading...";
                //echo '<script>window.location.assign("signin.php")</script>';
            }
        }


?>



<html>
    <head>
        <title>Slither</title>
        <link rel="stylesheet" type="text/css" href="createAccount.css">
        <?php require_once ("links.php"); ?>
    </head>
    <body>
        <?php require_once ("nav.php") ?>
        <center style="margin-top: 10%">
            <form method="post" id="sectionstartingsection" onblur="<?php $stmt1 = $dbh->prepare("SELECT username FROM Signin WHERE username=:username"); $stmt1->execute(array("username" => $_POST['userName'])); $results1 = $stmt1->fetchAll(); if(count($results1)!==1){echo $_POST['userName']; var_dump($results1);} ?>">
                <label>Username:</label><br>
                <input type="text" name="userName" id="userName" required class="createinput">
                <br>
                <br>
                <label>Password:</label><br>
                <input type="password" name="pass" id="pass" required class="createinput">
                <br>
                <br>

                <button type="submit" name="submit" id="submitbutton" value="1" class="subButon">  Enter   </button>
            </form>
            <br>
            <a href="createAccount.php" id="link">Don't have an account?</a>
        </center>
    </body>
</html>
