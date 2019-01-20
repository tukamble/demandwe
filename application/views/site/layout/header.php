<!DOCTYPE html>
<html class="no-js">
    <!--<![endif]-->
    <head>
        <title>We Demand</title>
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animations.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" class="color-switcher-link">
        <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <!--[if lt IE 9]>
        <script src="<?php echo base_url();?>assets/js/vendor/html5shiv.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/respond.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/jquery-1.12.4.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
        <![endif]-->
        <div class="preloader">
            <div class="preloader_image"></div>
        </div>
        <!-- search modal -->
        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
            <i class="rt-icon2-cross2"></i>
            </span>
            </button>
            <div class="widget widget_search">
                <form method="get" class="searchform search-form form-inline" action="./">
                    <div class="form-group">
                        <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                    </div>
                    <button type="submit" class="theme_button">Search</button>
                </form>
            </div>
        </div>
        <!-- Unyson messages modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
            <div class="fw-messages-wrap ls with_padding">
                <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
                <!--
                    <ul class="list-unstyled">
                            <li>Message To User</li>
                    </ul>
                            -->
            </div>
        </div>
        <!-- eof .modal -->
        <!-- wrappers for visual page editor and boxed version of template -->
        <div id="canvas">
        <div id="box_wrapper">
        <!-- template sections -->
        <section class="page_toplogo table_section ls columns_padding_0 section_padding_15">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-center text-sm-left">
                        <div class="small-teaser text-left margin_0">
                            <p class="small-text semibold grey margin_0">
                                Call Us Today:
                            </p>
                            <p class="highlight fontsize_18 medium">
                                8 800 269 8469
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="./" class="logo top_logo">
                        <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
                        <span class="logo_text">
                        We
                        <strong>Demand</strong>
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-4 text-center text-sm-right">
                        <div class="page_social_icons greylinks">
                            <a class="social-icon -icon border-icon rounded-icon soc-facebook" href="#" title="Facebook"></a>
                            <a class="social-icon -icon border-icon rounded-icon soc-twitter" href="#" title="Twitter"></a>
                            <a class="social-icon -icon border-icon rounded-icon soc-google" href="#" title="Google"></a>
                        </div>
                    </div>
                    <!-- header toggler -->
                    <span class="toggle_menu">
                    <span></span>
                    </span>
                </div>
            </div>
        </section>
        <header class="page_header header_gradient bordered_items">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <!-- main nav start -->
                        <nav class="mainmenu_wrapper">
                            <ul class="mainmenu nav sf-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('Welcome');?>">मुख्य पृष्ठ</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url();?>/Welcome/problem">अडचणी</a>
                                </li>
                                <!-- eof features -->
                                <li>
                                    <a href="<?php echo site_url();?>/about">बद्दल</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Welcome/program');?>">कार्यक्रम </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Welcome/calender');?>">कॅलेंडर</a>
                                </li>
                                <!-- events -->
                                <li>
                                    <a href="<?php echo site_url('Welcome/events');?>">Events</a>
                                </li>
                                
                                
                                <li>
                                    <a href="<?php echo site_url('Welcome/blog');?>">ब्लॉग</a>
                                </li>
                                <!-- eof blog -->
                                <!-- contacts -->
                                <li>
                                    <a href="<?php echo site_url();?>/contact">संपर्क</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo site_url();?>/Welcome/faq">फॅक</a>
                                </li>
                                <!-- eof pages -->
                                <!-- gallery -->
                                <li>
                                    <a href="<?php echo site_url();?>/Welcome/gallery">गॅलरी</a>
                                </li>
                                
                                <!-- eof contacts -->
                            </ul>
                        </nav>
                        <!-- eof main nav -->
                    </div>
                </diuv>
            </div>
        </header>