<?php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>

<title>Mảng thay thế</title>

<style type="text/css">
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    form>table {
        margin: 0 auto;
    }

    table tr>td {
        padding: 5px;
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
// function tim_kiem($arr,$so){
//     for($i=0;$i<count($arr);$i++){
//         if($arr[$i]==$so){
//             return $i;
//         }
//     }
//     return -1;
// }
function thay_the($arr, $socanthay)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $socanthay) {
            return $i; //vịtrí
        }
    }
    return -1;
}
$arr = array();

$str = "";
$str_cu = "";
$str_moi = "";
if (isset($_POST['sothay'])) {
    $sothay = $_POST['sothay'];
}
if (isset($_POST['socanthay'])) {
    $socanthay = $_POST['socanthay'];
}
if (isset($_POST['mang'])) {
    $mang = $_POST['mang'];
}

if (isset($_POST['socanthay']) && isset($_POST['sothay']) && isset($_POST['tinh'])) {

    if (empty($_POST['mang'])) {
        echo "<font color='red'>Bạn chưa nhập mảng</font>";
    } elseif (empty($_POST['socanthay'])) {
        echo "<font color='red'>Bạn chưa nhập giá trị cần thay</font>";
    } elseif (empty($_POST['sothay'])) {
        echo "<font color='red'>Bạn chưa nhập giá trị thay</font>";
    } elseif (!(is_numeric($_POST['socanthay']) && is_numeric($_POST['sothay']))) {
        echo "<font color='red'>Phải nhập số</font>";
    } else {
        $str = $_POST['mang'];
        for ($i = 0; $i < count($arr); $i++) {
            $brr[$i] = $arr[$i];
        }
        $arr = explode(",", $str);
        $brr = explode(",", $str);
        $str_cu = implode(",", $arr);

        //$vitri=thay_the($arr,$socanthay);
        for ($i = 0; $i < count($arr); $i++) {
            if ($brr[$i] == $socanthay) {
                $brr[$i] = $sothay;
            }
        }
        $str_moi = implode(",", $brr);
    }
}

?>
<div class="container">
    <form action="" method="post">
        <table border="0" cellpadding="0">
            <th colspan="2">
                <h2>THAY THẾ</h2>
            </th>
            <tr>
                <td>Nhập các phần tử:</td>
                <td><input type="text" name="mang" size="70" value="<?php if (isset($_POST['mang'])) echo $_POST['mang']; ?>" /></td>
            </tr>
            <tr>
                <td>Giá trị cần thay thế:</td>
                <td><input type="text" name="socanthay" size="20" value="<?php if (isset($_POST['socanthay'])) echo $_POST['socanthay']; ?>" /></td>
            </tr>
            <tr>
                <td>Giá trị thay thế:</td>
                <td><input type="text" name="sothay" size="20" value="<?php if (isset($_POST['sothay'])) echo $_POST['sothay']; ?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tinh" size="20" value="   Thay thế  " /></td>
            </tr>
            <tr>
                <td>Mảng cũ:</td>
                <td><input type="text" name="mang_cu" size="70" disabled="disabled" value="<?php echo $str_cu; ?>" /></td>
            </tr>
            <td>Mảng sau khi thay thế:</td>
            <td><input type="text" name="mang_moi" size="70" disabled="disabled" value="<?php echo $str_moi; ?>" /></td>
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