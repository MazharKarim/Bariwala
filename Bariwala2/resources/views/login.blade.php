




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="img/logo.png">
  <link rel="icon" type="image/png" href="img/logo.png">
  <title>
    Bariwala
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{URL::asset('css/nucleo-icons.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{URL::asset('css/bariwala.css')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{URL::asset('demo/demo.css')}}" rel="stylesheet" />
</head>



      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid-home">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="{{url('/')}}">bariwala</a>
          </div>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
              </li>
            </ul>
          </div>
        </div>
      </nav>



<body class="">
  <div class="wrapper">
    <div class="main-panel">
      <div class="content2">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header-home">
                <h4 class="card-title">Owner Log In</h4>
              </div>
              <div class="card-body">
                <form method="GET" action="{{url('/admin')}}">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username">
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                      </div>
                    </div>

                  </div>
                  <button type="submit" class="btn btn-fill btn-primary" href="{{url('/admin')}}">Log In</button>
                </form>

              </div>
              
            </div>
          </div>




          <div class="col-md-6">
            <div class="card">
              <div class="card-header-home">
                <h4 class="card-title">Tenant Log In</h4>
              </div>
              <div class="card-body">
                <form method="GET" action="{{url('/user')}}">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username">
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                      </div>
                    </div>

                  </div>
                  <button type="submit" class="btn btn-fill btn-primary">Log In</button>

                </form>
              </div>
              
            </div>
          </div>


        </div>
      </div>


      <footer class="footer">
        <div class="container-fluid">
          <!-- <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul> -->
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> by 
            <a href="javascript:void(0)" target="_blank"> ---</a> .
          </div>
        </div>
      </footer>



      
    </div>
  </div>
</div>