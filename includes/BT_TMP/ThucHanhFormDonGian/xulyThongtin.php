<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Xử lý thông tin dạng nhập (2)</title>
</head>
<body>


	<p><b>Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn đã nhập:</b></p>
	<p>Họ tên: <?php echo $hoten = $_POST['hoten']; ?> </p>

	<p>Địa chỉ: <?php echo $diachi = $_POST['diachi']; ?></p>
	
	<p>Số điện thoại: <?php echo $sdt = $_POST['sdt']; ?></p>
	
	<p>Giới tính: <?php echo $radGT = $_POST['radGT'];?></p>
	
	<p>Quốc tịch: <?php echo $languages = $_POST['languages']; ?></p>
	
	<p>Môn học: 
		<?php
			$php = isset($_POST['php']);
			if($php)
				echo "PHP & MySQL"; 



			$cshapt = isset($_POST['cshapt']);
			if($cshapt)
				echo ", C#"; 


			$xml = isset($_POST['xml']);
			if($xml)
				echo ", XML"; 



			$python = isset($_POST['python']);
			if($python)
				echo ", PYTHON"; 
		?>	
	</p>
	<p>Ghi chú: 
		<?php 
	 		$txt = isset($_POST['textarea']);
	 		if(empty($txt)){
		        "Không có ghi chú";
	     	}
	     	else
	     		echo $_POST['textarea'];
		?>	
	</p>
	<p><a href="javascript:window.history.back(-1);">Trở về trang trước</a></p>
</body>
</html>