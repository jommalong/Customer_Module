<?php include("headernavbar.php"); ?>
<?php include("mainsidebar.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
        <h1>
            Available Services
            <span class="glyphicon glyphicon-list-alt"></span>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
        require('db/transactionFunctions.php');
        // TODO: // put id
        $result = getServices('101');

        // while($row = $result->fetch_assoc()) {
        //   echo $row['lname'];
        // }
        ?>
        <table class="table table-hover data-table">
            <thead>
            <tr>
                <th>Service Name</th>
                <th>Description</th>
                <th>Provider First Name</th>
                <th>Provider Last Name</th>
                <th>Provider username</th>
                <th>Provider email</th>
                <th>Contact</th>
                <th>Amount</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>

            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['service_name'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['email_address'] ?></td>
                    <td><?php echo $row['tel_no'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td>
                        <form action="submit_request.php" method="post">
                            <input type="hidden" name="sp_id" value="<?php echo $row['sp_id'] ?>">
                            <input type="hidden" name="cu_id" value="<?php echo $row['cu_id'] ?>">
                            <input type="hidden" name="service_id" value="<?php echo $row['service_id'] ?>">
                            <input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>">
                            <input type="hidden" name="status" value="Pending">
                            <button type="submit" class="btn btn-success btn-flat">Request</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile ?>

            </tbody>
        </table>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("mainfooter.php"); ?>
