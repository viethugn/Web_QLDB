<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Tìm năm âm lịch</title>

    <style type="text/css">

	table{

		color: #ffff00;

		background-color: gray;		

	}

	table th{

		background-color: blue;

		font-style: vni-times;

		color: yellow;

	}
    </style>
</head>
<body>
<?php

if(isset($_POST['nam']))  



    $nam=trim($_POST['nam']); 



else $nam=0;


        $nam_al="";
        
        if(isset($_POST['tinh']))
    {
        $mang_can = array("Quý", "Giáp" , "Ất" , "Bính" , "Đinh" , "Mậu" , "Kỷ" , "Canh" , "Tân" , "Nhâm");
        $mang_chi = array("Hợi" , "Tý" , "Sửu", "Dần","Mão", "Thìn","Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
        $mang_hinh = array("hoi.jpg" , "chuot.jpg", "suu.jpg","dan.jpg","mao.jpg", "thin.jpg","ty.jpg","ngo.jpg","mui.jpg","than.jpg","dau.jpg","tuat.jpg");
    $nam = $nam-3;
    $can = $nam%10;
    $chi = $nam%12;
    $nam_al=$mang_can[$can];
    $nam_al=$nam_al . " " . $mang_chi[$chi];
    $hinh = $mang_hinh[$chi];
    $hinh_anh = $hinh ;
    }
    

?>

    <form method="post">
    <table border="0" cellpadding="0">


	<th colspan="2"><h2>TÌM KIẾM</h2></th>

	<tr>

		<td>Năm dương lịch:</td>

		<td><input type="text"  name="nam" value="<?php if(isset($_POST['nam'])) echo $nam+3;?>"/></td>

	</tr>

	<tr>

		<td></td>

		<td><input type="submit" name="tinh"  size="15" value="=>"/></td>

	</tr>
	

		<td>Năm âm lịch:</td>

		<td><input type="text" name="nam_al" size= "70" disabled="disabled" value="<?php echo $nam_al;?> "/></td>

	</tr>

    <tr>
    
        <td>
        <img src = "images/<?php echo $hinh_anh?>" alt="">
        </td>
    </tr>

</table>

</form> 
    
</body>
</html>