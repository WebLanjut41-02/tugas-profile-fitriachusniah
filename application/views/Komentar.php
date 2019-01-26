<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Nia</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css') ?>/linearicons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css') ?>/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css') ?>/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css') ?>/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css') ?>/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css') ?>/main.css">
</head>
<body>
<!-- start banner Area -->
<section class="banner-area" id="home">
    <!-- Start Header Area -->
    <header class="default-header">
        <nav class="navbar navbar-expand-lg  navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo base_url('assets/img/logo.png')?>" alt="" height="100px" width="100px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-white lnr lnr-menu"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a href="<?php echo base_url(); ?>index.php/Profile">Home</a></li>
                        <!-- Dropdown -->

                    </ul>
                </div>
            </div>
        </nav>
    </header>
<!-- start contact Area -->
<section class="contact-area section-gap" id="comment">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-20 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Your Comment</h1>
                    <p>For the "Better Me".</p>
                </div>
            </div>
        </div>
        <form class="form-area mt-60" id="myForm" action="mail.php" method="post" class="contact-form text-right">
            <div class="row">
                <div class="col-lg-12 form-group">
                    <?php

                    $dataKomentar = $this->session->data_komentar;
                    echo "<font size='+2'>".$dataKomentar."</font>";
                    ?>
                </div></div>
        </form>

    </div>
</section>
<!-- end contact Area -->





<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>

<script src="js/main.js"></script>
</body>
</html>