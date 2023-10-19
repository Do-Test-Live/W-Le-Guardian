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
    <style>
        p {
            color: #13324f;
        }
    </style>
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
            <h1 class="text-center text-white pt-3 pb-3"><?php if ($_SESSION['lan'] == 'CN') echo '環球稅務規劃'; else echo 'Global Tax Planning' ?>

            </h1>
        </div>
    </section>

    <section
            style="background-image: url('assets/images/new/hero-bg.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
        <div class="container">

            <img src="assets/images/Le-Guardien-Subpage_7_oct11.jpg" class="img-fluid mt-5 mb-5" alt=""/>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <div class="p-lg-5 p-3">
                        <p>
                            <?php
                            if ($_SESSION['lan'] == 'CN')
                                echo '有別於香港的低稅率，任何人在高稅收的國家有資產或展開新生活、安居置業，因不同的收入/財富結構而須繳納當地稅項。
                                如果在香港和外地同時有收入和資產更可能要繳付雙邊雙重徵稅。當收入累積之財富轉移至下一代時，
                                更需要面對遺產稅或全球資產徵稅等問題。只要能在離境前在香港正確地建立信託，善用離岸信託進行資產分隔，
                                就可以享受龐大的稅務優惠﹕可大幅減少入息稅、贈與稅、房產稅等稅收，
                                亦可避免財富遭到債務和婚姻的風險，有效地管理財富及傳承。';
                            else
                                echo 'Unlike Hong Kong\'s low tax rate, individuals who have assets 
                                or establish a new life and settle in countries with high taxation 
                                need to pay local taxes based on their different income/wealth structures. 
                                If there is income and assets in both Hong Kong and abroad, there is a 
                                higher likelihood of facing double taxation. When accumulated wealth is 
                                transferred to the next generation, there is a need to address issues 
                                such as inheritance tax or global asset taxation. By correctly establishing 
                                trusts in Hong Kong before departure and effectively utilizing offshore trusts 
                                for asset separation, substantial tax benefits can be enjoyed: significant 
                                reduction in income tax, gift tax, property tax, etc., as well as protection 
                                against risks associated with debt and marriage, enabling effective wealth 
                                management and succession planning.';
                            ?>
                        </p>
                        <p>
                            <?php
                            if ($_SESSION['lan'] == 'CN')
                                echo '嘉兆家族辦公室透過多元化完善的專業意見，包括稅務規劃、會計、法律、環球資產配置、信託、保險等，
                                我們為不同的客人建立一站式溝通及服務平台，以協助有意移民家庭有效地制定理財方案，
                                為自己及下一代提供更好的生活和保護、滿足移居及傳承需要。';
                            else
                                echo 'At Le Guardien Family Office, we provide comprehensive professional advice 
                                through diverse and comprehensive services, including tax planning, accounting, 
                                legal, global asset allocation, trusts, insurance, etc. We establish a one-stop 
                                communication and service platform for different clients, assisting families 
                                interested in immigration to effectively develop financial plans and provide 
                                better lives, protection, and meet the needs of migration and succession for 
                                themselves and future generations.';
                            ?>
                        </p>
                        <p>
                            <?php
                            if ($_SESSION['lan'] == 'CN')
                                echo '歡迎預約嘉兆家族辦工室的CPA會計專員和環球稅務策劃專家，為您個人和家族作出一個全面的稅務規劃。';
                            else
                                echo 'Welcome to make an appointment with our CPA accountants and global 
                                tax planning experts at Le Guardien Family Office for a comprehensive 
                                tax planning for you and your family.';
                            ?>
                        </p>
                    </div>

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
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-2 pt-5 pb-4">
                    <p>Copyright © 2023 - <a href="#" target="_blank">leguardien.ngt.hk</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="pa-back-to-top-wrap">
            <a class="pa-back-to-top" href="#top"><span class="pa-back-to-top"></span></a>
        </div>
    </footer>

</div>
<!-- /.pushable-content -->

<!-- Helper div for inserting before scripts
================================================== -->
<div class="pa-body-end"></div>


<!-- Scripts / Body End
================================================== -->
<!-- Vendor Scripts -->
<script src="assets/vendor/jquery/jquery-migrate.min.js"></script>
<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="assets/vendor/offcanvas-nav/hc-offcanvas-nav.js"></script>
<script src="assets/vendor/parallax/parallax.min.js"></script>
<script src="assets/vendor/jquery/jquery.easing.min.js"></script>
<script src="assets/vendor/typed/typed.min.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/vendor/particles/particles.min.js"></script>
<script src="assets/vendor/waypoints/waypoints.min.js"></script>
<script src="assets/vendor/counterup/jquery.counterup.min.js"></script>

<!-- Theme Scripts and Inits -->
<script src="assets/js/particle-theme.js"></script>
<script src="assets/js/page-blog.js"></script>


</body>

</html>