<?php

    session_start();
    session_destroy();

    header("Location: welcome.blade.php");

?>