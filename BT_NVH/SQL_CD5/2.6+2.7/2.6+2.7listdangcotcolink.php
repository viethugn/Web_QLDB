<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<style>
	/* body {
		margin: 0 auto;
		display: block;
	} */
	.container {
		background-color: #8ef1f0;
		padding: 30px 0 30px 0;
	}


	#margintop_tensua {
		margin-top: 10px;
		font-size: 14px;
		color: #94efcc;
	}
	#margintop_tensua>a {
		color: red;
	}

	#marginbot_nsx {
		margin-bottom: 10px;
		font-size: 14px;
	}

	a {
		text-decoration: none
	}


	p,
	h3 {
		margin: 0px;
	}

	.row {
		margin: 0px;
		padding: 0px;
	}

	img {
		width: 80px;
		height: 80px;
		image-rendering: pixelated;
		object-fit: fill;
		filter: drop-shadow(0 0 3px blue);
		margin: 0 auto;
		display: block;

	}

	.textcolor {
		color: red;
		background-color: #94efcc;
		margin: 0 auto;
		display: block;
		/* padding-top: 5px; */
		font-family: cursive;
	}

	.pagdiv {
		margin-top: 1rem;
	}
</style>

<body>
	<?php
	// Ket noi CSDL

	$conn = mysqli_connect('localhost', 'root', '', 'qlbansua')
		or die('Could not connect to MySQL: ' . mysqli_connect_error());
	mysqli_set_charset($conn, 'UTF8');
	$rowsPerPage = 10; //số mẩu tin trên mỗi trang, giả sử là 10
	if (!isset($_GET['page'])) {
		$_GET['page'] = 1;
	}
	//vị trí của mẩu tin đầu tiên trên mỗi trang
	$offset = ($_GET['page'] - 1) * $rowsPerPage;

	$sql = 'select Hinh,Ten_sua,loai_sua.Ten_loai,TP_Dinh_Duong,Loi_ich,hang_sua.Ten_hang_sua,Trong_luong,Don_gia 
	from sua,loai_sua,hang_sua 
    where sua.Ma_loai_sua = loai_sua.Ma_loai_sua and sua.Ma_hang_sua = hang_sua.Ma_hang_sua  
    LIMIT ' . $offset . ', ' . $rowsPerPage;

	$result = mysqli_query($conn, $sql);
	echo "<div class='container'>";
	echo ' <div class="row mx-auto" style="width: 850px;">
    <h3 align="center" class="col textcolor border border-dark">
		 THÔNG TIN CÁC SẢN PHẨM
	</h3>';
	$addtagrow = null;
	$closetagrow = null;
	if (mysqli_num_rows($result) <> 0) {
		$i = 5;
		while ($rows = mysqli_fetch_array($result)) {
			$tensua = $rows['Ten_sua'];
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
						<b>' . $rows['Ten_sua'] . '</b>
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
	echo '</div>';
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
	echo "</div>";
	?>
	<?php
	include('../footer.html');
	?>