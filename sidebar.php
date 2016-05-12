<?php

// Connect to the database
require_once('connectvars.php');

// Retrieve the comment data from MySQL
$query = "SELECT * FROM comments order by TIMESTAMP";
$stmt = $dbh->prepare($query);
$stmt->execute();
$score = $stmt->fetchAll();

  // Loop through the array of score data, formatting it as HTML
echo '<table>';
$i = 0;
foreach ($comment as $row) {
    // Display the score data
    if($i==0){
        echo '<tr><td colspan="2" class="comment-header">' . $gameName . ' Comments</td></tr>';
    }
    echo '<tr><td class="scoreinfo">';
    echo '<span class="score">' . $row['score'] . '</span><br />';
    echo '<strong>Name:</strong> ' . $row['name'] . '<br />';
    echo '<strong>Date:</strong> ' . $row['date'] . '</td>';
    //  Point to right file location
    if (is_file(GW_UPLOADPATH . $row['screenshot']) && filesize(GW_UPLOADPATH . $row['screenshot']) > 0) {
        echo '<td><img src="'.GW_UPLOADPATH . $row['screenshot'].'" alt="Score image" /></td></tr>';
    }
    else {
        echo '<td><img src="images/unverified.gif" alt="Unverified score" /></td></tr>';
    }
    $i++;
}
echo '</table>';


?>

<?php echo("
    <div id=\"sidebar-container\">
        <div id='comments-contain'>
            <div id='comment-table'>
                <table>
                    <tr><p>a</p></tr>
                </table>
            </div>
        </div>
    </div>
")?>