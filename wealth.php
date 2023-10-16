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

</head>

<body class="pa-blog">

<!-- Page Transitions
================================================== -->


<!-- Navigation Menu
================================================== -->

<?php include('assets/include/nav.php'); ?>
<!-- /.pa-menu -->


<!-- Pushable Content
================================================== -->
<div class="pushable-content">
    <!-- Hero Section
    ================================================== -->
    <div class="d-lg-block d-none" style="height: 100px">

    </div>

    <section id="top" class="pa-hero pa-blog-hero pa-centered-section pa-image-back position-relative"
             style="background-image: url(assets/images/hero-background.jpg);">

        <div class="pa-absolute-fill pa-gradient-back-v1"></div>

        <div class="container pa-supercontainer text-left">
            <div class="row pa-hero-typed-text">
                <div class="col-12 fadeInDelay03Duration10 text-center">
                    <h1 class="lg-header">
                        <?php
                        if ($_SESSION['lan'] == 'CN') {
                            ?>
                            嘉兆家族辦公室
                            <?php
                        } else {
                            ?>
                            Le Guardien
                            <?php
                        } ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- /.pa-hero -->

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-center text-white pt-3 pb-3">
                <?php if ($_SESSION['lan'] == 'EN') echo 'Family Inheritance Planning'; else echo '財富傳承規劃'; ?>
            </h1>
        </div>
    </section>

    <section id="wealth" class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 d-flex justify-content-center align-items-center order-1 order-lg-0"
                     style="background-image: url('assets/images/wealth/1.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                    <div class="p-lg-5 p-3">
                        <?php
                        if ($_SESSION['lan'] == 'CN') {
                            ?>
                            <p class="mb-3">家族在設計財富傳承規劃時，應懂得如何優化其繼承策略，以迎合自身偏好並滿足特定需求。
                            </p>
                            <p class="mb-3">
                                家族及其繼承人可如何利用和人壽保險高效地傳承財富？
                            </p>
                            <p>
                                嘉兆家族辦公室財富傳承規劃團隊會為每一個高資產淨值客戶作專業分析，務求用不同的傳承工具包括信託、人壽保險，為客戶作出一個最有效的財富傳承規劃方案。
                            </p>
                            <?php
                        } else {
                            ?>
                            <p class="mb-3">
                                When families engage in the design of Family Inheritance, it is important for them to
                                grasp how to enhance their inheritance strategies to match their own preferences and
                                fulfill specific requirements.
                            </p>
                            <p class="mb-3">
                                What are the effective ways for families and their heirs to transfer wealth using life
                                insurance?
                            </p>
                            <p class="mb-3">
                                The Family Inheritance Planning team at Le Guardien Family Office conducts thorough
                                professional analysis for each high-net-worth client, with the goal of developing the
                                most optimal wealth succession plan through the utilization of diverse tools, including
                                trusts and life insurance.
                            </p>
                            <?php
                        }
                        ?>
                    </div>

                </div>
                <div class="col-lg-4  order-0 order-lg-1 p-0">
                    <img src="assets/images/new/5.png" alt="" style="height: 100%; object-fit: cover;"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section
    ================================================== -->
    <?php include('assets/include/news.php'); ?>
    <!-- /.pa-contact-us -->


    <!-- Footer
    ================================================== -->
    <?php include('assets/include/footer.php'); ?>

</div>
<!-- /.pushable-content -->

<!-- Helper div for inserting before scripts
================================================== -->
<div class="pa-body-end"></div>


<!-- Scripts / Body End
================================================== -->
<?php include('assets/include/js.php'); ?>


</body>

</html>