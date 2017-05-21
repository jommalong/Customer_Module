<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <h1>
      YOUR Pending Requests
      <small>Optional description</small>
      <span class="glyphicon glyphicon-list-alt"></span>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
   <?php 
   require('db/pendingRequests.php');
   // TODO: // put id
   $result = pendingRequests(101); 

   // while($row = $result->fetch_assoc()) {
   //   echo $row['lname'];
   // }
   ?>
   <h3> Invoices </h3>           
   <table class="table table-hover data-table">
    <thead>
      <tr>
       
       <th>Last Name</th>
       <th>First Name</th>
       <th>Service Type</th>
       <th>Date of Request</th>
       <th>Target Date</th>
     </tr>
   </thead>
   <tbody>

    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?php echo $row['fname'] ?></td>
        <td><?php echo $row['lname'] ?></td>
        <td><?php echo $row['service_name'] ?></td>
        <td><?php echo $row['dateOfRequest'] ?></td>
        <td><?php echo $row['targetDate'] ?></td>
      </tr>
    <?php endwhile ?>

  </tbody>
</table>


</section>
<!-- /.content -->
</div>
  <!-- /.content-wrapper -->