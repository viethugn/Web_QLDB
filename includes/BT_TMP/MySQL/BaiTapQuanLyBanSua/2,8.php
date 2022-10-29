<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>




    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'qlbansua')

        or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $sql = "SELECT Ten_sua,Trong_luong,DTP_Dinh_Duong,Loi_ich,Don_gia,Hinh,Ten_hang_sua
        FROM  sua ";


    $result = mysqli_query($conn, $sql);
    echo ' <div class="row mx-auto" style="width: 800px;">
        <h3 align="center" class="col textcolor border border-dark">
            THÔNG TIN CÁC SẢN PHẨM
        </h3>';
    $addtagrow = null;
    $closetagrow = null;
    if (mysqli_num_rows($result) <> 0) {
        $i = 5;
        while ($rows = mysqli_fetch_array($result)) {
            $tensua = $rows['ten_sua'];
            $trongluong = $rows['Trong_luong'] . " gr";
            $tpdinhduong = $rows['TP_Dinh_Duong'];
            $loiich = $rows['Loi_ich'];
            $dongia = $rows['Don_gia'] . " VNĐ";
            $hinh = "../Hinh_sua/" . $rows['Hinh'] . "";
            $tenhangsua = $rows['Ten_hang_sua'];
            if ($i % 5 == 0) {
                $addtagrow = '<div class="row" style="width: 100%;  height: 180px">';
            } else {
                $addtagrow = null;
            }

            echo '
        ' . ($addtagrow) . '
            <div class="col border border-dark">
                <p id="margintop_tensua">
                <a href="hienthithongtin.php?tensua=' . $tensua . '&trongluong=' . $trongluong . '&tpdinhduong
                =' . $tpdinhduong . '&dongia=' . $dongia . '&loiich=' . $loiich . '&tenhangsua=' . $tenhangsua . '&hinh=' . $hinh . '" >
                    <b>' . $rows['ten_sua'] . '</b>
                </a>
                </p>
                <p id="marginbot_nsx">
                    ' . $rows['Trong_luong'] . 'gr - ' . $rows['Don_gia'] . ' VNĐ</p>
                <p><img style="" src="' . '../Hinh_sua/' . $rows['Hinh'] . '" alt=""></p>
            </div>
        ';

            $i++;
            if ($i % 5 == 0) {
                $closetagrow = '
            </div>';
            } else {
                $closetagrow = null;
            }
            echo $closetagrow;
        }
    }
    ?>
</body>

</html>