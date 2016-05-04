<?php
    require('Connector.php');

    if(isset($_POST['user_comm']) && isset($_POST['user_name'])){
        $comment=$_POST['user_comm'];
        $name=$_POST['user_name'];
        $insert= "insert into comments values('','$name','$comment',CURRENT_TIMESTAMP)";

        $select = "SELECT name,comment,post_time from comments where name='$name' and comment='$comment'";
        $stmt = $dbh->prepare($select);
        $stmt->execute(array(
            "name"=> $_SESSION["userName"],
            "comment" => $comment
        ));
        $results = $stmt->fetchAll();

        foreach($results as $row){
            $name=$row['name'];
            $comment=$row['comment'];
            $time=$row['post_time'];
            ?>
            <div class="comment_div">
                <p class="name">Posted By:<?php echo $name;?></p>
                <p class="comment"><?php echo $comment;?></p>
                <p class="time"><?php echo $time;?></p>
            </div>
            <?php
        }
        exit;
    }
?>

<html>

    <head>
        <link rel="icon" href="images/slither-logo.png">
        <title>Slither</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link href="nav.css" rel="stylesheet" type="text/css">
            <script type="text/javascript">
                function post(){
                    var xhttp;
                    var comment = document.getElementById("comment").value;
                    var name = document.getElementById("username").value;
                    if(name !== null){
                        xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (xhttp.readyState == 4 && xhttp.status == 200) {
                                document.getElementById("txtHint").innerHTML = xhttp.responseText;
                            }
                        };
                        xhttp.open("GET", "getcustomer.asp?q="+str, true);
                        xhttp.send();
                    }
                }
        </script>

    </head>

    <body>
        <?php require_once ("nav.php"); ?>
        <h1>Instant Comment System Using Ajax,PHP and MySQL</h1>

        <form method='post' action="" onsubmit="return post();">
            <textarea id="comment" placeholder="Write Your Comment Here....."></textarea>
            <br>
            <input type="text" id="username" placeholder="Your Name">
            <br>
            <input type="submit" value="Post Comment">
        </form>

        <div id="all_comments">
            <?php

            $comm = "SELECT name, comment, post_time from comments order by post_time desc";
            $stmt = $dbh->prepare($comm);
            $stmt->execute();
            $results = $stmt->fetchAll();
            foreach($results as $row){
                $name=$row['name'];
                $comment=$row['comment'];
                $time=$row['post_time'];
                ?>

                <div class="comment_div">
                    <p class="name">Posted By:<?php echo $name;?></p>
                    <p class="comment"><?php echo $comment;?></p>
                    <p class="time"><?php echo $time;?></p>
                </div>

                <?php
            }
            ?>
        </div>
    </body>
</html>