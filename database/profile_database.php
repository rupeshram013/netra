<?php

    setcookie("username" , "none" , time() - 1 ,"/");

    header("Location: ../index.php");



?>