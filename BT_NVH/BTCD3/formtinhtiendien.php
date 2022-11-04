<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Tính tiền điện</title>
<style type="text/css">
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    form>table {
        margin: 0 auto;
    }

    table {

        background: #ffd94d;

        border: 0 solid yellow;

    }

    thead {

        background: #fff14d;

    }

    td {

        color: blue;

    }

    h3 {

        font-family: verdana;

        text-align: center;

        /* text-anchor: middle; */

        color: #ff8100;

        font-size: medium;

    }
</style>
</head>

<body>
    <?php

    $tenchuho = $chisocu = $chisomoi = $sotienthanhtoan = "";


    // if (empty($_POST["tenchuho"])) {
    //     echo "<font color='red'>Chưa có tên chủ hộ </font>";
    // } else {
    //     $tenchuho = trim($_POST['tenchuho']);
    // }
    // if (empty($_POST["chisocu"])) {
    //     echo "<font color='red'>Chưa nhập chỉ số cũ </font>";
    // } else {
    //     $chisocu = trim($_POST['chisocu']);
    // }
    // if (empty($_POST["chisomoi"])) {
    //     echo "<font color='red'>Chưa nhập chỉ số mới</font>";
    // } else {
    //     $chisomoi = trim($_POST['chisomoi']);
    // }
    // if(( is_numeric($chisomoi) && is_numeric($chisocu)))
    //     echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
    if (isset($_POST['tinh'])) {
        if (empty($_POST["tenchuho"])) {
            echo "<font color='red'>Chưa có tên chủ hộ </font>";
        } elseif (empty($_POST["chisocu"])) {
            echo "<font color='red'>Chưa nhập chỉ số cũ </font>";
        } elseif (empty($_POST["chisomoi"])) {
            echo "<font color='red'>Chưa nhập chỉ số mới</font>";
        } else {
            $tenchuho = trim($_POST['tenchuho']);
            $chisocu = trim($_POST['chisocu']);
            $chisomoi = trim($_POST['chisomoi']);
        }
        if ((is_numeric($chisomoi) && is_numeric($chisocu))) {
            if ($_POST['chisocu'] < $_POST['chisomoi']) {
                $sotienthanhtoan = ($chisomoi - $chisocu) * 2000;
            } else {
                echo "<font color='red'>Chỉ số cũ phải nhỏ hơn chỉ số mới </font>";
                $sotienthanhtoan = "";
            }
        }
    } else $sotienthanhtoan = 0;
    ?>
    <div class="container">
        <form action="" method="post">
            <table>
                <thead>
                    <th colspan="2" align="center">
                        <h3>Thanh toán tiền điện</h3>
                    </th>
                </thead>
                <tr>
                    <td>Tên chủ hộ:</td>
                    <td>
                        <input type="text" name="tenchuho" value="<?php echo $tenchuho; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Chỉ số cũ:</td>
                    <td>
                        <input type="text" name="chisocu" value="<?php echo $chisocu; ?>" />
                        (Kw)
                    </td>
                </tr>
                <tr>
                    <td>Chỉ số mới:</td>
                    <td>
                        <input type="text" name="chisomoi" value="<?php echo $chisomoi; ?>" />
                        (Kw)
                    </td>
                </tr>
                <tr>
                    <td>Đơn giá:</td>
                    <td><input type="text" name="dongia" value="2000" />
                        (VNĐ)
                    </td>
                </tr>
                <tr>
                    <td>Số tiền thanh toán:</td>
                    <td>
                        <input type="text" name="sotienthanhtoan" disabled="disabled" value="<?php echo $sotienthanhtoan; ?> " />
                        (VNĐ)
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Tính" name="tinh" />
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <?php
    include('../footer.html');
    ?>