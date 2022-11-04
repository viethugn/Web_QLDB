<?php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Mảng ma trận số nguyên</title>
<style>
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    form>table {
        margin: 0 auto;
    }

    .textareaa {
        /* margin: 0 auto; */
        margin-left: 500px;
    }
    table tr>td{
        padding: 5px;
    }

    .sub_kq {
        background-color: #2C7FE9;
    }
</style>

<?php
function dongchan_cotle($matran, $dong, $cot)
{
    for ($i = 0; $i < $dong; $i++) {
        for ($j = 0; $j < $cot; $j++) {
            if (($i % 2 == 0) && ($j % 2 != 0)) {
                echo "Dòng chẵn: $i cột lẻ: $j: ";
                echo $matran[$i][$j] . "\n";
            }
        }
    }
}

function TongPTBoi10($matran, $dong, $cot)
{
    $tong = 0;
    for ($i = 0; $i < $dong; $i++) {
        for ($j = 0; $j < $cot; $j++) {
            if ($matran[$i][$j] % 10 == 0)
                $tong = $tong + $matran[$i][$j];
        }
    }
    return $tong;
}
$comment = $boiso = $dong = $cot = $matran = "";

if (isset($_POST['gui'])) {
    if (empty($_POST['dong'])) {
        echo "<font color='red'>Bạn chưa nhập số dòng!</font>";
    } elseif (!(is_numeric($_POST['dong']))) {
        echo "<font color='red'>Số dòng phải là số!</font>";
    } elseif (empty($_POST['cot'])) {
        echo "<font color='red'>Bạn chưa nhập số cột!</font>";
    } elseif (!(is_numeric($_POST['cot']))) {
        echo "<font color='red'>Số cột phải là số!</font>";
    } else {
        $dong = $_POST['dong'];
        $cot = $_POST['cot'];
        $matran = array();
        for ($i = 0; $i < $dong; $i++) {
            for ($j = 0; $j < $cot; $j++)
                $matran[$i][$j] = rand(-1000, 1000);
        }


        for ($i = 0; $i < $dong; $i++) {
            for ($j = 0; $j < $cot; $j++)

                $comment .= $matran[$i][$j] . " ";
            $comment .= "\n";
        }
        $boiso = TongPTBoi10($matran, $dong, $cot);
    }
}


?>
<div class="container">
    <form action="" name="myform" method="post">
        <table>
            <tr>
                <td>So dong:</td>
                <td><input type="text" name="dong" value="<?php if (isset($_POST['dong']))  echo $_POST['dong']; ?>" /></td>
                <td><input type="submit" class="sub_kq" value="IN KET QUA" name="gui"></td>
            </tr>
            <tr>
                <td>So cot:</td>
                <td><input type="text" name="cot" value="<?php if (isset($_POST['cot']))  echo $_POST['cot']; ?>" /></td>
            </tr>

        </table>
        <div class="textareaa">
            <br>
            <textarea name="comment" rows="10" cols="40"><?php echo $comment; ?></textarea>
            <br>
            <span>Dòng chẵn cột lẻ:</span>
            <br>
            <textarea name="hienthi" rows="10" cols="40"><?php dongchan_cotle($matran, $dong, $cot); ?></textarea>
            <br>
            <span>Tổng các phần tử là bội số của 10:</span><input type="text" name="boiso" value="<?php echo $boiso ?>" disabled />
        </div>
    </form>
</div>
<?php
include('../footer.html');
?>