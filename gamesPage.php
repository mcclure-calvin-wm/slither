<?php
    require("Connector.php");
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="game.css">
        <link rel="icon" href="images/slither-logo.png">
        <title>Slither</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link href="nav.css" rel="stylesheet" type="text/css">
            <script type="text/javascript">
                function post()
                {
                    var comment = document.getElementById("comment").value;
                    var name = document.getElementById("username").value;
                    if(comment && name)
                    {
                        $.ajax
                        ({
                            type: 'post',
                            url: 'post_comment.php',
                            data:
                            {
                                user_comm:comment,
                                user_name:name
                            },
                            success: function (response)
                            {
                                document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
                                document.getElementById("comment").value="";
                                document.getElementById("username").value="";

                            }
                        });
                    }

                    return false;
                }
        </script>

    </head>

    <body>
        <?php
            require("nav.php");
        ?>

        <form method='post' action="" onsubmit="return post();">
            <textarea id="comment" placeholder="Write Your Comment Here....."></textarea>
            <br>
            <input type="text" id="username" placeholder="Your Name">
            <br>
            <input type="submit" value="Post Comment">
        </form>

        <div id="all_comments">
            <?php


            $comm = "select name,comment,post_time from comments order by post_time desc";
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