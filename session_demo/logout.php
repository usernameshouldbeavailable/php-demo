<?php

    session_start();

    $_SESSION["useremail"] = null;

    header("Location: http://localhost/edunet/session_demo/login.php");
    exit();

?>