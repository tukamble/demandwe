<?php $this->load->view("site/layout/header");?>
<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Contact 3</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="./">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="active">Contact 3</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="page_map" data-address="Terracina, LT, Italia">

    <!-- marker description and marker icon goes here -->
    <div class="map_marker_description">
        <h3>Map Title</h3>
        <p>Map description text</p>
        <!-- <img class="map_marker_icon" src="images/map_marker_icon.png" alt=""> -->
    </div>

</section>

<section class="ls section_padding_top_75 section_padding_bottom_100">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight size_small">
                        <i class="rt-icon2-phone5"></i>
                    </div>

                    <p>
                        <span class="grey">Phone:</span> +12 345 678 9123<br>
                        <span class="grey">Fax:</span> +12 345 678 9123
                    </p>

                </div>
            </div>
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight size_small">
                        <i class="rt-icon2-location2"></i>
                    </div>

                    <p> 
                        PO Box 54378<br>
                        4321 Your Address,<br>
                        Your City, Your Country
                    </p>

                </div>
            </div>
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight size_small">
                        <i class="rt-icon2-world"></i>
                    </div>

                    <p>social@example.com</p>
                    <p>
                        <a href="#" class="social-icon color-icon soc-twitter"></a>
                        <a href="#" class="social-icon color-icon soc-facebook"></a>
                        <a href="#" class="social-icon color-icon soc-google"></a>
                        <a href="#" class="social-icon color-icon soc-pinterest"></a>
                    </p>

                </div>
            </div>

        </div>

        <div class="row topmargin_60">
            <div class="col-sm-12 to_animate">
                <form class="contact-form cs parallax columns_padding_5" method="post" action="./">
                    <div class="row">

                        <div class="col-sm-6">
                            <p class="form-group">
                                <label for="name">Full Name <span class="required">*</span></label>
                                <i class="fa fa-user black" aria-hidden="true"></i>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                            </p>
                            <p class="form-group">
                                <label for="email">Email address<span class="required">*</span></label>
                                <i class="fa fa-envelope black" aria-hidden="true"></i>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
                            </p>
                            <p class="form-group">
                                <label for="subject">Subject<span class="required">*</span></label>
                                <i class="fa fa-flag black" aria-hidden="true"></i>
                                <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                            </p>
                        </div>
                        <div class="col-sm-6">

                            <p class="contact-form-message form-group">
                                <label for="message">Message</label>
                                <i class="fa fa-comment black" aria-hidden="true"></i>
                                <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                            </p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">

                            <p class="contact-form-submit text-center topmargin_30">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button">Send Message</button>
                            </p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view("site/layout/footer");?>