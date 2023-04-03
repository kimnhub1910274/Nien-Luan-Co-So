<?php
include 'admin_server.php';
session_start();
    unset($_SESSION['name_ad']);
    header("location:admin.php");
