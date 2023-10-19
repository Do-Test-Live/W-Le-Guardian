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
            <h1 class="text-center text-white pt-3 pb-3"><?php if ($_SESSION['lan'] == 'CN') echo '我們的服務'; else echo 'Our Services ' ?>

            </h1>
        </div>
    </section>

    <section
            style="background-image: url('assets/images/new/hero-bg.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
        <div class="container">
            <?php
            if ($_SESSION['lan'] == 'CN') {
                ?>
                <img src="assets/images/new/hero-cn.png" class="img-fluid mt-5 mb-5" alt=""/>
                <?php
            } else {
                ?>
                <img src="assets/images/new/hero-en.png" class="img-fluid mt-5 mb-5" alt=""/>
                <?php
            } ?>

        </div>
    </section>


    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-right  text-center text-white pt-3 pb-3 pr-lg-5">
                <?php if ($_SESSION['lan'] == 'CN') echo '家族資產管理'; else echo 'Family Asset Management' ?>

            </h1>
        </div>
    </section>

    <section class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src="assets/images/new/14a.png" alt=""
                         style="height: 100%; object-fit: cover;object-position: 44%;"/>
                </div>
                <div class="col-lg-8 d-flex justify-content-center align-items-center">
                    <div class="p-lg-5 p-3">
                        <p>
                            <?php
                            if ($_SESSION['lan'] == 'CN')
                                echo '嘉兆家族辦公室整合優質的國際化資源，為中國高淨值家庭提供最佳的資產管理服務， 
                            實現家族財富的保值增值，值得信賴。面對中國高淨值人群，香港的綜合優勢：';
                            else
                                echo 'Le Guardien Family Office provides the best asset
                                 management services for China\'s high-net-worth families, so 
                                as to actualize the preservation and value enhancement of family wealth. It is really very trustworthy. 
                                Taking China\'s high net-worth population as the serving clients, 
                                Hong Kong have the following integrative advantages: ';
                            ?>

                        </p>
                        <ul>
                            <li>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <?php
                                if ($_SESSION['lan'] == 'CN')
                                    echo '貨幣穩定';
                                else
                                    echo 'High currency stability';
                                ?>
                            </li>
                            <li>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <?php
                                if ($_SESSION['lan'] == 'CN')
                                    echo '離岸金融，成為世界最大私人財富中心';
                                else
                                    echo 'Offshore finance make it becomes the world\'s largest private wealth center';
                                ?>
                            </li>
                            <li>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <?php
                                if ($_SESSION['lan'] == 'CN')
                                    echo '嚴格的法規、監管環境';
                                else
                                    echo 'Strict regulations and regulatory environment';
                                ?>
                            </li>
                            <li>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <?php
                                if ($_SESSION['lan'] == 'CN')
                                    echo '不受外匯管理，資金自由流通';
                                else
                                    echo 'Not subject to foreign exchange management and free circulation of funds';
                                ?>
                            </li>
                            <li>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <?php
                                if ($_SESSION['lan'] == 'CN')
                                    echo '合理規劃稅務，全球稅率最低的發達國家之一';
                                else
                                    echo 'Reasonable tax planning, one of lowest tax rate in the world developed region';
                                ?>
                            </li>
                        </ul>
                        <p>
                            <?php
                            if ($_SESSION['lan'] == 'CN')
                                echo '嘉兆家族辦公室服務提供獨立資產管理模式，以全權委託方式由我們管理及監督您的資產;
                                為家族及企業量身定制的重點服務內容，實現財富保全，同時通過全球資產配置和綜合統一
                                管理來降低風險、提升組合投資收益。專業的特許金融分析師(CFA)及投資專家為私人家族辦公室服務團隊，
                                連同投資策略師及研究分析師作團隊後盾，提供專業及有效支援。為迎客戶合適的風險承受能力及收益目標，
                                量身定制不同的資產委託組合，掌握環球機遇。';
                            else
                                echo 'Le Guardien Family Office provides an independent asset 
                                management model, and we manage and supervise your assets in 
                                a fully authorize approach. We tailor-made key service content 
                                for families and enterprises, so as to achieve wealth preservation. 
                                At the same time, through global asset allocation and integrated 
                                unified management to reduce risks and enhance portfolio 
                                investment returns. Professional Chartered Financial Analysts 
                                (CFA) and investment experts are the back-up of the Private Family 
                                Office team, together with the investment strategists and research 
                                analysts, to provide professional and effective support. In order to 
                                meet the appropriate risk tolerance and return targets of customers, 
                                we tailor-made different kind of asset commissioned combinations and 
                                try our best to grasp every global opportunities.';
                            ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-left  text-center text-white pt-3 pb-3 pl-lg-5">
                <?php
                if ($_SESSION['lan'] == 'CN')
                    echo '家族傳承規劃';
                else
                    echo 'Family Inheritance Planning'; ?>

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
                                echo '嘉兆家族辦公室服務為家族提供傳承規劃，確保家族價值、文化和智慧得以延展 。
                                我們的合資格家族傳承規劃師為家族提供各種建議，建立穩固與和諧的跨世代關係，
                                訂立持久的傳承計劃。我們致力提供一系列完備的家族業務傳承服務。
                                我們的合資格家族傳承規劃師具備豐富的傳承規劃知識和專長。他們接受定期的專業培訓，
                                維持最徍能力水準和最高的誠信標準，量身打造能滿足客戶獨特需要的家族傳承計劃。';
                            else
                                echo 'Le Guardien Family Office provides family Inheritance planning and ensure that family values, 
                                culture and wisdom can be preserved and extended. Our qualified family Inheritance planners 
                                provide various suggestions to families, establish a solid and harmonious inter-generational relationship, 
                                and formulate durable inheritance plans. We are committed to provide a full range of family
                                 business inheritance services. Our qualified family Inheritance planners have comprehensive inherit 
                                 planning knowledge and expertise. They receive regular professional training, 
                                 maintain the highest level of competence 
                                    and the highest standards of integrity, and tailor-made a family 
                                    Inheritance plan that meets the unique needs of customers. '; ?>

                        </p>
                    </div>

                </div>
                <div class="col-lg-4  order-0 order-lg-1">
                    <img src="assets/images/new/5.png" alt="" style="height: 100%; object-fit: cover;"/>
                </div>
            </div>
        </div>
    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-right  text-center text-white pt-3 pb-3 pr-lg-5">
                <?php
                if ($_SESSION['lan'] == 'CN')
                    echo '家族財富管理';
                else
                    echo 'Family Wealth Management' ?>

            </h1>
        </div>
    </section>

    <section class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src="assets/images/new/rrrr.png" alt="" style="height: 100%; object-fit: cover;"/>
                </div>
                <div class="col-lg-8 d-flex justify-content-center align-items-center">
                    <div class="p-lg-5 p-3">
                        <p>
                            <?php
                            if ($_SESSION['lan'] == 'CN')
                                echo '嘉兆家族辦公室服務擁有經驗豐富的財務策劃師 (CFPCM) 幫助您制定個人及家庭財務策劃，
                                從而獲得更大的財務保障。幫助您評估您的情況，從財富結構 (Wealth Structuring) 
                                到財務策劃 (Financial Planning)，並檢查您的現有計劃是否符合您的目標- 提供涵蓋財富結構，
                                稅務和法律諮詢的完整解決方案。';
                            else
                                echo 'Le Guardien Family Office provides you experienced financial planners (CFPCM) 
                                to help you formulating personal and family financial planning, so as to 
                                obtain greater financial protection. Help you to assess your situation, 
                                from Wealth Structuring to Financial Planning, and check whether your existing plan 
                                meets your goals- provide a complete solution covering wealth structure, 
                                tax and legal advices.';
                            ?>

                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-left  text-center text-white pt-3 pb-3 pl-lg-5">
                <?php
                if ($_SESSION['lan'] == 'CN')
                    echo '家族事務服務';
                else
                    echo 'Family Affairs Services';
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
                                echo '嘉兆家族辦公室服務甄選香港為資產管理總部，整合優質的國際化資源，
                                        為中國高淨值家庭提供最佳的資產管理服務，實現家族財富的保值增值，
                                        值得信賴。面對中國高淨值人群，香港的綜合優勢：<br/>
                                        家族和睦氛圍及共同價值觀<br/>
                                        家族不但傳承物質財富，更要傳承的是家族的精神及和睦氛圍。為了成功保有財富，
                                        一個家族必須在成員之間形成社會契約反映共同的價值觀，且以後的每一代都要重申、
                                        認可並繼續採納這個價值觀。';
                            else
                                echo 'The family not only inherits the material wealth, but 
                                also inherits the spirit and harmony of the family. 
                                In order to successfully retain wealth, a family must form a social 
                                contract between members reflecting common values, and each subsequent 
                                generation must reaffirm, recognize, and continue to adopt this value.';
                            ?>

                        </p>
                    </div>

                </div>
                <div class="col-lg-4 order-0 order-lg-1">
                    <img src="assets/images/new/1.png" alt="" style="height: 100%; object-fit: cover;"/>
                </div>
            </div>
        </div>
    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-right  text-center text-white pt-3 pb-3 pr-lg-5">
                <?php
                if ($_SESSION['lan'] == 'CN')
                    echo '家族傳承教育';
                else
                    echo 'Family Inheritance Education';
                ?>

            </h1>
        </div>
    </section>

    <section class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src="assets/images/new/38.jpg" alt="" style="height: 100%; object-fit: cover;"/>
                </div>
                <div class="col-lg-8 d-flex justify-content-center align-items-center">
                    <div class="p-lg-5 p-3">
                        <p>
                            <?php
                            if ($_SESSION['lan'] == 'CN')
                                echo '專門為超高淨值客戶的代際傳承而定制的繼承家族事業的培育計畫。通過在美國、
                                歐洲、亞洲研究機構及高校的學習，走訪全球多個家族的溝通與交流，使得二代瞭解家族與家族企業如何運營，
                                同時尊重二代的自由選擇權，用適當的方式進行家族財富的傳承。';
                            else
                                echo 'Family Inherited Education--a nurturing plan for 
                                inheriting the family business, that is specially tailored-made 
                                for the inter-generational inheritance of ultra-high-net-worth 
                                customers. Through studying in research institutes and 
                                universities in the United States, Europe, and Asia, and 
                                visiting and communicating with many families around the world, 
                                it helps inter-generation to understand how the family and 
                                the family business operate, while respecting the free choice of 
                                the two generations and inherit the family wealth in an appropriate way.';
                            ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-left  text-center text-white pt-3 pb-3 pl-lg-5">
                <?php
                if ($_SESSION['lan'] == 'CN')
                    echo '頂級高等教育';
                else
                    echo 'Top higher education';
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
                                echo '家族成員進入諸如哈佛、耶魯、斯坦福等常春藤高校，需要長期規劃，
                                並提早與教授建立良性的互動關係。在高等教育方式的選擇中，
                                家族成員發現自我天賦與優勢，選擇適合的學術環境與文化氛圍。';
                            else
                                echo 'It takes long-term planning and it is better to establish a 
                                benign interactive relationship with professors in an early stage 
                                if family members intend to enter Ivy League colleges such as Harvard, 
                                Yale, Stanford etc. In the choice of higher education, family 
                                members should aware of their own talents and advantages as 
                                early as possible and choose a suitable academic environment 
                                and cultural atmosphere.';
                            ?>
                        </p>
                    </div>

                </div>
                <div class="col-lg-4 order-0 order-lg-1">
                    <img src="assets/images/new/6.png" alt="" style="height: 100%; object-fit: cover;"/>
                </div>
            </div>
        </div>
    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-right  text-center text-white pt-3 pb-3 pr-lg-5">
                <?php
                if ($_SESSION['lan'] == 'CN')
                    echo '企業諮詢及後續服務';
                else
                    echo 'Enterprise consultation and follow-up services';
                ?>
            </h1>
        </div>
    </section>

    <section class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src="assets/images/new/7.png" alt="" style="height: 100%; object-fit: cover;"/>
                </div>
                <div class="col-lg-8 d-flex justify-content-center align-items-center">
                    <div class="p-lg-5 p-3">
                        <p>
                            <?php
                            if ($_SESSION['lan'] == 'CN')
                                echo '我們專業且強大的私人家族辦公室服務顧問團隊可以幫助家族整合各種數據/材料，
                            進行分析和評估，從而了解企業潛在的問題，並應用全面的改進和解決問題的模型。 
                            以「最好的狀態」來實施調整和解決，例如增加上市申請獲批准的機會、
                            節省時間和費用或增加融資申請批准的機會並降低成本。';
                            else
                                echo 'Our professional and powerful Private Family Office Service consultant 
                            teams can help family to integrate various data / material, analysis 
                            and evaluate, then, the potential problems of the enterprise can be understood, 
                            and a comprehensive model of improvement and problem solving can be applied. 
                            Targeting to have "the best state" to implement adjustment and work out, 
                            such as increasing the chance of approval of a listing application, saving 
                            time and expense or increasing the chance of approval of a financing 
                            application and cost reduction.';
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