<?php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Tìm năm âm lịch</title>
<style type="text/css">
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    form>table {
        margin: 0 auto;
    }

    table {
        /* color: #ffff00; */
        background-color: #B8EEFF;
        text-align: center;
    }

    th {
        background-color: blue;
        font-style: vni-times;
        color: yellow;
    }

    .wid3 {
        width: 100px;
    }
</style>

<?php
//mảng các hàng can
$array_hangcan = array(
    1 => "Giáp",
    2 => "Ất",
    3 => "Bính",
    4 => "Đinh",
    5 => "Mậu",
    6 => "Kỷ",
    7 => "Canh",
    8 => "Tân",
    9 => "Nhâm",
    0 => "Quý"
);
//mảng các hàng chi
$array_chi = array(
    1 => "Tý",
    2 => "Sửu",
    3 => "Dần",
    4 => "Mão",
    5 => "Thìn",
    6 => "Tị",
    7 => "Ngọ",
    8 => "Mùi",
    9 => "Thân",
    10 => "Dậu",
    11 => "Tuất",
    0 => "Hợi"
);
$array_hinh = array(
    1 => "chuot.jpg",
    2 => "suu.jpg",
    3 => "dan.jpg",
    4 => "meo.jpg",
    5 => "thin.jpg",
    6 => "ty.jpg",
    7 => "ngo.jpg",
    8 => "mui.jpg",
    9 => "than.jpg",
    10 => "dau.jpg",
    11 => "tuat.jpg",
    0 => "hoi.jpg"
);
$amlich = $hinh_anh = "";

if (isset($_POST['tim'])) {
    if (empty($_POST['duonglich'])) {
        echo "<font color='red'>Bạn chưa nhập năm dương lịch!</font>";
    } elseif ($_POST['duonglich'] < 1008) {
        echo "<font color='red'>Nhập năm lớn hơn bằng 1008!</font>";
    } elseif (is_numeric($_POST['duonglich'])) {
        $nam_dl = $_POST['duonglich'];
        $nam_tru = $nam_dl - 3;
        //tinh can
        $nam = $nam_tru % 10;
        foreach ($array_hangcan as $x => $val) {
            if ($nam == $x) {
                $can = $val;
            }
        }
        //tính chi
        $nam = $nam_tru %  12;
        foreach ($array_chi as $x => $val) {
            if ($nam == $x) {
                $chi = $val;
                //lấy tham số hình ảnh của chi
                $hinh = $array_hinh[$x];
            }
        }

        $hinh_anh = "<img src='images/$hinh' alt='Ảnh con giáp' width='128' height='100'>";
        $amlich = $can . ' ' . $chi;
    } else {
        echo "<font color='red'>Bạn phải nhập số!</font>";
    }
}
?>
<div class="container">
    <form action="" method="post">
        <table width="400" border="0" cellpadding="2" cellspacing="2">
            <th colspan="3">
                <h2>TÍNH NĂM ÂM LỊCH</h2>
            </th>
            <tr>
                <td>Năm dương lịch</td>
                <td></td>
                <td>Năm âm lịch</td>
            </tr>
            <tr>
                <td>
                    <input class="wid3" type="text" name="duonglich" value="<?php if (isset($_POST['duonglich'])) echo $_POST['duonglich']; ?>" />
                </td>
                <td>
                    <input class="sub" type="submit" style="color: red;" name="tim" value=" => " />
                </td>
                <td>
                    <input class="wid3" type="text" name="amlich" value="<?php echo $amlich ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center"><?php echo $hinh_anh; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><label>*(Nhập năm dương lịch lớn hơn bằng 1008!)</label></td>
            </tr>
        </table>
    </form>
</div>
<?php
include('../footer.html');
?>