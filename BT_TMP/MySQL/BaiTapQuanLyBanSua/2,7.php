<?php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Bài 2.7</title>


<style type="text/css">
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    .container>table {
        margin: 0 auto;
        height: 200px;
    }

    table {
        border-collapse: collapse;
        width: 70%;
        height: auto;
        color: #ffff00;
        background-color: whitesmoke;
        text-align: center;
        border: black 3px;

    }
    table,tr,td{
        border: solid;
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

$sql = "SELECT Ten_sua,Trong_luong,Don_gia,Hinh
                FROM  sua ";


$result = mysqli_query($conn, $sql);


echo "<div class='container'>";
echo "<p align='center'><font size='5' color='blue'> THÔNG TIN CÁC SẢN PHẨM</font></P>";

echo "<table align='center' width='500' border='1' cellpadding='2' >";



$dem = 0;
if (mysqli_num_rows($result) <> 0) {


    while ($rows = mysqli_fetch_row($result)) {




        echo "<td><a href='ChiTietSanPham2,7.php'>$rows[0]</a> <br>
                    $rows[1] gr - $rows[2] VNĐ <br>
                    <img src ='Hinh_sua/$rows[3]' height= 50px width= 50px />

            
            </td>";





        $dem++;

        if ($dem == 5)
            echo "<tr>";
        if ($dem >= 10) {
            echo "</tr>";
            break;
        }
    }
}

echo "</table>";
echo "</div>";
?>
<?php
include('../footer.html');
?>