<?php
require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Desk | All solusions in one platform</title>

    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">

    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Data Table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />


</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="<?= ROOT_URL ?>proctor/admin-index.php" class="nav__logo">e-Desk</a>
            <ul class="nav__items">
                <li><a href="<?= ROOT_URL ?>proctor/about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>proctor/contact.php">Contact</a></li>
                <li><a href="#">Welcome Mostofa Kamal!</a></li>
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="<?= ROOT_URL . 'images/Mostofa Kamal.jpg' ?>">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>proctor/admin-manage-users-post.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL ?>proctor/graph.php">Statistics</a></li>
                        <li><a href="<?= ROOT_URL ?>proctor/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!-- ============= END OF NAV ============= -->