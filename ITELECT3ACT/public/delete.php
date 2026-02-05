<?php

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    unset($_SESSION['customer'][$id]);
    header("Location:" . $_SERVER['PHP_SELF']);
    exit;
}

?>