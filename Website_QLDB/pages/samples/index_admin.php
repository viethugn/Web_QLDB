<!DOCTYPE html>
<html lang="en">
<!-- ----------Carousel slide -->
<!-- Basic stylesheet -->
<link rel="stylesheet" href="../../OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">

<!-- Default Theme -->
<link rel="stylesheet" href="../../OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
<!-- ----------------- -->
<?php
include('../../includes/header_admin.html');
?>

<body>
  <div class="container-scroller">
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
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Admin</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                  <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                      <img class="img-thumbnail img-fluid" src="../../images/samples/real1_dasboard.jpg" alt="Real">
                      <div class="carousel-caption">
                        Hello
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-thumbnail img-fluid" src="../../images/samples/real2_dasboard.jpg" alt="GTA V">
                      <div class="carousel-caption">
                        Hello
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-thumbnail img-fluid" src="../../images/samples/real3_dasboard.jpg" alt="Mirror Edge">
                      <div class="carousel-caption">
                        Hello
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Lương</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Họ & tên</th>
                          <th>Mức lương</th>
                          <th>Ngày gia hạn</th>
                          <!-- <th>Ngày kết thúc</th> -->
                          <th>Trạng thái</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Player0</td>
                          <td class="font-weight-bold">$362</td>
                          <td>21 Sep 2018</td>
                          <td class="font-weight-medium">
                            <div class="badge badge-success">Completed</div>
                          </td>
                        </tr>
                        <tr>
                          <td>Player1</td>
                          <td class="font-weight-bold">$116</td>
                          <td>13 Jun 2018</td>
                          <td class="font-weight-medium">
                            <div class="badge badge-success">Completed</div>
                          </td>
                        </tr>
                        <tr>
                          <td>Player2</td>
                          <td class="font-weight-bold">$551</td>
                          <td>28 Sep 2018</td>
                          <td class="font-weight-medium">
                            <div class="badge badge-warning">Pending</div>
                          </td>
                        </tr>
                        <tr>
                          <td>Player3</td>
                          <td class="font-weight-bold">$523</td>
                          <td>30 Jun 2018</td>
                          <td class="font-weight-medium">
                            <div class="badge badge-warning">Pending</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title">Table</p>
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive">
                      <table id="example" class="display expandable-table" style="width:100%">
                        <thead>
                          <tr>
                            <th>Quote#</th>
                            <th>Product</th>
                            <th>Business type</th>
                            <th>Policy holder</th>
                            <th>Premium</th>
                            <th>Status</th>
                            <th>Updated at</th>
                            <th></th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
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

  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/name_admin.js"></script>

  <!-- Include js plugin -->
  <script src="../../OwlCarousel2-2.3.4/dist//owl.carousel.min.js"></script>

  <!-- endinject -->
  <script>
    $(document).ready(function() {

      $("#owl-demo").owlCarousel({

        navigation: true, // Show next and prev buttons
        autoWidth: true,
        slideSpeed: 400,
        paginationSpeed: 400,
        //autoplay
        loop: true, //lặp
        autoplay: true, //tự động chuyển slide
        autoplayTimeout: 5000, //khoảng thời gian để chuyên slide
        autoplayHoverPause: true, //để trỏ vào slide dừng tự động chuyển
        //--------default
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: false,
        margin: 20,
        stagePadding: 20,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          600: {
            items: 2,
            nav: false
          },
          1000: {
            items: 2,
            nav: false
          }

        }
      });

    });
  </script>
</body>

</html>