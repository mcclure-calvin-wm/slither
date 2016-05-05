<?php
    require("Connector.php");
    session_destroy();
    header("Location: signin.php");
?>