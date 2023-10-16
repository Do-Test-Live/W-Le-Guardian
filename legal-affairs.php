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
                    <h1 class="lg-header">Le
                        Guardien</h1>
                </div>
            </div>
        </div>

    </section>
    <!-- /.pa-hero -->


    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-center text-white pt-3 pb-3"><?php if ($_SESSION['lan'] == 'CN') echo '家族法律事務'; else echo 'Family Legal Affairs' ?>

            </h1>
        </div>
    </section>

    <section class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src="assets/images/new/top-imahe.png" alt=""
                         style="height: 100%; object-fit: cover;object-position: 44%;"/>
                </div>
                <div class="col-lg-8 d-flex justify-content-center align-items-center">
                    <div class="p-lg-5 p-3">
                        <p>
                            <?php
                            if ($_SESSION['lan'] == 'CN')
                                echo '嘉兆家族辦公室專業團隊會為你剖析，在管理資產和傳承規劃過程中，需要懂得幾類的法律工具，讓你在人生不同階段、無論發生什麼情況，都可以令家人為你妥善作出財務運用，甚或將來資產傳承的安排。';
                            else
                                echo 'Le Guardien\'s team of professionals specializes in analyzing the key legal instruments required for effective asset management and inheritance planning. These instruments are vital to ensure optimal financial utilization and secure future asset inheritance arrangements for your loved ones, regardless of life\'s circumstances.';
                            ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-right  text-center text-white pt-3 pb-3 pr-lg-5">
                <?php
                if ($_SESSION['lan'] == 'CN')
                    echo '持久授權書';
                else
                    echo 'Enduring Power of Attorney';
                ?>

            </h1>
        </div>
    </section>

    <section class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 d-flex justify-content-center align-items-center order-1 order-lg-0">
                    <div class="p-lg-5 p-3">
                        <p>
                            <?php
                            if ($_SESSION['lan'] == 'CN')
                                echo '在管理資產和傳承規劃過程中，往往會忽略了人生有機會因為健康和精神發生了問題時，導致自己不能夠管理自己的資產，令到身邊人無所適從，嚴重的更有機會令身邊人犯上刑事責任。<br/>
根據香港法例第 501 章《持久授權書條例》，持久授權書容許授權人 (即打算將其權力授予其他人的人)在精神上有能力行事時，委任受權人，以便在授權人日後變得精神上無行為能力時，受權人可照顧其財務事項。<br/>
一般授權書在授權人變為精神上無行為能力時，便會失去效力，但持 久授權書在授權人喪失精神行為能力後，將會「持久」地有效，並賦予 權力予受權人，繼續處理授權人的財政事務。現今香港社會人口急劇 老化，癡呆(失智)症個案漸多，持久授權書尤其重要。<br/>
嘉兆家族辦公室提供專業法律諮詢服務，讓你在資產管理和傳承規劃以外，了解更多持久授權書，這對家族辦公室中的資產管理過程中非常重要。<br/>
';
                            else
                                echo 'In the realm of asset management and inheritance planning, it is crucial to consider the potential challenges posed by health or mental issues that may hinder your ability to manage your assets. The Enduring Power of Attorney, as governed by Hong Kong\'s Chapter 501, allows individuals to grant authority to another person (the "attorney") while still mentally capable. This ensures that your financial affairs are appropriately handled should you become mentally incapacitated in the future. Le Guardien provides professional legal consulting services to help you understand the importance of the Enduring Power of Attorney in the asset management process.'; ?>

                        </p>
                    </div>

                </div>
                <div class="col-lg-4 order-0 order-lg-1">
                    <img src="assets/images/new/la3.png" alt="" style="height: 100%; object-fit: cover;"/>
                </div>
            </div>
        </div>
    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-left  text-center text-white pt-3 pb-3 pl-lg-5"><?php if ($_SESSION['lan'] == 'CN') echo '預設醫療指示'; else echo 'Advance Healthcare Directive' ?>

            </h1>
        </div>
    </section>

    <section class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src="assets/images/new/la1.png" alt="" style="height: 100%; object-fit: cover;"/>
                </div>
                <div class="col-lg-8 d-flex justify-content-center align-items-center">
                    <div class="p-lg-5 p-3">
                        <p><?php if ($_SESSION['lan'] == 'CN')
                                echo '預設醫療指示是指不接受維生治療,令身體自然順著病情發展而死亡。<br/>
這可令醫護有所適從。沒有預設醫療指示的最大問題是，你的家屬可能難以統一意見而造成爭拗。此外，當醫生問他們是否要繼續治療時，要你的親人為你的作出生死決定是很困難的。但如果你做了預設醫療指示，指明不需要任何入侵性治療，對你的親屬和醫護來說都會更加容易，他們只需要跟從你的指示而不用爭拗
';
                            else
                                echo 'An Advance Healthcare Directive enables you to make decisions regarding life-sustaining treatments, providing guidance to healthcare professionals. Without such a directive, disagreements among family members can arise, making it difficult to reach a consensus on important medical decisions. By establishing an Advance Healthcare Directive that clearly outlines your preferences, you ease the burden on your loved ones and healthcare providers, as they can follow your instructions without disputes.' ?>

                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-right  text-center text-white pt-3 pb-3 pr-lg-5"><?php if ($_SESSION['lan'] == 'CN') echo '
遺囑(平安紙）'; else echo 'Will' ?>

            </h1>
        </div>
    </section>

    <section class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 d-flex justify-content-center align-items-center order-1 order-lg-0">
                    <div class="p-lg-5 p-3">
                        <p><?php if ($_SESSION['lan'] == 'CN') echo '一個人只要年滿18歲、精神健全、神智清醒、清楚自己的財務狀況、沒有受威脅或欺騙，能夠明白和同意遺囑的內容，就可以按照法律規定立遺囑<br/>
遺囑是讓您在去世後決定如何處理你的金錢，財產和物業，因此，遺囑在傳承時才生效。<br/>
嘉兆家族辦公室專業團隊會為你剖析遺囑的特點和風險。
'; else echo 'Creating a will allows you to determine how your money, property, and assets will be distributed after your passing. Le Guardien\'s professional team can provide insights into the unique characteristics and potential risks associated with wills, helping you make informed decisions during the inheritance planning process.'; ?>

                        </p>
                    </div>

                </div>
                <div class="col-lg-4 order-0 order-lg-1">
                    <img src="assets/images/new/la2.png" alt="" style="height: 100%; object-fit: cover;"/>
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