	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="portfolio-nav">
					<a href="#" data-name="all" class="active">all</a>
					<a href="#" data-name="first">first</a>
					<a href="#" data-name="second">second</a>
					<a href="#" data-name="third">third</a>
				</div>
			</div>
		</div>
		<div class="grid">
			<div class="grid-sizer"></div>
			<div class="grid-item item1">
				<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-item pos-r">
						<figure class="effect-layla">
							<div class="portfolio-cell portfolio-cell1"></div>
							<figcaption>
								<h2>Serendipity</h2>
							</figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="grid-item item2">
				<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-cell portfolio-cell2">
						<div class="portfolio-info">
							<h6>Celebrations</h6>
							<h3>Floral decor: tips for a wedding</h3>
							<p>Enjoy the process of choosing floral arrangemets for your big day by following a few simple tips &
								tricks.</p>
							<div class="portfolio-separator"></div>
							<p>May 2017</p>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-item item3">
				<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-item pos-r">
						<figure class="effect-layla">
							<div class="portfolio-cell portfolio-cell3"></div>
							<figcaption>
								<h2>Serendipity</h2>
							</figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="grid-item item4">
				<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-item pos-r">
						<figure class="effect-layla">
							<div class="portfolio-cell portfolio-cell4"></div>
							<figcaption>
								<h2>Serendipity</h2>
							</figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="grid-item item5">
				<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-item pos-r">
						<figure class="effect-layla">
							<div class="portfolio-cell portfolio-cell5"></div>
							<figcaption>
								<h2>Serendipity</h2>
							</figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="grid-item item6">
				<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-item pos-r">
						<figure class="effect-layla">
							<div class="portfolio-cell portfolio-cell6"></div>
							<figcaption>
								<h2>Serendipity</h2>
							</figcaption>
						</figure>
					</div>
				</a>
			</div>
		</div>
	</div>

	<style>
		.modal-show {
			display: block !important;
			/*padding-right: 17px;*/
			overflow-x: hidden !important;
			overflow-y: auto !important;
		}

		.body-modal {
			overflow: hidden !important;
			height: 100% !important;
		}

		.modal {
			overflow-x: hidden;
			overflow-y: auto;
		}

		.modal-content h2 {
			font-family: 'Playfair Display',serif;
			margin: 60px 100px 25px;
			font-size: 40px;
			letter-spacing: 1px;
		}

		.modal-content .modal-separator {
			width: 7%;
			border-bottom: 3px solid #ebaca5;
			margin: 15px 0 15px 100px;
		}

		.modal {
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			z-index: 1050;
			display: none;
			overflow: hidden;
			outline: 0;
		}

		/* Modal Content */
		.modal-content {
			background-color: #fff;
			background-repeat: no-repeat;
			background-attachment: scroll;
			background-position: center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			background-size: cover;
			-o-background-size: cover;
			border-radius: 0;
			background-clip: border-box;
			-webkit-box-shadow: none;
			box-shadow: none;
			border: none;
			min-height: 100%;
			padding: 50px 0;
		}

		/* The Close Button */
		.close-modal {
			position: absolute;
			width: 55px;
			height: 55px;
			background-color: transparent;
			top: 15px;
			right: 25px;
			cursor: pointer;
		}

		.close-modal .lr {
			height: 55px;
			width: 1px;
			margin-left: 35px;
			background-color: #333;
			transform: rotate(45deg);
			-ms-transform: rotate(45deg);
			-webkit-transform: rotate(45deg);
			z-index: 5;
		}

		.close-modal .lr .rl {
			height: 55px;
			width: 1px;
			background-color: #333;
			transform: rotate(90deg);
			-ms-transform: rotate(90deg);
			-webkit-transform: rotate(90deg);
			z-index: 5;
		}

		.modal .btn-xl {
			font-size: 1rem;
			margin: 15px 0 40px;
			padding: .375rem 3rem;
			background-color: transparent;
			border: 2px solid #333;
			text-transform: uppercase;
			letter-spacing: 1px;
			font-weight: 700;
			border-radius: 0;
			display: inline-block;
		}
	</style>

	<?php
	$page           = get_page_by_path( 'portfolio_love' );
	$contents = apply_filters( 'the_content', $page->post_content );
	$titles   = apply_filters( 'the_title', $page->post_title );
	$images   = get_the_post_thumbnail_url( $page, 'big-featured-image' );

	?>

	<div id="portfolioModal1" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>

			<div class="container">
				<div class="modal-body">
					<!-- Project Details Go Here -->
					<div class="col-md-12">
						<img class="img-responsive img-centered" src="<?php echo $images; ?>" alt="<?php echo $titles; ?>">
					</div>
					<h2><?php echo $titles; ?></h2>
					<div class="modal-separator"></div>
					<?php echo \Elementor\Plugin::$instance->frontend->get_builder_content( $page->ID ); ?>

					<div class="text-center">
						<a href="#" class="btn btn-xl close-button">Close</a>
					</div>
				</div>
			</div>
		</div>

	</div>