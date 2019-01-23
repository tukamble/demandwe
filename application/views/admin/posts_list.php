<?php $this->load->view('admin/layout/header');?>
<section class="ls with_bottom_border">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<ol class="breadcrumb darklinks">
								<li>
									<a href="#">Dashboard</a>
								</li>
								<li class="active">Posts</li>
							</ol>
						</div>
						
					</div>
					<!-- .row -->
				</div>
				<!-- .container -->
			</section>

			<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12">
							<h3>Posts</h3>
						</div>
						<!-- .col-* -->
					</div>
					<!-- .row -->

					<div class="row">
						<div class="col-xs-12">
							<div class="with_border with_padding">
								<!-- .row -->


								<div class="table-responsive">
									<table class="table table-striped table-bordered">
										<tr>
											<th>sr</th>
											<th>Title:</th>
											<th>catagory:</th>
											<th>content</th>
											<th>path</th>
											
										</tr>
										<tr class="item-editable">
                                                                                    <?php if (count($event)):?>
										<?php foreach ($event as $events):?>
                                                                                        <td class="media-middle">
                                                                                            <?php echo $events->id;?>
                                                                                        </td>
											<td class="media-middle">
												<?php echo $events->event_title;?>
											</td>
											<td>
												<div class="media">
                                                                                                    <?php echo $events->event_catagory;?>
												</div>
											</td>
											<td class="media-middle">
                                                                                            <?php echo $events->event_content;?>
                                                                                        </td>
											<td class="media-middle">
                                                                                            <?php echo $events->image_path;?>
											</td>
											
                                                                                        
										</tr>
										<?php endforeach;?>
                                                                                <?php endif;?>
									</table>
								</div>
								<!-- .table-responsive -->
							</div>
							<!-- .with_border -->
						</div>
						<!-- .col-* -->
					</div>
					<!-- .row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-md-6">
									<ul class="pagination">
										<li class="disabled">
											<a href="#">
												<span class="sr-only">Prev</span>
												<i class="fa fa-angle-left" aria-hidden="true"></i>
											</a>
										</li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li>
											<a href="#">
												<span class="sr-only">Next</span>
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-md-6 text-md-right">
									Showing 1 to 6 of 12 items
								</div>
							</div>
						</div>
					</div>
					<!-- .row main columns -->
				</div>
				<!-- .container -->
			</section>

			<section class="page_copyright ds darkblue_bg_color">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<p class="grey">&copy; Copyrights 2017</p>
						</div>
						<div class="col-sm-6 text-sm-right">
							<p class="grey">Last account activity <i class="fa fa-clock-o"></i> 52 mins ago</p>
						</div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

<?php $this->load->view('admin/layout/footer');?>