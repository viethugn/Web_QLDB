<?php

// Start the session
session_start();

include('../samples/conect_database.php');


$mkcuErr = $mkmoi1Err = $confirm_mkmoi1Err = "";


//Khai báo sử dụng session
$hoten_admin = isset($_SESSION["name"]) ? $_SESSION["name"] : "Lỗi không hiển thị được!";

$mat_khau_cu = $confirm_mat_khau_moi = $mat_khau_moi = "";

//đưa dữ liệu nhập vào lên form
$mkcu = isset($_POST['mkcu']) ? $_POST['mkcu'] : '';

$mkmoi1 = isset($_POST['mkmoi1']) ? $_POST['mkmoi1'] : '';

$confirm_mkmoi1 = isset($_POST['confirm_mkmoi1']) ? $_POST['confirm_mkmoi1'] : '';

//-------------------Lấy dữ liệu nhập vào

$mat_khau_cu = isset($_POST['mkcu']) ? $_POST['mkcu'] : '';

$mat_khau_moi = isset($_POST['mkmoi1']) ? $_POST['mkmoi1'] : '';

$confirm_mat_khau_moi = isset($_POST['confirm_mkmoi1']) ? $_POST['confirm_mkmoi1'] : '';

//--------------------Kiểm tra mật khẩu nhập có tồn tại không

$query_mat_khau_cu = mysqli_query($conn, "SELECT * FROM admin where admin_id ='" . $_SESSION["id"] . "'");

$flag = 1;

//Xử lý đăng nhập
if (isset($_POST['capnhat'])) {
    if (empty($_POST['mkcu'])) {
        $mkcuErr = "Vui lòng nhập mật khẩu cũ!";
        $flag = 0;
        return;
    }
    if (empty($_POST['mkmoi1'])) {
        $mkmoi1Err = "Vui lòng nhập mật khẩu mới!";
        $flag = 0;
        return;
    }
    if (empty($_POST['confirm_mkmoi1'])) {
        $confirm_mkmoi1Err = "Vui lòng nhập lại mật khẩu mới!";
        $flag = 0;
        return;
    }
    if ($flag == 1) {
        if (mysqli_num_rows($query_mat_khau_cu) <> 0) {

            //Lấy  mật khẩu trong database ra
            $rows = mysqli_fetch_array($query_mat_khau_cu);

            if ($mat_khau_cu != $rows['mat_khau']) {

                $mkcuErr = "Mật khẩu sai. Vui lòng kiểm tra lại!";
            } elseif ($mat_khau_moi != $confirm_mat_khau_moi) {

                //nếu người dùng nhập mật khẩu cũ đúng thì kiểm tra mật khẩu mới vs confirm mk mới có giống nhau không
                $confirm_mkmoi1Err = "Mật khẩu nhập lại không trùng khớp. Vui lòng kiểm tra lại!";
            } else {
                //sql
                $sql = "UPDATE admin 
                SET mat_khau = '" . $mat_khau_moi . "'
                WHERE admin_id = '" . $_SESSION["id"] . "'";
                //check query
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('Cập nhật thành công.');</script>";
                } else {
                    echo "<script>alert('Cảnh báo: Cập nhật thất bại');</script>";
                }
                //xóa dữ liệu trên form khi cập nhật thành công
                $mkcu = '';

                $mkmoi1 = '';

                $confirm_mkmoi1 = '';
            }
        } else {
            echo "<script>alert('Không kết nối được cơ sở dữ liệu!');</script>";
        }
    }
}



// đóng csdl
$conn->close();
