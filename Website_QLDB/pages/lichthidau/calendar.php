<!DOCTYPE html>
<html lang="en">
<?php
include('../../includes/header_admin.html');
?>
<style>
  .kwbMAe {
    background-color: #3c4043 !important;
  }

  table {
    border-collapse: collapse;
    width: 100%;
  }

  .card {
    background-color: #202124;
  }

  .card .card-title,
  tbody {
    color: #FFFFFF;
  }

  table,
  th,
  td {
    border: none;
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
              <h4 class="text-themecolor">Lịch</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
              <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../../pages/samples/index_admin.php">Home</a></li>
                  <li class="breadcrumb-item">Lịch thi đấu</li>
                  <li class="breadcrumb-item active">Lịch</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Trận đấu</h4>
                  <div class="single-table">
                    <div class="table-responsive">
                      <table class="table text-center">
                          <?php 
                            include('xulyhienthilich.php');
                          ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Trận đấu</h4>
                  <canvas id="barChart"></canvas>

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

  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/name_admin.js"></script>
  <!-- endinject -->

</body>

</html>