<?php
// Ket noi CSDL
$conn = mysqli_connect ('localhost', 'root', '', 'quanlydoibong') 
		OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
mysqli_set_charset($conn, 'UTF8'); 
?>