<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Thông tin giảng viên/sinh viên</title>

<style>
	.container {
		background-color: #8ef1f0;
		padding: 30px 0 30px 0;
	}

	form>table {
		margin: 0 auto;
	}

	fieldset {

		background-color: #eeeeee;

	}



	legend {

		background-color: gray;

		color: white;

		padding: 5px 10px;

	}



	input {

		margin: 5px;

	}
</style>

</head>

<body>

	<?php

	abstract class Nguoi
	{

		protected $hoTen, $diaChi, $gioiTinh;

		public function setHoTen($ten)
		{
			$this->hoTen = $ten;
		}

		public function getHoTen()
		{
			return $this->hoTen;
		}

		public function setDiachi($dc)
		{
			$this->diaChi = $dc;
		}

		public function getDiachi()
		{
			return $this->diaChi;
		}

		public function setGioitinh($gt)
		{
			$this->gioiTinh = $gt;
		}

		public function getGioiTinh()
		{
			return $this->gioiTinh;
		}
	}

	class SinhVien extends Nguoi
	{
		private $lopHoc, $nganhHoc;

		public function setLopHoc($lh)
		{
			$this->lopHoc = $lh;
		}

		public function getLopHoc()
		{

			return $this->lopHoc;
		}

		public function setNganhHoc($nh)
		{
			$this->nganhHoc = $nh;
		}

		public function getNganhHoc()
		{
			return $this->nganhHoc;
		}

		function TinhDiem()
		{
			switch ($this->nganhHoc) {
				case "cntt":
					return 1;
					break;
				case "kinhte":
					return 1.5;
					break;
				default:
					return 0;
					break;
			}
		}
	}


	class GiangVien extends Nguoi
	{
		private $trinhDo;
		const Luong = 1500000;


		public function setTrinhDo($td)
		{
			$this->trinhDo = $td;
		}


		public function getLuong()
		{
			return $this->Luong;
		}


		public function getTrinhDo()
		{
			return $this->trinhDo;
		}

		function TinhLuong()
		{
			switch ($this->trinhDo) {
				case "cunhan":
					return 2.34 * self::Luong;
					break;
				case "thacsi":
					return 3.67 * self::Luong;
					break;
				case "tiensi":
					return 5.66 * self::Luong;
					break;
			}
		}
	}


	$str = NULL;
	if (isset($_POST['tinh'])) {
		if (isset($_POST['nghe']) && $_POST['nghe'] == 'SV') {
			$sv = new SinhVien();
			$sv->setHoTen($_POST['hoTen']);
			$sv->setDiaChi($_POST['diaChi']);
			$sv->setGioiTinh($_POST['gioiTinh']);
			$sv->setLopHoc($_POST['lopHoc']);
			$sv->setNganhHoc($_POST['nganhHoc']);
			$str = "Thông tin sinh viên:" . "\n" .
				"Tên:" . $sv->getHoTen() . "\n" .
				"Địa chỉ:" . $sv->getDiachi() . "\n" .
				"Giới tính:" . $sv->getGioiTinh() . "\n" .
				"Lớp học:" . $sv->getLopHoc() . "\n" .
				"Ngành học:" . $sv->getNganhHoc() . "\n" .
				"Tính điểm:" . $sv->TinhDiem();
		}


		if (isset($_POST['nghe']) && $_POST['nghe'] == 'GV') {
			$gv = new GiangVien();
			$gv->setHoTen($_POST['hoTen']);
			$gv->setDiaChi($_POST['diaChi']);
			$gv->setGioiTinh($_POST['gioiTinh']);
			$gv->setTrinhDo($_POST['trinhDo']);
			$str = "Thông tin giảng viên:" . "\n" .
				"Tên:" . $gv->getHoTen() . "\n" .
				"Địa chỉ:" . $gv->getDiachi() . "\n" .
				"Giới tính:" . $gv->getGioiTinh() . "\n" .
				"Trình độ:" . $gv->getTrinhDo() . "\n" .
				"Lương:" . $gv->TinhLuong();
		}
	}




	?>
	<div class="container">
		<form action="" method="post">

			<fieldset>

				<legend>Quản lý thông tin</legend>

				<table border='0'>



					<tr>
						<td>Họ tên:</td>
						<td><input type="text" name="hoTen" value="<?php if (isset($_POST['hoTen'])) echo $_POST['hoTen']; ?>" /></td>
					</tr>
					<tr>
						<td>Địa chỉ:</td>
						<td><input type="text" name="diaChi" value="<?php if (isset($_POST['diaChi'])) echo $_POST['diaChi']; ?>" /></td>
					</tr>
					<tr>
						<td>Giới tính:</td>
						<td><input type="radio" name="gioiTinh" value="Nam" <?php if (isset($_POST['gioiTinh']) && $_POST['gioiTinh'] == 'Nam') echo 'checked="checked"'; ?> checked /> Nam
							<input type="radio" name="gioiTinh" value="Nu" <?php if (isset($_POST['gioiTinh']) && $_POST['gioiTinh'] == 'Nu') echo 'checked="checked"'; ?> />
							N&#7919;
						</td>
					</tr>

					<tr>
						<td>Đối tượng:</td>
						<td><input type="radio" name="nghe" value="GV" <?php if (isset($_POST['nghe']) && $_POST['nghe'] == 'GV') echo 'checked="checked"'; ?> checked />Giảng Viên
							<input type="radio" name="nghe" value="SV" <?php if (isset($_POST['nghe']) && $_POST['nghe'] == 'SV') echo 'checked="checked"'; ?> />
							Sinh Viên
						</td>
					</tr>

					<tr>
						<td colspan="3">

							<fieldset>
								<legend>Giảng viên:</legend>

								Trình độ: <select name="trinhDo">




									<option value="Cử nhân" <?php if (isset($_POST['trinhDo']) && $_POST['trinhDo'] == 'cunhan') echo 'selected'; ?>>

										Cử nhân

									</option>



									<option value="Thạc sĩ" <?php if (isset($_POST['trinhDo']) && $_POST['trinhDo'] == 'thacsi') echo 'selected'; ?>>

										Thạc sĩ

									</option>



									<option value="Tiến sĩ" <?php if (isset($_POST['trinhDo']) && $_POST['trinhDo'] == 'tiensi') echo 'selected'; ?>>

										Tiến sĩ

									</option>

								</select> <br>

								Lương CB:<input type="text" name="luong" value="1500000" />
							</fieldset>
						</td>

						<td colspan="3">
							<fieldset>
								<legend>Sinh viên</legend>

								Ngành học <select name="nganhHoc">

									<option value="Công nghệ thông tin" <?php if (isset($_POST['nganhHoc']) && $_POST['nganhHoc'] == 'cntt') echo 'selected'; ?>>

										Công nghệ thông tin

									</option>

									<option value="Kinh tế" <?php if (isset($_POST['nganhHoc']) && $_POST['nganhHoc'] == 'kinhte') echo 'selected'; ?>>

										Kinh tế

									</option>

									<option value="Ngành khac" <?php if (isset($_POST['nganhHoc']) && $_POST['nganhHoc'] == 'khac') echo 'selected'; ?>>

										Ngành khác
									</option>

								</select> <br>

								Lớp học <input type='text' name='lopHoc' size='40' value='<?php if (isset($_POST['lopHoc'])) echo $_POST['lopHoc']; ?> ' />
								<br>
							</fieldset>
						</td>
					</tr>


					<tr>
						<td colspan="2" align="center"><input type="submit" name="tinh" value="Xử Lý" /></td>
					</tr>

					<tr>
						<td>Kết quả:</td>

						<td><textarea name="ketqua" cols="40" rows="10" disabled="disabled"><?php echo $str; ?></textarea></td>
					</tr>

				</table>

			</fieldset>

		</form>

	</div>
	<?php
	include('../footer.html');
	?>