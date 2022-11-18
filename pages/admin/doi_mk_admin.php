<!DOCTYPE html>
<html lang="en">
<?php
include('../../includes/header_admin.html');
?>
<style>
  #textcolorErr {
    color: red;
  }
</style>
<?php
    include('xulydoimatkhau.php');
?>
<!-- --------xử lý đổi mật khẩu admin -->

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
              <h4 class="text-themecolor">Đổi mật khẩu</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
              <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../../pages/samples/index_admin.php">Home</a></li>
                  <li class="breadcrumb-item">Admin</li>
                  <li class="breadcrumb-item active">Đổi mật khẩu</li>
                </ol>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Thông tin</h4>
                  <form action="" class="forms-sample" method="post">
                    <div class="form-group row">
                      <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Họ & tên</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Họ & tên" disabled name="hoten_admin" 
                        value="<?php echo $hoten_admin?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      
                      <label for="exampleInputPassword1" class="col-sm-3 col-form-label">Mật khẩu cũ</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu cũ" name="mkcu"
                        value="<?php echo $mkcu?>">
                        <span id="textcolorErr"><?php echo $mkcuErr ?></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputNewPassword1" class="col-sm-3 col-form-label">Mật khẩu mới</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputNewPassword1" placeholder="Mật khẩu mới" name="mkmoi1" 
                        value="<?php echo $mkmoi1?>">
                        <span id="textcolorErr"><?php echo $mkmoi1Err ?></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword1" class="col-sm-3 col-form-label">Nhập lại mật khẩu mới</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Nhập lại mật khẩu mới" name="confirm_mkmoi1"
                        value="<?php echo $confirm_mkmoi1?>">
                        <span id="textcolorErr"><?php echo $confirm_mkmoi1Err ?></span>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-info mr-2 float-right btn_bg_doimk_admin" name="capnhat">Cập nhật</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Phân quyền</h4>
                  <form class="forms-sample">
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username" disabled>
                      </div>
                    </div>
                  </form>
                </div>
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
  <!-- end container-scroller -->

  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/name_admin.js"></script>

</body>

</html>