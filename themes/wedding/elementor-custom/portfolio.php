<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor portfolio widget.
 *
 * @since 1.0.0
 */
class MilleFiori_Portfolio extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve image carousel widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'millefiori-portfolio';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve image carousel widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'MF Portfolio', 'mille-fiori' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve image carousel widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-slider-push';
	}

	/**
	 * Retrieve the list of scripts the image carousel widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.3.0
	 * @access public
	 */

	protected function _register_controls() {
		$this->add_control(
			'section_mf_portfolio',
			[
				'label' => __( 'MF Portfolio', 'mille-fiori' ),
				'type'  => Controls_Manager::SECTION,
			]
		);

		//Portfolio 1
		$this->add_control(
			'portfolio_image1',
			[
				'label'   => __( 'Portfolio 1 Image', 'mille-fiori' ),
				'type'    => Controls_Manager::MEDIA,
				'section' => 'section_mf_portfolio'
			]
		);

		$this->add_control(
			'portfolio_hover1',
			[
				'label'   => __( 'Portfolio 1 width settings', 'mille-fiori' ),
				'type'    => Controls_Manager::TEXT,
				'section' => 'section_mf_portfolio'
			]
		);

		$this->add_control(
			'portfolio_height1',
			[
				'label'   => __( 'Portfolio 1 height settings', 'mille-fiori' ),
				'type'    => Controls_Manager::TEXT,
				'section' => 'section_mf_portfolio'
			]
		);

		//Portfolio 2
		$this->add_control(
			'portfolio_image2',
			[
				'label'   => __( 'Portfolio 2 Image', 'mille-fiori' ),
				'type'    => Controls_Manager::MEDIA,
				'section' => 'section_mf_portfolio'
			]
		);

		$this->add_control(
			'portfolio_hover2',
			[
				'label'   => __( 'Portfolio 2 width settings', 'mille-fiori' ),
				'type'    => Controls_Manager::TEXT,
				'section' => 'section_mf_portfolio'
			]
		);

		$this->add_control(
			'portfolio_height2',
			[
				'label'   => __( 'Portfolio 2 height settings', 'mille-fiori' ),
				'type'    => Controls_Manager::TEXT,
				'section' => 'section_mf_portfolio'
			]
		);

		//Portfolio 3
		$this->add_control(
			'portfolio_image3',
			[
				'label'   => __( 'Portfolio 3 Image', 'mille-fiori' ),
				'type'    => Controls_Manager::MEDIA,
				'section' => 'section_mf_portfolio'
			]
		);

		$this->add_control(
			'portfolio_hover3',
			[
				'label'   => __( 'Portfolio 3 width settings', 'mille-fiori' ),
				'type'    => Controls_Manager::TEXT,
				'section' => 'section_mf_portfolio'
			]
		);

		$this->add_control(
			'portfolio_height3',
			[
				'label'   => __( 'Portfolio 3 height settings', 'mille-fiori' ),
				'type'    => Controls_Manager::TEXT,
				'section' => 'section_mf_portfolio'
			]
		);

		//Portfolio 4
		$this->add_control(
			'portfolio_image4',
			[
				'label'   => __( 'Portfolio 4 Image', 'mille-fiori' ),
				'type'    => Controls_Manager::MEDIA,
				'section' => 'section_mf_portfolio'
			]
		);

		$this->add_control(
			'portfolio_hover4',
			[
				'label'   => __( 'Portfolio 4 width settings', 'mille-fiori' ),
				'type'    => Controls_Manager::TEXT,
				'section' => 'section_mf_portfolio'
			]
		);

		$this->add_control(
			'portfolio_height4',
			[
				'label'   => __( 'Portfolio 4 height settings', 'mille-fiori' ),
				'type'    => Controls_Manager::TEXT,
				'section' => 'section_mf_portfolio'
			]
		);
	}

	protected function render( $instance = [] ) {
		?>
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
				<?php for ( $i = 1; $i <= 4; $i ++ ) { /* ?>
						<div style="height: <?php echo $this->get_settings( 'portfolio_height' . $i );?>px"
							class="grid-item item<?php echo $i?> <?php echo $this->get_settings( 'portfolio_hover' . $i ); ?>">
							<div class="item-image" style="background-image: url(<?php echo $this->get_settings( 'portfolio_image' . $i )["url"]; ?>)"></div>
						</div> */ ?>

				<div style="height: <?php echo $this->get_settings( 'portfolio_height' . $i );?>px"
						 class="grid-item item<?php echo $i?> <?php echo $this->get_settings( 'portfolio_hover' . $i ); ?>">
					<a href="#portfolioModal<?php echo $i; ?>" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-item pos-r">
							<figure class="effect-oscar">
								<div
									style="background-image: url(<?php echo $this->get_settings( 'portfolio_image' . $i )["url"]; ?>)"
									class="portfolio-cell portfolio-cell1"></div>
								<figcaption>
									<div style="position: relative; height: 100%; display: flex; justify-content: center; align-content: center; flex-direction: column;">
									<h4>Sandra & Will</h4>
									<p>14/04/2017</p>
									</div>
								</figcaption>
							</figure>
						</div>
					</a>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php
	}
}

Plugin::instance()->widgets_manager->register_widget_type( new MilleFiori_Portfolio );
