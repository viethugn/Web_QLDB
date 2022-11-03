
<?php

// connect to database
include('../samples/conect_database.php');

$rowsPerPage = 5; //số mẩu tin trên mỗi trang

if (!isset($_GET['page'])) {
	$_GET['page'] = 1;
}
//vị trí của mẩu tin đầu tiên trên mỗi trang
$offset = ($_GET['page'] - 1) * $rowsPerPage;

$sql = 'select ma_cau_thu, ho_ten_cau_thu, vi_tri, ngay_sinh, gioi_tinh, dia_chi,cau_lac_bo.ten_clb,quoc_gia.ten_qg
	from cau_thu, cau_lac_bo, quoc_gia
    where cau_thu.ma_clb = cau_lac_bo.ma_clb and cau_thu.ma_qg = quoc_gia.ma_qg  
    LIMIT ' . $offset . ', ' . $rowsPerPage;

//thực thi câu lệnh sql
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) <> 0) {
	while ($rows = mysqli_fetch_array($result)) {
		$id = $rows['ma_cau_thu'];
		echo "<tr>";
		echo "<td>" . $rows['ma_cau_thu'] . "</td>";
		echo "<td>" . $rows['ho_ten_cau_thu'] . "</td>";
		echo "<td>" . $rows['vi_tri'] . "</td>";
		echo "<td>" . $rows['ngay_sinh'] . "</td>";
		echo "<td>" . $rows['gioi_tinh'] . "</td>";
		echo "<td>" . $rows['dia_chi'] . "</td>";
		echo "<td>" . $rows['ten_clb'] . "</td>";
		echo "<td>" . $rows['ten_qg'] . "</td>";
		echo "<td>
				<ul class='d-flex justify-content-center'>
					<li class='mr-3'><a href='edit.php?id=" . $id . "' class='text-secondary'><i class='fa fa-edit'></i></a></li>
					<li><a href='delete.php?id=" . $id . "' class='text-danger'><i class='ti-trash'></i></a></li>
				</ul>
			</td>";
		echo "</tr>";
	}
} else {
	echo "<h5>Không có bản ghi nào!</h5>";
}
// ngắt kết nối
mysqli_close($conn);
?>
