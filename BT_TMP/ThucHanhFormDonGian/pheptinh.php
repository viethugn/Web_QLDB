<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Tính toán trên 2 con số </title>
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

		color: red;
		font-size: medium;
	}
</style>

<?php
if (isset($_POST['radPT']))
	$pheptinh = trim($_POST['radPT']);

if (isset($_POST['sothunhat']))
	$sothunhat = trim($_POST['sothunhat']);
else {
	$sothunhat = 0;
}
if (isset($_POST['sothuhai']))
	$sothuhai = trim($_POST['sothuhai']);
else {
	$sothuhai = 0;
}


if (isset($_POST['tinh']))
	$tinh = trim($_POST['tinh']);
?>
<div class="container">
	<form align='center' action="ketquapheptinh.php" Method="GET">
		<table>
			<thead>
				<th colspan="2" align="center">
					<h3>PHÉP TÍNH TRÊN HAI CON SỐ</h3>
				</th>
			</thead>
			<tr>
				<td style="color: black;">Chọn phép tính: </td>
				<td style="color: black;">
					<input type="radio" name="radPT" value="Cong" <?php if (isset($_POST['radPT']) && $_POST['radPT'] == 'Cong') echo 'checked="checked"'; ?> checked /> Cộng

					<input type="radio" name="radPT" value="Tru" <?php if (isset($_POST['radPT']) && $_POST['radPT'] == 'Tru') echo 'checked="checked"'; ?> /> Trừ

					<input type="radio" name="radPT" value="Nhan" <?php if (isset($_POST['radPT']) && $_POST['radPT'] == 'Nhan') echo 'checked="checked"'; ?> /> Nhân

					<input type="radio" name="radPT" value="Chia" <?php if (isset($_POST['radPT']) && $_POST['radPT'] == 'Chia') echo 'checked="checked"'; ?> /> Chia
			</tr>
			<tr>
				<td>Số thứ nhất:</td>
				<td><input type="text" name="sothunhat" value="<?php echo $sothunhat; ?> " /></td>
			</tr>
			<tr>
				<td>Số thứ hai:</td>
				<td><input type="text" name="sothuhai" value="<?php echo $sothuhai; ?> " /></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Thực hiện" name="tinh" />
				</td>
			</tr>
		</table>
	</form>
</div>
<?php
include('../footer.html');
?>