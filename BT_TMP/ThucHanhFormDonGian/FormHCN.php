<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>tinh dien tich HCN</title>

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
<?php



if (isset($_POST['chieudai']))



    $chieudai = trim($_POST['chieudai']);



else $chieudai = 0;



if (isset($_POST['chieurong']))



    $chieurong = trim($_POST['chieurong']);



else $chieurong = 0;



if (isset($_POST['tinh']))



    if (is_numeric($chieudai) && is_numeric($chieurong))



        $dientich = $chieudai * $chieurong;



    else {



        echo "<font color='red'>Vui lòng nhập vào số! </font>";



        $dientich = "";
    }



else $dientich = 0;



?>

<div class="container">
    <form align='center' action="FormHCN.php" method="post">

        <table>

            <thead>

                <th colspan="2" align="center">
                    <h3>DIỆN TÍCH HÌNH CHỮ NHẬT</h3>
                </th>

            </thead>

            <tr>
                <td>Chiều dài:</td>

                <td><input type="text" name="chieudai" value="<?php echo $chieudai; ?> " /></td>

            </tr>

            <tr>
                <td>Chiều rộng:</td>

                <td><input type="text" name="chieurong" value="<?php echo $chieurong; ?> " /></td>

            </tr>

            <tr>
                <td>Diện tích:</td>

                <td><input type="text" name="dientich" disabled="disabled" value="<?php echo $dientich; ?> " /></td>

            </tr>

            <tr>

                <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>

            </tr>

        </table>

    </form>
</div>

<?php
include('../footer.html');
?>