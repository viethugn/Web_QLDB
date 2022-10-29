<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Nhập và tính trên dãy số</title>
    <style type="text/css">
        table {
            /* color: #ffff00; */
            background-color: #CEE6E3;
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
</head>

<body>
    <?php
    $str = "";
    $arr = array();
    $ketqua = $mangErr = $gtln = $gtnn = $mang = "";
    //-------------tạo mảng
    function Tao_mang($n)
    {
        for ($i = 0; $i < $n; $i++) {
            $arr[$i] = rand(0, 20);
        }
        return $arr;
    }
    //---------- hàm tính tổng
    function Tinhtong($arr, $n)
    {
        $tong = 0;
        for ($i = 0; $i < $n; $i++) {
            if ($arr[$i] != 0)
                $tong += $arr[$i];
            if ($arr[$i] === 0)
                $tong += $arr[$i];
        }
        return $tong;
    }
    //--------------giá trị lớn nhất
    function GTLN($arr, $n)
    {
        $max = $arr[0];;
        for ($i = 1; $i < $n; $i++) {
            if ($max < $arr[$i])
                $max = $arr[$i];
        }
        return $max;
    }
    //---------------giá trị nhỏ nhất
    function GTNN($arr, $n)
    {
        $min = $arr[0];;
        for ($i = 1; $i < $n; $i++) {
            if ($min > $arr[$i])
                $min = $arr[$i];
        }
        return $min;
    }
    //------------------------
    if (isset($_POST['tinh'])) {


        if ($_POST["n"] === '') {
            $mangErr = "<font color='red'>Bạn chưa nhập mảng</font>";
        } elseif (!is_numeric($_POST["n"])) {
            $mangErr = "<font color='red'>Cần nhập số!</font>";
        } elseif ($_POST["n"] <= 0) {
            $mangErr = "<font color='red'>Cần nhập các phần tử lớn hơn 0!</font>";
        } else {
            //-----------thêm dấu phẩy sau mỗi số
            $arr = implode(",", Tao_mang($_POST['n']));
            //hiển thị
            $mang = $arr;
            $gtln = GTLN(explode(",", $mang), $_POST['n']);
            $gtnn = GTNN(explode(",", $mang), $_POST['n']);
            $ketqua = Tinhtong(explode(",", $mang), $_POST['n']);
        }
    }

    ?>

    <form action="" method="post">
        <table border="0" cellpadding="0">
            <th colspan="2">
                <h2>Tính trên dãy số</h2>
            </th>
            <tr>
                <td>Nhập các phần tử:</td>
                <td>
                    <input type="text" name="n" size="70" value="<?php if (isset($_POST['n'])) echo $_POST['n']; ?>" required />
                    <span class="error">(*)<br> <?php echo $mangErr; ?></span>
                </td>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tinh" size="20" value=" Phát sinh và tính toán" /></td>
            </tr>
            <tr>
                <td>Mảng: </td>
                <td><input type="text" name="mang" size="70" value="<?php echo $mang; ?>" disabled /></td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mảng: </td>
                <td><input type="text" name="gtln" size="70" value="<?php echo $gtln; ?>" disabled /></td>
            </tr>
            <tr>
                <td>GTNN (MIN) trong mảng: </td>
                <td><input type="text" name="gtnn" size="70" value="<?php echo $gtnn; ?>" disabled /></td>
            </tr>
            <tr>
                <td>Tổng mảng: </td>
                <td><input type="text" name="ketqua" size="70" value="<?php echo $ketqua; ?>" disabled /></td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    (<span class="error">Ghi chú: </span>Các phần tử trong mảng sẽ sẽ có giá trị từ 0 đến 20)

                </td>
            </tr>
        </table>
    </form>
    <link rel="stylesheet" href="../../../../../includes/backindex.css" type="text/css" media="screen" />
    <button class="button-19" role="button"><a href="../../../../../baitap.php">Back Home</a></button>
</body>

</html>