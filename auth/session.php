<?php
session_start();
if (isset($_SESSION['cu_id'])) {
    $cu_id = $_SESSION['cu_id'];
} else {
    echo "Di ata gumagana?";
}

?>