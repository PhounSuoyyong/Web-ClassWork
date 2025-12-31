<?php
    if (isset($_POST["username"])) {
        $name = htmlspecialchars($_POST["username"]);
        echo "Hello, $name!";
    }
?>
