
<?php
echo"
    <a href='index.php' id='logo-link'><img src=\"images/slither-logo.png\" id=\"logo-under\"></a>
<div id=\"contain\">
    <div id=\"div1\">
        <ul>
            <li id=\"li1\" class=\"li glow\">
                <a href=\"action.php\" id='action-nav' class='li-link'>Action</a>
            </li>
            <li id=\"li2\" class=\"li glow\">
                <a href=\"adventure.php\" id='adventure-nav' class='li-link'>Adventure</a>
            </li>
            <li id=\"li3\" class=\"li glow\">
                <a href=\"puzzle.php\" id='puzzle-nav' class='li-link'>Puzzle</a>
            </li>
            <li id=\"li4\" class=\"li glow\">
                <a href=\"strategy.php\" id='strategy' class='li-link'>Strategy</a>
            </li>
            <li id=\"li5\" class='glow'>
                <a href=\"card.php\" id='card-nav' class=\"li-link\">Card Games</a>
            </li>
        </ul>
    </div>
    <img src=\"images/slither-logo.png\" id=\"logo\">
    <ul id=\"icon-nav\">
        <li id=\"li4\"><a href=\"index.php\"><img src=\"images/home-icon.png\" width=\"50\" height=\"50\"> </a></li>
        <li id=\"li5\"><a href=\"#\"><img src=\"images/settings.png\" width=\"50\" height=\"50\"></a></li>
        <li id=\"li6\"><a href=\"#\"><img src=\"images/prof.png\" width=\"50\" height=\"50\"></a></li>
    </ul>
    <div id='dropdowns'>
        <div id='sign-in-drop'>
            <table>
                <ul>
                    <li id='drop-one' class='drop-li'>
                        <a href='signin.php' class='drop-link'>Sign In</a>
                    </li>
                    <li id='drop-two' class='drop-li'>
                        <a href='createAccount.php' class='drop-link'>Create Account</a>
                    </li>
                </ul>
            </table>
        </div>
    </div>
</div>
";?>