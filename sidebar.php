<?php
//
//// Connect to the database
//require_once('connectvars.php');
//
//// Retrieve the comment data from MySQL
//$query = "SELECT * FROM comments order by TIMESTAMP";
//$stmt = $dbh->prepare($query);
//$stmt->execute();
//$score = $stmt->fetchAll();
//
//  // Loop through the array of score data, formatting it as HTML
//echo '<table>';
//$i = 0;
//foreach ($comment as $row) {
//    // Display the score data
//    if($i==0){
//        echo '<tr><td colspan="2" class="comment-header">' . $gameName . ' Comments</td></tr>';
//    }
//    echo '<tr><td class="scoreinfo">';
//    echo '<span class="score">' . $row['score'] . '</span><br />';
//    echo '<strong>Name:</strong> ' . $row['name'] . '<br />';
//    echo '<strong>Date:</strong> ' . $row['date'] . '</td>';
//    //  Point to right file location
//    if (is_file(GW_UPLOADPATH . $row['screenshot']) && filesize(GW_UPLOADPATH . $row['screenshot']) > 0) {
//        echo '<td><img src="'.GW_UPLOADPATH . $row['screenshot'].'" alt="Score image" /></td></tr>';
//    }
//    else {
//        echo '<td><img src="images/unverified.gif" alt="Unverified score" /></td></tr>';
//    }
//    $i++;
//}
//echo '</table>';
//
//
//?>

<?php echo("
    <div id=\"sidebar-container\">
        <div id='comments-contain'>
            <div id='comment-table'>
        <!-- Begin Comments JavaScript Code --><script type=\"text/javascript\" async>function ajaxpath_573a3e42128d6(url){return window.location.href == '' ? url : url.replace('&s=','&s=' + escape(window.location.href));}(function(){document.write('<div id=\"fcs_div_573a3e42128d6\"><a title=\"free comment script\" href=\"http://www.freecommentscript.com\">&nbsp;&nbsp;<b>Free HTML User Comments</b>...</a></div>');fcs_573a3e42128d6=document.createElement('script');fcs_573a3e42128d6.type=\"text/javascript\";fcs_573a3e42128d6.src=ajaxpath_573a3e42128d6((document.location.protocol==\"https:\"?\"https:\":\"http:\")+\"//www.freecommentscript.com/GetComments2.php?p=573a3e42128d6&s=&Size=10#!573a3e42128d6\");setTimeout(\"document.getElementById('fcs_div_573a3e42128d6').appendChild(fcs_573a3e42128d6)\",1);})();</script><noscript><div><a href=\"http://www.freecommentscript.com\" title=\"free html user comment box\">Free Comment Script</a></div></noscript><!-- End Comments JavaScript Code -->            </div>
        </div>
    </div>
")?>