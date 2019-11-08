@include('admin.header')
@include('admin.sidebar')
@include('admin.nav')

<body class="">
  <div class="wrapper">
  
<!-- sidebar goes here -->
    <div class="main-panel">
     
<!-- navbar goes here -->

      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Create User</h4>
              </div>
              <div class="card-body">
                @include('notification.messages')
                <form action="{{url('/storeUser')}}" method="post">
                @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name">
                      </div>
                    </div>
                    <!-- <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name">
                      </div>
                    </div> -->
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Occupation</label>
                        <input type="text" class="form-control" placeholder="Occupation" name="occupation">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Relegion</label>
                        <input type="text" class="form-control" placeholder="Relegion" name="relegion">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Email address" name="email">
                      </div>
                    </div>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                      </div>
                    </div>

                      <div class="col-md-4 pl-md-1">
                        <div class="form-group">
                          <label>NID/Birth Certificat/Passport Number</label>
                          <input type="text" class="form-control" placeholder="NID/Birth Certificat/Passport Number" name="nid">
                        </div>
                      </div>
                    <!-- <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username">
                      </div>
                    </div> -->
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword">
                      </div>
                    </div>
                  </div>
                  
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Permanent Address</label>
                        <input type="text" class="form-control" placeholder="Permanent Address" name="permanentaddress">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                      <div class="form-group">
                        <label>Floor</label>
                        <input type="text" class="form-control" placeholder="Floor" name="floor">
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Rented Unit</label>
                        <input type="text" class="form-control" placeholder="Rented Unit" name="unit">
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Monthly Rent</label>
                        <input type="number" class="form-control" placeholder="Monthly Rent" name="rent">
                      </div>
                    </div>
                    <div class="col-md-3 pl-md-1">
                      <div class="form-group">
                        <label>Advance Rent</label>
                        <input type="number" class="form-control" placeholder="Advance Rent" name="advance">
                      </div>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                      </div>
                    </div>
                  </div> -->
                  
                  <h5 >Members</h5>
                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Phone">
                      </div>
                    </div>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>NID/Birth Certificat/Passport Number</label>
                        <input type="text" class="form-control" placeholder="Username">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="email" class="form-control" placeholder="Email address">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Phone">
                      </div>
                    </div>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>NID/Birth Certificat/Passport Number</label>
                        <input type="text" class="form-control" placeholder="Username">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="email" class="form-control" placeholder="Email address">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Phone">
                      </div>
                    </div>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>NID/Birth Certificat/Passport Number</label>
                        <input type="text" class="form-control" placeholder="Username">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="email" class="form-control" placeholder="Email address">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Phone">
                      </div>
                    </div>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>NID/Birth Certificat/Passport Number</label>
                        <input type="text" class="form-control" placeholder="Username">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="email" class="form-control" placeholder="Email address">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Phone">
                      </div>
                    </div>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>NID/Birth Certificat/Passport Number</label>
                        <input type="text" class="form-control" placeholder="Username">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="email" class="form-control" placeholder="Email address">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-fill btn-primary">Save</button>
                </form>
              </div>
            </div>
          </div>


          <!-- <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Create User</h5>
              </div>
              <div class="card-body">
                <form>
                  
                </form>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">Save</button>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                    <a href="javascript:void(0)">
                      <img class="avatar" src="/img/default-avatar.png" alt="...">
                      <h5 class="title">Golam Rabbi</h5>
                    </a>
                    <p class="description">
                      Building owner
                    </p>
                  </div>
                </p>
                <div class="card-description">
                  Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </div>
              </div>
              <div class="card-footer">
                <div class="button-container">
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-facebook"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                    <i class="fab fa-google-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      

<!-- footer goes here -->
@include('admin.footer')


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