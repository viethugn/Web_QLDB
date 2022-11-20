<?php
//xử lý validation
$masuaErr = $tensuaErr = $hangsuaErr = $loaisuaErr =
    $trongluongErr = $dongiaErr = $hinhanhErr = $tpdinhduongErr =
    $loiichErr = $anhErr = '';
$masua = $tensua = $hangsua = $loaisua =
    $trongluong = $dongia = $hinhanh = $tpdinhduong =
    $loiich = $anh = $namefile = '';
$flag = 0;
if (isset($_POST['themmoi'])) {
    //mã sữa
    if (empty($_POST['masua'])) {
        $masuaErr = "Bạn chưa nhập mã sửa!";
        $flag = 1;
    }
    //tên sữa
    if (empty($_POST["tensua"])) {
        $tensuaErr = "Bạn chưa nhập tên sữa!";
        $flag = 1;
    }
    //Loại sữa
    if (empty($_POST['loaisua'])) {
        $loaisuaErr = "Bạn cần chọn loại sữa!";
        $flag = 1;
    }
    //hãng sữa
    if (empty($_POST['hangsua'])) {
        $hangsuaErr = "Bạn cần chọn hãng sữa!";
        $flag = 1;
    }

    //trọng lượng
    if ($_POST["trongluong"] === '') {
        $trongluongErr = "Bạn chưa nhập trọng lượng!";
        $flag = 1;
    } elseif (!is_numeric($_POST['trongluong'])) {
        $trongluongErr = "Cần nhập số!";
        $flag = 1;
    }
    //đơn giá
    if ($_POST["dongia"] === '') {
        $dongiaErr = "Bạn chưa nhập đơn giá!";
        $flag = 1;
    } elseif (!is_numeric($_POST['dongia'])) {
        $dongiaErr = "Cần nhập số!";
        $flag = 1;
    }
    // //thành phần dinh dưỡng
    // if (empty($_POST['tpdinhduong'])) {
    //     $tpdinhduongErr = "Bạn cần nhập thành phần dinh dưỡng!";
    //     $flag = 1;
    // }
    // //lợi ích
    // if (empty($_POST['loiich'])) {
    //     $loiichErr = "Bạn cần nhập lợi ích!";
    //     $flag = 1;
    // }
}
// kết nối csdl
$conn = mysqli_connect('localhost', 'root', '', 'qlbansua')
    or die('Could not connect to MySQL: ' . mysqli_connect_error());
mysqli_set_charset($conn, 'UTF8');

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi

$sql_hangsua = 'select Ma_sua,ten_sua,Trong_luong,Don_gia from hangsua';
$result = mysqli_query($conn, $sql_hangsua);
$anhsua = '';
//Lấy giá trị POST từ form vừa submit
if ($flag != 1 &&  isset($_POST['themmoi'])) {
    if (isset($_POST["masua"])) {
        $masua = $_POST['masua'];
    }
    if (isset($_POST["tensua"])) {
        $tensua = $_POST['tensua'];
    }
    if (isset($_POST["hangsua"])) {
        $mahangsua = $_POST['hangsua'];
    }
    if (isset($_POST["loaisua"])) {
        $maloaisua = $_POST['loaisua'];
    }
    if (isset($_POST["trongluong"])) {
        $trongluong = $_POST['trongluong'];
    }
    if (isset($_POST["dongia"])) {
        $dongia = $_POST['dongia'];
    }
    if (isset($_POST["tpdinhduong"])) {
        $tpdinhduong = $_POST['tpdinhduong'];
    }
    if (isset($_POST["loiich"])) {
        $loiich = $_POST['loiich'];
    }
    if ($_FILES['namefile']['name'] != NULL) {
        $anhsua = $_FILES["namefile"]["name"];
    }
    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO sua (Ma_sua, Ten_sua, Ma_hang_sua, Ma_loai_sua, Trong_luong, Don_gia, TP_Dinh_Duong, Loi_ich, Hinh)
    VALUES ('$masua', '$tensua', '$mahangsua', '$maloaisua','$trongluong','$dongia','$tpdinhduong','$loiich','$anhsua')";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm dữ liệu thành công!";
        include('./hienthithongtinthem.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

//Đóng database
mysqli_close($conn);
