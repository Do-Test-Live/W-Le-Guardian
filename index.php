<?php
session_start();
if (!isset($_SESSION['lan'])) {
    $_SESSION['lan'] = 'CN';
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Le Guardien Family Office</title>
    <?php include('assets/include/css.php'); ?>
    <link rel="stylesheet" type="text/css" href="assets/uikit/css/uikit.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        ul li {
            line-height: 1;
        }

        canvas, img, svg, video {
            max-width: unset;
            width: 100%;
        }
    </style>
</head>

<body class="">
<?php include('assets/include/nav.php'); ?>
<!--
<video autoplay muted id="fullpage-video">
    <source src="assets/video/LEg.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>-->

<section class="lg-slider">
    <img src="assets/images/home/logo-g.gif" class="img-fluid lg-slide-logo" alt=""/>


    <div class="lg-slider-content">
        <h3>
            The logo of Le Guardien Family Office features a Key-Fret/Meander pattern in its design. This pattern has
            been present in Chinese art since the Neolithic period, with a history of over 4,000 years. It symbolizes
            the rainfall and abundance that brings vitality to agricultural communities. This symbol represents eternal
            and continuous rotation, reflecting the commitment of Le Guardien Family Office to providing professional
            services high net worth clients. and their families, ensuring the permanent protection and sustainable
            inheritance of family culture and assets.
        </h3>
    </div>
</section>


<!-- Helper div for inserting before scripts
================================================== -->
<div class="pa-body-end"></div>


<!-- Scripts / Body End
================================================== -->
<!-- Vendor Scripts -->
<?php include('assets/include/js.php'); ?>
<script src="assets/uikit/js/uikit.min.js"></script>

</body>

</html>