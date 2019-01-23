<?php $this->load->view('admin/layout/header');?>

			<section class="ls with_bottom_border">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<ol class="breadcrumb darklinks">
								<li>
									<a href="#">Dashboard</a>
								</li>
								<li class="active">Post</li>
							</ol>
						</div>
                                                
						<!-- .col-* -->
						<div class="col-md-6 text-md-right">
							<span class="dashboard-daterangepicker">
								<i class="fa fa-calendar"></i>
								<span></span>
								<i class="caret"></i>
							</span>
						</div>
						<!-- .col-* -->
					</div>
					<!-- .row -->
				</div>
				<!-- .container -->
			</section>

			<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
				<div class="container-fluid">

					<div class="row">
						<div class="col-sm-12">
							<h3>Single Post
							
						</div>
					</div>
					<!-- .row -->

                                        
                                        <form class="form-horizontal"  method="post" action="<?php echo site_url("admin/Event/upload");?>" enctype="multipart/form-data">
                                            <?php echo $this->session->flashdata("message");?>
						<div class="row">
							<div class="col-md-8">
								<div class="with_border with_padding">

									<hr>


									<div class="row form-group">
										<label class="col-lg-3 control-label">Post title: </label>
										<div class="col-lg-9">
                                                                                    <input type="text" name="event_title" id="event_title" class="form-control">
                                                                                    <?php echo form_error("event_title");?>
                                                                                </div>
									</div>
									<div class="row form-group">
										<label class="col-lg-3 control-label">Categories: </label>
										<div class="col-lg-9">
                                                                                    <input type="text" name="event_catagory" id="event_catagory" class="form-control">
                                                                                    <?php echo form_error("event_catagory");?>
                                                                                </div>
									</div>

									<div class="row form-group">
										<label class="col-lg-3 control-label">Post Image: </label>
										<div class="col-lg-9">
                                                                                    <input type="file" name="event_image" id="event_image" class="form-control">
                                                                                    <div class="col-md-6" style="margin-top: 40px">
                                                                                    <?php if (isset($upload_error)){ echo $upload_error;}?>
                                                                                    </div>
                                                                                </div>
									</div>

									<div class="row form-group">
										<label class="col-lg-3 control-label">Post content: </label>
										<div class="col-lg-9">
                                                                                    <textarea rows="2" name="event_content" id="event_content" class="form-control"></textarea>
                                                                                    <?php echo form_error("event_content");?>
                                                                                </div>
									</div>

									<div class="row">
										<div class="col-sm-12 text-right">
											<button type="submit" class="theme_button wide_button">Save Post</button>
											<a href="admin_posts.html" class="theme_button inverse wide_button">Cancel</a>
										</div>
									</div>
									<!-- .row  -->

								</div>
								<!-- .with_border -->

							</div>
							<!-- .col-* -->



						</div>
						<!-- .row  -->


					</form>

				</div>
				<!-- .container -->
			</section>

			

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

<?php $this->load->view('admin/layout/footer') ;?>

	

</html>