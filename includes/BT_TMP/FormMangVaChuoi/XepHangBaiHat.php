

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Xếp hạng bài hát</title>

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

    function Add($baihat, $hang, &$arr){
        foreach($arr as $key => $x){
            if ($key == $hang) return "Hạng $key đã có!";
        }
        $arr[$hang] = $baihat;
        ksort($arr);
    

    }

    function Xuat($arr){
        $kq = NULL;
        foreach($arr as $key => $x){
            $kq .= $key. ". " . $x . "<br>";
        }
        return $kq;
    }

    function XoaSession(){
        $_SESSION['arr'] = array();
    }

    if (session_id() === '') session_start();
    
    if(!isset($_SESSION["arr"])) $_SESSION["arr"] = array();
    
    $ketqua = NULL;
    
    if(isset($_POST['tinh'])){
        if(isset($_POST['baihat']) && $_POST['baihat'] != ""){
            if(isset($_POST['xephang'])){
                Add($_POST['baihat'], $_POST['xephang'], $_SESSION["arr"]);
                $ketqua = Xuat($_SESSION["arr"]);
            }
            
            else echo "Chưa nhập xếp hạng!";
        }else echo "Chưa nhập bài hát!";
            
    }

    if(isset($_POST['xoa'])){
        XoaSession();
            
    }
            
    

?>



<form action="" method="post">

<table border="0" cellpadding="10">

	<th colspan="5"><h2>Thêm bài hát</h2></th>

	<tr>
        <td> Nhập bài hát:</td>
		<td ><input type='text' name='baihat' size= '50'/></td>
	</tr>

    <tr>

        <td> Xếp hạng:</td>
		<td ><input type='text' name='xephang' size= '50'/></td>
	</tr>
    
		
	<tr>

		<td align="center"><input  type="submit" name="tinh"  size="20" value="  Thêm  "/></td>

        <td align="center"><input  type="submit" name="xoa"  size="20" value="  Xoá danh sách  "/></td>

	</tr>

   

    <tr>

		<td>Kết quả</td> <br>
        <?php echo "<td> $ketqua </td>" ?>

	

	</tr>

	
</table>




</form>

</body>

</html>

