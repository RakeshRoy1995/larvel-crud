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
              <span>Information</span>
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
   
<div class="form py-4">
<br><br>
<h2 class="mx-1">View Records</h2>
<h1><a href="{{ url('/addteachers') }}">Insert New Record</a> </h10>
<table class="table table-dark">
<thead>
<tr>
  <th><strong>Name</strong></th>
  <th><strong>Faculty</strong></th>
  <th><strong>Department</strong></th>
  <th><strong>Email</strong></th>
  <th><strong>Number</strong></th>
  <th><strong>Image</strong></th>
  <th><strong>Edit</strong></th>
  <th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
  @foreach($all_teachers_info as $allteachers_info)
  <th><strong>{{$allteachers_info->name}}</strong></th>
  <th><strong>{{$allteachers_info->faculty}}</strong></th>
  <th><strong>{{$allteachers_info->department}}</strong></th>
  <th><strong>{{$allteachers_info->email}}</strong></th>
  <th><strong>{{$allteachers_info->number}}</strong></th>
  <th><strong><img src="{{$allteachers_info->image}}" style="width:150px; height:75px;" alt=""></strong></th>
  <th><strong><a href="{{url('/teacher_edit/'.$allteachers_info->id) }}"><button type="button" class="btn btn-success">Edit</strong></a></th>
  <th><strong><a href="{{url('/teacher_delete/'.$allteachers_info->id) }}"><button type="button" class="btn btn-danger">Delete</strong></a></th>
   
</tbody>
@endforeach
</table>
      <h1 class="btn btn-success">
      <?php
      $updated_message = Session::get('updated_message');
      if ($updated_message) {
        echo $updated_message;
        Session::put('updated_message',null);
      }

      ?>

      </h1>

      <br /><br /><br /><br />
      </div>

    

    </section>
      <!-- /wrapper -->
    </section>
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Rakesh template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="inbox.php" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
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
