@include('admin/header')
@include('admin/sidebar')
@include('admin/nav')
@include('toggleTab')

<body class="">
  <div class="wrapper">

<!-- sidebar goes here -->
    <div class="main-panel">
      
<!-- navbar goes here -->

      <!-- End Navbar -->
      <div class="content">



        <div class="content">
          <div class="row">
            <div class="col-md-3 pr-md-1">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-category">Total Unit</h5>
                  <h3 class="card-title">6</h3>
                </div>
              </div>
            </div>

            <div class="col-md-3 pr-md-1">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-category">To-let</h5>
                  <h3 class="card-title">2</h3>
                </div>
              </div>
            </div>

            <div class="col-md-3 pr-md-1">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-category">Total Tenant</h5>
                  <h3 class="card-title">20</h3>
                </div>
              </div>
            </div>

            <div class="col-md-3 pr-md-1">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-category">Total Employee</h5>
                  <h3 class="card-title">3</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        




        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">Total Account</h5>
                    <h2 class="card-title">2019</h2>
                  </div>
                  <div class="col-sm-6">
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                      <label class="btn btn-sm btn-primary btn-simple active" id="0">
                        <input type="radio" class="d-none d-sm-none" name="options" checked >
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">
                          <span class="tablinks" onclick="openTab(event, 'earnings')">Earnings</span>
                        </span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-single-02"></i>
                        </span>
                      </label>
                      <label class="btn btn-sm btn-primary btn-simple" id="1">
                        <input type="radio" class="d-none d-sm-none" name="options" >
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">
                          <span class="tablinks" onclick="openTab(event, 'expenses')">Expenses</span>
                        </span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-gift-2"></i>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <!-- <div class="chart-area">
                  <canvas id="chartBig1"></canvas>
                </div> -->

                <div id="earnings" class="tabcontent">
                  @include('ownerEarnings')
                </div>
                <div id="expenses" class="tabcontent">
                  @include('ownerExpenses')
                </div>

              </div>
            </div>
          </div>
        </div>





        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Gas Bill</h5>
                <h3 class="card-title">
                <!-- <i class="tim-icons icon-bell-55 text-primary"></i> -->
                Last 6 Months</h3>
              </div>
              <div class="card-body">
                <!-- <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas>
                </div> -->

                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th class="text-center">
                          Jul
                        </th>
                        <th class="text-center">
                          Aug
                        </th>
                        <th class="text-center">
                          Sep
                        </th>
                        <th class="text-center">
                          Oct
                        </th>
                        <th class="text-center">
                          Nov
                        </th>
                        <th class="text-center">
                          Dec
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          $900
                        </td>
                        <td class="text-center">
                          $950
                        </td>
                        <td class="text-center">
                          $764  
                        </td>
                        <td class="text-center">
                        <!-- <td class="text-center"> -->
                          $640
                        </td>
                        <td class="text-center">
                          $943
                        </td>
                        <td class="text-center">
                          $800
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Electricity Bill</h5>
                <h3 class="card-title">
                <!-- <i class="tim-icons icon-delivery-fast text-info"></i> -->
                Last 6 Months</h3>
              </div>
              <div class="card-body">
                <!-- <div class="chart-area">
                  <canvas id="CountryChart"></canvas>
                </div> -->

                <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th class="text-center">
                          Jul
                        </th>
                        <th class="text-center">
                          Aug
                        </th>
                        <th class="text-center">
                          Sep
                        </th>
                        <th class="text-center">
                          Oct
                        </th>
                        <th class="text-center">
                          Nov
                        </th>
                        <th class="text-center">
                          Dec
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          $1565
                        </td>
                        <td class="text-center">
                          $1435
                        </td>
                        <td class="text-center">
                          $1246  
                        </td>
                        <td class="text-center">
                        <!-- <td class="text-center"> -->
                          $1375
                        </td>
                        <td class="text-center">
                          $1864
                        </td>
                        <td class="text-center">
                          $1423
                        </td>
                      </tr>
                    </tbody>
                  </table>

              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Water Bill</h5>
                <h3 class="card-title">
                <!-- <i class="tim-icons icon-send text-success"></i> -->
                Last 6 Months</h3>
              </div>
              <div class="card-body">
                <!-- <div class="chart-area">
                  <canvas id="chartLineGreen"></canvas>
                </div> -->

                <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th class="text-center">
                          Jul
                        </th>
                        <th class="text-center">
                          Aug
                        </th>
                        <th class="text-center">
                          Sep
                        </th>
                        <th class="text-center">
                          Oct
                        </th>
                        <th class="text-center">
                          Nov
                        </th>
                        <th class="text-center">
                          Dec
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          $720
                        </td>
                        <td class="text-center">
                          $643
                        </td>
                        <td class="text-center">
                          $684  
                        </td>
                        <td class="text-center">
                        <!-- <td class="text-center"> -->
                          $534
                        </td>
                        <td class="text-center">
                          $751
                        </td>
                        <td class="text-center">
                          $840
                        </td>
                      </tr>
                    </tbody>
                  </table>

              </div>
            </div>
          </div>
        </div>
        



        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">--</h5>
                    <h2 class="card-title">Complains</h2>
                  </div>
                  <div class="col-sm-6">
                    
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th >
                          Subject
                        </th>
                        <th class="text-center">
                          Flat No.
                        </th>
                        <th class="text-center">
                          Description
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td >
                          Tap problem
                        </td>
                        <td class="text-center">
                          A2
                        </td>
                        <td class="text-center">
                          Kitchen tap broken. Need repairing very soon.  
                        </td>
                        <td class="text-center">
                      </tr>
                      <tr>
                        <td >
                          Broken Lock
                        </td>
                        <td class="text-center">
                          B3
                        </td>
                        <td class="text-center">
                          Guest room's door lock is not working correctly.  
                        </td>
                        <td class="text-center">
                      </tr>
                    </tbody>
                  </table>
                
              </div>
            </div>
          </div>
        </div>



        
        
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="card card-tasks">
              <div class="card-header ">
                <h6 class="title d-inline">Tasks(6)</h6>
                <p class="card-category d-inline"> </p>
                <div class="dropdown">
                  <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                    <i class="tim-icons icon-settings-gear-63"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#pablo">Add task</a>
                    <a class="dropdown-item" href="#pablo">Remove task</a>
                  </div>
                </div>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Pay gas bill</p>
                          <p class="text-muted">Last date: 30th sep, 2019.</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Repair lock</p>
                          <p class="text-muted">Flat A2 main door lock has to be repaired.</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Pay water bill</p>
                          <p class="text-muted">Ladt date: 30th sep, 2019.</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Pay electric bill</p>
                          <p class="text-muted">Ladt date: 30th sep, 2019.</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Guard's payment</p>
                          <p class="text-muted">Has to pay the sequrity guards salary.</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Remove to-let</p>
                          <p class="text-muted">New residents arriving 1st october, to-let must be removed.</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Residents list</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Name
                        </th>
                        <th>
                          Unit No.
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Monthly Rent
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Abdullah Al Munsur 
                        </td>
                        <td>
                          B3
                        </td>
                        <td>
                          01911000000
                        </td>
                        <td>
                          $15,500
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Asif Howlader
                        </td>
                        <td>
                          A3
                        </td>
                        <td>
                          01911000000
                        </td>
                        <td>
                          $15,500
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Mazhar Karim
                        </td>
                        <td>
                          A2
                        </td>
                        <td>
                          01911000000
                        </td>
                        <td>
                          $15,500
                        </td>
                      </tr>
                      <!-- <tr>
                        <td>
                          Philip Chaney
                        </td>
                        <td>
                          Korea, South
                        </td>
                        <td>
                          Overland Park
                        </td>
                        <td class="text-center">
                          $38,735
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Doris Greene
                        </td>
                        <td>
                          Malawi
                        </td>
                        <td>
                          Feldkirchen in Kärnten
                        </td>
                        <td class="text-center">
                          $63,542
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Mason Porter
                        </td>
                        <td>
                          Chile
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-center">
                          $78,615
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Jon Porter
                        </td>
                        <td>
                          Portugal
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-center">
                          $98,615
                        </td>
                      </tr> -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
<!-- footer goes here -->
@include('admin/footer')


    </div>
  </div>
  <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
      </ul>
    </div> -->
  </div>
  <!--   Core JS Files   -->
  <script src="{{URL::asset('js/core/jquery.min.js')}}"></script>
  <script src="{{URL::asset('js/core/popper.min.js')}}"></script>
  <script src="{{URL::asset('js/core/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{URL::asset('js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{URL::asset('js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{URL::asset('js/bariwala.min.js')}}"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{URL::asset('demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <!-- <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script> -->
</body>

</html>