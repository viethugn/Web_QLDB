<?php
session_start(); //sử dụng để bắt đầu một session.
?>
<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Tính tiền điện</title>
<style>
    .container {
        background-color: #d24dff;
        padding: 30px 0 30px 0;
    }

    form>table {
        margin: 0 auto;
    }
</style>
<div class="container">
    <?php
    $hoten = $_SESSION["name"];
    $gioitinh = $_SESSION["sex"];
    $diachi = $_SESSION["address"];
    $sdt = $_SESSION["phone"];
    $quoctich = $_SESSION["nationality"];
    $ghichu = $_SESSION["note"];
    echo "Họ tên: $hoten <br/>";
    echo "Giới tính: $gioitinh<br/>";
    echo "Địa chỉ: $diachi<br/>";
    echo "Điện thoại: $sdt<br/>";
    echo "Quốc tịch: $quoctich<br/>";
    echo "Môn học: ";
    foreach ($_SESSION["subjects"] as $value) {
        echo $value . ",";
    }
    echo "<br/>";
    echo "Ghi chú: $ghichu<br/>";
    ?>
    <a href="./nhapThongtin.htm">Back to page 1</a>
</div>


<?php
include('../footer.html');
?>