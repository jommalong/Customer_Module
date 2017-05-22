<?php 
require('db/databaseConnection.php'); 
$conn = getConnection();
$sql = "SELECT (SELECT COUNT(*) FROM requests WHERE status='Pending') AS 'pendingRequest', 
(SELECT COUNT(*) FROM requests WHERE status='Approved') AS 'acceptedRequest', 
(SELECT COUNT(*) FROM requests WHERE status='Rejected') AS 'declineRequest', 
(SELECT COUNT(*) FROM arrangement) AS 'transactions';
";
 $counts = $conn->query($sql);
    if ($counts) {
        $counts = $counts->fetch_assoc();
    } else {
        echo "sql error!!!!!!!!!!";
    }
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

      <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $counts['pendingRequest']?></h3>
              <h4>Pending Requests</h4>
            </div>
            <div class="icon">
              <i class="ion ion-load-a"></i>
            </div>
            <a href="pending.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $counts['acceptedRequest']?></h3>
              <h4>Accepted Requests</h4>

              
            </div>
            <div class="icon">
              <i class="ion ion-thumbsup"></i>
            </div>
            <a href="accepted.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $counts['transactions']?></h3>
              <h4>Transactions</h4>

            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="transactions.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $counts['declineRequest']?></h3>
              <h4>Declined Requests</h4>

             
            </div>
            <div class="icon">
              <i class="ion ion-heart-broken"></i>
            </div>
            <a href="rejected.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- /.row -->
      
          <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->
  </div>   


  <!-- /.content-wrapper -->


