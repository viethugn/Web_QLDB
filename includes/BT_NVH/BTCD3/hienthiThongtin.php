<?php
    session_start();//sử dụng để bắt đầu một session.
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tính tiền điện</title>
</head>
<body>
    
<?php 
$hoten=$_SESSION["name"];
$gioitinh=$_SESSION["sex"];
$diachi=$_SESSION["address"];
$sdt=$_SESSION["phone"];
$quoctich=$_SESSION["nationality"];
$ghichu=$_SESSION["note"];
echo "Họ tên: $hoten <br/>"; 
echo "Giới tính: $gioitinh<br/>";
echo "Địa chỉ: $diachi<br/>";
echo "Điện thoại: $sdt<br/>"; 
echo "Quốc tịch: $quoctich<br/>";
echo "Môn học: ";   
foreach($_SESSION["subjects"] as $value){
    echo $value.",";
}
echo "<br/>";
echo "Ghi chú: $ghichu<br/>";
?>
<a href="./nhapThongtin.htm">Back to page 1</a>
<br><br>
<?php
	include('../../backindex.html');
?>
</body>
</html>