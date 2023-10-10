<?php
session_start();
if(!isset($_SESSION['lan'])){
    $_SESSION['lan'] = 'CN';
}
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Le Guardien Family Office</title>
    <?php include ('assets/include/css.php');?>
    <style>
        p{
            color: #13324f;
        }
    </style>
</head>

<body class="pa-blog">

<!-- Page Transitions
================================================== -->


<!-- Navigation Menu
================================================== -->

<?php include ('assets/include/nav.php');?>
<!-- /.pa-menu -->


<!-- Pushable Content
================================================== -->
<div class="pushable-content">
    <!-- Hero Section
    ================================================== -->
    <div class="d-lg-block d-none" style="height: 80px">

    </div>

    <section id="top" class="pa-hero pa-blog-hero pa-centered-section pa-image-back position-relative"
             style="background-image: url(assets/images/hero-background.jpg);">

        <div class="pa-absolute-fill pa-gradient-back-v1"></div>

        <div class="container pa-supercontainer text-left">
            <div class="row pa-hero-typed-text">
                <div class="col-12 fadeInDelay03Duration10 text-center">
                    <h1 style="color: #b49e71;font-family: 'Blinker', sans-serif;font-size: 4rem;font-weight: bolder; margin-top: 20px;">Le
                        Guardien</h1>
                </div>
            </div>
        </div>

    </section>
    <!-- /.pa-hero -->

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-center text-white pt-3 pb-3"><?php if($_SESSION['lan'] == 'CN') echo '我們的服務'; else echo 'Our Services '?>

            </h1>
        </div>
    </section>

    <section style="background-image: url('assets/images/new/hero-bg.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
        <div class="container">
            <img src="assets/images/new/hero.png" class="img-fluid mt-5 mb-5" alt=""/>
        </div>
    </section>


    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-right  text-center text-white pt-3 pb-3 pr-lg-5"><?php if($_SESSION['lan'] == 'CN') echo '家庭資產管理'; else echo '  Family Asset Management '?>

            </h1>
        </div>
    </section>

    <section class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src="assets/images/new/14a.jpg" alt="" style="height: 100%; object-fit: cover;"/>
                </div>
                <div class="col-lg-8 d-flex justify-content-center align-items-center">
                    <div class="p-lg-5 p-3">
                        <p><?php if($_SESSION['lan'] == 'CN') echo 'Le Guardien Family Office 選擇香港作為資產管理總部，整合高品質的國際資源，為中國的高淨值家庭提供最佳的資產管理服務，以實現家族財富的保值和增值。它確實非常值得信賴。以中國的高淨值人口為服務對象，香港為...（未完整，請提供更多上下文以完成翻譯。）'; else echo '   Le Guardien Family Office selects Hong Kong as the asset management headquarters,
                            integrating
                            high-quality international resources, and provide the best asset management services for
                            China\'s
                            high-net-worth families, so as to actualize the preservation and value enhancement of family
                            wealth.
                            It is really very trustworthy. Taking China\'s high net-worth population as the serving
                            clients,
                            Hong '?>

                        </p>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '香港具有以下綜合優勢：'; else echo '   Kong have the following integrative advantages: '?>

                        </p>
                        <ul>
                            <li>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i><?php if($_SESSION['lan'] == 'CN') echo '高度的貨幣穩定性'; else echo 'High currency stability '?>
                            </li>
                            <li>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i><?php if($_SESSION['lan'] == 'CN') echo '離岸金融使其成為全球最大的私人財富中心'; else echo 'Offshore finance make it becomes
                                the world\'s largest private wealth center '?>
                            </li>
                            <li>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i><?php if($_SESSION['lan'] == 'CN') echo '嚴格的法規和監管環境'; else echo 'Strict regulations and regulatory
                                environment '?>
                            </li>
                            <li>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i><?php if($_SESSION['lan'] == 'CN') echo '不受外匯管理約束，資金自由流通'; else echo 'Not subject to foreign exchange
                                management and free circulation of funds '?>
                            </li>
                            <li>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i><?php if($_SESSION['lan'] == 'CN') echo '合理的稅務規劃，世界發達地區中稅率最低之一'; else echo 'Reasonable tax planning, one of
                                lowest tax rate in the world developed region '?>
                            </li>
                        </ul>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '
Le Guardien Family Office 提供獨立的資產管理模式，我們以完全授權的方式管理和監督您的資產。我們為家庭和企業度身訂製了關鍵的服務內容，以實現財富保值。同時，通過全球資產配置和綜合統一管理，降低風險並增強投資組合的投資回報。專業的特許金融分析師（CFA）和投資專家是私人家庭辦公室團隊的後盾，與投資策略師和研究分析師一起，提供專業和有效的支持。為了滿足客戶的適當風險承受能力和回報目標，我們量身定制了不同種類的資產委託組合，並盡力把握每個全球機會，以把握全球機遇的投資組合。'; else echo 'Le Guardien Family Office provides an independent asset management model, and we manage and
                            supervise your assets in a fully authorize approach. We tailor-made key service content for
                            families
                            and enterprises, so as to achieve wealth preservation. At the same time, through global
                            asset
                            allocation and integrated unified management to reduce risks and enhance portfolio
                            investment
                            returns. Professional Chartered Financial Analysts (CFA) and investment experts are the
                            back-up
                            of
                            the Private Family Office team, together with the investment strategists and research
                            analysts,
                            to
                            provide professional and effective support. In order to meet the appropriate risk tolerance
                            and
                            return targets of customers, we tailor-made different kind of asset commissioned
                            combinations
                            and
                            try our best to grasp every global opportunities.portfolios to grasp global opportunities '?>

                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-left  text-center text-white pt-3 pb-3 pl-lg-5"><?php if($_SESSION['lan'] == 'CN') echo '家族遺產規劃'; else echo ' Family Heritage Planning '?>

            </h1>
        </div>
    </section>

    <section class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 d-flex justify-content-center align-items-center order-1 order-lg-0">
                    <div class="p-lg-5 p-3">
                        <p><?php if($_SESSION['lan'] == 'CN') echo 'Le Guardien Family Office 服務提供家族遺產規劃，確保家族的價值觀、文化和智慧能夠得以保留和延續。我們合格的家族遺產規劃師為家庭提供各種建議，建立堅實和和諧的代際關係，制定持久的遺產計劃。'; else echo 'Le Guardien Family Office Service provides family inherit planning and ensure that family
                            values, culture and wisdom can be preserved and extended. Our qualified family heritage
                            planners provide various suggestions to families, establish a solid and harmonious
                            inter-generational relationship, and formulate durable inheritance plans. '?>

                        </p>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '我們致力於提供全方位的家族企業繼承服務。我們合格的家族遺產規劃師擁有全面的繼承規劃知識和專業技能。'; else echo ' We are committed to provide a full range of family business inheritance services. Our
                            qualified family heritage planners have comprehensive inherit planning knowledge and
                            expertise. '?>

                        </p>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '
他們接受定期的專業培訓，保持最高水平的能力和最高標準的誠信，並度身訂製出滿足客戶獨特需求的家族遺產計劃。'; else echo ' They receive regular professional training, maintain the highest level of competence and the
                            highest standards of integrity, and tailor-made a family inherit plan that meets the unique
                            needs of customers. '?>


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
            <h1 class="text-lg-right  text-center text-white pt-3 pb-3 pr-lg-5"><?php if($_SESSION['lan'] == 'CN') echo '家族財富管理'; else echo ' Family Wealth Management '?>

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
                        <p><?php if($_SESSION['lan'] == 'CN') echo 'Le Guardien Family Office Service 提供有經驗的財務規劃師（CFPCM）來幫助您制定個人和家庭財務規劃，以獲得更大的財務保障。'; else echo '   Le Guardien Family Office Service provides you experienced financial planners (CFPCM) to
                            help you formulating personal and family financial planning, so as to obtain greater
                            financial protection. '?>

                        </p>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '
協助您評估您的情況，從財富結構到財務規劃，檢查您現有的計劃是否符合您的目標，提供一個包括財富結構、稅務和法律建議的完整解決方案。'; else echo ' Help you to assess your situation, from Wealth Structuring to Financial Planning, and check
                            whether your existing plan meets your goals- provide a complete solution covering wealth
                            structure, tax and legal advices.
                            wealth structuring, tax and legal advice. '?>

                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-left  text-center text-white pt-3 pb-3 pl-lg-5"><?php if($_SESSION['lan'] == 'CN') echo '家庭事務服務'; else echo ' Family Affairs Services '?>

            </h1>
        </div>
    </section>

    <section class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 d-flex justify-content-center align-items-center order-1 order-lg-0">
                    <div class="p-lg-5 p-3">
                        <p><?php if($_SESSION['lan'] == 'CN') echo 'Le Guardien Family Office 將香港選為資產管理總部，整合高品質的國際資源，為中國的高淨值家庭提供最佳的資產管理服務，實現家族財富的保值和增值。面對中國的高淨值人口，香港具有許多綜合優勢：'; else echo 'Le Guardien Family Office chooses Hong Kong as the asset management headquarters,
                            integrating high-quality international resources, and provides the best asset management
                            services for China\'s high net-worth families, and actualize the preservation and value
                            enhancement of the family\'s wealth. Facing China\'s high net-worth population, Hong Kong has
                            a lot of integrated advantages: '?>

                        </p>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '家庭和諧氛圍和共同的價值觀。'; else echo ' Family harmony atmosphere and common values '?>

                        </p>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '家庭不僅繼承物質財富，還要繼承家庭的精神和和諧。為了成功保留財富，家庭必須在成員之間形成反映共同價值觀的社會契約，每一代後代都必須再次確認、承認並繼續採納這些價值觀。'; else echo 'The family not only inherits the material wealth, but also inherits the spirit and harmony
                            of the family. In order to successfully retain wealth, a family must form a social contract
                            between members reflecting common values, and each subsequent generation must reaffirm,
                            recognize, and continue to adopt this value. '?>


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
            <h1 class="text-lg-right  text-center text-white pt-3 pb-3 pr-lg-5"><?php if($_SESSION['lan'] == 'CN') echo '
家族遺產教育'; else echo ' Family Inheritance Education '?>

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
                        <p><?php if($_SESSION['lan'] == 'CN') echo '
家族遺傳教育 - 一個針對超高淨值客戶代際傳承而特別定制的家族企業傳承培育計劃。'; else echo 'Family Inherited Education--a nurturing plan for inheriting the family business, that is
                            specially tailored-made for the inter-generational inheritance of ultra-high-net-worth
                            customers. '?>

                        </p>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '通過在美國、歐洲和亞洲的研究機構和大學進行研究，以及訪問世界各地的許多家庭並進行交流，幫助代際間了解家庭和家族企業的運作方式，同時尊重兩代人的自由選擇，以適當的方式繼承家族財富。'; else echo '   Through studying in research institutes and universities in the United States, Europe, and
                            Asia, and visiting and communicating with many families around the world, it helps
                            inter-generation to understand how the family and the family business operate, while
                            respecting the free choice of the two generations and inherit the family wealth in an
                            appropriate way. '?>


                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-lg-left  text-center text-white pt-3 pb-3 pl-lg-5"><?php if($_SESSION['lan'] == 'CN') echo '頂尖高等教育'; else echo 'Top Higher Education '?>

            </h1>
        </div>
    </section>

    <section class="lg-content-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 d-flex justify-content-center align-items-center order-1 order-lg-0">
                    <div class="p-lg-5 p-3">
                        <p><?php if($_SESSION['lan'] == 'CN') echo '如果家庭成員打算進入哈佛、耶魯、斯坦福等常春藤聯盟大學，長期規劃是必要的，最好在早期建立良好的互動關係，與教授們建立良性互動關係。'; else echo ' It takes long-term planning and it is better to establish a benign interactive relationship
                            with professors in an early stage if family members intend to enter Ivy League colleges such
                            as Harvard, Yale, Stanford etc. '?>

                        </p>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '
在高等教育的選擇上，家庭成員應盡早意識到自己的才能和優勢，並選擇適合自己的學術環境和文化氛圍。'; else echo 'In the choice of higher education, family members should aware of their own talents and
                            advantages as early as possible and choose a suitable academic environment and cultural
                            atmosphere. '?>

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
            <h1 class="text-lg-right  text-center text-white pt-3 pb-3 pr-lg-5"><?php if($_SESSION['lan'] == 'CN') echo '企業諮詢和後續服務'; else echo ' Enterprise consultation
                and follow-up services '?>

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
                        <p><?php if($_SESSION['lan'] == 'CN') echo '我們專業而強大的私人家族辦公室服務顧問團隊可以幫助家族整合各種數據和材料，進行分析和評估，從而了解企業的潛在問題，並應用綜合的改進和問題解決模型。'; else echo ' Our professional and powerful Private Family Office Service consultant teams can help family
                            to integrate various data / material, analysis and evaluate, then, the potential problems of
                            the enterprise can be understood, and a comprehensive model of improvement and problem
                            solving can be applied. '?>

                        </p>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '旨在實施調整和解決方案，以達到“最佳狀態”的目標，例如提高上市申請的批准機會，節省時間和費用，或提高融資申請的批准機會和降低成本。'; else echo 'Targeting to have "the best state" to implement adjustment and work out, such as increasing
                            the chance of approval of a listing application, saving time and expense or increasing the
                            chance of approval of a financing application and cost reduction. '?>


                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section
    ================================================== -->

    <?php include ('assets/include/news.php');?>
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