<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Thông tin sữa phân trang</title>

<style>
	tbody tr:nth-child(odd) {
		background-color: #f7c9fc;
	}
	.container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    .container table {
        margin: 0 auto;
    }

    table,
    th,
    tr,
    td {
        border: solid;
    }
	

	th,
	td {
		padding: 5px;
	}

	.textcolor {
		color: red;
		background-color: #94efcc;
	}

	/* tr:nth-child(even) {
        background-color: #f7c9fc;
    } */
	tr:hover {
		background-color: #ECECEC;
	}

	.pagdiv {
		margin-top: 20px;
	}
</style>


<?php
// Ket noi CSDL

$conn = mysqli_connect('localhost', 'root', '', 'qlbansua')
	or die('Could not connect to MySQL: ' . mysqli_connect_error());
mysqli_set_charset($conn, 'UTF8');
$rowsPerPage = 5; //số mẩu tin trên mỗi trang, giả sử là 10
if (!isset($_GET['page'])) {
	$_GET['page'] = 1;
}
//vị trí của mẩu tin đầu tiên trên mỗi trang
$offset = ($_GET['page'] - 1) * $rowsPerPage;

$sql = 'select Ma_sua,ten_sua,loai_sua.Ten_loai,hang_sua.Ten_hang_sua,Trong_luong,Don_gia 
	from sua,loai_sua,hang_sua 
    where sua.Ma_loai_sua = loai_sua.Ma_loai_sua and sua.Ma_hang_sua = hang_sua.Ma_hang_sua  
    LIMIT ' . $offset . ', ' . $rowsPerPage;
$result = mysqli_query($conn, $sql);
echo "<div class='container'>";
echo "<p align='center'><font size='5' color='blue'> THÔNG TIN SỮA</font></P>";
echo "<table align='center' width='700' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";
echo '<tr>
    <th width="50">STT</th>
    <th width="50">Mã sữa</th>
    <th width="250">Tên sữa</th>
    <th width="250">Hãng sữa</th>
    <th width="150">Tên loại</th>
    <th width="200">Trọng lượng</th>
    <th width="150">Đơn giá</th>
</tr>';
if (mysqli_num_rows($result) <> 0) {
	$stt = 1;
	while ($rows = mysqli_fetch_row($result)) {
		echo "<tr>";
		echo "<td>$stt</td>";
		echo "<td>$rows[0]</td>";
		echo "<td>$rows[1]</td>";
		echo "<td>$rows[2]</td>";
		echo "<td>$rows[3]</td>";
		echo "<td>$rows[4]</td>";
		echo "<td>$rows[5]</td>";
		echo "</tr>";
		$stt += 1;
	}
}

// if(mysqli_num_rows($result)<>0)
// {
// //hiển thị dữ liệu
// }
echo "</table>";
echo "</div>";
$re = mysqli_query($conn, 'select * from sua');
// //tổng số mẩu tin cần hiển thị
$numRows = mysqli_num_rows($re);
// //tổng số trang
// $maxPage = floor($numRows/$rowsPerPage) + 1; 
// echo 'Tong so trang la: '.$maxPage;
//tổng số trang
$maxPage = floor($numRows / $rowsPerPage) + 1;
echo "<div align='center' class='pagdiv'> ";
//gắn thêm nút Back
if ($_GET['page'] > 1) {
	echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . (1) . ">
			<<
			</a> ";
}
if ($_GET['page'] > 1) {
	echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 1) . ">
			<
			</a> ";
}
//tạo link tương ứng tới các trang
for ($i = 1; $i <= $maxPage; $i++) {
	if ($i == $_GET['page']) {
		echo '<b>' . $i . '</b> '; //trang hiện tại sẽ được bôi đậm
	} else
		echo "<a  href=" . $_SERVER['PHP_SELF'] . "?page="
			. $i . ">" . $i . "</a> ";
}
//gắn thêm nút Next
if ($_GET['page'] < $maxPage) {
	echo "<a href = " . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . ">
			>
			</a>";
}
if ($_GET['page'] < $maxPage) {
	echo "<a href = " . $_SERVER['PHP_SELF'] . "?page=" . ($maxPage) . ">
			>>
			</a>";
}
//echo "<p align='center'>Tong so trang la: ".$maxPage ."</p>";
echo "</div>";

//echo"</table>";


?>
<?php
include('../footer.html');
?>