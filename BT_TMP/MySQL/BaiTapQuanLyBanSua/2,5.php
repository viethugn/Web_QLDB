<?php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Bài 2.5</title>


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
</style>

<?php



// Ket noi CSDL

//require("connect.php");

$conn = mysqli_connect('localhost', 'root', '', 'qlbansua')

    or die('Could not connect to MySQL: ' . mysqli_connect_error());

$sql =
    "SELECT Ten_sua,Ten_hang_sua,Ten_loai,Trong_luong,Don_gia,Hinh
    FROM  loai_sua LS INNER JOIN sua S ON LS.Ma_loai_sua = S.Ma_loai_sua
                     INNER JOIN hang_sua HS ON S.Ma_hang_sua = HS.Ma_hang_sua";

$result = mysqli_query($conn, $sql);

echo "<div class='container'>";

echo "<p align='center'><font size='5' color='blue'> THÔNG TIN CÁC SẢN PHẨM</font></P>";

echo "<table align='center' width='500' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";

echo '<tr>

    <th width="30">Ảnh sản phẩm</th>
    <th width="150">Thông tin về sản phẩm</th>

    </tr>';


$dem = 0;
if (mysqli_num_rows($result) <> 0) {


    while ($rows = mysqli_fetch_row($result)) {
        echo "<tr>";

        echo "<td><img src =$rows[5] height= 50px width= 50px></td>";

        echo "<td><b>$rows[0]</b> <br>
                    Nhà sản xuất: $rows[1] <br>
                    $rows[2] - $rows[3] gr - $rows[4] VNĐ
            
            </td>";




        echo "</tr>";
        $dem++;
        if ($dem >= 3)
            break;
    }
}

echo "</table>";
echo "</div>";
//echo"<img src= C:\\xampp\htdocs\\BaiTapTrenLop\MySQL\\BaiTapQuanLyBanSua\\Hinh_sua\\s_abbott_gainadvance_bot_400.jpg>";
?>
<?php
include('../footer.html');
?>