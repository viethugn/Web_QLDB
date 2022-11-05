<?php

include('conect_database.php');
$tkErr = "";

$sql = "SELECT * FROM  ad_min";

$result = mysqli_query($conn, $sql);

//Khai báo sử dụng session

session_start();

//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) {

  $tkErr = "";
  //Lấy dữ liệu nhập vào
  $tai_khoan = ($_POST['tai_khoan']);
  $mat_khau = ($_POST['mat_khau']);
  $flag = 0;

  //Kiểm tra tên đăng nhập có tồn tại không
  $query = mysqli_query($conn, "SELECT tai_khoan, mat_khau FROM ad_min WHERE tai_khoan='$tai_khoan'");
  if (mysqli_num_rows($query) <> 0) {
    //Lấy tài khoản, mật khẩu trong database ra
    $rows = mysqli_fetch_array($query);
    //Kiểm tra tài khoản có trùng khớp hay không
    if ($tai_khoan != $rows['tai_khoan']) {
      $tkErr = "Tài khoản hoặc mật khẩu sai. Vui lòng kiểm tra lại!";
      $flag = 1;
      
    }
    //Kiểm tra mật khẩu có trùng khớp hay không
    if ($mat_khau != $rows['mat_khau']) {
      $tkErr = "Tài khoản hoặc mật khẩu sai. Vui lòng kiểm tra lại!";
      $flag = 1;
    }
  } 
  else {
    $tkErr = "Tài khoản hoặc mật khẩu sai. Vui lòng kiểm tra lại!";
    $flag = 1;
  }
  if($flag != 1){
    // $flag = 0;
    header("location:index_admin.php");
  }
  // else{
  //   echo "<script>alert('hung')</script>";
  // }
}




  // //Lưu tên đăng nhập
  // $_SESSION['tai_khoan'] = $tai_khoan;
  // echo "Xin chào " . $tai_khoan . ". Bạn đã đăng nhập thành công. <a href='index_admin.php'>Về trang chủ</a>";
  // die();


  // đóng csdl
  $conn->close();
