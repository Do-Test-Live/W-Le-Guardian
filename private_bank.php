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
                <?php if($_SESSION['lan'] == 'EN') echo 'Private Banking'; else echo '私人銀行';?>
            </h1>
        </div>
    </section>

    <section id="the-content"
             class="pa-blog-content pa-blog-main-content pa-blog-single pa-blog-style-v3-classic no_sidebar p-5">
        <!-- sidebar_left, sidebar_right, no_sidebar -->


        <!-- Main Article Content
        ================================================== -->
        <div class="container pa-supercontainer pa-blog pt-5">
            <div class="row">
                <!-- Main Article Column
                ================================================== -->
                <div class="col-12 pa-single-article">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="text-dark mb-3">
                                <?php
                                if($_SESSION['lan'] == 'EN') echo "Banking Partners for External Asset Management"; else echo "外部資產管理的銀行合作夥伴";
                                ?>
                            </h1>
                        </div>
                    </div>

                    <article id="post-565" class="post type-post">

                        <!-- post-content -->
                        <div class="post-content">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/3.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/4.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/5.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/6.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/7.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/8.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/9.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/10.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/11.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/12.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/14.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-2 col-4 mt-5">
                                    <img src="assets/images/logo/13.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                    </article>

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