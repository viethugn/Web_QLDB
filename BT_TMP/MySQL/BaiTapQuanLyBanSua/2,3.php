<?php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Thông Tin Khách Hàng</title>




<style type="text/css">
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    .container>table {
        margin: 0 auto;
    }

    table {
        border-collapse: collapse;
        width: 75%;
        height: auto;

        color: #ffff00;

        background-color: whitesmoke;
        text-align: center;
        border: black 3px;

    }

    table th {

        background-color: blue;

        font-style: vni-times;

        color: yellow;
        text-align: center;
        height: 40px;



    }

    table td {

        color: black;
        text-align: center;
        height: 50px;


    }

    tr:nth-child(even) {
        background-color: gray;
    }
</style>


<?php

$manghinh = array("nam.jpg", "nu.jpg");
$conn = mysqli_connect('localhost', 'root', '', 'qlbansua');
mysqli_set_charset($conn, 'UTF8');
$sql = "SELECT * FROM Khach_hang";

$result = mysqli_query($conn, $sql);


echo "<div class='container'>";
echo "<p align='center'><font size='5'> THÔNG TIN KHÁCH HÀNG</font></P>";
echo "<table align='center' width='700' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";
echo '<tr>
    <th width="50">STT</th>
    <th width="300">Mã khách hàng</th>
    <th width="600">Tên khách hàng</th>
    <th width="200">Giới tính</th>
    <th width="1000">Địa chỉ</th>
    <th width="200">Số điện thoại</th>
    </tr>';
if (mysqli_num_rows($result) <> 0) {
    $stt = 1;
    while ($rows = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<td>$stt</td>";
        echo "<td>$rows[0]</td>";
        echo "<td>$rows[1]</td>";
        echo "<td>";
        if ($rows[2] == 1)
            echo "<img src = 'Hinh_sua/nam.jpg' height= 50px width= 50px>";
        else
            echo "<img src = 'Hinh_sua/nu.jpg' height= 50px width= 50px>";
        echo "</td>";


        echo "<td>$rows[3]</td>";
        echo "<td>$rows[4]</td>";

        echo "</tr>";
        $stt += 1;
    }
}
echo "</table>";

echo "</div>";


?>

<?php
include('../footer.html');
?>