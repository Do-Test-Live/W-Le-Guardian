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
                        Le
                        Guardien</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- /.pa-hero -->

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-center text-white pt-3 pb-3">
                <?php if ($_SESSION['lan'] == 'EN') echo 'Discretionary Portfolio Management (DPM)'; else echo '全權委托投資管理'; ?>
            </h1>
        </div>
    </section>

    <section id="investment">
        <div class="pt-3 pb-5">
            <div class="row">
                <div class="col-12 p-5">
                    <?php
                    if ($_SESSION['lan'] == 'EN') {
                        ?>
                        <p class="mb-3">With experienced asset management consultants and expert strategy team, Le
                            Guardien Family Office is always close to markets around the world, capturing market
                            highlights and exploring the best investment opportunities. Clients have sole authority to
                            manage all of their assets and our team will tailor the right client's asset-entrustment
                            portfolio to meet the client's risk tolerance and return objectives. Optimize global
                            portfolio revenue through global asset allocation and integrated management, helping clients
                            to prepare for and enjoy their success.
                        </p>
                        <?php
                    } else {
                        ?>
                        <p class="mb-3">嘉兆家族辦公室憑借經驗豐富的資產管理顧問及專家策略團隊，時刻緊貼全球各地市場，捕捉市場亮點，
                            發掘最佳的投資機遇。客戶可全權委託我們管理其全部資產，我們團隊會量身定制合適客戶的資產委託組合，
                            以迎合客戶的風險承受能力及收益目標。通過全球資產配置和綜合統一管理， 優化環球組合收益，
                            助客戶運籌帷幄， 坐享其成
                        </p>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-12 mt-3">
                    <div class="row text-center">
                        <div class="col-12">
                            <h2><?php if ($_SESSION['lan'] == 'EN') echo 'Integrated management'; else echo '綜合統一管理'; ?></h2>
                        </div>
                        <div class="col-lg-4 col-12 p-5">
                            <div class="card">
                                <div class="mb-5">
                                    <img class="image-icon" src="assets/images/investment/3.png">
                                </div>
                                <?php
                                if($_SESSION['lan'] == 'EN'){
                                    ?>
                                    <p>Complete Balance Sheet,</p>
                                    <p>efficient allocation of assets</p>
                                    <?php
                                }else {
                                    ?>
                                    <p>完整資產負債表,</p>
                                    <p>有效配置資產</p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 p-5">
                            <div class="card">
                                <div class="mb-5">
                                    <img class="image-icon" src="assets/images/investment/4.png">
                                </div>
                                <?php
                                if($_SESSION['lan'] == 'EN'){
                                    ?>
                                    <p>Complete and unified information,</p>
                                    <p>effective crisis management</p>
                                    <?php
                                }else {
                                    ?>
                                    <p>完整統一資訊,</p>
                                    <p>有效危機處理</p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 p-5">
                            <div class="card">
                                <div class="mb-5">
                                    <img class="image-icon" src="assets/images/investment/5.png">
                                </div>
                                <?php
                                if($_SESSION['lan'] == 'EN'){
                                    ?>
                                    <p>Isolate business,</p>
                                    <p>management risks</p>
                                    <?php
                                }else {
                                    ?>
                                    <p>隔離實業經營,</p>
                                    <p>管理風險</p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 p-5">
                            <div class="card">
                                <div class="mb-5">
                                    <img class="image-icon" src="assets/images/investment/6.png">
                                </div>
                                <?php
                                if($_SESSION['lan'] == 'EN'){
                                    ?>
                                    <p>Resolve the contradiction between,</p>
                                    <p>business and family protection</p>
                                    <?php
                                }else {
                                    ?>
                                    <p>解決“企業守,</p>
                                    <p>家業守”的矛盾</p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 p-5">
                            <div class="card">
                                <div class="mb-5">
                                    <img class="image-icon" src="assets/images/investment/7.png">
                                </div>
                                <?php
                                if($_SESSION['lan'] == 'EN'){
                                    ?>
                                    <p>Various legal and tax</p>
                                    <p>arrangements for assets</p>
                                    <?php
                                }else {
                                    ?>
                                    <p>資產的多方面法</p>
                                    <p>律及稅務安排</p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 p-5">
                            <div class="card">
                                <div class="mb-5">
                                    <img class="image-icon" src="assets/images/investment/8.png">
                                </div>
                                <?php
                                if($_SESSION['lan'] == 'EN'){
                                    ?>
                                    <p>Multi-faceted currency arrangements</p>
                                    <p>for assets Integrated management</p>
                                    <?php
                                }else {
                                    ?>
                                    <p>資產的多方</p>
                                    <p>面貨幣安排</p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
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