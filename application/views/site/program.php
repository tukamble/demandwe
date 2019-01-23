<?php $this->load->view('site/layout/header');?>
<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Program</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="./">
                        Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="active">Program</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_top_150 section_padding_bottom_150">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php foreach ($images as $img):?>
                <img src="<?php echo $img->image_path;?>" class="alignright" alt="">
                <h2 class="section_header thin topmargin_0">
                    <strong><?php echo $img->event_title;?></strong>
                    </h2>
                    <p><?php echo $img->event_content;?></p>
                
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('site/layout/footer');?>