<?php include("headernavbar.php"); ?>
<?php include("mainsidebar.php"); ?>
<?php
if (isset($_GET['find'])) {

} else {

}
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Results for: <?php echo $_GET["find"]; ?>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php
            $find = $_GET['find'];
            require('db/databaseConnection.php');
            $conn = getConnection();
            $sql = "SELECT * FROM `service provider` WHERE fname LIKE '%$find%' OR lname LIKE '%$find%' OR username LIKE '%$find%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="info-box" style="padding: 2%;">
                        <h2 class="page-header"><?php echo $row['fname']; ?>, <?php echo $row['lname'] ?></h2>
                        <p>
                            Username: <span><?php echo $row['username']; ?></span><br>
                            Contact: <span><?php echo $row['tel_no'] ?></span>
                        </p>
                        <div class="container-fluid">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <a class="btn btn-warning" href="user.php?sp_id=<?php echo $row['sp_id'] ?>">
                                    View Profile</a>
                            </div>
                        </div>
                    </div>
                <?php }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </section>

        <!-- /.content -->
        <!-- /.content-wrapper -->
    </div>
<?php include("mainfooter.php"); ?>