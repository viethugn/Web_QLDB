<?php

session_start();

unset($_SESSION["name"]);
unset($_SESSION["id"]);

header("Location:./samples/login.php");

?>