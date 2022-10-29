<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Tính toán trên 2 con số (2) </title>
	<style type="text/css">
        td {
            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: blue;
            font-size: medium;
        }
	</style>
</head>
<body>

	<?php

		$pheptinh = $_REQUEST["radPT"];
		$sothunhat = $_REQUEST["sothunhat"];
		if(!$sothunhat || !is_numeric($sothunhat))
			echo "Sai!";
		$sothuhai = $_REQUEST["sothuhai"];
		if(!$sothuhai || !is_numeric($sothuhai))
			echo "Sai!";
		$tinh = $_REQUEST["tinh"];
	
		

	 	switch ($pheptinh) {
	 	case "Cong":
			if(!$sothunhat || !is_numeric($sothunhat))
			{
				$tenpheptinh = "Cộng";
				$ketqua = null;
			}
			else
			{
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

	<form align='center' action="" method="post">
		<table>
			<thead>
        		<th colspan="2" align="center"><h3>PHÉP TÍNH TRÊN HAI CON SỐ</h3></th>
    		</thead>
	    	<tr>
	    		<td style="color: black;">Chọn phép tính: </td>
		    	<td style="color: black;"><?php echo $tenpheptinh ?></td>
		    </tr>
		    <tr>
		    	<td>Số 1:</td>
			    <td><input type="text" name="sothunhat" value="<?php  echo $sothunhat;?> "/></td>
		    </tr>
		    <tr>
		    	<td>Số 2:</td>
			    <td><input type="text" name="sothuhai" value="<?php  echo $sothuhai;?> "/></td>
		    </tr>
		    <tr>
		    	<td>Kết quả:</td>
			    <td><input type="text" name="ketqua" value="<?php  echo $ketqua;?> "/> </td>
		    </tr>
		    <tr>
		    	<td></td>
			    <td>
			     	<a href="javascript:window.history.back(-1);">Trở về trang trước</a>
			    </td>
		    </tr>
		</table>
	</form>
	<br><br>
	<?php
	include('../../backindex.html');
	?>
</body>
</html>