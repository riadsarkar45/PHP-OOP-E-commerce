<?php
require_once('session.php');

require_once('session.php');
if (!isset($_SESSION['userData'])) {
    header('location:logout.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        document.getElementsByTagName("html")[0].className += " js";
    </script>
    <link rel="stylesheet" href="assets/css/style.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Responsive Sidebar Navigation | CodyHouse</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>

    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        .margin-left {
            margin-left: 72px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>

</head>
<header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
        <a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>
    </div>

    <div class="cd-search js-cd-search">
        <form>
            <input class="reset" type="search" placeholder="Search...">
        </form>
    </div>

    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>

    <ul class="cd-nav__list js-cd-nav__list">
        <li class="cd-nav__item"><a href="#0">Tour</a></li>
        <li class="cd-nav__item"><a href="#0">Support</a></li>
        <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
            <a href="#0">
                <img src="assets/img/cd-avatar.svg" alt="avatar">
                <span>
                    <?php
                    foreach ($_SESSION['userData'] as $key => $value) {
                        echo $login_user_id = $value['username'];
                    }
                    ?>
                </span>
            </a>

            <ul class="cd-nav__sub-list">
                <li class="cd-nav__sub-item"><a href="#0">My Account</a></li>
                <li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>
                <li class="cd-nav__sub-item"><a href="#0">Logout</a></li>
            </ul>
        </li>
    </ul>
</header> <!-- .cd-main-header -->

<body>