<?php
session_start(); //sử dụng để bắt đầu một session.
?>
<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tính tiền điện</title>
<style>
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    .container>fieldset {
        margin: 0 auto;
    }

    fieldset {
        background-color: #eeeeee;
        width: 50%;
    }

    legend {
        background-color: gray;
        color: white;
        padding: 5px 10px;
    }
</style>
<div class="container">
    <fieldset>
        <legend>Thong tin</legend>
        <?php
        $id = $_SESSION["id"];
        if ($id == "gv") {
            //lấy thông tin

            $gioitinh = $_SESSION["gioitinh"];
            $hoten = $_SESSION["hoten"];
            $diachi = $_SESSION["diachi"];
            $trinhdo = $_SESSION["trinhdo"];
            $luongcb = $_SESSION["luongcb"];
            $luong = $_SESSION["luong"];
            //hiển thị thông tin
            echo "Thông tin GIÁO VIÊN: <br/>";
            echo "Họ tên: $hoten<br/>";
            echo "Địa chỉ: $diachi<br/>";
            if ($gioitinh == 'nam')
                echo "Giới tính: Nam<br/>";
            elseif ($gioitinh == 'nu')
                echo "Giới tính: Nữ<br/>";
            if ($trinhdo == 'cunhan')
                echo "Trình độ: Cử nhân<br/>";
            elseif ($trinhdo == 'thacsi')
                echo "Trình độ: Thạc sĩ<br/>";
            elseif ($trinhdo == 'tiensi')
                echo "Lương cơ bản: Tiến sĩ<br/>";
            echo "Lương theo trình độ: $luong";
        }
        if ($id == "sv") {
            //lấy thông tin
            $gioitinh = $_SESSION["gioitinh"];
            $hoten = $_SESSION["hoten"];
            $diachi = $_SESSION["diachi"];
            $nganh = $_SESSION["nganh"];
            $luongcb = $_SESSION["luongcb"];
            //hiển thị thông tin
            echo "Thông tin SINH VIÊN <br/>";
            echo "Họ tên: $hoten<br/>";
            echo "Địa chỉ: $diachi<br/>";
            if ($gioitinh == 'nam')
                echo "Giới tính: Nam<br/>";
            elseif ($gioitinh == 'nu')
                echo "Giới tính: Nữ<br/>";
            //--------------------
            if ($nganh == 'cntt')
                echo "Ngành: Công nghệ thông tin<br/>";
            elseif ($nganh == 'kt')
                echo "Ngành: Kinh tế<br/>";
            elseif ($nganh == 'khac')
                echo "Ngành: Khác<br/>";
            echo "Điểm thưởng: $luongcb";
        }

        ?>
    </fieldset>

    <p>Page 2</p>
    <a href="./oopthongtinGV_HS.php">Back to Page 1</a>
</div>

<?php
include('../footer.html');
?>