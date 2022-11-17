<?php

session_start();

unset($_SESSION["name"]);

header("Location:./samples/login.php");

?>