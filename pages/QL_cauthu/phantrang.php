<?php
// connect to database
include('../samples/conect_database.php');

$re = mysqli_query($conn, 'select * from cau_thu');
// tổng số mẩu tin cần hiển thị
$numRows = mysqli_num_rows($re);

//tổng số trang hiển thị
$maxPage = floor($numRows / $rowsPerPage) + 1;

//tạo link tương ứng tới các trang
function createPagination($maxPage, $page)
{
	$pageCutLow = $page;
	$pageCutHigh = $page + 2;
	for ($i = $pageCutLow; $i <= $pageCutHigh; $i++) {
		echo "<div align='center' class='div_pt'>";
		if ($i == $_GET['page']) {
			echo '<div class="active_bg"><b>' . $i . '</b></div>'; //trang hiện tại sẽ được bôi đậm
		} else
			echo "<a  href=" . $_SERVER['PHP_SELF'] . "?page="
				. $i . ">" . $i . "</a> ";
		echo "</div>";
	}
	if ($page < $maxPage - 1) {
		if ($page < $maxPage - 2) {
			echo "<a  href=" . $_SERVER['PHP_SELF'] . "?page="
				. ($page + 2) . ">...</a>";
		}
		if ($page + 2 == $maxPage) {
		} else
			echo "<a  href=" . $_SERVER['PHP_SELF'] . "?page="
				. $maxPage . ">" . $maxPage . "</a> ";
	}
}

//gắn thêm nút Back

if ($_GET['page'] > 1) {
	echo "<div class='div_pt'>";
	echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . (1) . ">
			<<
			</a> ";
	echo "</div>";
}
if ($_GET['page'] > 1) {
	echo "<div class='div_pt'>";
	echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 1) . ">
			<
			</a> ";
	echo "</div>";
}

echo createPagination($maxPage, $_GET['page']);

//gắn thêm nút Next
if ($_GET['page'] < $maxPage) {
	echo "<div class='div_pt'>";
	echo "<a href = " . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . ">
			>
			</a>";
	echo "</div>";
}
if ($_GET['page'] < $maxPage) {
	echo "<div class='div_pt'>";
	echo "<a href = " . $_SERVER['PHP_SELF'] . "?page=" . ($maxPage) . ">
			>>
			</a>";
	echo "</div>";
}
