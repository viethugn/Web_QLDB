<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Hãng Sữa</title>




<style type="text/css">

table{
    border-collapse: collapse;
    width: 75%;
    height: auto;

    color: #ffff00;

    background-color: whitesmoke;     
    text-align: center;
    border: black 3px;

}

table th{

    background-color: blue;

    font-style: vni-times;

    color: yellow;
    text-align: center;
    height: 40px;



}

table td
{

    color: black;
    text-align: center;
    height: 50px;
    
    
}

tr:nth-child(even) 
{
    background-color: gray;
}
</style>

</head>
<body>
    



<?php
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansua');
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM Hang_sua";


    $rowsPerPage=3; //số mẩu tin trên mỗi trang, giả sử là 10
    if (!isset($_GET['page']))
    { 
        $_GET['page'] = 1;
    }
    //vị trí của mẩu tin đầu tiên trên mỗi trang
    $offset =($_GET['page']-1)*$rowsPerPage;
    //lấy $rowsPerPage mẩu tin, bắt đầu từ vị trí $offset
    $result = mysqli_query($conn, 'SELECT Ma_hang_sua, Ten_hang_sua, Dia_chi, Dien_thoai, Email
    FROM hang_sua LIMIT '. $offset . ', ' .$rowsPerPage);


    echo "<p align='center'><font face= 'Verdana, Geneva, sans-serif'
    size='5'> THÔNG TIN HÃNG SỮA</font></P>";
    echo "<table align='center' width='700' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";
    echo '<tr>
    <th width="50">STT</th>
    <th width="50">Mã hãng sữa</th>
    <th width="150">Tên hãng sữa</th>
    <th width="200">Địa chỉ</th>
    <th width="200">Điện thoại</th>
    <th width="200">Email</th>
    </tr>';


    if(mysqli_num_rows($result)<>0)
    { 
        $stt=$offset + 1;
        while($rows=mysqli_fetch_row($result))
        { 
            echo "<tr>";
            echo "<td>$stt</td>";
            echo "<td>$rows[0]</td>";
            echo "<td>$rows[1]</td>";
            echo "<td>$rows[2]</td>";
            echo "<td>$rows[3]</td>";
            echo "<td>$rows[4]</td>";
            echo "</tr>";
            $stt+=1;
        }
    }
    echo"</table>";
    echo"<br><br>";









//---Tính số trang để hiển thị
if(mysqli_num_rows($result)<>0)
{
//hiển thị dữ liệu
}
echo"</table>";
$re = mysqli_query($conn, 'select * from Hang_sua');
//tổng số mẩu tin cần hiển thị
$numRows = mysqli_num_rows($re); 
//tổng số trang
$maxPage = floor($numRows/$rowsPerPage) + 1; 





//gắn thêm nút Back

echo"<p align = center>";
if ($_GET['page'] > 1)
{ echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1).">
Back
</a> "; 
}

for ($i=1 ; $i<=$maxPage ; $i++) //tạo link tương ứng tới các trang
{ if ($i == $_GET['page'])
echo '<b>Trang '. $i. '</b> '; //trang hiện tại sẽ được bôi đậm
else
echo "<a href=" 
.$_SERVER['PHP_SELF']."?page=".$i.">Trang".$i."</a> ";
}


//gắn thêm nút Next
if ($_GET['page'] < $maxPage)
{ echo "<a href = ". $_SERVER['PHP_SELF']."?page=".($_GET['page']+1).">
Next
</a>"; 
echo"</p>";

}





?>



</body>
</html>

