<!DOCTYPE html>
<html lang="en">

<?php
include('../../includes/header_admin.html');

?>

<style>
  ul.pagination {
    margin-top: 10px;
  }

  span.page-link {
    margin-top: 30px;
    cursor: pointer;
    background: gainsboro;
    padding: 10px;
    font-size: 16px;
    margin: 1px;
    border-radius: 5px;
  }

  .pagination {
    justify-content: center;
  }

  span.page-link.avtivee {
    background-color: #9AB87A;
  }


  #pagigation li:hover {
    background-color: grey;
    color: #48ea7c;
  }

  /* btn thêm */
  .btn_add {
    border: 0.5px solid grey;
    background-color: #4B49AC;
    padding: 10px 15px;
    border-radius: 5px;
    width: 149px;
  }

  .btn_add>a {
    text-decoration: none;
  }

  .btn_add:hover {
    background-color: #9AB87A;
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
            <div class="col-md-5 col-sm-6 col-xs-6  align-self-center">
              <h4 class="text-themecolor">Cầu thủ</h4>
            </div>
            <div class="col-md-7 col-sm-6 col-xs-6 align-self-center text-right">
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
            <div class="col-md-5 col-sm-6 col-xs-6 align-self-center">
              <div class="d-flex align-items-center">
                <div class="input-group">
                  <input type="text" id="textSearch" class="form-control ipt_timkiem_ct" placeholder="Search for name...">
                  <div class="input-group-append">
                    <button id="btnSearch" class="btn btn-secondary ipt_bg_left_search" type="button">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-sm-6 col-xs-6 align-self-center text-right">
              <div class="d-flex justify-content-end align-items-center">
                <!-- <div class="btn_ds">
                  <a href='' class="text-white" >Danh sách</a>
                </div> -->
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
                  <div id="get_data" class="single-table">

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
  <script src="../../js/name_admin.js"></script>
  <!-- ----------------hiển table + pagination------------- -->
  <script type="text/javascript">

    let search;

    $(document).ready(function() {

      $('#btnSearch').click();

    });

    function fetch_data(search, page) {
      $.ajax({
        url: 'pagination.php',
        type: 'POST',
        data: {
          search: search,
          page: page,
        },
        success: function(data) {
          $('#get_data').html(data);
        }
      })
    }

    fetch_data();

    $('#btnSearch').click(function() {
      let search = $('#textSearch').val().trim();
      // alert("Hưng");
      fetch_data(search);
    });

    $(document).on('click', '.page-item', function() {
      var page = $(this).attr("id");
      let search = $('#textSearch').val().trim();
      fetch_data(search, page);
    });
  </script>
</body>

</html>