
<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>

    <title>GHÉP MẢNG VÀ XỬ LÝ</title>


    <style type="text/css">
        .container{
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }
   form>table{
        margin: 0 auto;
    }
    tr,td{
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
    // initialize sticky form
    if (isset($_POST['inpA']))
        $inpA = $_POST['inpA'];
    else
        $inpA = null;
    if (isset($_POST['inpB']))
        $inpB = $_POST['inpB'];
    else
        $inpB = null;
    if (isset($_POST['countA']))
        $countA = $_POST['countA'];
    else
        $countA = null;
    if (isset($_POST['countB']))
        $countB = $_POST['countB'];
    else
        $countB = null;
    if (isset($_POST['arrC']))
        $arrC = $_POST['arrC'];
    else
        $arrC = null;
    if (isset($_POST['tangDan']))
        $tangDan = $_POST['tangDan'];
    else
        $tangDan = null;
    if (isset($_POST['giamDan']))
        $giamDan = $_POST['giamDan'];
    else
        $giamDan = null;
    // execute form
    if (isset($_POST['tinh'])) {
        $arrA = array();
        $arrB = array();
        $arrA = explode(",", $inpA);
        $arrB = explode(",", $inpB);
        $countA = count($arrA);
        $countB = count($arrB);
        $arrC = implode(",", array_merge($arrA, $arrB));
        $tmpTD_C = explode(",", $arrC);
        sort($tmpTD_C);
        $tangDan = implode(",", $tmpTD_C);
        $tmpGD_C = explode(",", $arrC);
        rsort($tmpGD_C);
        $giamDan = implode(",", $tmpGD_C);
    }
    ?>
    <div class="container">
        <form action="" method="post">
            <table>
                <th colspan="2" align="center">ĐẾM PHẦN TỬ, GHÉP MẢNG VÀ SẮP XẾP</th>
                <tr>
                    <td>Mảng A: </td>
                    <td><input type="text" value="<?php echo $inpA ?>" name="inpA" required></td>
                </tr>
                <tr>
                    <td>Mảng B: </td>
                    <td><input type="text" value="<?php echo $inpB ?>" name="inpB" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button name="tinh" type="submit">Thực hiện</button></td>
                </tr>
                <tr>
                    <td>Số phần tử mảng A: </td>
                    <td><input type="text" value="<?php echo $countA ?>" name="countA" disabled></td>
                </tr>
                <tr>
                    <td>Số phần tử mảng B: </td>
                    <td><input type="text" value="<?php echo $countB ?>" name="countB" id="countB" disabled></td>
                </tr>
                <tr>
                    <td>Mảng C: </td>
                    <td><input type="text" value="<?php echo $arrC ?>" name="arrC" disabled></td>
                </tr>
                <tr>
                    <td>Mảng C tăng dần: </td>
                    <td><input type="text" value="<?php echo $tangDan ?>" name="tangDan" disabled></td>
                </tr>
                <tr>
                    <td>Mảng C giảm dần: </td>
                    <td><input type="text" value="<?php echo $giamDan ?>" name="giamDan" disabled></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><b>(Ghi chú:</b> Các phần tử trong mảng sẽ có cách nhau bằng dấu ",")</td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    include('../footer.html');
    ?>