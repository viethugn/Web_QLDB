<?php
session_start(); //sử dụng để bắt đầu một session.
?>
<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>

<title>Thông tin Giáo Viên & Sinh Viên</title>
<style>
     .container{
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }
   form>fieldset{
        margin: 0 auto;
    }
    fieldset {
        background-color: #eeeeee;
        width: 700px;
    }
    table tr td>fieldset{
        margin: 20px;
    }
    legend {
        background-color: gray;
        color: white;
        padding: 5px 10px;
    }

    .error {
        color: #FF0000;
    }

    input {
        margin: 5px;
    }
</style>
<?php

abstract class Nguoi
{
    protected $hoten, $diachi, $gioitinh;
    // public function __construct($hoten,$diachi,$gioitinh) {
    //     $this->hoten = $hoten;
    //     $this->diachi = $diachi;
    //     $this->gioitinh = $gioitinh;
    // }
    public function setHoten($hoten)
    {
        $this->hoten = $hoten;
    }
    public function getHoten()
    {
        return $this->hoten;
    }
    public function setDiachi($diachi)
    {
        $this->diachi = $diachi;
    }
    public function getDiachi()
    {
        return $this->diachi;
    }
    public function setGioitinh($gioitinh)
    {
        $this->gioitinh = $gioitinh;
    }
    public function getGioitinh()
    {
        return $this->gioitinh;
    }
    abstract public function tinh_diem_thuong_SV($nganh);
    abstract public function tinh_luong_Gv($trinhdo);
}



class SinhVien extends Nguoi
{
    protected $lop, $nganh;
    public function tinh_diem_thuong_SV($nganh)
    {
        $diemthuong = 0;
        if ($nganh == 'cntt') {
            $diemthuong = 1;
        }
        if ($nganh == 'kt') {
            $diemthuong = 1.5;
        }
        return $diemthuong;
    }
    public function tinh_luong_GV($trinhdo)
    {
        return null;
    }
}


class GiaoVien extends Nguoi
{
    protected $trinhdo;
    const luongCB = 1500000;
    protected $luong = 1500000;
    public function getLuongcb()
    {
        return $this->luong;
    }
    public function tinh_diem_thuong_SV($nganh)
    {
        return null;
    }
    public function tinh_luong_GV($trinhdo)
    {
        if ($trinhdo == 'cunhan') {
            $luong = self::luongCB *  2.34;
        }
        if ($trinhdo == 'thacsi') {
            $luong = self::luongCB *  3.67;
        }
        if ($trinhdo == 'tiensi') {
            $luong = self::luongCB *   5.66;
        }
        return $luong;
    }
}


$luongcbgv = "";
$luongcbsv = "";
$gioitinh = "";
$hotenErr = $diachiErr = $gioitinhErr = $trinhdoErr = $nganhErr = "";
//disabled fieldset C1
$disabledname2 = "";
$disabledname1 = "";

if (!(empty($_POST['nganh']))) {
    //đưa thông tin lên field
    $n = new SinhVien();
    $nganh = $_POST['nganh'];
    $luongcbsv = $n->tinh_diem_thuong_SV($nganh);
}


if (isset($_POST['nguoi']) && ($_POST['nguoi']) == "sv") {
    $n = new SinhVien();
    $disabledname1 = "disabled";
    $disabledname2 = "";
    if (isset($_POST['xuly'])) {
        if (empty($_POST['nganh'])) {
            $nganhErr = "Bạn cần chọn ngành!";
        } else {
            //lấy thông tin
            $n->setHoten($_POST["hoten"]);
            $n->setDiachi($_POST["diachi"]);
            $n->setGioitinh($_POST["gioitinh"]);

            $luongcbsv = $n->tinh_diem_thuong_SV($nganh);
            $id = $_POST['nguoi'];
            $gioitinh = $n->getGioitinh();
            $hoten = $n->getHoten();
            $diachi = $n->getDiachi();
            $nganh = $_POST["nganh"];
            $luongcb = $luongcbsv;
            //lưu vào session
            $_SESSION["id"] = $id;
            $_SESSION["hoten"] = $hoten;
            $_SESSION["diachi"] = $diachi;
            $_SESSION["gioitinh"] = $gioitinh;
            $_SESSION["nganh"] = $nganh;
            $_SESSION["luongcb"] = $luongcbsv;
            header("location: ./oopGV_HS.php");
        }
    }
}
//------------------------------
if (!(empty($_POST['trinhdo']))) {
    //đưa thông tin lên field
    $n = new GiaoVien();
    $trinhdo = $_POST['trinhdo'];
    //đưa thông tin lên field
    $luongcbgv = $n->getLuongcb();
}
if (isset($_POST['nguoi']) && ($_POST['nguoi']) == "gv") {
    $td = new GiaoVien();
    $disabledname2 = "disabled";
    $disabledname1 = "";
    //--------------------------
    if (isset($_POST['xuly'])) {
        if (empty($_POST['trinhdo'])) {
            $trinhdoErr = "Bạn cần chọn trình độ!";
        } else {
            //lấy thông tin
            $n->setHoten($_POST["hoten"]);
            $n->setDiachi($_POST["diachi"]);
            $n->setGioitinh($_POST["gioitinh"]);

            $luongcbgv = $td->getLuongcb();
            $id = $_POST['nguoi'];
            $gioitinh = $n->getGioitinh();
            $hoten = $n->getHoten();
            $diachi = $n->getDiachi();
            $trinhdo = $_POST["trinhdo"];
            $luongcb = $luongcbgv;
            $luong = $n->tinh_luong_GV($trinhdo);
            //lưu vào session
            $_SESSION["id"] = $id;
            $_SESSION["hoten"] = $hoten;
            $_SESSION["diachi"] = $diachi;
            $_SESSION["gioitinh"] = $gioitinh;
            $_SESSION["trinhdo"] = $trinhdo;
            $_SESSION["luongcb"] = $luongcb;
            $_SESSION["luong"] = $luong;
            header("location: ./oopGV_HS.php");
        }
    }
}
if (isset($_POST['xuly'])) {

    if (empty($_POST["hoten"])) {
        $hotenErr = "Bạn chưa nhập họ tên!";
    }
    if (empty($_POST["diachi"])) {
        $diachiErr = "Bạn chưa nhập địa chi!";
    }
    if (empty($_POST["gioitinh"])) {
        $gioitinhErr = "Bạn chưa chọn giới tính!";
    }
}


?>
<div class="container">
    <form action="" method="post">
        <fieldset>
            <legend>Thông tin giáo viên & sinh viên</legend>
            <table border='0'>
                <tr>
                    <td>Chọn thông tin*</td>
                    <td>
                        <input type="radio" name="nguoi" value="gv" onchange="this.form.submit();" <?php if (isset($_POST['nguoi']) && ($_POST['nguoi']) == "gv") echo 'checked="checked"' ?> required />Giáo Viên
                        <input type="radio" name="nguoi" value="sv" onchange="this.form.submit();" <?php if (isset($_POST['nguoi']) && ($_POST['nguoi']) == "sv") echo 'checked="checked"' ?> required />Sinh Viên
                    </td>
                </tr>
                <tr>
                    <td>Nhập họ tên:</td>
                    <td>
                        <input type="text" name="hoten" value="<?php if (isset($_POST['hoten'])) echo $_POST['hoten']; ?>" />
                        <span class="error">* <?php echo $hotenErr; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>Nhập địa chỉ:</td>
                    <td>
                        <input type="text" name="diachi" value="<?php if (isset($_POST['diachi'])) echo $_POST['diachi']; ?>" />
                        <span class="error">* <?php echo $diachiErr; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>Giới tính:</td>
                    <td>
                        <input type="radio" name="gioitinh" value="nam" <?php if (isset($_POST['gioitinh']) && ($_POST['gioitinh']) == "nam") echo 'checked' ?> />Nam
                        <input type="radio" name="gioitinh" value="nu" <?php if (isset($_POST['gioitinh']) && ($_POST['gioitinh']) == "nu") echo 'checked' ?> />Nữ
                        <span class="error">* <?php echo $gioitinhErr; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <fieldset style="width: 200px;" onchange="this.form.submit();" <?php echo $disabledname1; ?>>
                            <legend>Giáo Viên</legend>
                            <select name="trinhdo">
                                <option value="" disabled selected>--Trình độ--</option>
                                <option <?php if (isset($trinhdo) && $trinhdo == 'cunhan') echo "selected=\"selected\""; ?> value="cunhan">Cử nhân</option>
                                <option <?php if (isset($trinhdo) && $trinhdo == 'thacsi') echo "selected=\"selected\""; ?> value="thacsi">Thạc sĩ</option>
                                <option <?php if (isset($trinhdo) && $trinhdo == 'tiensi') echo "selected=\"selected\""; ?> value="tiensi">Tiến sĩ</option>
                            </select>
                            <input type="text" disabled name="luongcbgv" value="<?php echo $luongcbgv; ?>" />
                            <span class="error">* <?php echo $trinhdoErr; ?></span>
                        </fieldset>
                    </td>
                    <td>
                        <fieldset style="width: 200px;" onchange="this.form.submit();" <?php echo $disabledname2; ?>>
                            <legend>Sinh Viên</legend>
                            <select name="nganh">
                                <option value="" disabled selected>--Ngành--</option>
                                <option <?php if (isset($nganh) && $nganh == 'cntt') echo 'selected=\"selected\"'; ?> value="cntt">CNTT</option>
                                <option <?php if (isset($nganh) && $nganh == 'kt') echo 'selected=\"selected\"'; ?> value="kt">Kinh tế</option>
                                <option <?php if (isset($nganh) && $nganh == 'khac') echo 'selected=\"selected\"'; ?> value="khac">Khác</option>
                            </select>
                            <input type="text" disabled name="luongcbsv" value="<?php echo $luongcbsv; ?>" />
                            <span class="error">* <?php echo $nganhErr; ?></span>
                        </fieldset>
                    </td>
                </tr>
                <td colspan="2" align="center">
                    <input style="margin-left: 400px;" type="submit" name="xuly" value="Xử lý" />
                </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <p>Page 1</p><br><br>

</div>

<?php
include('../footer.html');
?>