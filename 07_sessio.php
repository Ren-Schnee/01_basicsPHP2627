<?php
    session_start();
    echo $_SESSION['user'];

    if ($_SESSION['user']=="Daniel"){
        echo ", tens accés.";
    } else {
        echo ", no tens accés.";
    }

?>