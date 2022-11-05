<?php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Ma trận dạng nhập</title>
<style>
	.container {
		background-color: #8ef1f0;
		padding: 30px 0 30px 0;
	}

	form>table {
		margin: 0 auto;
	}

	tr,
	td {
		padding: 10px;
	}
</style>
<?php

//-- tạo mảng có NxM phần tử, các phần tử có giá trị [1,200]

if (isset($_POST['n'])) {
	$n = $_POST['n'];
} else {
	$n = 0;
}


if (isset($_POST['m'])) {
	$m = $_POST['m'];
} else {
	$m = 0;
}

//-- khởi tạo mảng 2 chiều
$kq = "";


if (isset($_POST['hthi'])) {

	$arr = array();

	for ($i = 0; $i < $n; $i++) {
		for ($j = 0; $j < $m; $j++) {
			$x = rand(1, 200);

			$arr[$i][$j] = $x;
		}
	}
	$kq = "Ma trận $n dòng $m cột:  &#13;&#10;";

	// -- in kết quả mảng random
	for ($i = 0; $i < $n; $i++) {
		for ($j = 0; $j < $m; $j++) {

			$kq .= $arr[$i][$j] . " ";
		}
		$kq .= "&#13;&#10;";
	}



	//-- Hiển thị các phần tử thuộc dòng chẵn cột lẻ


	$kq .= "Các phần tử thuộc dòng chẵn cột lẻ:";
	for ($i = 0; $i < $n; $i++) {
		for ($j = 0; $j < $m; $j++) {
			if ($i % 2 == 0 && $j % 2 != 0)
				$kq .= $arr[$i][$j] . " ";
		}
	}

	//-- Tổng các phần tử là bội số của 10
	$sum = 0;
	for ($i = 0; $i < $n; $i++) {
		for ($j = 0; $j < $m; $j++) {
			if ($arr[$i][$j] % 10 == 0)
				$sum = $sum + $arr[$i][$j];
		}
	}
	$kq .= "&#13;&#10;" . "Tổng giá trị các phần tử là bội số của 10 là: $sum";
}





?>

<div class="container">
	<form method="post">
		<fieldset>
			<legend><b>MA TRẬN DẠNG NHẬP</b></legend>
			<table>
				<tr>
					<td>Số dòng:</td>
					<td><input type="text" name="n" /> (Từ 2 đến 5 dòng)</td>
				</tr>
				<tr>
					<td>Số cột: </td>
					<td><input type="text" name="m" /> (Từ 2 đến 5 cột)</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="Xử lý" name="hthi" />
					</td>
				</tr>
				<tr>
					<td>Kết quả: </td>
					<td>
						<textarea name="textarea" rows="5" cols="33"><?php echo $kq; ?></textarea>
					</td>
				</tr>
			</table>
		</fieldset>

	</form>
</div>

<?php
include('../footer.html');
?>