<?php include("headernavbar.php"); ?>
<?php include("mainsidebar.php"); ?>

<?php
require('db/databaseConnection.php');
$conn = getConnection();
if (isset($_POST['request'])) {
    // is a post request
    $service_id = $_POST['service_id'];
    $sp_id = $_POST['sp_id'];
    $date = date_create($_POST['date'])->format('Y-m-d');
    $cu_id = $_SESSION['cu_id'];
    $sql = "INSERT INTO `requests`(`cu_id`, `sp_id`, `service_id`, `date`, `targetDate`) VALUES ($cu_id,$sp_id,$service_id, date(now()), '$date')";
    $success = $conn->query($sql);
} else {

    if (isset($_GET['service_id'])) {
        $service_id = $_GET['service_id'];
        $sql = "SELECT * FROM `services` WHERE service_id = '$service_id'";
        $service = $conn->query($sql);
        if ($service) {
            $service = $service->fetch_assoc();
        } else {
            echo "false";
        }
        $sql = "SELECT * FROM `service provider` WHERE sp_id =" . $service['sp_id'];
        $provider = $conn->query($sql);

        if ($provider) {
            $provider = $provider->fetch_assoc();
        } else {
            echo "false";
        }

    } else {
        header('Location: /Customer_Module');
    }
}

?>

<div class="content-wrapper">
    <section class="content-header">

        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
        <h1>
            Available Services
            <span class="glyphicon glyphicon-list-alt"></span>
        </h1>
    </section>

    <section class="content">
        <?php if (!isset($_POST['request'])): ?>
            <h1><?php echo $service['service_name'] ?> by <a href="user.php?sp_id=<?php echo $provider['sp_id'] ?>">
                    <small><?php echo $provider['username'] ?></small>
                </a></h1>

        <?php setlocale(LC_MONETARY, 'en_PH'); ?>
            <h2 style="color: red;">P <?php echo $service['price'] ?></h2>
            <form action="service-show.php" method="post" id="request-form">
                <input type="hidden" name="service_id" value="<?php echo $service['service_id'] ?>">
                <input type="hidden" name="sp_id" value="<?php echo $service['sp_id'] ?>">
                <input type="hidden" name="request" value="request">
                <div class="form-group">
                    <label for="">Appointment Date:</label>
                    <input id="date" class="datepicker" type="text" name="date"
                           required readonly>

                </div>
                <button class="btn btn-info">Request</button>
            </form>
            <script>
                document.getElementById("date");
            </script>
            <h3 class="page-header">Description</h3>
            <p><?php echo $service['description'] ?></p>
        <?php else: ?>

        <?php if ($success) { ?>
            <div class="alert alert-success">
                <strong>Success!</strong> Successfully Requested for the Service.
                See pending requests <a href="pending.php">here</a>
            </div>
        <?php } else { ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> There was an error please see contact admin for details.
                See pending requests <a href="pending.php">here</a>
            </div>
        <?php } ?>
        <?php endif; ?>
    </section>
</div>

<?php include("mainfooter.php"); ?>
