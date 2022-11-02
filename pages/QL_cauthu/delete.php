<?php  
// connect to database
include('../samples/conect_database.php');


if ($_SERVER['REQUEST_METHOD'] != 'GET')
    die('Invalid HTTP method!');

$sql = "DELETE FROM cau_thu WHERE ma_cau_thu = '".$_GET['id']."'";

if (mysqli_query($conn, $sql)) {
    echo "Xóa thành công";
} else {
    echo "Xóa thất bại: " . mysqli_error($conn);
}
// ngắt kết nối
mysqli_close($conn);

$adminURL = 'table-cau-thu.php';
header('Location: '.$adminURL);

?>