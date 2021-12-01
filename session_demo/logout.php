<?php

    session_start();

    $_SESSION["useremail"] = null;

    header("Location: login.php");
    exit();

?>