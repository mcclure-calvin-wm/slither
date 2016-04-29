

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

    $stmt = $dbh->prepare("SELECT * FROM Signin");
    $stmt->execute($prepData);
    $results = $stmt->fetchAll();

    foreach($results as $it){
        if(/*count($result)*/ $it['password'] == $password){
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
}

?>



<html>
    <title>
        The section?
    </title>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="div1">
            <ul>
                <li id="li1"><a href="action.php">Action</a></li>
                <li id="li2"><a href="adventure.php">Adventure</a></li>
                <li id="li3"><a href="puzzle.php">Puzzle</a></li>

            </ul>
        </div>
        <div id="div2">
            <ul>
                <li id="li4"><a href="index.php"><img src="images/home-icon.png" width="50" height="50"> </a></li>
                <li id="li5"><a href="adventure.php"><img src="images/settings.png" width="50" height="50"></a></li>
                <li id="li6"><a href="adventure.php"><img src="images/prof.png" width="50" height="50" ></a></li>
            </ul>
        </div>
        <center>
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
