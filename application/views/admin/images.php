<?php $this->load->view('admin/layout/header');?>
			<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_5">
				<div class="container-fluid">

					<div class="row">
						<div class="col-sm-12">
							<h3>add images
                                                        <button class="theme_button small_button col-sm-12"><a href="<?php echo site_url('admin/Upload_images/uploadPic');?>">Add</a></button>
							</h3>
						</div>
					</div>
                                    
<h3 class="divider_40"></h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>image_path</th>
                                            <th>type</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php foreach ($images as $img):?> 
                                            <td><?php echo $img->id;?></td>
                                            <td><?php echo $img->image_path;?></td>
                                            <td><?php echo $img->type;?></td>
                                            <td><a href="<?php echo site_url('admin/Upload_images/delete/'.$img->id);?>" onclick="return confirm('Are you sure')">Delete</a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
					<!-- .row -->

					<!-- .row -->

				</div>
				<!-- .container -->
			</section>
                        <?php $this->load->view('admin/layout/footer');?>