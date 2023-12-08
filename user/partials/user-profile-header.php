<?php
require 'config/database.php';

// fetch current user from database
if (isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT picture FROM usermanagement WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $picture = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>update my profile - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        :root {
            /* Header colour */
            --color-primary: #5855f8;
            --color-primary-light: #9BA4B5;
            --color-primary-variant: #5854c7;
            --color-red: #da0f3f;
            --color-red-light: hsl(346, 87%, 46%, 15%);
            --color-green: #00c476;
            --color-green-light: hsl(156, 100%, 38%, 15%);
            /* This is for Box Colour and footer*/
            --color-gray-900: #e2e2f7;
            --color-gray-700: #ffffff;
            --color-gray-300: rgba(242, 242, 254, 0.3);
            --color-gray-200: rgba(33, 42, 62, 0.7);
            --color-white: #ffffff;
            /* Main BG Colour */
            --color-bg: #fff;

            --transition: all 300ms ease;

            --container-width-lg: 74%;
            --container-width-md: 88%;
            --form-width: 40%;

            --card-border-radius-1: 0.3rem;
            --card-border-radius-2: 0.5rem;
            --card-border-radius-3: 0.8rem;
            --card-border-radius-4: 2rem;
            --card-border-radius-5: 5rem;
        }

        body {
            margin-top: 20px;
            color: #9b9ca1;
        }

        .bg-secondary-soft {
            background-color: rgba(208, 212, 217, 0.1) !important;
        }

        .rounded {
            border-radius: 5px !important;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }

        .file-upload .square {
            height: 250px;
            width: 250px;
            margin: auto;
            vertical-align: middle;
            border: 1px solid #e5dfe4;
            background-color: #fff;
            border-radius: 5px;
        }

        .text-secondary {
            --bs-text-opacity: 1;
            color: rgba(208, 212, 217, 0.5) !important;
        }

        .btn-success-soft {
            color: #28a745;
            background-color: rgba(40, 167, 69, 0.1);
        }

        .btn-danger-soft {
            color: #dc3545;
            background-color: rgba(220, 53, 69, 0.1);
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 1rem;
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.6;
            color: #29292e;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e5dfe4;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 5px;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        /* GENERAL */
        * {
            margin: 0;
            padding: 0;
            outline: 0;
            border: 0;
            appearance: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        header {
            background-color: #f9f5eb;
            padding: 20px;
        }

        /* Here my custom css code */
        footer {
            background-color: #f4eee0;
            padding: 20px;
            text-align: center;
        }

        /* FOOTER */
        footer {
            background: var(--color-gray-900);
            /* padding: 5rem 0 0; */
            box-shadow: inset 0 1.5rem 1.5rem rgba(0, 0, 0, 0.2);
        }

        .footer__socials {
            margin-inline: auto;
            width: fit-content;
            margin-bottom: 5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1.2rem;
        }

        .footer__socials a {
            background: var(--color-bg);
            border-radius: 50%;
            width: 2.3rem;
            height: 2.3rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footer__socials a:hover {
            background: var(--color-white);
            color: var(--color-bg);
        }

        .footer__container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        footer h4 {
            color: var(--color-white);
            margin-bottom: 0.6rem;
        }

        footer ul li {
            padding: 0.4rem 0;
        }

        footer ul a {
            opacity: 0.75;
        }

        footer ul a:hover {
            letter-spacing: 0.2rem;
            opacity: 1;
        }

        .footer__copyright {
            text-align: center;
            padding: 1.5rem 0;
            /* border-top: 2px solid var(--color-bg); */
            /* margin-top: 4rem; */
        }

        /* NAV */
        nav {
            background: var(--color-primary);
            width: 100vw;
            height: 4.5rem;
            position: fixed;
            top: 0;
            z-index: 10;
            box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.2);
        }

        nav button {
            display: none;
        }

        .nav__container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav__container a {
            color: var(--color-white);
            transition: var(--transition);
        }

        .avatar {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            overflow: hidden;
            border: 0.3rem solid var(--color-bg);
        }

        .nav__logo {
            font-weight: 600;
            font-size: 1.2rem;
            text-decoration: none;
        }

        .nav__items {
            display: flex;
            align-items: center;
            gap: 4rem;
        }

        .nav__items li a{
            text-decoration: none;
        }

        .nav__profile {
            position: relative;
            cursor: pointer;
        }

        .nav__profile ul {
            position: absolute;
            top: 140%;
            right: 178%;
            display: flex;
            flex-direction: column;
            box-shadow: 0 3rem 3rem rgba(0, 0, 0, 0.4);
            visibility: hidden;
            opacity: 0;
            transition: var(--transition);
        }

        /* show nav ul when nav profile is hovered */
        .nav__profile:hover>ul {
            visibility: visible;
            opacity: 1;
        }

        .nav__profile ul li a {
            padding: 1rem;
            background: var(--color-gray-900);
            display: block;
            width: 163%;
            color: var(--color-gray-200);
        }

        .nav__profile ul li:last-child a {
            background: var(--color-red);
            color: var(--color-bg);
        }
    </style>
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="<?= ROOT_URL ?>user/user-index.php" class="nav__logo">e-Desk</a>
            <ul class="nav__items">
                <li><a href="<?= ROOT_URL ?>user/about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>user/contact.php">Contact</a></li>
                <?php if (isset($_SESSION['user-id'])): ?>
                    <li class="nav__profile">
                        <div class="avatar">
                            <img src="<?= ROOT_URL . 'images/' . $picture['picture'] ?>">
                        </div>
                        <ul>
                            <li><a href="<?= ROOT_URL ?>user/user-dashboard.php">Dashboard</a></li>
                            <li><a href="<?= ROOT_URL ?>user/user-complain.php">Submit a Complain</a></li>
                            <li><a href="<?= ROOT_URL ?>user/user-suggestion.php">Submit a Suggestion</a></li>
                            <li><a href="<?= ROOT_URL ?>user/user-request.php">Submit a Request</a></li>
                            <li><a href="<?= ROOT_URL ?>user/user-profile.php">Profile</a></li>
                            <li><a href="<?= ROOT_URL ?>user/logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li><a href="<?= ROOT_URL ?>signin.php">SignIn</a></li>
                <?php endif ?>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
</body>
<!-- ============= END OF NAV ============= -->