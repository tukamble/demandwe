<?php $this->load->view("site/layout/header"); ?>


			<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Post Page</h2>
							<ol class="breadcrumb darklinks">
								<li>
									<a href="./">
							Home
						</a>
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
								<li class="active">Post Page</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_25">
                            <?php foreach ($images as $img):?>
				<div class="container">
					<div class="row">

						<div class="col-sm-7 col-md-8 col-lg-8">

							<article class="single-post vertical-item content-padding big-padding post with_border rounded">
								<div class="entry-thumbnail item-media top_rounded overflow_hidden">
                                                                    
                                                                    <img src="<?php echo $img->image_path;?>" alt="">
								</div>
                                                            
								<div class="item-content">


									<header class="entry-header">

    										<h1 class="entry-title topmargin_0">
                                                                                    <?php echo $img->event_title;?>
										
										</h1>
                                                                            


									</header>
									<!-- .entry-header -->

									<div class="entry-content">
                                                                            
										<p>Pork loin tongue spare ribs cow jerky meatball flank ham hock shankle pork chop brisket. Jowl swine pancetta ham hock beef ribs alcatra tenderloin spare ribs meatball corned beef drumstick tri-tip leberkas. Sausage short loin ham jowl sirloin pork belly brisket pork drumstick hamburger pig. Capicola tenderloin beef ribs, jowl bacon kevin t-bone salami ham hock flank ground round alcatra.</p>

										<p>Ham doner chuck short loin picanha. Chuck pork belly tail doner. Bresaola sirloin meatball, strip steak jowl andouille tri-tip beef ribs kevin pancetta landjaeger turkey chuck ham cupim. Turkey andouille fatback chicken shoulder jowl bacon jerky pork belly ball tip venison. Flank beef alcatra doner burgdoggen bacon.</p>
                                                                                
										<div class="text-center">
											<blockquote>
												Strip steak cupim commodo ad pork loin bacon elit sed lorem est cow ex, dolore in. Tongue dolore in excepteur mollit beef deseru chicken capicola sausage jerky pig.
												<div class="item-meta topmargin_30">
													<h4 class="margin_0">Andre Keller</h4>
													<p class="small-text highlight">activist</p>
												</div>
											</blockquote>
										</div>

										<p>Pancetta cupim meatloaf, pork chop ball tip ground round filet mignon kevin bacon pastrami flank tri-tip jowl short loin sausage. Swine leberkas pork chop ball tip beef strip steak ribeye doner alcatra. Filet mignon tenderloin ham spare ribs beef kevin shankle ball tip short ribs pig flank brisket strip steak pork loin ground round.</p>
										<ul class="list2 checklist grey semibold">
											<li>Eaque blanditiis nemo</li>
											<li>Amet, consectetur adipisicing</li>
											<li>Blanditiis nemo quaerat</li>
										</ul>
										<p>
								<img class="alignleft" alt="" src="images/side-image.jpg">
								Capicola corned beef beef venison turducken filet mignon. Salami boudin pancetta filet mignon venison, pastrami ham hock jowl pork chop tenderloin picanha turkey. Strip steak jerky tri-tip spare ribs. 
							</p>
										<p>
								Prosciutto biltong tail boudin jowl jerky turducken. Ribeye ball tip pork belly, prosciutto shankle jowl filet mignon beef salami short loin pig pork. Ham hock turducken cupim corned.
							</p>
										<p>
								Porchetta chicken pork chop swine, brisket cupim pig beef ribs bacon corned beef turkey. Swine boudin venison kevin fatback, sirloin cupim. Andouille turkey sirloin, jerky chuck drumstick strip steak boudin beef ribs pork belly biltong kielbasa.
							</p>
										<p>Pig hamburger turducken frankfurter shoulder, leberkas shankle bresaola meatball strip steak ham beef ribs. Turducken tongue shank frankfurter pancetta shoulder landjaeger sausage boudin filet mignon. Kevin venison ham hock, pork belly prosciutto hamburger turducken. Pork spare ribs drumstick jerky ribeye.</p>

										<div class="inline-content entry-meta semibold small-text darklinks topmargin_30">
											<div>
												<i class="fa fa-user highlight rightpadding_5" aria-hidden="true"></i>
												<a href="#">admin</a>
											</div>
											<div>
												<i class="fa fa-calendar highlight rightpadding_5" aria-hidden="true"></i>
												<a href="#">
													<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
														07/08/2017
													</time>
												</a>
											</div>
											<div>
												<i class="fa fa-tag highlight rightpadding_5" aria-hidden="true"></i>
												<a href="#">Post</a>
											</div>
										</div>

									</div>
									<!-- .entry-content -->

								</div>
								<!-- .item-content -->

							</article>


		


							


			

						</div>
						<!--eof .col-sm-8 (main content)-->



					</div>
				</div>
			</section>
<?php endforeach;?>


<?php $this->load->view("site/layout/footer"); ?>
