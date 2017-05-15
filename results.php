<?php include ("headernavbar.php"); ?>
<?php include ("mainsidebar.php"); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
      $host = "localhost";
      $user = "root";
      $passwd = "";
      $db = "webtek-database-finals";
      $connect = mysqli_connect($host, $user, $passwd);
      mysqli_select_db($connect,$db); 
      $btag = '<span>You searched for <i>';
      $etag = '<br></i></span>';
      $output = '';
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <?php echo $btag . $_POST["find"] . $etag; ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
            if(isset($_POST['find'])) {
              $searchq = $_POST['find'];
              $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

              $query = mysqli_query($connect, "SELECT * FROM `service provider` WHERE lname LIKE '%$searchq%' OR fname LIKE '%$searchq%'", MYSQLI_STORE_RESULT) or die("Could not search");
              $count = mysqli_num_rows($query);
              if ($count == 0) {
                $output = 'No results found';
              } else {
                while($row = mysqli_fetch_array($query)) {
                  $firstname = $row['fname'];
                  $lastname = $row['lname'];
                  $id = $row['sp_id'];

                  $output .= '<div> '.$firstname.' '.$lastname.'</div>';
                }
              }
              }
              print("$output");
            ?>
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  </div>
  <?php include ("mainfooter.php"); ?>