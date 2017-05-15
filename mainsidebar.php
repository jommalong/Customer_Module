<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form (Optional) -->
      <form action="results.php" method="post" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="find" class="form-control" placeholder="Search..." id="Search">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="fa fa-circle-o"></i><span>Dashboard</span></a>
        </li>
  		  <li class="treeview">
    		  <a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-info-circle"></i> <span>Services</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
                <li><a href="cooking.php">Cooking</a></li>
                <li><a href="design.php">Design</a></li>
                <li><a href="gardening.php">Gardening</a></li>
                <li><a href="photography.php">Photography</a></li>
                <li><a href="tailoring.php">Tailoring</a></li>
          </ul>
        </li>
        <li class="active"><a href="transactions.php"><i class="fa fa-bitcoin"></i> <span>Transactions</span></a></li>
        <li class="active"><a href="pending.php"><i class="fa fa-circle-o"></i> <span>Pending Requests</span></a></li>
        <li class="active"><a href="accepted.php"><i class="fa fa-circle-o"></i> <span>Accepted Requests</span></a></li>
        <li class="active"><a href="rejected.php"><i class="fa fa-circle-o"></i> <span>Rejected Requests</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>