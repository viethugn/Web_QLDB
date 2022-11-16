<?php
// Start the session
session_start();
//hiển thị tên admin trên navbar top
echo isset($_SESSION["name"]) ? $_SESSION["name"] : "Admin";
?>