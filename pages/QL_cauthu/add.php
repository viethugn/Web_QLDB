<!DOCTYPE html>
<html lang="en">

<?php
include('../../includes/header_admin.html');
// $ma_cau_thu = "";
// $ho_ten_cau_thu = "";
// $vi_tri = "";
// $ngay_sinh = "";
// $gioi_tinh = "";
// $dia_chi = "";
// $ma_clb = "";
// $ma_qg = "";
// $so = "";
// $ma_cau_thu  = "ct" . lay_mct();
// echo "$ma_cau_thu";
// echo "hello";

include('../samples/conect_database.php');
$sql = "SELECT *
FROM  quoc_gia QG INNER JOIN cau_thu CT ON QG.ma_qg = CT.ma_qg
                    INNER JOIN cau_lac_bo CLB ON CT.ma_clb = CLB.ma_clb";

$result = mysqli_query($conn, $sql);

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$ma_cau_thu = "";
$ho_ten_cau_thu = "";
$vi_tri = "";
$ngay_sinh = "";
$gioi_tinh = "";
$dia_chi ="";
$ma_clb ="";
$ma_qg = "";
$so ="";


function lay_mct()
    {
        include("../samples/conect_database.php");
        $sql = "SELECT (ma_cau_thu) FROM cau_thu";
        $result = mysqli_query($conn, $sql);
        $arr = [];
        $i = 0;
        if (mysqli_num_rows($result) <> 0) {
            while ($rows = mysqli_fetch_row($result)) {

                $st_mact_max = substr($rows['0'], 2, 2);
                $n_mact_new = (int)$st_mact_max;
                $arr[$i] = $n_mact_new;
                $i++;
            }
        }
        $mact_new = max($arr) + 1;
        return $mact_new;
    }

    $ma_cau_thu = "ct" . lay_mct();
    

//Lấy giá trị POST từ form vừa submit
if (isset($_POST['create'])) {
    $ma_cau_thu  = "ct" . lay_mct();
    // if (isset($_POST["ma_cau_thu"])) {
    //     $ma_cau_thu = $_POST['ma_cau_thu'];
    // }
    if (isset($_POST["ho_ten_cau_thu"])) {
        $ho_ten_cau_thu = $_POST['ho_ten_cau_thu'];
    }
    if (isset($_POST["vi_tri"])) {
        $vi_tri = $_POST['vi_tri'];
    }
    if (isset($_POST["ngay_sinh"])) {
        $ngay_sinh = $_POST['ngay_sinh'];
    }
    if (isset($_POST["gioi_tinh"])) {
        $gioi_tinh = $_POST['gioi_tinh'];
    }
    if (isset($_POST["dia_chi"])) {
        $dia_chi = $_POST['dia_chi'];
    }
    if (isset($_POST["caulacbo"])) {
        $ma_clb = $_POST['caulacbo'];
    }
    if (isset($_POST["quocgia"])) {
        $ma_qg = $_POST['quocgia'];
    }
    if (isset($_POST["so"])) {
        $so = $_POST['so'];
    }

    

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO cau_thu (ma_cau_thu, ho_ten_cau_thu, vi_tri, ngay_sinh, gioi_tinh, dia_chi, ma_clb, ma_qg, so)
    VALUES ('$ma_cau_thu', '$ho_ten_cau_thu', '$vi_tri', '$ngay_sinh', '$gioi_tinh', '$dia_chi', '$ma_clb', '$ma_qg', '$so')";

    if ($conn->query($sql) == TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
//Đóng database
$conn->close();
?>

<body>



    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <?php
        include('../../includes/navbartop_admin.html');
        ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper sidebar-fixed">
            <?php
            include('../../includes/navbarleft_admin.html');
            ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row page-titles">
                        <div class="col-md-5 align-self-center">
                            <a href="table-cau-thu.php" class="text-themecolor">Back</a>
                        </div>
                    </div>
                    <div class="row page-titles">
                        <div class="col-md-5 align-self-center">
                            <h4 class="text-themecolor">Thêm mới cầu thủ</h4>
                        </div>
                        <div class="col-md-7 align-self-center text-right">
                            <div class="d-flex justify-content-end align-items-center">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../pages/samples/index_admin.php">Home</a></li>
                                    <li class="breadcrumb-item">Quản lí đội</li>
                                    <li class="breadcrumb-item">Cầu thủ</li>
                                    <li class="breadcrumb-item active">Thêm mới</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Thông tin cầu thủ</h4>

                                <form class="forms-sample" action="" method="post">

                                    <div class="form-group">
                                        <label>Mã cầu thủ</label>
                                        <input type="text" name="ma_cau_thu" class="form-control" value="<?php echo $ma_cau_thu; ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label>Họ và tên</label>
                                        <input type="text" name="ho_ten_cau_thu" class="form-control" value="<?php echo $ho_ten_cau_thu ?>" placeholder="Họ & tên">
                                    </div>

                                    <div class="form-group">
                                        <label>Vị trí</label>
                                        <input type="text" name="vi_tri" class="form-control" value="<?php echo $vi_tri ?>" placeholder="Vị trí">
                                    </div>


                                    <div class="form-group">
                                        <label>Ngày sinh</label>
                                        <input type="date" name="ngay_sinh" class="form-control" value="<?php echo $ngay_sinh ?>" placeholder="Ngày sinh">
                                    </div>

                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <select class="form-control" name="gioi_tinh">
                                            <option value="Nữ" <?php if ($gioi_tinh == "Nữ") echo 'selected' ?>>Nữ</option>
                                            <option value="Nam" <?php if ($gioi_tinh == "Nam") echo 'selected' ?>>Nam</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" name="dia_chi" class="form-control" value="<?php echo $dia_chi ?>" placeholder="Địa chỉ">
                                    </div>

                                    <div class="form-group">
                                        <label>Mã câu lạc bộ</label>
                                        <?php
                                            include('select_option/caulacbo.php');
                                        ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Mã quốc gia</label>
                                        <?php
                                            include('select_option/quocgia.php');
                                        ?>
                                    </div>


                                    <div class="form-group">
                                        <label>Số áo</label>
                                        <input type="text" name="so" class="form-control" value="<?php echo $so ?>" placeholder="Số áo">
                                    </div>

                                    <button type="submit" name="create" class="btn btn-primary mr-2">Kí hợp đồng</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <?php
                include('../../includes/footerbottom_admin.html');
                ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>

</body>

</html>