<!DOCTYPE html>
<html lang="en">

<?php
include('../../includes/header_admin.html');

?>

<style>
  .div_pt {
    width: auto;
    height: auto;
    display: inline-block;
    margin-top: 10px;
    text-align: center;
  }

  .div_pt>a,
  .div_pt>.active_bg {
    /* border: 0.5px solid grey; */
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
  }

  .active_bg {
    background-color: #9AB87A;
  }

  .div_pt>a:hover {
    background-color: grey;
  }

  .btn_add {
    border: 0.5px solid grey;
    background-color: #4B49AC;
    padding: 10px 15px;
    border-radius: 5px;
  }

  .btn_add>a {
    text-decoration: none;
  }

  .btn_add:hover {
    background-color:#9AB87A;
  }
</style>

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
              <h4 class="text-themecolor">Cầu thủ</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
              <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../../pages/samples/index_admin.php">Home</a></li>
                  <li class="breadcrumb-item">Quản lí đội</li>
                  <li class="breadcrumb-item active">Cầu thủ</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="row page-titles">
            <div class="col-md-5 align-self-center"></div>
            <div class="col-md-7 align-self-center text-right">
              <div class="d-flex justify-content-end align-items-center">
                <div class="btn_add">
                  <a href='add.php' class="text-white"><i class="fa fa-plus"></i> Thêm cầu thủ</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 mt-3">
              <div class="card">
                <div class="card-body">
                  <h4 class="header-title"><b>Danh sách cầu thủ</b></h4>
                  <div class="single-table">
                    <div class="table-responsive ">
                      <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                          <tr>
                            <th scope="col">Mã cầu thủ</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Vị trí</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Mã CLB</th>
                            <th scope="col">Mã QG</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include('xulyhienthicauthu.php');
                          ?>
                        </tbody>
                      </table>
                      <div align='center' class="pt_block">
                        <?php
                        include('phantrang.php');
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Progress Table end -->
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