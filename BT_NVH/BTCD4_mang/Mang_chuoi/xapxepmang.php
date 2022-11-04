<?php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Xắp xếp mảng tăng/giảm</title>
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
        background-color: #CEE6E3;
    }
    table tr>td{
        padding: 5px;
    }
    table th {
        background-color: blue;
        font-style: vni-times;
        color: yellow;
    }
</style>

<?php
$str = "";
$str_tangdan = "";
$str_giamdan = "";
$arr = array();

function hoanvi(&$a, &$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}
function tang_dan(&$arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {
                // Hoan vi 2 so a[i] va a[j]
                hoanvi($arr[$i], $arr[$j]);
            }
        }
    }
}
function giam_dan(&$arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] < $arr[$j]) {
                // Hoan vi 2 so a[i] va a[j]
                hoanvi($arr[$i], $arr[$j]);
            }
        }
    }
}
function Countmang(&$arr)
{
    $dem = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $dem += 1;
    }
    return $dem;
}
//------------------------------
if (isset($_POST['tinh'])) {

    $str = $_POST['mang'];
    //-----------tách dấu phẩy
    $arr = explode(",", $str);
    if ($_POST["mang"] === '') {
        echo "<font color='red'>Bạn chưa nhập mảng</font>";
    } elseif (Countmang($arr) <= 1) {
        echo "<font color='red'>Cần nhập mảng nhiều hơn!</font>";
    } else {
        //đưa mảng vào file
        $myfile = fopen("dulieu_bai8.txt", "w") or die("không thể mở file!");
        fwrite($myfile, $str);
        fclose($myfile);

        //hiển thi kêt quả
        giam_dan($arr);
        $str_giamdan = implode(",", $arr);
        tang_dan($arr);
        $str_tangdan = implode(",", $arr);
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
                <td><input type="text" name="mang" size="70" value="<?php if (isset($_POST['mang'])) echo $_POST['mang']; ?>" required /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tinh" size="20" value=" Xắp xếp tăng/giảm " /></td>
            </tr>
            <tr>
                <td style="color: red;">Mảng sau khi xắp xếp:</td>
                <td></td>
            </tr>
            <tr>
                <td>Tăng dần:</td>
                <td><input type="text" name="mang_tangdan" size="70" disabled="disabled" value="<?php echo $str_tangdan; ?>" /></td>
            </tr>
            <td>Giảm dần:</td>
            <td><input type="text" name="mang_giamdan" size="70" disabled="disabled" value="<?php echo $str_giamdan; ?>" /></td>
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