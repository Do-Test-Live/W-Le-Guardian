<?php
$currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<a class="pa-mobile-main-logo" href="index.php"><img src="<?php if($_SESSION['lan'] == 'EN') echo 'assets/images/en-logo.png'; else echo 'assets/images/cn-logo.png'?>"
                                             style="max-height: 45px;max-width: 100%;padding-left: 18px;padding-top: 10px"
                                             alt=""/></a>


<nav id="main-nav" class="pa-menu navbar pa-navbar navbar-expand-lg navbar-dark lg-bg-blue static-top">

    <!-- Desktop Menu Logo -->
    <a class="navbar-brand" href="index.php"><img src="<?php if($_SESSION['lan'] == 'EN') echo 'assets/images/en-logo.png'; else echo 'assets/images/cn-logo.png'?>"
                                                   style="width:unset;height: 65px;max-width: 100%;padding-left: 18px;"
                                                   alt=""></a>

    <!-- The Menu -->
    <ul class="navbar-nav ml-auto">

        <!-- Mobile Menu Logo (only use if "close" buttons are set to false in JS) -->
        <li data-nav-custom-content class="custom-content pa-mobile-menu-logo">
            <a class="pa-mobile-navbar-brand" href="index.php"><img src="<?php if($_SESSION['lan'] == 'EN') echo 'assets/images/en-logo.png'; else echo 'assets/images/cn-logo.png'?>"
                                                                     style="height: 50px;" alt=""/></a>
        </li>

        <!-- Regular Menu Items Start -->
        <!--<li class="nav-item">
            <a class="nav-link hvr-underline-from-center" href="#"><?php /*if($_SESSION['lan'] == 'EN') echo 'About Us'; else echo '關於我們'*/?></a>
        </li>-->
        <li class="nav-item">
            <a class="nav-link hvr-underline-from-center" href="our_services.php"><?php if($_SESSION['lan'] == 'EN') echo 'Our Services'; else echo '我們的服務'?></a>
        </li>

        <li class="nav-item menu-item-has-children">
            <a class="nav-link hvr-underline-from-center" href="#"><?php if($_SESSION['lan'] == 'EN') echo 'Asset Management'; else echo '財富管理'?></a>
            <ul class="pa-submenu-ul">
                <li class="nav-item"><a class="nav-link active" href="eam.php"><?php if($_SESSION['lan'] == 'EN') echo 'External Asset Manager (EAM)'; else echo '外部資產管理人(EAM)'?></a></li>
                <li class="nav-item"><a class="nav-link active" href="private_bank.php"><?php if($_SESSION['lan'] == 'EN') echo 'Private Banking'; else echo '私人銀行'?></a></li>
                <li class="nav-item"><a class="nav-link active" href="investment.php"><?php if($_SESSION['lan'] == 'EN') echo 'Discretionary Investment Management'; else echo '全權委托投資管理'?></a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link hvr-underline-from-center" href="wealth.php"><?php if($_SESSION['lan'] == 'EN') echo 'Family Inheritance Planning'; else echo '家族傳承規劃'?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link hvr-underline-from-center" href="legal-affairs.php"><?php if($_SESSION['lan'] == 'EN') echo 'Family Legal Affairs'; else echo '家族法律事務'?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link hvr-underline-from-center" href="#"><?php if($_SESSION['lan'] == 'EN') echo 'Global Tax Planning'; else echo '環球稅務規劃'?></a>
        </li>

        <li class="nav-item menu-item-has-children">
            <a class="nav-link hvr-underline-from-center" href="#"><?php if($_SESSION['lan'] == 'EN') echo 'Trust'; else echo '信托服務'?></a>
            <ul class="pa-submenu-ul">
                <li class="nav-item"><a class="nav-link active"
                                        href="https://fgatrust.ngt.hk/about-us/index.html"><?php if($_SESSION['lan'] == 'EN') echo 'About Us'; else echo '關於我們'?></a></li>
                <li class="nav-item menu-item-has-children">
                    <a class="nav-link hvr-underline-from-center" href="#" style="color: #fff;"><?php if($_SESSION['lan'] == 'EN') echo 'Our Services'; else echo '我们的服务'?></a>
                    <ul class="pa-submenu-ul">
                        <li class="nav-item"><a class="nav-link active"
                                                href="https://fgatrust.ngt.hk/our-services-1/index.html"><?php if($_SESSION['lan'] == 'EN') echo 'About Us'; else echo '關於我們'?></a>
                        </li>
                        <li class="nav-item"><a class="nav-link active"
                                                href="https://fgatrust.ngt.hk/our-services-2/index.html"><?php if($_SESSION['lan'] == 'EN') echo 'Our Services'; else echo '我们的服务'?></a>
                        </li>
                        <li class="nav-item"><a class="nav-link active"
                                                href="https://fgatrust.ngt.hk/our-service-3/index.html"><?php if($_SESSION['lan'] == 'EN') echo 'Trust Platform'; else echo '信託平台'?></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link active"
                                        href="https://fgatrust.ngt.hk/financial-services/index.html"><?php if($_SESSION['lan'] == 'EN') echo 'Trust Platform'; else echo '信託平台'?></a></li>
                <li class="nav-item"><a class="nav-link active" href="https://fgatrust.ngt.hk/credit-card/index.html"><?php if($_SESSION['lan'] == 'EN') echo 'Credit Card'; else echo '信用卡'?></a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link hvr-underline-from-center" href="#"><?php if($_SESSION['lan'] == 'EN') echo 'Contact us'; else echo '聯絡我們'?></a>
        </li>
        <li class="nav-item menu-item-has-children">
            <a class="nav-link hvr-underline-from-center" href="#"><?php if($_SESSION['lan'] == 'EN') echo 'Language'; else echo '語言'?></a>
            <ul class="pa-submenu-ul">
                <li class="nav-item"><a class="nav-link active" href="assets/include/lan.php?lan=EN&url=<?php echo $currentURL;?>">English</a></li>
                <li class="nav-item"><a class="nav-link active" href="assets/include/lan.php?lan=CN&url=<?php echo $currentURL;?>">Chinese</a></li>
            </ul>
        </li>

        <!-- Regular Menu Items End -->

        <!-- Mobile Menu Social Icons -->
        <li data-nav-custom-content class="custom-content pa-menu-socials">
            <div class="pa-social-section">
                <h1 class="pa-h1-v3 pa-bright fadeInDelay03Duration10"><strong>與我們連接</strong></h1>
                <a class="pa-social-icons" href="#" target="_blank"><span
                            class="fadeInDelay03Duration10"><i class="fa fa-facebook"></i></span></a>
                <a class="pa-social-icons" href="#" target="_blank"><span
                            class="fadeInDelay03Duration10"><i class="fa fa-behance"></i></span></a>
                <a class="pa-social-icons" href="#" target="_blank"><span
                            class="fadeInDelay03Duration10"><i class="fa fa-dribbble"></i></span></a>
                <a class="pa-social-icons" href="#" target="_blank"><span
                            class="fadeInDelay03Duration10"><i class="fa fa-instagram"></i></span></a>

            </div>
        </li>

    </ul>
</nav>
<script>
    var path = window.location.pathname;
    console.log(path);
</script>