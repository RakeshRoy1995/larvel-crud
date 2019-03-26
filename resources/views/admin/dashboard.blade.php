<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin Panel</title>

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
</head>
<body>
  <section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <a href="{{url('/admin_dashborad') }}" class="logo"><b>Dashbo<span>rd</span></b></a>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{url('/logout')}}">Logout</a></li>
        </ul>
      </div>
    </header>
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('img/_MG_5744.JPG')}}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Rakesh Roy</h5>
          <li class="mt">
            <a href="{{url('/admin_dashborad') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Oparation</span>
              </a>
            <ul class="sub">
              <li><a href="{{url('/allteachers') }}">All Teachers</a></li>
              <li><a href="{{ url('/allstudents') }}">All Students</a></li>
              <li><a href="{{url('/addteachers') }}">Add Teachers</a></li>
              <li><a href="{{ url('/addstudents') }}">Add Students</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Clothing</span>
              </a>
            <ul class="sub">
              <li><a href="men.php">Men's</a></li>
              <li><a href="women.php">Women's</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </aside>
    <section id="main-content">
      <section class="wrapper">
        <br><br><br><br>
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title">Day Batch</h1>
                <p class="card-text">Insert the Day Batch students Value</p>
                <a href="{{ url('/addstudents_day') }}" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title">Evening</h1>
                <p class="card-text">Insert the Evening Batch students Value</p>
                <a href="{{ url('/addstudents_eve') }}" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
        </div>
        
      </section>
      <!-- /wrapper -->
    </section>
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>DIU</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created By Rakesh <br>
          Developer
        </div>
      </div>
    </footer>
  </section>
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <!--script for this page-->

</body>

</html>
