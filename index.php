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
    <style>
        ul li{
            line-height: 1;
        }

        canvas, img, svg, video{
            max-width: unset;
            width: 100%;
        }
    </style>
</head>

<body class="">
<?php include('assets/include/nav.php'); ?>

<video autoplay muted id="fullpage-video">
    <source src="assets/video/LEg.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>


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