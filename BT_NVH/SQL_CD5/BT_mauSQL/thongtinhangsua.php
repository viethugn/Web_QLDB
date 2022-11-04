<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Thông tin hãng sữa</title>
<style>
    /* tbody tr:nth-child(odd) {
        background-color: #f2f2f2;
    } */
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }
    .container table{
        margin: 0 auto;
    }
    table,th,tr,td {
        border: solid;
    }

    th,
    td {
        padding: 5px;
    }

    .textcolor {
        color: red;
        background-color: #6af472;
    }

    tr:nth-child(even) {
        background-color: #f7c9fc;
    }

    tr:hover {
        background-color: #ECECEC;
    }
</style>


<?php
// Ket noi CSDL
//require("connect.php");
$conn = mysqli_connect('localhost', 'root', '', 'qlbansua')
    or die('Could not connect to MySQL: ' . mysqli_connect_error());
$sql = 'select Ma_hang_sua,ten_hang_sua,Dia_chi,Dien_thoai,Email from hang_sua';
$result = mysqli_query($conn, $sql);
echo "<div class='container'>";
echo "<p align='center'><font size='5' color='blue'> THÔNG TIN HÃNG SỮA</font></P>";
echo "<table align='center' width='800' border='1' cellpadding='2' cellspacing='2'>";
echo '<tr>
    <th width="50" class="textcolor">Mã HS</th>
    <th width="150" class="textcolor">Tên hãng sữa</th>
    <th width="250" class="textcolor">Địa chỉ</th>
    <th width="60" class="textcolor">Điện thoại</th>
    <th width="60" class="textcolor">Email</th>
</tr>';

if (mysqli_num_rows($result) <> 0) {
    while ($rows = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<td>$rows[0]</td>";
        echo "<td>$rows[1]</td>";
        echo "<td>$rows[2]</td>";
        echo "<td>$rows[3]</td>";
        echo "<td>$rows[4]</td>";
        echo "</tr>";
    }
}
echo "</table>";
echo "</div>";
?>
<?php
include('../footer.html');
?>