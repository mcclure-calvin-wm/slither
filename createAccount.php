
<?php
require('Connector.php');

if(!empty($_SESSION["userName"])){
    header("Location: Index.php");
}
if(!empty($_POST['pass'])){

    $username = $_POST['username'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $first = $_POST['first'];
    $last = $_POST['last'];

    if(isset($username)){
        $prepData = array(
            "firstN"=>$first,
            "lastN"=>$last,
            "password"=>$password,
            "email"=>$email,
            "username"=>$username
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
        if($result){
            $_SESSION["password"] = $password;
            $_SESSION["userName"] = $username;
            $_SESSION['registered'] = 1;
            echo "Registered.";
            header("Location: Index.php");
        }else {
            //var_dump($result);
            echo "Error creating account.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="nav.css">
</head>
<body>
<?php require_once ("nav.php");?>
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
        <li id="li6"><a href="adventure.php"><img src="images/prof.png" width="50" height="50" ></a></div>
</ul>



<div id="login-form">
    <form method="post">
        <label>First name: </label><input type="text" name="first" required/><br>

        <label>Last name: </label><input type="text" name="last" required/><br>

        <label>Username: </label><input type="text" name="username" required/><br>

        <label>Email: </label><input type="text" name="email" required/><br>

        <label>Password: </label><input type="password" name="pass" required/><br>

        <button type="submit" name="signup" value="1">Sign up</button></form>
</div>

</body>
</html>
