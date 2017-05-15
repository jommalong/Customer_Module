<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <h1>
      YOUR History Transactions
      <span class="glyphicon glyphicon-list-alt"></span>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
   <?php 
   require('db/transactionFunctions.php');
   // TODO: // put id
   $result = getTransactions(101); 

   // while($row = $result->fetch_assoc()) {
   //   echo $row['lname'];
   // }
   ?>
   <h3> Invoices </h3>           
   <table class="table table-hover data-table">
    <thead>
      <tr>
       <th>Service Type</th>
       <th>Status</th>
       <th>Provider First Name</th>
       <th>Provider Last Name</th>
       <th>Provider username</th>
       <th>Provider email</th>
       <th>Contact</th>
       <th>Amount</th>

     </tr>
   </thead>
   <tbody>

    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?php echo $row['serviceAvailed'] ?></td>
        <td><?php echo $row['status'] ?></td>
        <td><?php echo $row['fname'] ?></td>
        <td><?php echo $row['lname'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['email_address'] ?></td>
        <td><?php echo $row['tel_no'] ?></td>
        <td><?php echo $row['total_amount'] ?></td>
      </tr>
    <?php endwhile ?>

  </tbody>
</table>


</section>
<!-- /.content -->
</div>
  <!-- /.content-wrapper -->