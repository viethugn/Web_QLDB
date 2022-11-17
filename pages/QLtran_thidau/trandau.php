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
              <h4 class="text-themecolor">Trận đấu</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
              <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../../pages/samples/index_admin.php">Home</a></li>
                  <li class="breadcrumb-item">Quản lí kết quả TĐ</li>
                  <li class="breadcrumb-item active">Trận đấu</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="row"> 
            Blank
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
  <script src="../../js/name_admin.js"></script>
</body>

</html>
