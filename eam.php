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
        .card {
            min-height: 510px;
            margin: 20px;
        }

        .card-section {
            padding: 80px 80px;
        }

        @media only screen and (max-width: 992px) {
            .card {
                min-height: 100%;
            }

            .card-section {
                padding: 0 40px;
            }
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
    <div class="d-lg-block d-none" style="height: 80px">

    </div>

    <section id="top" class="pa-hero pa-blog-hero pa-centered-section pa-image-back position-relative"
             style="background-image: url(assets/images/hero-background.jpg);">

        <div class="pa-absolute-fill pa-gradient-back-v1"></div>

        <div class="container pa-supercontainer text-left">
            <div class="row pa-hero-typed-text">
                <div class="col-12 fadeInDelay03Duration10 text-center">
                    <h1 style="color: #b49e71;font-family: 'Blinker', sans-serif;font-size: 4rem;font-weight: bolder; margin-top: 20px;">
                        Le
                        Guardien</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- /.pa-hero -->

    <section class="eam">
        <div class="pt-5 pb-5">
            <h1 class="mb-5"><?php if ($_SESSION['lan'] == 'EN') echo 'External Asset Managers'; else echo '外部資產管理人'; ?></h1>
            <?php if ($_SESSION['lan'] == 'EN') {
                ?>
                <p>External Asset Manager (EAM) is a financial service provided by independent professionals or firms
                    who
                    manage investment portfolios for high net worth individuals, families, and institutions. Unlike
                    traditional in-house asset management by banks, EAM operates independently and offers personalized
                    investment solutions. They focus on understanding clients’ financial goals, provide unbiased advice,
                    and
                    offer specialized expertise in wealth management and investment strategies.
                </p>
                <?php
            } else {
                ?>
                <p>嘉兆家族辦公室的外部資產管理人(External Asset
                    Manager，簡稱EAM）是由獨立的專業人士或公司提供的金融服務，專注於為高資產淨值的個人、家族辦公室和機構管理投資組合。與傳統銀行內部資產管理不同，EAM獨立運作並提供度身訂造的投資方案。
                    EAM具有財富管理和投資策略方面的專業知識及經驗，致力於了解客戶的財務目標，提供公正的建議及管理客戶資產。
                </p>
                <?php
            }
            ?>

        </div>

    </section>

    <section class="lg-bg-blue">
        <div class="container-fluid">
            <h1 class="text-center text-white pt-3 pb-3">
                <?php if ($_SESSION['lan'] == 'EN') echo 'Advantages of EAM'; else echo 'EAM 的優勢'; ?>
            </h1>
        </div>
    </section>

    <section class="card-section"
             style="background-image: url('assets/images/new/hero-bg.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
        <div class="pt-5 pb-5">
            <div class="row text-center">
                <div class="col-lg-4 col-sm-12">
                    <div class="card" id="card-1">
                        <h1><?php if ($_SESSION['lan'] == 'EN') echo 'Client-Centric Approach'; else echo '以客戶為中心'; ?></h1>
                        <?php if ($_SESSION['lan'] == 'EN') {
                            ?>
                            <p>The fundamental focus and objective of the EAM platform revolve around addressing and
                                fulfilling clients’ needs and interests. It operates independently of product sales or
                                transaction commissions and is not constrained to a singular financial institution.
                                Embracing a neutral and objective standpoint, the platform effectively amalgamates the
                                strengths and benefits offered by various banks’ products and services to deliver
                                clients with the utmost appropriate solutions.
                            </p>
                            <?php
                        } else {
                            ?>
                            <p>嘉兆家族辦公室的EAM 以客戶的需求和利益為核心，不受限於任何金融機構，也不受產品銷售或交易佣金的驅動。採用中立客觀的立場，EAM有效整合不同金融機構的產品和服務優勢，提供最適合客戶的解決方案。
                            </p>
                            <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <div class="card" id="card-2">
                        <h1><?php if ($_SESSION['lan'] == 'EN') echo 'Funds Security'; else echo '資金安全'; ?></h1>
                        <?php if ($_SESSION['lan'] == 'EN') {
                            ?>
                            <p>EAM operates within a regulatory framework and does not hold any client assets. Client assets are always held in private bank accounts chosen independently by the clients, ensuring the security of funds.
                            </p>
                            <?php
                        } else {
                            ?>
                            <p>EAM 在監管框架內運作，不持有任何客戶資產。客戶資產始終存放在客戶獨立選擇的私人銀行戶口中，確保資金的安全。
                            </p>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <div class="card" id="card-3">
                        <h1><?php if ($_SESSION['lan'] == 'EN') echo 'Efficient Communication and Cost Savings'; else echo '高效溝通和節省成本'; ?></h1>
                        <?php if ($_SESSION['lan'] == 'EN') {
                            ?>
                            <p>EAM encompasses multiple financial institutions concurrently, enabling comprehensive information assimilation and industry expertise. This notably streamlines clients’ time and effort compared to the conventional private banking approach, where individual communication and evaluation with each bank are required. Moreover, EAM possesses enhanced negotiation capabilities, reducing external costs for clients.
                            </p>
                            <?php
                        } else {
                            ?>
                            <p>EAM 可以同時涵蓋多家金融機構，實現全面的資訊匯集和行業專業知識。相較於傳統的私人銀行方式，客戶不再需要與每家銀行進行個別溝通和評估，明顯能夠節省時間和精力。此外，EAM 一般與多家金融機構已簽署合作協議，具備協商能力，可減少客戶的外部成本。
                            </p>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid p-0 m-0">
        <div class="row" style="margin:0;">
            <div class="col-12">
                <img src="assets/images/eam/bottomm.png" class="img-fluid"/>
            </div>
        </div>
    </div>


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