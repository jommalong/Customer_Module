<?php require("headernavbar.php"); ?>
<?php require("mainsidebar.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!--date picker-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker();
        });
    </script>
    <!--date picker-->
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
        <table class="table table-hover data-table table-responsive">
            <thead>
            <tr>
                <th>Service Id</th>
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
                    <td><?php echo $row['service_id'] ?></td>
                    <td><?php echo $row['service_name'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['email_address'] ?></td>
                    <td><?php echo $row['tel_no'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td>
                        <a href="service-show.php?service_id=<?php echo $row['service_id'] ?>"
                           class="btn btn-warning btn-flat">Show</a>
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
