<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Tính toán trên 2 con số (2) </title>
<style type="text/css">
		.container {
		background-color: #8ef1f0;
		padding: 30px 0 30px 0;
	}

	form>table {
		margin: 0 auto;
	}
	td {
		color: blue;
	}

	h3 {
		font-family: verdana;
		text-align: center;
		/* text-anchor: middle; */
		color: blue;
		font-size: medium;
	}
</style>


<?php

$pheptinh = $_REQUEST["radPT"];
$sothunhat = $_REQUEST["sothunhat"];
if (!$sothunhat || !is_numeric($sothunhat))
	echo "Sai!";
$sothuhai = $_REQUEST["sothuhai"];
if (!$sothuhai || !is_numeric($sothuhai))
	echo "Sai!";
$tinh = $_REQUEST["tinh"];



switch ($pheptinh) {
	case "Cong":
		if (!$sothunhat || !is_numeric($sothunhat)) {
			$tenpheptinh = "Cộng";
			$ketqua = null;
		} else {
			$tenpheptinh = "Cộng";
			$ketqua = $sothunhat + $sothuhai;
		}
		break;
	case "Tru":
		$tenpheptinh = "Trừ";
		$ketqua = $sothunhat - $sothuhai;
		break;
	case "Nhan":
		$tenpheptinh = "Nhân";
		$ketqua = $sothunhat * $sothuhai;
		break;
	default:
		$tenpheptinh = "Chia";
		$ketqua = $sothunhat / $sothuhai;
		break;
}

?>

<div class="container">
	<form align='center' action="" method="post">
		<table>
			<thead>
				<th colspan="2" align="center">
					<h3>PHÉP TÍNH TRÊN HAI CON SỐ</h3>
				</th>
			</thead>
			<tr>
				<td style="color: black;">Chọn phép tính: </td>
				<td style="color: black;"><?php echo $tenpheptinh ?></td>
			</tr>
			<tr>
				<td>Số 1:</td>
				<td><input type="text" name="sothunhat" value="<?php echo $sothunhat; ?> " /></td>
			</tr>
			<tr>
				<td>Số 2:</td>
				<td><input type="text" name="sothuhai" value="<?php echo $sothuhai; ?> " /></td>
			</tr>
			<tr>
				<td>Kết quả:</td>
				<td><input type="text" name="ketqua" value="<?php echo $ketqua; ?> " /> </td>
			</tr>
			<tr>
				<td></td>
				<td>
					<a href="javascript:window.history.back(-1);">Trở về trang trước</a>
				</td>
			</tr>
		</table>
	</form>
</div>
<?php
include('../footer.html');
?>