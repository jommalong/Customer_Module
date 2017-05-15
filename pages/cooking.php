<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $db = "client";
    $connect = mysqli_connect($host, $user, $passwd);
    mysqli_select_db($connect,$db); 
  ?>

  <header class="main-header">
    <!-- Logo -->
    <a href="../index2.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CU</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Customer</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <?php
                $query = mysqli_query($connect, "SELECT fname,lname FROM customer WHERE cu_id=101");
                $row = mysqli_fetch_array($query);
                $btag = '<span class="hidden-xs">';
                $etag = "</span>";
                echo $btag . $row["fname"] . " " . $row["lname"] . $etag;
              ?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <?php
                  echo "<p>" . $btag . $row["fname"] . " " . $row["lname"] . $etag . "</p>";
                ?>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php
             echo "<p>" . $btag . $row["fname"] . " " . $row["lname"] . $etag . "</p>";
          ?>
        </div>
      </div>
      <!-- search form -->
      <form action="results.php" method="post" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="find" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Services</li>
        <li class="treeview">
          <a href="cooking.php"><span>Cooking</span></a>
        </li>
        <li class="treeview">
          <a href="design.php"><span>Design</span></a>
        </li>
        <li class="treeview">
          <a href=""><span>Gardening</span></a>
        </li>
        <li class="treeview">
          <a href=""><span>Photography</span></a>
        </li>
        <li class="treeview">
          <a href=""><span>Tailoring</span></a>
        </li>
        <li class="header">Transactions</li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Welcome to Cooking Tutorial
        <small>Optional description</small>
      </h1>
    </section>

    <section class="content">
      <div id="cooking">
      <img src="../chef.jpg" class="pic">
      <p>Cooking or cookery is the art, technology and craft of preparing food for consumption with or without the use of heat. Cooking techniques and ingredients vary widely across the world, from grilling food over an open fire to using electric stoves, to baking in various types of ovens, reflecting unique environmental, economic, and cultural traditions and trends. The ways or types of cooking also depend on the skill and type of training an individual cook has.</p>
      <p>There are very many methods of cooking, most of which have been known since antiquity. These include baking, roasting, frying, grilling, barbecuing, smoking, boiling, steaming and braising. A more recent innovation is microwaving. Various methods use differing levels of heat and moisture and vary in cooking time. The method chosen greatly affects the end result because some foods are more appropriate to some methods than others.</p>
      <h3> Tutorials </h3>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Topics</th>   
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>How to cook Chicken Adobo.</td>
            <td>
              <div class="row">
          <div class="col-md-7">
            <button data-toggle="collapse" data-target="#sp" class="btn btn-primary">Available Service Providers</button>
            <div id="sp" class="collapse">
              <ul>
                <!--<div class="row">
                  <li class="col-md-3">SP1</li>
                  <a href="" class="btn btn-primary btn-sm col-md-3">Submit a request</a>
                </div>-->
                <?php
                $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                $row = mysqli_fetch_array($query);
                $btag = '
                <div class="row">
                  <li class="col-md-5">
                <span class="hidden-xs">';
                $etag = '</span></li>
                  <a href="" class="btn btn-primary btn-sm col-md-5">Submit a request</a>
                </div>';
                
                if (mysqli_num_rows($query) > 0){
                  while ($row = mysqli_fetch_assoc($query)){
                    echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                  }
                }
              ?>
              </ul>

            </div>
          </div>
        </div>
            </td>
            
          </tr>
          <tr>
             <td>How to cook Beef Curry.</td>
            <td>
              <div class="row">
          <div class="col-md-7">
            <button data-toggle="collapse" data-target="#sp1" class="btn btn-primary">Available Service Providers</button>
            <div id="sp1" class="collapse">
              <ul>
                <!--<div class="row">
                  <li class="col-md-3">SP1</li>
                  <a href="" class="btn btn-primary btn-sm col-md-3">Submit a request</a>
                </div>-->
                <?php
                $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                $row = mysqli_fetch_array($query);
                $btag = '
                <div class="row">
                  <li class="col-md-5">
                <span class="hidden-xs">';
                $etag = '</span></li>
                  <a href="" class="btn btn-primary btn-sm col-md-5">Submit a request</a>
                </div>';
                
                if (mysqli_num_rows($query) > 0){
                  while ($row = mysqli_fetch_assoc($query)){
                    echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                  }
                }
              ?>
              </ul>

            </div>
          </div>
        </div>
            </td>
            
          </tr>
          <tr>
             <td>How to cook Calamares.</td>
            <td>
              <div class="row">
          <div class="col-md-7">
            <button data-toggle="collapse" data-target="#sp2" class="btn btn-primary">Available Service Providers</button>
            <div id="sp2" class="collapse">
              <ul>
                <!--<div class="row">
                  <li class="col-md-3">SP1</li>
                  <a href="" class="btn btn-primary btn-sm col-md-3">Submit a request</a>
                </div>-->
                <?php
                $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                $row = mysqli_fetch_array($query);
                $btag = '
                <div class="row">
                  <li class="col-md-5">
                <span class="hidden-xs">';
                $etag = '</span></li>
                  <a href="" class="btn btn-primary btn-sm col-md-5">Submit a request</a>
                </div>';
                
                if (mysqli_num_rows($query) > 0){
                  while ($row = mysqli_fetch_assoc($query)){
                    echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                  }
                }
              ?>
              </ul>

            </div>
          </div>
        </div>
            </td>
            
          </tr>
        </tbody>
      </table>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2016-2017</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
