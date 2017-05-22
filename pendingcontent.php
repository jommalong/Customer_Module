<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
        <h1>Requests
            <small>Optional description</small>
            <span class="glyphicon glyphicon-list-alt"></span>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
        require('db/pendingRequests.php');
        // TODO: // put id
        $result = pendingRequests($_SESSION['cu_id']);

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
                <th>Service Name</th>
                <th>Date Requested</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>

            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td><?php echo $row['service_name'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['status'] ?></td>


                </tr>
            <?php endwhile ?>

            </tbody>
        </table>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->