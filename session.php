<?php

    // important to start session with this function
    session_start();

    // to set session value
    $_SESSION["username"] = "Avinash Seth";

    // to get session value
    echo $_SESSION["username"];

?>