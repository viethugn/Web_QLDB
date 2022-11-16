<?php 
// connect to database
include('../samples/conect_database.php');

$rowsPerPage = 5; //số mẩu tin trên mỗi trang

$data = '';

$page = isset($_POST['page']) ? (int)$_POST['page'] : 1;

//vị trí của mẩu tin đầu tiên trên mỗi trang
$offset = ($page - 1) * $rowsPerPage;

$sql = "SELECT ma_cau_thu, ho_ten_cau_thu, vi_tri, ngay_sinh, gioi_tinh, dia_chi,cau_lac_bo.ten_clb,quoc_gia.ten_qg
from cau_thu, cau_lac_bo, quoc_gia
where cau_thu.ma_clb = cau_lac_bo.ma_clb and cau_thu.ma_qg = quoc_gia.ma_qg LIMIT $offset , $rowsPerPage";

$data .= "
			<div class='table-responsive'>
                <table class='table table-hover progress-table text-center table-striped'>
                    <thead class='text-uppercase thead-dark'>
                        <tr>
							<th scope='col'>Mã cầu thủ</th>
							<th scope='col'>Họ tên</th>
							<th scope='col'>Vị trí</th>
							<th scope='col'>Ngày sinh</th>
							<th scope='col'>Giới tính</th>
							<th scope='col'>Địa chỉ</th>
							<th scope='col'>CLB</th>
							<th scope='col'>Quốc gia</th>
							<th scope='col'>Chi tiết</th>
                        </tr>
                    </thead>
";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) <> 0) {
	while ($rows = mysqli_fetch_array($result)) {
		$id = $rows['ma_cau_thu'];
		$data .= "<tr>";
		$data .= "<td>" . ucfirst($rows['ma_cau_thu']) . "</td>";
		$data .= "<td>" . ucfirst($rows['ho_ten_cau_thu']) . "</td>";
		$data .= "<td>" . ucfirst($rows['vi_tri']) . "</td>";
		$data .= "<td>" . $rows['ngay_sinh'] . "</td>";
		$data .= "<td>" . ucfirst($rows['gioi_tinh']) . "</td>";
		$data .= "<td>" . ucfirst($rows['dia_chi']) . "</td>";
		$data .= "<td>" . ucfirst($rows['ten_clb']) . "</td>";
		$data .= "<td>" . ucfirst($rows['ten_qg']) . "</td>";
		$data .= "<td>
				<ul class='d-flex justify-content-center'>
					<li class='mr-3'><a href='edit.php?id=" . $id . "' class='text-secondary'><i class='fa fa-edit'></i></a></li>
					<li><a href='delete.php?id=" . $id . "' class='text-danger'><i class='ti-trash'></i></a></li>
				</ul>
			</td>";
		$data .= "</tr>";
	}
} else {
	$data .= '   
	<tr>
		<td scope="col">Không có dữ liệu</td>
	</tr>
';
}

$data .= '   
		</table>
	</div>
';

//---------------Pagination 
$re = mysqli_query($conn, "SELECT * from cau_thu");

// tổng số mẩu tin cần hiển thị
$numRows = mysqli_num_rows($re);

//tổng số trang hiển thị
$maxPage = floor($numRows / $rowsPerPage) + 1;

$data .= '<ul class="pagination">';

//tạo link tương ứng tới các trang
function createPagination($maxPage, $page, &$data)
{
	$pageCutLow = $page;
	$pageCutHigh = $page + 2;
	
	for ($i = $pageCutLow; $i <= $pageCutHigh; $i++) {
		$activee=$activee_class="";
		if ($i == $page) {
			$activee = "active";
			$activee_class = "avtivee";
        } 
		$data .= "<li class='page-item' ".$activee." id='".$i."'><span class='page-link ".$activee_class."'>". $i ."</span></li> ";
	}
	if ($page <= $maxPage) {
		if ($page < $maxPage) {
			$data .= "<li class='page-item'><span class='page-link'>...</span></li>";
		}
		// if ($page + 2 == $maxPage) {
		// } else
        // $data .= "<li page=". $maxPage . ">" . $maxPage . "</a></li> ";
	}
}

//gắn thêm nút Back

if ($page > 1) {
	$data .= "<li class='page-item' id='1'><span class='page-link'> << </span></li> ";
	$data .= "<li class='page-item' id='". ($page - 1) ."'><span class='page-link'> < </span></li> ";
}

createPagination($maxPage, $page , $data);


//gắn thêm nút Next
if ($page < $maxPage) {
	$data .= "<li class='page-item' id='". ($page + 1) . "'><span class='page-link'> > </span></li> ";
	$data .= "<li class='page-item' id='". ($maxPage) ."'><span class='page-link'> >> </span></li> ";
}

$data .= '</ul>';

echo $data;
?>
