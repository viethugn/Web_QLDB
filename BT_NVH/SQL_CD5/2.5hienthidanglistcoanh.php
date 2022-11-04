<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Thông tin sữa</title>
</head>
<style>
	.container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }
	.container table{
		margin: 0 auto;
	}
    tbody tr:nth-child(odd) {
        background-color: #f7c9fc;
    }
	 table,tr,td, th {
        /* border-collapse: collapse; */
		border: solid;
    }
    th, td {
        padding: 2px;
    }
    #margintop_tensua{
        margin-top: 10px;
    }
    #marginbot_nsx{
        margin-bottom: 10px;
    }
    a{text-decoration: none}
    p{
        margin: 0px;
    }
    img{
        width: 110px;
        height: 110px;
        image-rendering: pixelated;
        object-fit: fill;
        filter: drop-shadow(0 0 3px blue);
        margin: 0 auto;
        display: block;
    }
    .textcolor{
        color: red;
        background-color: #94efcc;
    }
    /* tr:nth-child(even) {
        background-color: #f7c9fc;
    } */
    tr:hover {background-color: #ECECEC;}
	.pagdiv{
		margin-top: 20px;
	}
</style>
<body>
<?php
// Ket noi CSDL

$conn = mysqli_connect ('localhost', 'root', '', 'qlbansua') 
		OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
mysqli_set_charset($conn, 'UTF8');
$rowsPerPage = 3; //số mẩu tin trên mỗi trang, giả sử là 10
if (!isset($_GET['page']))
{ 
	$_GET['page'] = 1;
}
//vị trí của mẩu tin đầu tiên trên mỗi trang
$offset =($_GET['page']-1)*$rowsPerPage;
	
$sql = 'select Hinh,ten_sua,loai_sua.Ten_loai,hang_sua.Ten_hang_sua,Trong_luong,Don_gia 
	from sua,loai_sua,hang_sua 
    where sua.Ma_loai_sua = loai_sua.Ma_loai_sua and sua.Ma_hang_sua = hang_sua.Ma_hang_sua  
    LIMIT '. $offset . ', ' .$rowsPerPage;
$result = mysqli_query($conn, $sql);
echo "<div class='container'>";
echo "<p align='center'><font size='5' color='blue'> THÔNG TIN CÁC SẢN PHẨM</font></P>";
echo "<table align='center' width='700'  cellpadding='2' cellspacing='2'>";
echo '<tr>
    <th width="150">Hình ảnh</th>
    <th width="300">Thông tin</th>
</tr>';
 if(mysqli_num_rows($result)<>0)
 {	 
	while($rows = $result->fetch_assoc())
	{        echo "<tr>";
             echo "<td><img align='middle' src="."./Hinh_sua/".$rows['Hinh']." />"."</td>";
		     echo "<td>".
                "<p id='margintop_tensua'><b>".$rows['ten_sua']."</b></p><br/>".
                "<p id='marginbot_nsx'>Nhà sản xuất: " .$rows['Ten_hang_sua']."<br/>"
                .$rows['Ten_loai']." - ".$rows['Trong_luong']
                ." gr"." - ".$rows['Don_gia']." VNĐ"."</p>".
                "</td>";
		     echo "</tr>";
	}
 }
 
	// if(mysqli_num_rows($result)<>0)
	// {
	// //hiển thị dữ liệu
	// }
	echo"</table>";
	echo "</div>";
	$re = mysqli_query($conn, 'select * from sua');
	// //tổng số mẩu tin cần hiển thị
	$numRows = mysqli_num_rows($re); 
	// //tổng số trang
	// $maxPage = floor($numRows/$rowsPerPage) + 1; 
	// echo 'Tong so trang la: '.$maxPage;
	//tổng số trang
	$maxPage = floor($numRows/$rowsPerPage) + 1;
	echo "<div align='center' class='pagdiv'> ";
		//gắn thêm nút Back
        if ($_GET['page'] > 1)
		{ 
			echo "<a href=" .$_SERVER['PHP_SELF']."?page=".(1).">
			<<
			</a> ";
		}
		if ($_GET['page'] > 1)
		{ 
			echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1).">
			<
			</a> ";
		}
		//tạo link tương ứng tới các trang
		for ($i=1 ; $i<=$maxPage ; $i++)
		{ 
			if ($i == $_GET['page'])
			{ 
				echo '<b>'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
			} 
		else
			echo "<a  href=" .$_SERVER['PHP_SELF']. "?page="
			.$i.">".$i."</a> ";
		}
		//gắn thêm nút Next
		if ($_GET['page'] < $maxPage)
		{ 
			echo "<a href = ". $_SERVER['PHP_SELF']."?page=".($_GET['page']+1).">
			>
			</a>";
		}
        if ($_GET['page'] < $maxPage)
		{ 
			echo "<a href = ". $_SERVER['PHP_SELF']."?page=".($maxPage).">
			>>
			</a>";
		}
	echo "</div>";
?>
<?php
include('../footer.html');
?>