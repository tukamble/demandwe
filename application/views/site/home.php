<?php $this->load->view("site/layout/header"); ?>
<section class="intro_section page_mainslider ds">
    <div class="flexslider" data-nav="false">
        <ul class="slides">
            <?php foreach($images as $img):?>
            <li>
                <img src="<?php echo $img->image_path;?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h2 class="text-uppercase">
                                            Throw
                                        </h2>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h3 class="text-uppercase">
                                            The chains of justice
                                        </h3>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <a href="about.html" class="theme_button color2">Contact us</a>
                                    </div>
                                </div>
                                <!-- eof .slide_description -->
                            </div>
                            <!-- eof .slide_description_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>
            <?php endforeach;?>
        </ul>
    </div>
    <!-- eof flexslider -->
</section>
<section class="ls ms section_padding_20 top_offset_content columns_margin_bottom_20">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-6 to_animate" data-animation="fadeInUp">
                <div class="ls with_padding big-padding bg_teaser rounded">
                    <img src="<?php echo base_url(); ?>assets/images/story_bg.jpg" alt="">
                    <div>
                        <h3 class="thin text-uppercase">
                            Our
                            <br>
                            <strong>story</strong>
                        </h3>
                        <p class="small-text bold darklinks">
                            <a href="about.html">About us</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 to_animate" data-animation="fadeInUp">
                <div class="ls with_padding big-padding bg_teaser rounded">
                    <img src="<?php echo base_url(); ?>assets/images/goals_bg.jpg" alt="">
                    <div>
                        <h3 class="thin text-uppercase">
                            Our
                            <br>
                            <strong>goals</strong>
                        </h3>
                        <p class="small-text bold darklinks">
                            <a href="about.html">Know more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 to_animate" data-animation="fadeInUp">
                <div class="ls with_padding big-padding bg_teaser rounded">
                    <img src="<?php echo base_url(); ?>assets/images/activists_bg.jpg" alt="">
                    <div>
                        <h3 class="thin text-uppercase">
                            Our
                            <br>
                            <strong>activists</strong>
                        </h3>
                        <p class="small-text bold darklinks">
                            <a href="about.html">Know more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_top_150 section_padding_bottom_10 columns_margin_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="rounded overflow_hidden">
                    <div class="with_padding gradient_bg_color heading_wrappper">
                        <h5 class="text-uppercase margin_0">Featured</h5>
                    </div>
                    <div class="with_padding with_background">
                        <div class="widget widget_slider widget_featured_posts">
                            <div class="owl-carousel" data-nav="true" data-loop="true" data-autoplay="true" data-items="1" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">
                                <ul>
                                    <li class="media big-left-media">
                                        <div class="media-left media-middle">
                                            <img src="<?php echo base_url(); ?>assets/images/post-thumbs/01.jpg" alt="">
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="blog-single-right.html">
                                                    Consetur sadscing elitr sed diam nonumy
                                                </a>
                                            </h4>
                                            <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right.html">Admin</a>,
                                                <a href="blog-right.html" >
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        12.08.2017
                                                    </time>
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="media big-left-media">
                                        <div class="media-left media-middle">
                                            <img src="<?php echo base_url(); ?>assets/images/post-thumbs/02.jpg" alt="">
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="blog-single-right.html">
                                                    Irmod tempor invidunt ut labore et dolore
                                                </a>
                                            </h4>
                                            <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right.html">Admin</a>,
                                                <a href="blog-right.html" >
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        08.05.2017
                                                    </time>
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="media big-left-media">
                                        <div class="media-left media-middle">
                                            <img src="<?php echo base_url(); ?>assets/images/post-thumbs/03.jpg" alt="">
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="blog-single-right.html">
                                                    Magna aliquyam erat, sed diam
                                                </a>
                                            </h4>
                                            <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right.html">Admin</a>,
                                                <a href="blog-right.html" >
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        01.08.2017
                                                    </time>
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="media big-left-media">
                                        <div class="media-left media-middle">
                                            <img src="<?php echo base_url(); ?>assets/images/post-thumbs/04.jpg" alt="">
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="blog-single-right.html">
                                                    Consetur sadscing elitr sed diam nonumy
                                                </a>
                                            </h4>
                                            <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right.html">Admin</a>,
                                                <a href="blog-right.html" >
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        12.08.2017
                                                    </time>
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="media big-left-media">
                                        <div class="media-left media-middle">
                                            <img src="<?php echo base_url(); ?>assets/images/post-thumbs/05.jpg" alt="">
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="blog-single-right.html">
                                                    Irmod tempor invidunt ut labore et dolore
                                                </a>
                                            </h4>
                                            <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right.html">Admin</a>,
                                                <a href="blog-right.html" >
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        08.05.2017
                                                    </time>
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="media big-left-media">
                                        <div class="media-left media-middle">
                                            <img src="<?php echo base_url(); ?>assets/images/post-thumbs/06.jpg" alt="">
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="blog-single-right.html">
                                                    Magna aliquyam erat, sed diam
                                                </a>
                                            </h4>
                                            <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right.html">Admin</a>,
                                                <a href="blog-right.html" >
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        01.08.2017
                                                    </time>
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="owl-carousel" data-responsive-lg="2" data-responsive-md="2" data-responsive-sm="1">
                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="<?php echo base_url(); ?>assets/images/gallery/01.jpg" alt="">
                            <div class="media-links">
                                <a href="blog-single-right.html" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h4 class="entry-title">
                                    <a href="blog-single-right.html">At vero eos et accusam et justo duo dolores</a>
                                </h4>
                            </header>
                            <div class="entry-content">
                                <p>Consetur sadscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <p class="inline-content small-text">
                                <span>
                                    <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">Admin</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">
                                        <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                            11/08/2017
                                        </time>
                                    </a>
                                </span>								
                            </p>
                        </footer>
                    </article>
                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="<?php echo base_url(); ?>assets/images/gallery/02.jpg" alt="">
                            <div class="media-links">
                                <a href="blog-single-right.html" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h4 class="entry-title">
                                    <a href="blog-single-right.html">Stet clita kasd gubergren, takimata</a>
                                </h4>
                            </header>
                            <div class="entry-content">
                                <p>At vero eos et accusam et justo duo dolores et ea rebum clita kasd gubergren, no sea takimata sanctus est.</p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <p class="inline-content small-text">
                                <span>
                                    <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">Admin</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">
                                        <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                            09/08/2017
                                        </time>
                                    </a>
                                </span>								
                            </p>
                        </footer>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row isotope_container isotope masonry-layout columns_padding_1">
            <div class="isotope-item col-md-3 col-sm-6">
                <article class="vertical-item content-absolute rounded overflow_hidden text-center">
                    <div class="item-media rounded overflow_hidden">
                        <img src="<?php echo base_url(); ?>assets/images/gallery/03.jpg" alt="">
                        <div class="media-links">
                        </div>
                    </div>
                    <div class="item-content darken_gradient">
                        <h4 class="entry-title margin_0"><a href="event-single-right.html">Lorem ipsum dolor sit</a></h4>
                    </div>
                </article>
            </div>
            <div class="isotope-item col-md-3 col-sm-6">
                <article class="vertical-item content-absolute rounded overflow_hidden text-center">
                    <div class="item-media rounded overflow_hidden">
                        <img src="<?php echo base_url(); ?>assets/images/gallery/04.jpg" alt="">
                        <div class="media-links">
                        </div>
                    </div>
                    <div class="item-content darken_gradient">
                        <h4 class="entry-title margin_0"><a href="event-single-right.html">Amet consetetur sadipscing</a></h4>
                    </div>
                </article>
            </div>
            <div class="isotope-item col-md-6 col-sm-12">
                <article class="vertical-item content-absolute rounded overflow_hidden text-center">
                    <div class="item-media rounded overflow_hidden">
                        <img src="<?php echo base_url(); ?>assets/images/gallery/05.jpg" alt="">
                        <div class="media-links">
                        </div>
                    </div>
                    <div class="item-content darken_gradient ds">
                        <div id="comingsoon-countdown"></div>
                        <h3 class="entry-title bottommargin_10"><a href="event-single-right.html">Our Next Activity</a></h3>
                        <div class="entry-meta inline-content small-text darklinks">
                            <span>
                                <i class="fa fa-map-marker rightpadding_5 highlight" aria-hidden="true"></i>
                                <a href="event-single-right.html">Lowes Alley, Thornville, OH</a>
                            </span>
                            <span>
                                <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                <span class="grey">08:00 AM - 05:00 PM</span>
                            </span>
                        </div>
                    </div>
                </article>
            </div>
            <div class="isotope-item col-md-3 col-sm-6">
                <article class="vertical-item content-absolute rounded overflow_hidden text-center">
                    <div class="item-media rounded overflow_hidden">
                        <img src="<?php echo base_url(); ?>assets/images/gallery/06.jpg" alt="">
                        <div class="media-links">
                        </div>
                    </div>
                    <div class="item-content darken_gradient">
                        <h4 class="entry-title margin_0"><a href="event-single-right.html">Elitred diam nonumy eirmod</a></h4>
                    </div>
                </article>
            </div>
            <div class="isotope-item col-md-3 col-sm-6">
                <article class="vertical-item content-absolute rounded overflow_hidden text-center">
                    <div class="item-media rounded overflow_hidden">
                        <img src="<?php echo base_url(); ?>assets/images/gallery/07.jpg" alt="">
                        <div class="media-links">
                        </div>
                    </div>
                    <div class="item-content darken_gradient">
                        <h4 class="entry-title margin_0"><a href="event-single-right.html">Tempor invidunt labore</a></h4>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_top_30 section_padding_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-carousel" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2">
                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="<?php echo base_url(); ?>assets/images/gallery/08.jpg" alt="">
                            <div class="media-links">
                                <a href="blog-single-right.html" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h4 class="entry-title">
                                    <a href="blog-single-right.html">Lorem ipsum dolor sit amet consetetur</a>
                                </h4>
                            </header>
                            <div class="entry-content">
                                <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna.</p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <p class="inline-content small-text">
                                <span>
                                    <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">Admin</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">
                                        <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                            07/08/2017
                                        </time>
                                    </a>
                                </span>								
                            </p>
                        </footer>
                    </article>
                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="<?php echo base_url(); ?>assets/images/gallery/09.jpg" alt="">
                            <div class="media-links">
                                <a href="blog-single-right.html" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h4 class="entry-title">
                                    <a href="blog-single-right.html">Sadipscing elitr, sed diam nonumy</a>
                                </h4>
                            </header>
                            <div class="entry-content">
                                <p>At vero eos et accusam et justo duo dolores et ea rebum clita kasd gubergren, no sea takimata sanctus est.</p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <p class="inline-content small-text">
                                <span>
                                    <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">Admin</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">
                                        <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                            04/08/2017
                                        </time>
                                    </a>
                                </span>								
                            </p>
                        </footer>
                    </article>
                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="<?php echo base_url(); ?>assets/images/gallery/10.jpg" alt="">
                            <div class="media-links">
                                <a href="blog-single-right.html" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h4 class="entry-title">
                                    <a href="blog-single-right.html">Eirmod tempor invidunt ut labore et dolore</a>
                                </h4>
                            </header>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <p class="inline-content small-text">
                                <span>
                                    <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">Admin</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">
                                        <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                            01/08/2017
                                        </time>
                                    </a>
                                </span>								
                            </p>
                        </footer>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_top_30 section_padidng_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <section class="intro_section ds gradient_bg_color2 transp_image rounded">
                    <div class="flexslider" data-nav="false">
                        <ul class="slides">
                            <li>
                                <img src="<?php echo base_url(); ?>assets/images/banner_slide01.jpg" alt="" class="rounded">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <div class="slide_description_wrapper">
                                                <div class="slide_description">
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <h2 class="text-uppercase thin">
                                                            Become
                                                            <strong>an activist</strong>
                                                        </h2>
                                                    </div>
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <h3 class="text-uppercase">
                                                            If you gonna make it better
                                                        </h3>
                                                    </div>
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <a href="about.html" class="theme_button color1">Sign up now</a>
                                                    </div>
                                                </div>
                                                <!-- eof .slide_description -->
                                            </div>
                                            <!-- eof .slide_description_wrapper -->
                                        </div>
                                        <!-- eof .col-* -->
                                    </div>
                                    <!-- eof .row -->
                                </div>
                                <!-- eof .container -->
                            </li>
                            <li>
                                <img src="<?php echo base_url(); ?>assets/images/banner_slide02.jpg" alt="" class="rounded">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <div class="slide_description_wrapper">
                                                <div class="slide_description">
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <h2 class="text-uppercase thin">
                                                            Your
                                                            <strong>Support</strong>
                                                        </h2>
                                                    </div>
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <h3 class="text-uppercase">
                                                            May help us
                                                        </h3>
                                                    </div>
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <a href="about.html" class="theme_button color1">Sign up now</a>
                                                    </div>
                                                </div>
                                                <!-- eof .slide_description -->
                                            </div>
                                            <!-- eof .slide_description_wrapper -->
                                        </div>
                                        <!-- eof .col-* -->
                                    </div>
                                    <!-- eof .row -->
                                </div>
                                <!-- eof .container -->
                            </li>
                            <li>
                                <img src="<?php echo base_url(); ?>assets/images/banner_slide03.jpg" alt="" class="rounded">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <div class="slide_description_wrapper">
                                                <div class="slide_description">
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <h2 class="text-uppercase thin">
                                                            Next
                                                            <strong>Meeting</strong>
                                                        </h2>
                                                    </div>
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <h3 class="text-uppercase">
                                                            23/08/2017
                                                        </h3>
                                                    </div>
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <a href="about.html" class="theme_button color1">How to get</a>
                                                    </div>
                                                </div>
                                                <!-- eof .slide_description -->
                                            </div>
                                            <!-- eof .slide_description_wrapper -->
                                        </div>
                                        <!-- eof .col-* -->
                                    </div>
                                    <!-- eof .row -->
                                </div>
                                <!-- eof .container -->
                            </li>
                        </ul>
                    </div>
                    <!-- eof flexslider -->
                </section>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_top_30 section_padding_bottom_150">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <article class="post format-small-image with_border side-item side-md content-padding responsive-thumb rounded topmargin_40">
                    <!-- <div class=""> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item-media entry-thumbnail top_rounded overflow_hidden">
                                <img src="<?php echo base_url(); ?>assets/images/gallery/11.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-content">
                                <h4 class="entry-title ">
                                    <a href="blog-single-right.html" rel="bookmark">At vero eos et accusam</a>
                                </h4>
                                <!-- .entry-meta -->
                                <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna aliquyam erat, sed diam voluptua vero eos accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor amet. Lorem ipsum dolor amet, consetetur sadipscing eliiam nonumy eirmod.</p>
                            </div>
                            <footer class="entry-meta with_top_border darklinks">
                                <p class="inline-content small-text">
                                    <span>
                                        <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                        <a href="blog-single-right.html">Admin</a>
                                    </span>
                                    <span>
                                        <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                        <a href="blog-single-right.html">
                                            <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                04/08/2017
                                            </time>
                                        </a>
                                    </span>								
                                </p>
                            </footer>
                        </div>
                    </div>
                    <!-- </div> -->
                </article>
                <article class="post format-small-image with_border side-item side-md content-padding responsive-thumb rounded topmargin_40">
                    <!-- <div class=""> -->
                    <div class="row">
                        <div class="col-md-6 col-md-push-6">
                            <div class="item-media entry-thumbnail top_rounded overflow_hidden">
                                <img src="<?php echo base_url(); ?>assets/images/gallery/12.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-6">
                            <div class="item-content">
                                <h4 class="entry-title ">
                                    <a href="blog-single-right.html" rel="bookmark">Duo dolores et ea rebum clita kasd</a>
                                </h4>
                                <!-- .entry-meta -->
                                <p>Tempor invidunt ut labore et dolore magna aliquyam eratsed diam voluptua vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                            </div>
                            <footer class="entry-meta with_top_border darklinks">
                                <p class="inline-content small-text">
                                    <span>
                                        <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                        <a href="blog-single-right.html">Admin</a>
                                    </span>
                                    <span>
                                        <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                        <a href="blog-single-right.html">
                                            <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                02/08/2017
                                            </time>
                                        </a>
                                    </span>								
                                </p>
                            </footer>
                        </div>
                    </div>
                    <!-- </div> -->
                </article>
                <article class="post format-small-image with_border side-item side-md content-padding responsive-thumb rounded topmargin_40">
                    <!-- <div class=""> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item-media entry-thumbnail top_rounded overflow_hidden">
                                <img src="<?php echo base_url(); ?>assets/images/gallery/13.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-content">
                                <h4 class="entry-title ">
                                    <a href="blog-single-right.html" rel="bookmark">No sea takimata sanctus</a>
                                </h4>
                                <!-- .entry-meta -->
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                            </div>
                            <footer class="entry-meta with_top_border darklinks">
                                <p class="inline-content small-text">
                                    <span>
                                        <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                        <a href="blog-single-right.html">Admin</a>
                                    </span>
                                    <span>
                                        <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                        <a href="blog-single-right.html">
                                            <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                01/08/2017
                                            </time>
                                        </a>
                                    </span>								
                                </p>
                            </footer>
                        </div>
                    </div>
                    <!-- </div> -->
                </article>
                <article class="post format-small-image with_border side-item side-md content-padding responsive-thumb rounded topmargin_40">
                    <!-- <div class=""> -->
                    <div class="row">
                        <div class="col-md-6 col-md-push-6">
                            <div class="item-media entry-thumbnail top_rounded overflow_hidden">
                                <img src="<?php echo base_url(); ?>assets/images/gallery/12.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-6">
                            <div class="item-content">
                                <h4 class="entry-title ">
                                    <a href="blog-single-right.html" rel="bookmark">Lorem ipsum dolor sit amet</a>
                                </h4>
                                <!-- .entry-meta -->
                                <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
                            </div>
                            <footer class="entry-meta with_top_border darklinks">
                                <p class="inline-content small-text">
                                    <span>
                                        <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                        <a href="blog-single-right.html">Admin</a>
                                    </span>
                                    <span>
                                        <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                        <a href="blog-single-right.html">
                                            <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                29/07/2017
                                            </time>
                                        </a>
                                    </span>								
                                </p>
                            </footer>
                        </div>
                    </div>
                    <!-- </div> -->
                </article>
                <p class="topmargin_40 text-center">
                    <a href="#" class="theme_button color2">Load More</a>
                </p>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view("site/layout/footer"); ?>                