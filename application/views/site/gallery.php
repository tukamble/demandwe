<?php $this->load->view('site/layout/header');?>
<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Gallery Tile</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="./">
                        Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li class="active">Gallery Tile</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="ls page_portfolio section_padding_top_130 section_padding_bottom_0 columns_padding_0 columns_margin_0">
    <div class="container-fluid">
        
        <div class="row">
            
            <div class="col-sm-12">
                <div class="filters isotope_filters text-center darklinks">
                    <a href="#" data-filter="*" class="selected">All</a>
                    <a href="#" data-filter=".category1">Category 1</a>
                    <a href="#" data-filter=".category2">Category 2</a>
                    <a href="#" data-filter=".category3">Category 3</a>
                    <a href="#" data-filter=".category4">Category 4</a>
                </div>
                
                <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
                   <?php foreach ($images as $img):?> <div class="isotope-item col-lg-4 col-md-4 col-sm-6 category3">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media">
                                <img src="<?php echo $img->image_path;?>" alt="">
                                <div class="media-links">
                                    <div class="links-wrap">
                                        <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="<?php echo $img->image_path;?>"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content darken_gradient">
                                <h4 class="poppins">
                                    <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    
                </div>
                
                <!-- eof .isotope_container.row -->     
            </div> 
        </div>
        
    </div>
</section>
<section class="ls section_padding_top_50 section_padding_bottom_130">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="#" class="theme_button color1 margin_0">Load More</a>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('site/layout/footer');?>