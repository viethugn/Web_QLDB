<?php

include('conect_database.php');


$sql = "SELECT * FROM  ad_min";

$result = mysqli_query($conn, $sql);

//Khai báo sử dụng session

session_start();


//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) {
  
 
  

  //Lấy dữ liệu nhập vào
  $tai_khoan = ($_POST['tai_khoan']);
  $mat_khau = ($_POST['mat_khau']);

  //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
  if (!$tai_khoan || !$mat_khau) {
    echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
  }

// $tkErr="";

  //Kiểm tra tên đăng nhập có tồn tại không
  $query = mysqli_query($conn, "SELECT tai_khoan, mat_khau FROM ad_min WHERE tai_khoan='$tai_khoan'");
  if (mysqli_num_rows($query) == 0) {
    echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
  }

  //Lấy mật khẩu trong database ra
  $rows = mysqli_fetch_array($query);

  //So sánh 2 mật khẩu có trùng khớp hay không
  if ($mat_khau != $rows['mat_khau']) {
    echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
  }

  //Lưu tên đăng nhập
  $_SESSION['tai_khoan'] = $tai_khoan;
  echo "Xin chào " . $tai_khoan . ". Bạn đã đăng nhập thành công. <a href='index_admin.php'>Về trang chủ</a>";
  die();
  

  

  // đóng csdl
  $conn->close();

}
?>