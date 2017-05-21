<?php
session_start();
if (isset($_GET['cu_id'])) {
    $cu_id = $_GET['cu_id'];
    header('Location: /Customer_Module');
    $_SESSION['cu_id'] = $cu_id;
} else {
    header('Location: /');
}