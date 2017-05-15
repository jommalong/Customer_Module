<?php
session_start();
if (isset($_GET['cu_id'])) {
    $cu_id = $_GET['cu_id'];
    echo "Username = $cu_id";
    $_SESSION['cu_id'] = $cu_id;
} else {
    header('Location: /');
}