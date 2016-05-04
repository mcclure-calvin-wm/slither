<?php
    require('Connector.php');
    if(!empty($_SESSION["userName"])){
        header("Location: Index.php");
    }
    if(!empty($_POST['pass']) & !empty($_POST['username'])) {

            $username = $_POST['username'];
            $password = $_POST['pass'];
            $email = $_POST['email'];
            $first = $_POST['first'];
            $last = $_POST['last'];

            if (isset($username)) {
                $prepData = array(
                    "firstN" => $first,
                    "lastN" => $last,
                    "password" => $password,
                    "email" => $email,
                    "username" => $username
                );
                //print_R($prepData);
                $stmt = $dbh->prepare("INSERT INTO Signin(firstname,
                        lastname,
                        password,
                        email,
                        username)
                VALUES(
                      :firstN,
                      :lastN,
                      :password,
                      :email,
                      :username)");
                $result = $stmt->execute($prepData);
                if ($result) {
                    $_SESSION["password"] = $password;
                    $_SESSION["userName"] = $username;
                    $_SESSION['registered'] = 1;
                    echo "Registered.";
                    header("Location: Index.php");
                } else {
                    //var_dump($result);
                    echo "Error creating account.";
                    header("Location: createAccount.php");
                }
            }
    }
?>

<!DOCTYPE html>
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
            <div id="login-form">
                <form method="post">
                    <label>First name: </label><input type="text" name="first" required/><br>

                    <label>Last name: </label><input type="text" name="last" required/><br>

                    <label>Username: </label><input type="text" name="username" required/><br>

                    <label>Email: </label><input type="text" name="email" required/><br>

                    <label>Password: </label><input type="password" name="pass" required/><br>

                    <button type="submit" name="signup" value="1">Sign up</button></form>
            </div>
        </center>
    </body>
</html>
