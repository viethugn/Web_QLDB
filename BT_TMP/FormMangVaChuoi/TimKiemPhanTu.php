<?php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>

<title>Mang tim kiem va thay the</title>

<style type="text/css">
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    form>table {
        margin: 0 auto;
    }

    tr,
    td {
        padding: 10px;
    }

    table {

        color: #ffff00;

        background-color: gray;

    }

    table th {

        background-color: blue;

        font-style: vni-times;

        color: yellow;

    }
</style>

<?php

function tim_kiem($arr, $so, $vitri)
{
    if ($arr[$vitri] == $so) {
        return $vitri;
    }
    return -1;
}
$str = "";
$str_kq = "";
$ketqua = "";
if (isset($_POST['so'])) {
    $so = $_POST['so'];
}
if (isset($_POST['so']) && isset($_POST['tinh'])) {
    $str = $_POST['mang'];
    $arr = explode(",", $str);
    $str_kq = implode(",", $arr);
    $brr = array();
    $j = 0;
    $vt = tim_kiem($arr, $so, 0);
    echo count($brr);
    for ($i = $vt; $i < count($arr); $i++) {
        if (tim_kiem($arr, $so, $i) != -1) {
            $brr[$j] = $i;
            $j++;
        }
    }
    echo count($brr);
    if (empty($brr))
        $ketqua = "Không tìm thấy " . $so . " trong mảng.";
    else {
        $ketqua = "Tìm thấy " . $so . " tại vị trí thứ " . implode(",", $brr) . " của mảng.";
        $brr = array();
    }
    echo count($brr);
}
?>

<div class="container">
    <form action="" method="post">
        <table border="0" cellpadding="0">
            <th colspan="2">
                <h2>TÌM KIẾM</h2>
            </th>
            <tr>
                <td>Nhập mảng:</td>
                <td><input type="text" name="mang" size="70" value="<?php echo $str; ?>" /></td>
            </tr>
            <tr>
                <td>Nhập số cần tìm:</td>
                <td><input type="text" name="so" size="20" value="<?php if (isset($_POST['so'])) echo $_POST['so']; ?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tinh" size="20" value="   Tìm kiếm  " /></td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td><input type="text" name="mang_kq" size="70" disabled="disabled" value="<?php echo $str_kq; ?>" /></td>
            </tr>
            <td>Kết quả tìm kiếm:</td>
            <td><input type="text" name="kq" size="70" disabled="disabled" value="<?php echo $ketqua; ?>" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><label>(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</label></td>
            </tr>
        </table>
    </form>
</div>

<?php
include('../footer.html');
?>