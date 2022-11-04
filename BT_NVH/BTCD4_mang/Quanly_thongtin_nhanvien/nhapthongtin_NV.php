<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Thông tin nhân viên</title>

<style>
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
        width: 900px;
    }

    .container form>fieldset {
        margin: 0 auto;
    }

    table,
    th,
    td {
        border: 3px solid white;
        border-collapse: collapse;
        font-size: large;
        padding: 5px;
    }

    th,
    td {
        background-color: #FAF2B8;
        width: 300px;
    }

    body {
        text-align: center;
    }

    form {
        display: inline-block;
    }

    .wid1 {
        width: 250px;
    }

    .wid2 {
        width: 200px;
    }

    .wid3 {
        width: 150px;
    }

    .error {
        color: red;
        font-size: 16px;
    }
</style>


<?php include 'xulythongtin_NV.php'; ?>
<div id="div_center" style="border: 2px solid grey;  width: 90%; margin-left: 4em; " class="container">
    <h2>QUẢN LÝ NHÂN VIÊN</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Họ và tên:</td>
                <td>
                    <input class="wid1" type="text" name="hoten" value="<?php if (isset($_POST['hoten'])) echo $_POST['hoten']; ?>" />
                    <span class="error">* <br><?php echo $hotenErr; ?></span>
                </td>
                <td>
                    Số con:
                </td>
                <td>
                    <input class="wid3" type="text" name="socon" value="<?php if (isset($_POST['socon'])) echo $_POST['socon']; ?>" />
                    <span class="error">* <br><?php echo $soconErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td>
                    <input class="wid2" type="text" placeholder="dd/mm/yyyy" name="ngaysinh" value="<?php if (isset($_POST['ngaysinh'])) echo $_POST['ngaysinh']; ?>" />
                    <span class="error">* <br><?php echo $ngaysinhErr; ?></span>
                </td>
                <td>Ngày vào làm:</td>
                <td>
                    <input class="wid2" type="text" placeholder="dd/mm/yyyy" name="ngayvaolam" value="<?php if (isset($_POST['ngayvaolam'])) echo $_POST['ngayvaolam']; ?>" />
                    <span class="error">* <br><?php echo $ngayvaolamErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td>
                    <input type="radio" name="gioitinh" value="nam" <?php if (isset($_POST['gioitinh']) && ($_POST['gioitinh']) == "nam") echo 'checked' ?> />Nam
                    <input type="radio" name="gioitinh" value="nu" <?php if (isset($_POST['gioitinh']) && ($_POST['gioitinh']) == "nu") echo 'checked' ?> />Nữ
                    <span class="error">* <br><?php echo $gioitinhErr; ?></span>
                </td>
                <td>Hệ số lương:</td>
                <td>
                    <input class="wid3" type="text" name="hesoluong" value="<?php if (isset($_POST['hesoluong'])) echo $_POST['hesoluong']; ?>" />
                    <span class="error">* <br><?php echo $hesoluongErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>Loại nhân viên:</td>
                <td>
                    <input type="radio" name="nv" value="vp" onchange="this.form.submit();" <?php if (isset($_POST['nv']) && ($_POST['nv']) == "vp") echo 'checked="checked"' ?> />Văn phòng

                </td>
                <td colspan="2">
                    <input type="radio" name="nv" value="sx" onchange="this.form.submit();" <?php if (isset($_POST['nv']) && ($_POST['nv']) == "sx") echo 'checked="checked"' ?> />Sản xuất
                    <span class="error" style="margin-left: 50px;">* <?php echo $loainhanvienErr; ?></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    Số ngày vắng:
                    <input class="wid3" type="text" name="songayvang" <?php echo $disabled_so_nv; ?> value="<?php if (isset($_POST['songayvang'])) echo $_POST['songayvang']; ?>" />
                    <span class="error">* <br><?php echo $songayvangErr; ?></span>
                </td>
                <td colspan="2">
                    Số sản phẩm:
                    <input class="wid3" type="text" name="sosanpham" <?php echo $disabled_so_sp; ?> value="<?php if (isset($_POST['sosanpham'])) echo $_POST['sosanpham']; ?>" />
                    <span class="error">* <br><?php echo $sosanphamErr; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style=" background-color: white;">
                    <input type="submit" name="tinhluong" value="TÍNH LƯƠNG" />
                </td>
            </tr>
            <tr>
                <td>Tiền lương: </td>
                <td>
                    <input class="wid2" type="text" name="tienluong" value="<?php echo $tienluong . " VNĐ"; ?>" disabled />
                </td>
                <td>Trợ cấp: </td>
                <td>
                    <input class="wid2" type="text" name="trocap" value="<?php echo $trocap . " VNĐ" ?>" disabled />
                </td>
            </tr>
            <tr>
                <td>Tiền thưởng: </td>
                <td>
                    <input class="wid2" type="text" name="tienthuong" value="<?php echo $tienthuong . " VNĐ" ?>" disabled />
                </td>
                <td>Tiền phạt: </td>
                <td>
                    <input class="wid2" type="text" name="tienphat" value="<?php echo $tienphat . " VNĐ"; ?>" disabled />
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style=" background-color: #FAF2B8;">
                    Thực lĩnh:
                    <input class="wid1" type="text" name="thuclinh" value="<?php echo $thuclinh . " VNĐ"; ?>" disabled />
                </td>
            </tr>
        </table>
    </form>
    <fieldset style="color: red;">
        <legend>Ghi chú:</legend>
        <table style="color: red;">
            <tr>
                <td style="font-size: 14px;">
                    <?php
                    echo "Lương cơ bản của nhân viên: 1.490.000đ " . "<br>";
                    echo "Nhân viên văn phòng: " . "<br>";
                    echo "- Định mức vắng: 3" . "<br>";
                    echo "- Đơn giá phạt: 100000đ" . "<br>";
                    ?>
                </td>
                <td style="font-size: 14px;">
                    <?php
                    echo "Lương cơ bản của nhân viên: 1.490.000đ " . "<br>";
                    echo "Nhân viên sản xuất: " . "<br>";
                    echo "- Định mức sản phẩm: 3" . "<br>";
                    echo "- Đơn giá sản phẩm: 25000đ" . "<br>";
                    ?>
                </td>
            </tr>
            <tr></tr>
        </table>

    </fieldset>
</div>
<?php
include('../footer.html');
?>