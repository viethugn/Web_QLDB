<?php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Nhập và tính trên dãy số</title>
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

    .error {
        color: #FF0000;
    }

    input {
        margin: 5px;
        padding: 4px;
    }
</style>

<?php
$str = "";
$arr = array();
$ketqua = $mangErr = "";

//hàm tính tổng
function Tinhtong($arr)
{
    $tong = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] != 0)
            $tong += $arr[$i];
        if ($arr[$i] === 0)
            $tong += $arr[$i];
    }
    return $tong;
}
function Countmang($arr)
{
    $dem = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $dem += 1;
    }
    return $dem;
}


if (isset($_POST['tinh'])) {
    //gán các giá trị nhập vào str
    $str = $_POST['mang'];
    //-----------tách dấu phẩy
    $arr = explode(",", $str);

    if ($_POST["mang"] === '') {
        $mangErr = "<font color='red'>Bạn chưa nhập mảng</font>";
    } elseif (Countmang($arr) <= 1) {
        $mangErr = "<font color='red'>Cần nhập mảng nhiều hơn!</font>";
    } else {
        //đưa mảng vào file
        $myfile = fopen("dulieu_bai4.txt", "w") or die("Không thể mở file!");
        fwrite($myfile, $str); //ghi vào file
        fclose($myfile); //đóng

        //hiển thi kêt quả
        $ketqua = Tinhtong($arr);
    }
}

?>
<div class="container">
    <form action="" method="post">
        <table border="0" cellpadding="0">
            <th colspan="2">
                <h2>Tính trên dãy số</h2>
            </th>
            <tr>
                <td>Nhập các phần tử:</td>
                <td>
                    <input type="text" name="mang" size="70" value="<?php if (isset($_POST['mang'])) echo $_POST['mang']; ?>" required />
                    <span class="error">(*)<br> <?php echo $mangErr; ?></span>
                </td>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tinh" size="20" value=" Tổng dãy số" /></td>
            </tr>
            <tr>
                <td>Tổng dãy số: </td>
                <td><input type="text" name="ketqua" size="70" value="<?php echo $ketqua; ?>" disabled /></td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <span class="error">(*)</span>
                    Các phần tử trong mảng sẽ cách nhau bằng dấu ","

                </td>
            </tr>
        </table>
    </form>

</div>
<?php
include('../footer.html');
?>