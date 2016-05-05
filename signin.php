

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
                echo '<script>window.location.assign("signin.php")</script>';
            }
        }

?>



<html>
    <head>
        <link rel="icon" href="images/slither-logo.png">
        <title>Slither</title>
        <link rel="stylesheet" href="styles.css">
        <link href="nav.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require_once ("nav.php") ?>
        <center style="margin-top: 10%">
            <form method="post" id="sectionstartingsection">

                <h1>Login</h1>

                <label>Username:</label><input type="text" name="userName" id="userName" required>

                <label>Password:</label><input type="password" name="pass" id="pass" required>

                <button type="submit" name="submit" id="submitbutton" value="1">  Enter   </button>
            </form>
            <a href="createAccount.php">Don't have an account?</a>
        </center>
    </body>
</html>
