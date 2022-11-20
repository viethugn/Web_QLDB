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
              <h4 class="text-themecolor">Huấn luyện viên</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
              <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../../pages/samples/index_admin.php">Home</a></li>
                  <li class="breadcrumb-item">Quản lí đội</li>
                  <li class="breadcrumb-item active">Huấn luyện viên</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 mt-5">
              <div class="card">
                <div class="card-body">
                  <h4 class="header-title">Danh sách huấn luyện viên</h4>
                  <div class="single-table">
                    <div class="table-responsive">
                      <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">task</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Progress</th>
                            <th scope="col">status</th>
                            <th scope="col">action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>09 / 07 / 2018</td>
                            <td>
                              <div class="progress" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td><span class="status-p bg-primary">pending</span></td>
                            <td>
                              <ul class="d-flex justify-content-center">
                                <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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
  <!-- endinject -->
  <script src="../../js/name_admin.js"></script>
</body>

</html>