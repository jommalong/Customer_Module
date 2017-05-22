<?php

if (isset($_GET['sp_id'])) {
    $sp_id = $_GET['sp_id'];
    require('db/databaseConnection.php');
    $conn = getConnection();
    $sql = "SELECT * FROM `services` WHERE sp_id = '$sp_id'";
    $result = $conn->query($sql);
    $sql = "SELECT * FROM `service provider` WHERE sp_id = '$sp_id'";
    $provider = $conn->query($sql);
    if ($provider) {
        $provider = $provider->fetch_assoc();
    } else {
        echo "false";
    }

} else {
    header('Location: /Customer_Module');
}

?>
<?php include("headernavbar.php"); ?>
<?php include("mainsidebar.php"); ?>
<div class="content-wrapper">
    <section class="content-header">

        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
        <h1>
            Available Services
            <span class="glyphicon glyphicon-list-alt"></span>
        </h1>
    </section>

    <section class="content">
        <h1>Services by <?php echo $provider['fname'] . ' ' . $provider['lname'] ?></h1>
        <table class="table table-hover data-table table-responsive">
            <thead>
            <tr>
                <th>Service Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php

            setlocale(LC_MONETARY, 'en_PH');
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['service_name'] ?></td>
                        <td>P <?php echo $row['price'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td><a href="/Customer_Module/service-show.php?service_id=<?php echo $row['service_id'] ?>"
                               class="btn btn-warning">Show</a></td>
                    </tr>

                <?php }
            } else { ?>
                <div class="alert alert-warning">
                     There are no services yet for this provider.
                </div>
            <?php }
            ?>
            </tbody>
        </table>
    </section>
</div>

<?php include("mainfooter.php"); ?>
