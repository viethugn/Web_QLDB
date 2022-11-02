<?php

// connect to database
include('../samples/conect_database.php');

$hoten = $diachi = $soao = $ngaysinh = $vitri  = $quocgia = $caulacbo = $gioitinh = "";
$update_hoten = $update_diachi = $update_soao =  $update_vitri = $update_ngaysinh = $update_gioitinh = $update_qg = $update_clb = "";
$update_hotenErr = $update_diachiErr = $update_soaoErr =  $update_vitriErr
    = $update_ngaysinhErr = $update_gioitinhErr = $update_qgErr = $update_clbErr = "";

?>
<!DOCTYPE html>
<html lang="en">

<?php
include('../../includes/header_admin.html');

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
                            <h4 class="text-themecolor">Chỉnh sửa thông tin cầu thủ</h4>
                        </div>
                        <div class="col-md-7 align-self-center text-right">
                            <div class="d-flex justify-content-end align-items-center">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../pages/samples/index_admin.php">Home</a></li>
                                    <li class="breadcrumb-item">Quản lí đội</li>
                                    <li class="breadcrumb-item">Cầu thủ</li>
                                    <li class="breadcrumb-item active">Chỉnh sửa thông tin cầu thủ</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Chỉnh sửa thông tin</h4>
                                <p class="card-description">
                                    Chỉnh sửa
                                </p>
                                <form class="forms-sample" method="post">
                                    <div class="form-group">
                                        <label>Họ & tên</label>
                                        <input type="text" name="hoten" class="form-control" value="<?php echo $hoten ?>" placeholder="Họ & tên">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" name="diachi" class="form-control" value="<?php echo $diachi ?>" placeholder="Địa chỉ">
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày sinh</label>
                                        <input type="date" name="ngaysinh" class="form-control" value="<?php echo $ngaysinh ?>" placeholder="Ngày sinh">
                                    </div>
                                    <div class="form-group">
                                        <label>Câu lạc bộ</label>
                                        <?php
                                        include('select_option/caulacbo.php');
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Quốc gia</label>
                                        <?php
                                        include('select_option/quocgia.php');
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <select class="form-control" name="gioitinh">
                                            <option value="Nữ" <?php if ($gioitinh == "Nữ") echo 'selected' ?>>Nữ</option>
                                            <option value="Nam" <?php if ($gioitinh == "Nam") echo 'selected' ?>>Nam</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Vị trí</label>
                                        <input type="text" name="vitri" class="form-control" value="<?php echo $vitri ?>" placeholder="Vị trí">
                                    </div>
                                    <div class="form-group">
                                        <label>Số áo</label>
                                        <input type="text" name="soao" class="form-control" value="<?php echo $soao ?>" placeholder="Số áo">
                                    </div>
                                    <button type="submit" name="update" class="btn btn-primary mr-2">Update</button>
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