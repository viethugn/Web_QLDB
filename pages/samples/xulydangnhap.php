<?php
// Start the session
session_start();

include('conect_database.php');
$tkErr = "";

$sql = "SELECT * FROM  ad_min";

$result = mysqli_query($conn, $sql);

//Khai báo sử dụng session

$tai_khoan = "";
$mat_khau = "";
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) {

  $tkErr = "";
  //Lấy dữ liệu nhập vào
  $tai_khoan = ($_POST['tai_khoan']);
  $mat_khau = ($_POST['mat_khau']);
  $flag = 0;

  //Kiểm tra tên đăng nhập có tồn tại không
  $query = mysqli_query($conn, "SELECT * FROM admin where tai_khoan ='".$tai_khoan."' AND mat_khau ='".$mat_khau."'");

  if (mysqli_num_rows($query) <> 0) {

    //Lấy tài khoản, mật khẩu trong database ra
    $rows = mysqli_fetch_array($query);

    //Kiểm tra tài khoản, mật khẩu có trùng khớp hay không
    if ($tai_khoan != $rows['tai_khoan'] || $mat_khau != $rows['mat_khau']) {

      $tkErr = "Tài khoản hoặc mật khẩu sai. Vui lòng kiểm tra lại!";

      $flag = 1;
    } else {
      $hoten = "";

      $hoten = $rows["ho_ten"];

      $_SESSION["name"] = $hoten;
    }
  } else {

    $tkErr = "Không thể kết nối được với cơ sở dữ liệu!";

    $flag = 1;
  }
  if (($flag != 1) && (isset($_SESSION["name"]))) {

    header("location:index_admin.php");
  }
}

// đóng csdl
$conn->close();
