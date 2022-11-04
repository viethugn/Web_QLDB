<?php
// bắt đầu session
session_start();
?>
<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Trang web thực hiện phép tính trên 2 số</title>
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
    $pheptinh2 = $_SESSION["caculate"];
    $sothunhat = $_SESSION["number1"];
    $sothuhai = $_SESSION["number2"];


    switch ($pheptinh2) {
        case "cong": {
                $ketqua = $sothunhat + $sothuhai;
                break;
            }
        case "tru":
            $ketqua = $sothunhat - $sothuhai;
            break;
        case "nhan":
            $ketqua = $sothunhat * $sothuhai;
            break;
        case "chia":
            $ketqua1 = $sothunhat / $sothuhai;
            $ketqua = round($ketqua1, 2); //lấy hai chữ số sau
            break;
        default:
            $ketqua = '';
    }

    ?>
    <div class="container">
        <form action="" method="post">
            <table>
                <thead>
                    <th colspan="2" align="center">
                        <h3>Phép tính trên hai số</h3>
                    </th>
                </thead>
                <tr>
                    <td>Chọn phép tính</td>
                    <td>
                        <input type="radio" name="pheptinh2" value="cong" <?php if (isset($pheptinh2) && $pheptinh2 == 'cong') echo 'checked'; ?>>Cộng
                        <input type="radio" name="pheptinh2" value="tru" <?php if (isset($pheptinh2) && $pheptinh2 == 'tru') echo 'checked'; ?>>Trừ
                        <input type="radio" name="pheptinh2" value="nhan" <?php if (isset($pheptinh2) && $pheptinh2 == 'nhan') echo 'checked'; ?>>Nhân
                        <input type="radio" name="pheptinh2" value="chia" <?php if (isset($pheptinh2) && $pheptinh2 == 'chia') echo 'checked'; ?>>Chia
                    </td>
                </tr>
                <tr>
                    <td>Số thứ nhất:</td>
                    <td>
                        <input type="text" name="sothunhat" value="<?php echo $sothunhat; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Số thứ hai:</td>
                    <td>
                        <input type="text" name="sothuhai" value="<?php echo $sothuhai; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Kết quả:</td>
                    <td>
                        <input type="text" name="ketqua" disabled="disabled" value="<?php echo $ketqua; ?> " />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <a href="./pheptinhpage1.php">Back to page 1</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <?php
    include('../footer.html');
    ?>