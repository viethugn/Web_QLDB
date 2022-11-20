<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Trang đăng nhập</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->

  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="../../images/favicon.png" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
  #textcolorErr {
    color: red;
  }
</style>
<?php
include('./xulydangnhap.php');
?>

<body class="login-backgou">
  <!-- <div class="container-scroller">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <a href="../../../index.php">Website Bài tập</a>
      </div>
    </div>
  </div> -->
  <div class="container-scroller">
    <!-- ---------- back pages bài tập---------- -->
    <div class="row page_back_row">
      <div class="col-md-5 align-self-center page_back_link">
        <a href="../../../index.php">Website Bài tập</a>
      </div>
    </div>
    <!-- ----------- main ------------- -->
    <div class="container-fluid page-body-wrapper full-page-wrapper login_admin">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 input_form_login">
              <div class="brand-logo">
                <h3><b>Xin chào Admin, cùng bắt đầu nào!</b></h3>
              </div>
              <form action="" method="POST" class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg input_holder_show" name="tai_khoan" placeholder="Username" required value="<?php echo $tai_khoan; ?>">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg input_holder_show" name="mat_khau" placeholder="Password" required value="<?php echo $mat_khau; ?>">
                </div>
                <div class="form-group">
                  <span id="textcolorErr"><?php echo $tkErr ?></span>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="dangnhap">Đăng nhập</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Lưu tài khoản
                    </label>
                  </div>
                </div>
              </form>
              <!-- <p>Admin demo test: </p>
              <p>TK:nvh</p>
              <p>MK:000</p> -->
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
</body>

</html>