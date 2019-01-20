
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

			<section class="page_topline ds darkblue parallax table_section table_section_sm section_padding_bottom_10 section_padding_top_10">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-4 text-center text-sm-left">
							<div class="inline-content darklinks">
								<span>
									<i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i>
									(800) 123 4567
								</span>
								<span class="small-text">
									<i class="fa fa-envelope highlight rightpadding_5" aria-hidden="true"></i>
									<a href="#">social@example.com</a>
								</span>
							</div>
						</div>
						<div class="col-sm-4 text-center">
							<div>
								<a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a>
								<a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
								<a class="social-icon color-icon soc-google" href="#" title="Google"></a>
								<a class="social-icon color-icon soc-skype" href="#" title="Skype"></a>
								<a class="social-icon color-icon soc-youtube" href="#" title="Youtube"></a>
							</div>
						</div>
						<div class="col-sm-6 text-center text-sm-right">
							<div class="widget widget_search inline-block">
								<form method="get" class="searchform form-inline" action="./">
									<div class="form-group-wrap">
										<div class="form-group margin_0">
											<label class="sr-only" for="topline-search">Search for:</label>
											<input id="topline-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
										</div>
										<button type="submit" class="theme_button color1 no_bg_button">Search</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>