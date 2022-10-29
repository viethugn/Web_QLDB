<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>tinh dien tich HCN</title>

    <style type="text/css">
        body {

            background-color: black;

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

    if (isset($_POST['TenChuHo']))



        $TenChuHo = trim($_POST['TenChuHo']);



    else
        echo "<font color='red'>Vui lòng nhập vào tên chủ hộ! </font>";




    if (isset($_POST['ChiSoCu']))



        $ChiSoCu = trim($_POST['ChiSoCu']);



    else {
        $ChiSoCu = "";
        echo "<font color='blue'><br>Vui lòng nhập vào các chỉ số! </font>";
    }




    if (isset($_POST['ChiSoMoi']))



        $ChiSoMoi = trim($_POST['ChiSoMoi']);



    else $ChiSoMoi = "";



    if (isset($_POST['DonGia']))



        $DonGia = trim($_POST['DonGia']);



    else $DonGia = 2000;




    if (isset($_POST['tinh']))






        if (is_numeric($ChiSoCu) && is_numeric($ChiSoMoi) && is_numeric($DonGia))





            $ThanhToan = ($ChiSoMoi - $ChiSoCu) * $DonGia;



        else {




            $ThanhToan = "";
        }



    else $ThanhToan = 0;



    ?>







    <form align='center' action="FormTinhTienDien.php" method="post">

        <table>

            <thead>

                <th colspan="2" align="center">
                    <h3>Tính Tiền Điện</h3>
                </th>

            </thead>

            <tr>
                <td>Tên chủ hộ:</td>

                <td><input type="text" name="TenChuHo" value="<?php if (isset($_POST['TenChuHo'])) echo $_POST['TenChuHo'];
                                                                else echo "" ?> " /></td>

            </tr>

            <tr>
                <td>Chỉ số cũ:</td>

                <td><input type="text" name="ChiSoCu" value="<?php echo $ChiSoCu; ?> " /></td>

            </tr>

            <tr>
                <td>Chỉ số mới:</td>

                <td><input type="text" name="ChiSoMoi" value="<?php echo $ChiSoMoi; ?> " /></td>

            </tr>

            <tr>
                <td>Đơn Giá:</td>

                <td><input type="text" name="DonGia" value="<?php echo $DonGia; ?> " /></td>

            </tr>


            <tr>
                <td>Số tiền thanh toán:</td>



                <td><input type="text" name="ThanhToan" disabled="disabled" value="<?php echo $ThanhToan; ?> " /></td>



            </tr>



            <tr>



                <td colspan="2" align="center"><input type="submit" value="Tính tiền" name="tinh" /></td>



            </tr>



        </table>



    </form>


    <br><br>
    <?php
    include('../../backindex.html');
    ?>
</body>



</html>