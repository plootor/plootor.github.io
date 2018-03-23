<?php

/**
 * Mille Fiori Theme Customizer
 */

/**
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
class MileFiori_Customizer {

	public static function Register( $wp_customize ) {
		self::Sections( $wp_customize );
		self::Controls( $wp_customize );
	}

	public static function Sections( $wp_customize ) {

		$wp_customize->add_setting( 'theme_options[millefiori_display_header_text]', [
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
				'type'              => 'option',
				'default'           => false
			]
		);
		$wp_customize->add_control( 'millefiori_display_header_text', [
				'label'       => __( 'Display Header Text?', 'mille-fiori' ),
				'description' => __( 'Check if you want to display header text in place of logo.', 'mille-fiori' ),
				'section'     => 'title_tagline',
				'settings'    => 'theme_options[millefiori_display_header_text]',
				'type'        => 'checkbox'
			]
		);

		/**
		 * Footer section panel
		 */
		$wp_customize->add_panel( 'page_footer_setting_panel', [
				'title'       => __( 'Footer Section', 'mille-fiori' ),
				'description' => __( 'Allows you to set up Footer elements.', 'mille-fiori' ), //Descriptive tooltip
				'priority'    => '12',
				'capability'  => 'edit_theme_options'
			]
		);

		/**
		 * Footer Main Section
		 */
		$wp_customize->add_section( 'pagefooter_setting_section', [
				'title'       => __( 'Footer Settings', 'mille-fiori' ),
				'description' => __( 'Allows you to set up Contact heading and background image', 'mille-fiori' ),
				//Descriptive tooltip
				'panel'       => 'page_footer_setting_panel',
				'priority'    => '1',
				'capability'  => 'edit_theme_options'
			]
		);

		/**
		 * Footer Social Section
		 */
		$wp_customize->add_section( 'pagefooter_social_setting_section', [
				'title'       => __( 'Footer Social Media Settings', 'mille-fiori' ),
				'description' => __( 'Allows you to set up external social media links', 'mille-fiori' ), //Descriptive tooltip
				'panel'       => 'page_footer_setting_panel',
				'priority'    => '2',
				'capability'  => 'edit_theme_options'
			]
		);

		/**
		 * Footer section panel
		 */
		$wp_customize->add_panel( 'page_header_setting_panel', [
				'title'       => __( 'Header Section', 'mille-fiori' ),
				'description' => __( 'Allows you to set up Header elements.', 'mille-fiori' ), //Descriptive tooltip
				'priority'    => '1',
				'capability'  => 'edit_theme_options'
			]
		);
		/**
		 * Header Slider Section
		 */
		$wp_customize->add_section( 'millefiori_main_carousel_setting_section', [
				'title'       => __( 'Header Slider Settings', 'mille-fiori' ),
				'description' => __( 'Allows you to set up slider images', 'mille-fiori' ), //Descriptive tooltip
				'panel'       => 'page_header_setting_panel',
				'priority'    => '2',
				'capability'  => 'edit_theme_options'
			]
		);
		$wp_customize->add_section( 'millefiori_header_logo_setting_section', [
				'title'       => __( 'Header Logo', 'mille-fiori' ),
				'description' => __( 'Allows you to set up header logo', 'mille-fiori' ), //Descriptive tooltip
				'panel'       => 'page_header_setting_panel',
				'priority'    => '1',
				'capability'  => 'edit_theme_options'
			]
		);

		/**
		 * Page setup
		 */
		$wp_customize->add_panel( 'page_setting_panel', [
				'title'       => __( 'Page Settings', 'mille-fiori' ),
				'description' => __( 'Allows you to set up pages for millefiori Theme.', 'mille-fiori' ), //Descriptive tooltip
				'priority'    => '14',
				'capability'  => 'edit_theme_options'
			]
		);
		/**
		 *  Pages animation section
		 */
		$wp_customize->add_section( 'page_animation_setting', [
				'title'       => __( 'Animation Settings', 'mille-fiori' ),
				'description' => __( 'Allows you to set on/off animation of millefiori Theme.', 'mille-fiori' ),
				//Descriptive tooltip
				'panel'       => 'page_setting_panel',
				'priority'    => '10',
				'capability'  => 'edit_theme_options'
			]
		);
		/**
		 *  Pages color section
		 */
		$wp_customize->add_section( 'page_color_setting', [
				'title'       => __( 'Color Settings', 'mille-fiori' ),
				'description' => __( 'Allows you to set up pages color for millefiori Theme.', 'mille-fiori' ),
				//Descriptive tooltip
				'panel'       => 'page_setting_panel',
				'priority'    => '10',
				'capability'  => 'edit_theme_options'
			]
		);
	}

	public static function Controls( $wp_customize ) {
		$sections = self::Section_Content();
		$settings = self::Theme_Settings();
		foreach ( $sections as $section_id => $section_content ) {
			foreach ( $section_content as $section_content_id ) {
				switch ( $settings[ $section_content_id ]['setting_type'] ) {
					case 'image':
						self::add_setting( $wp_customize, $settings[ $section_content_id ]['id'], $settings[ $section_content_id ]['default'], $settings[ $section_content_id ]['type'], 'millefiori_sanitize_url' );
						$wp_customize->add_control( new WP_Customize_Image_Control(
							$wp_customize, $settings[ $section_content_id ]['id'], [
								'label'       => $settings[ $section_content_id ]['label'],
								'description' => $settings[ $section_content_id ]['description'],
								'section'     => $section_id,
								'settings'    => $settings[ $section_content_id ]['id']
							]
						) );
						break;
					case 'text':
						self::add_setting( $wp_customize, $settings[ $section_content_id ]['id'], $settings[ $section_content_id ]['default'], $settings[ $section_content_id ]['type'], 'millefiori_sanitize_text' );
						$wp_customize->add_control( new WP_Customize_Control(
							$wp_customize, $settings[ $section_content_id ]['id'], [
								'label'       => $settings[ $section_content_id ]['label'],
								'description' => $settings[ $section_content_id ]['description'],
								'section'     => $section_id,
								'settings'    => $settings[ $section_content_id ]['id'],
								'type'        => 'text'
							]
						) );
						break;
					case 'textarea':
						self::add_setting( $wp_customize, $settings[ $section_content_id ]['id'], $settings[ $section_content_id ]['default'], $settings[ $section_content_id ]['type'], 'millefiori_sanitize_textarea' );

						$wp_customize->add_control( new WP_Customize_Control(
							$wp_customize, $settings[ $section_content_id ]['id'], [
								'label'       => $settings[ $section_content_id ]['label'],
								'description' => $settings[ $section_content_id ]['description'],
								'section'     => $section_id,
								'settings'    => $settings[ $section_content_id ]['id'],
								'type'        => 'textarea'
							]
						) );
						break;

					case 'editor':
						self::add_setting( $wp_customize, $settings[ $section_content_id ]['id'], $settings[ $section_content_id ]['default'], $settings[ $section_content_id ]['type'], 'millefiori_sanitize_editor' );

						$wp_customize->add_control( new WP_Customize_Control(
							$wp_customize, $settings[ $section_content_id ]['id'], [
								'label'       => $settings[ $section_content_id ]['label'],
								'description' => $settings[ $section_content_id ]['description'],
								'section'     => $section_id,
								'settings'    => $settings[ $section_content_id ]['id'],
								'type'        => 'textarea'
							]
						) );
						break;

					case 'link':

						self::add_setting( $wp_customize, $settings[ $section_content_id ]['id'], $settings[ $section_content_id ]['default'], $settings[ $section_content_id ]['type'], 'millefiori_sanitize_url' );

						$wp_customize->add_control( new WP_Customize_Control(
							$wp_customize, $settings[ $section_content_id ]['id'], [
								'label'       => $settings[ $section_content_id ]['label'],
								'description' => $settings[ $section_content_id ]['description'],
								'section'     => $section_id,
								'settings'    => $settings[ $section_content_id ]['id'],
								'type'        => 'text'
							]
						) );

						break;
					case 'color':

						self::add_setting( $wp_customize, $settings[ $section_content_id ]['id'], $settings[ $section_content_id ]['default'], $settings[ $section_content_id ]['type'], 'millefiori_sanitize_color' );

						$wp_customize->add_control( new WP_Customize_Color_Control(
							$wp_customize, $settings[ $section_content_id ]['id'], [
								'label'       => $settings[ $section_content_id ]['label'],
								'description' => $settings[ $section_content_id ]['description'],
								'section'     => $section_id,
								'settings'    => $settings[ $section_content_id ]['id']
							]
						) );
						break;

					case 'radio':

						self::add_setting( $wp_customize, $settings[ $section_content_id ]['id'], $settings[ $section_content_id ]['default'], $settings[ $section_content_id ]['type'], 'millefiori_sanitize_radio' );

						$wp_customize->add_control( new WP_Customize_Control(
							$wp_customize, $settings[ $section_content_id ]['id'], [
								'label'       => $settings[ $section_content_id ]['label'],
								'description' => $settings[ $section_content_id ]['description'],
								'section'     => $section_id,
								'settings'    => $settings[ $section_content_id ]['id'],
								'type'        => 'radio',
								'choices'     => $settings[ $section_content_id ]['choices']
							]
						) );
						break;

					case 'sort':
						self::add_setting( $wp_customize, $settings[ $section_content_id ]['id'], $settings[ $section_content_id ]['default'], $settings[ $section_content_id ]['type'], 'millefiori_sanitize_sections' );
						$wp_customize->add_control( new Millefiori_Customize_Control_Sortable_Checkboxes(
							$wp_customize, $settings[ $section_content_id ]['id'], [
								'label'       => $settings[ $section_content_id ]['label'],
								'description' => $settings[ $section_content_id ]['description'],
								'section'     => $section_id,
								'settings'    => $settings[ $section_content_id ]['id'],
								'type'        => 'text',
								'choices'     => $settings[ $section_content_id ]['choices']
							]
						) );
						break;

					default:
						break;
				}
			}
		}
	}

	public static function Section_Content() {
		$section_content = [
			'millefiori_sort_section'            => [
				'millefiori_section_order'
			],
			'latestpost_content_setting_section' => [
				'millefiori_latestpost_section_heading',
				'millefiori_latestpost_heading',
				'millefiori_latestpost_date',
				'millefiori_latestpost_content',
				'millefiori_latestpost_link',
				'millefiori_latestpost_image'
			],
			'team_left_content_setting_section'  => [
				'millefiori_team_section_heading',
				'millefiori_team_title',
				'millefiori_team_content'
			],
			'team_member1_setting_section'       => [
				'millefiori_team1_image',
				'millefiori_team1_name',
				'millefiori_team1_job'
			],
			'team_member2_setting_section'       => [
				'millefiori_team2_image',
				'millefiori_team2_name',
				'millefiori_team2_job'
			],
			'team_member3_setting_section'       => [
				'millefiori_team3_image',
				'millefiori_team3_name',
				'millefiori_team3_job'
			],
			'team_member4_setting_section'       => [
				'millefiori_team4_image',
				'millefiori_team4_name',
				'millefiori_team4_job'
			],

			'quote_setting_section' => [
				'millefiori_quote_header',
				'millefiori_quote_content',
				'millefiori_quote_footer',
				'millefiori_quote_bg_image'
			],

			'services_section_heading_section' => [
				'millefiori_service_section_heading',
			],

			'services_images_setting_section' => [
				'millefiori_service_image1',
				'millefiori_service_image2'
			],

			'services_element1_setting_section' => [
				'service_element1_header',
				'service_element1_content',
				'service_element1_image',
			],

			'services_element2_setting_section' => [
				'service_element2_header',
				'service_element2_content',
				'service_element2_image',
			],

			'services_element3_setting_section' => [
				'service_element3_header',
				'service_element3_content',
				'service_element3_image',
			],

			'services_element4_setting_section' => [
				'service_element4_header',
				'service_element4_content',
				'service_element4_image',
			],

			'subscribe_setting_section' => [
				'subscribe_header',
			],

			'partners_setting_section' => [
				'partners_header',
				'partners_image1',
				'partners_image2',
				'partners_image3',
				'partners_image4',
				'partners_image5',
				'partners_image6',
			],

			'story_setting_section'               => [
				'millefiori_story_section_heading',
				'millefiori_story_heading',
				'millefiori_story_text',
				'millefiori_story_subtext'
			],
			'testimonial_heading_setting_section' => [
				'millefiori_testimonial_main_heading'
			],
			'testimonial_box1_setting_section'    => [
				'millefiori_testimonial_1_name',
				'millefiori_testimonial_1_job',
				'millefiori_testimonial_1_content',
			],
			'testimonial_box2_setting_section'    => [
				'millefiori_testimonial_2_name',
				'millefiori_testimonial_2_job',
				'millefiori_testimonial_2_content',
			],
			'testimonial_box3_setting_section'    => [
				'millefiori_testimonial_3_name',
				'millefiori_testimonial_3_job',
				'millefiori_testimonial_3_content',
			],
			'testimonial_box4_setting_section'    => [
				'millefiori_testimonial_4_name',
				'millefiori_testimonial_4_job',
				'millefiori_testimonial_4_content',
			],

			'contact_setting_section'                  => [
				'millefiori_contact_section_heading',
				'millefiori_contact_heading',
				'millefiori_contact_background'
			],
			'pagefooter_setting_section'               => [
				'millefiori_footer_logo',
				'millefiori_footer_address',
				'onapage_footer_phone',
				'millefiori_footer_email'
			],
			'pagefooter_social_setting_section'        => [
				'millefiori_footer_social1',
				'millefiori_footer_social1thumb',
				'millefiori_footer_social2',
				'millefiori_footer_social2thumb',
				'millefiori_footer_social3',
				'millefiori_footer_social3thumb',
				'millefiori_footer_social4',
				'millefiori_footer_social4thumb',
				'millefiori_footer_social5',
				'millefiori_footer_social5thumb'
			],
			'millefiori_header_logo_setting_section'   => [
				'millefiori_header_logo'
			],
			'millefiori_main_carousel_setting_section' => [
				'small_header_bg_image',
				'millefiori_slide1_image',
				'millefiori_slide2_image',
				'millefiori_slide3_image',
				'millefiori_slide4_image',
			],


			/**
			 * Portfolio panel setting
			 */
			'portfolio_heading_setting_section'        => [
				'millefiori_portfolio_main_heading',
			],
			'portfolio_filter_setting_section'         => [
				'portfolio_filter_all_name',
				'portfolio_filter_first_name',
				'portfolio_filter_first_elements',
				'portfolio_filter_second_name',
				'portfolio_filter_second_elements',
				'portfolio_filter_third_name',
				'portfolio_filter_third_elements',
			],
			'portfolio_box_main'                       => [
				'portfolio_box_main_title',
				'portfolio_box_page_name',
			],
			'portfolio_box1'                           => [
				'portfolio_box1_title',
				'portfolio_box1_page_name',
				'portfolio_box1_page_type',
				'portfolio_box1_textbox_desc',
			],
			'portfolio_box2'                           => [
				'portfolio_box2_title',
				'portfolio_box2_page_name',
				'portfolio_box2_page_type',
				'portfolio_box2_textbox_desc',
			],
			'portfolio_box3'                           => [
				'portfolio_box3_title',
				'portfolio_box3_page_name',
				'portfolio_box3_page_type',
				'portfolio_box3_textbox_desc',
			],
			'portfolio_box4'                           => [
				'portfolio_box4_title',
				'portfolio_box4_page_name',
				'portfolio_box4_page_type',
				'portfolio_box4_textbox_desc',
			],
			'portfolio_box5'                           => [
				'portfolio_box5_title',
				'portfolio_box5_page_name',
				'portfolio_box5_page_type',
				'portfolio_box5_textbox_desc',
			],
			'portfolio_box6'                           => [
				'portfolio_box6_title',
				'portfolio_box6_page_name',
				'portfolio_box6_page_type',
				'portfolio_box6_textbox_desc',
			],

			/**
			 * Page animation settings
			 */
			'page_animation_setting'                   => [
				'millefiori_animation_status',
			],
			/**
			 * Page color settings
			 */
			'page_color_setting'                       => [
				'pages_color_scheme',
				'pages_heading_color_scheme',
				'pages_text_color_scheme',
				'pages_base_background_color',
				'pages_darker_background_color',
				'pages_nav_color'
			]
		];

		return $section_content;
	}

	public static function Theme_Settings() {

		$choices  = [];
		$sections = sections();
		foreach ( $sections as $key => $val ) {
			$choices[ $key ] = $val['label'];
		}
		$customizer_settings = [
			/**
			 * mille-fiori header
			 */
			'millefiori_header_logo'                => [
				'id'           => 'theme_options[millefiori_header_logo]',
				'label'        => __( 'Header Logo', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'small_header_bg_image'                 => [
				'id'           => 'theme_options[small_header_bg_image]',
				'label'        => __( 'Small Header Background Image', 'mille-fiori' ),
				'description'  => __( 'Background image for header which is used on blog pages', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'millefiori_slide1_image'               => [
				'id'           => 'theme_options[millefiori_slide1_image]',
				'label'        => __( 'Header Slide #1 Image', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'millefiori_slide2_image'               => [
				'id'           => 'theme_options[millefiori_slide2_image]',
				'label'        => __( 'Header Slide #2 Image', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'millefiori_slide3_image'               => [
				'id'           => 'theme_options[millefiori_slide3_image]',
				'label'        => __( 'Header Slide #3 Image', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'millefiori_slide4_image'               => [
				'id'           => 'theme_options[millefiori_slide4_image]',
				'label'        => __( 'Header Slide #4 Image', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],

			/**
			 * mille-fiori latestpost
			 */
			'millefiori_latestpost_section_heading' => [
				'id'           => 'theme_options[millefiori_latestpost_section_heading]',
				'label'        => __( 'Section Heading', 'mille-fiori' ),
				'description'  => __( 'Write section heading for the Latest Post section', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_latestpost_heading'         => [
				'id'           => 'theme_options[millefiori_latestpost_heading]',
				'label'        => __( 'Main Heading', 'mille-fiori' ),
				'description'  => __( 'Write main heading for the Latest Post section', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_latestpost_image'           => [
				'id'           => 'theme_options[millefiori_latestpost_image]',
				'label'        => __( 'Image', 'mille-fiori' ),
				'description'  => __( 'Upload image for Latest Post section', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'millefiori_latestpost_date'            => [
				'id'           => 'theme_options[millefiori_latestpost_date]',
				'label'        => __( 'Set Date', 'mille-fiori' ),
				'description'  => __( 'Write date for the Latest Post section', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_latestpost_content'         => [
				'id'           => 'theme_options[millefiori_latestpost_content]',
				'label'        => __( 'Main Content', 'mille-fiori' ),
				'description'  => __( 'Write content for the Latest Post section', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],
			'millefiori_latestpost_link'            => [
				'id'           => 'theme_options[millefiori_latestpost_link]',
				'label'        => __( 'Find More Link', 'mille-fiori' ),
				'description'  => __( 'Write main heading for the Latest Post section', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'link',
				'default'      => '#'
			],

			/**
			 * mille-fiori Our Story
			 */
			'millefiori_story_section_heading'      => [
				'id'           => 'theme_options[millefiori_story_section_heading]',
				'label'        => __( 'Section Header', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_story_heading'              => [
				'id'           => 'theme_options[millefiori_story_heading]',
				'label'        => __( 'Main Header', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_story_text'                 => [
				'id'           => 'theme_options[millefiori_story_text]',
				'label'        => __( 'Main Content', 'mille-fiori' ),
				'description'  => __( 'Paste main content text which will be splitted in 2 columns', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],
			'millefiori_story_subtext'              => [
				'id'           => 'theme_options[millefiori_story_subtext]',
				'label'        => __( 'Content Sufix section', 'mille-fiori' ),
				'description'  => __( 'Paste statistic data which are displayed at the end', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],

			/**
			 * mille-fiori Team
			 */
			'millefiori_team_section_heading'       => [
				'id'           => 'theme_options[millefiori_team_section_heading]',
				'label'        => __( 'Section Header', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_team_title'                 => [
				'id'           => 'theme_options[millefiori_team_title]',
				'label'        => __( 'Set Team Title', 'mille-fiori' ),
				'description'  => __( 'Write main heading for the Latest Post section', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_team_content'               => [
				'id'           => 'theme_options[millefiori_team_content]',
				'label'        => __( 'Set Team Content', 'mille-fiori' ),
				'description'  => __( 'Write main heading for the Latest Post section', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],
			'millefiori_team1_name'                 => [
				'id'           => 'theme_options[millefiori_team1_name]',
				'label'        => __( 'Team Member Name', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_team1_job'                  => [
				'id'           => 'theme_options[millefiori_team1_job]',
				'label'        => __( 'Team Member Job', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_team1_image'                => [
				'id'           => 'theme_options[millefiori_team1_image]',
				'label'        => __( 'Team Member Image', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'millefiori_team2_name'                 => [
				'id'           => 'theme_options[millefiori_team2_name]',
				'label'        => __( 'Team Member Name', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_team2_job'                  => [
				'id'           => 'theme_options[millefiori_team2_job]',
				'label'        => __( 'Team Member Job', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_team2_image'                => [
				'id'           => 'theme_options[millefiori_team2_image]',
				'label'        => __( 'Team Member Image', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'millefiori_team3_name'                 => [
				'id'           => 'theme_options[millefiori_team3_name]',
				'label'        => __( 'Team Member Name', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_team3_job'                  => [
				'id'           => 'theme_options[millefiori_team3_job]',
				'label'        => __( 'Team Member Job', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_team3_image'                => [
				'id'           => 'theme_options[millefiori_team3_image]',
				'label'        => __( 'Team Member Image', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'millefiori_team4_name'                 => [
				'id'           => 'theme_options[millefiori_team4_name]',
				'label'        => __( 'Team Member Name', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_team4_job'                  => [
				'id'           => 'theme_options[millefiori_team4_job]',
				'label'        => __( 'Team Member Job', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_team4_image'                => [
				'id'           => 'theme_options[millefiori_team4_image]',
				'label'        => __( 'Team Member Image', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],

			/**
			 * mille-fiori Quote
			 */
			'millefiori_quote_header'               => [
				'id'           => 'theme_options[millefiori_quote_header]',
				'label'        => __( 'Quote Header', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_quote_content'              => [
				'id'           => 'theme_options[millefiori_quote_content]',
				'label'        => __( 'Quote Main Content', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],
			'millefiori_quote_footer'               => [
				'id'           => 'theme_options[millefiori_quote_footer]',
				'label'        => __( 'Quote Footer', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],

			'millefiori_quote_bg_image'          => [
				'id'           => 'theme_options[millefiori_quote_bg_image]',
				'label'        => __( 'Quote Background Image', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],

			/**
			 * mille-fiori Services
			 */
			'millefiori_service_section_heading' => [
				'id'           => 'theme_options[millefiori_service_section_heading]',
				'label'        => __( 'Section Header', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_service_image1'          => [
				'id'           => 'theme_options[millefiori_service_image1]',
				'label'        => __( 'Service First Image', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],

			'millefiori_service_image2'         => [
				'id'           => 'theme_options[millefiori_service_image2]',
				'label'        => __( 'Service Second Image', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'service_element1_image'            => [
				'id'           => 'theme_options[service_element1_image]',
				'label'        => __( 'Service #1 Element Image', 'mille-fiori' ),
				'description'  => __( 'Use font-awesome notation like "fa-gift"', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'service_element1_header'           => [
				'id'           => 'theme_options[service_element1_header]',
				'label'        => __( 'Service #1 Element Header', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'service_element1_content'          => [
				'id'           => 'theme_options[service_element1_content]',
				'label'        => __( 'Service #1 Element Content', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],
			'service_element2_image'            => [
				'id'           => 'theme_options[service_element2_image]',
				'label'        => __( 'Service #2 Element Image', 'mille-fiori' ),
				'description'  => __( 'Use font-awesome notation like "fa-gift"', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'service_element2_header'           => [
				'id'           => 'theme_options[service_element2_header]',
				'label'        => __( 'Service #2 Element Header', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'service_element2_content'          => [
				'id'           => 'theme_options[service_element2_content]',
				'label'        => __( 'Service #2 Element Content', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],
			'service_element3_image'            => [
				'id'           => 'theme_options[service_element3_image]',
				'label'        => __( 'Service #3 Element Image', 'mille-fiori' ),
				'description'  => __( 'Use font-awesome notation like "fa-gift"', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'service_element3_header'           => [
				'id'           => 'theme_options[service_element3_header]',
				'label'        => __( 'Service #3 Element Header', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'service_element3_content'          => [
				'id'           => 'theme_options[service_element3_content]',
				'label'        => __( 'Service #3 Element Content', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],
			'service_element4_image'            => [
				'id'           => 'theme_options[service_element4_image]',
				'label'        => __( 'Service #4 Element Image', 'mille-fiori' ),
				'description'  => __( 'Use font-awesome notation like "fa-gift"', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'service_element4_header'           => [
				'id'           => 'theme_options[service_element4_header]',
				'label'        => __( 'Service #4 Element Header', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'service_element4_content'          => [
				'id'           => 'theme_options[service_element4_content]',
				'label'        => __( 'Service #4 Element Content', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],

			/**
			 * mille-fiori Subscribe
			 */
			'subscribe_header'                  => [
				'id'           => 'theme_options[subscribe_header]',
				'label'        => __( 'Subscribe Section Header', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],

			/**
			 * mille-fiori Portfolio
			 */
			'millefiori_portfolio_main_heading' => [
				'id'           => 'theme_options[millefiori_portfolio_main_heading]',
				'label'        => __( 'Main Heading', 'mille-fiori' ),
				'description'  => __( 'Write main heading for the pricing section', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],

			'portfolio_filter_all_name'           => [
				'id'           => 'theme_options[portfolio_filter_all_name]',
				'label'        => __( 'All filter name', 'mille-fiori' ),
				'description'  => __( 'Write heading for the All filter', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => 'All'
			],
			'portfolio_filter_first_name'         => [
				'id'           => 'theme_options[portfolio_filter_first_name]',
				'label'        => __( 'First filter element name', 'mille-fiori' ),
				'description'  => __( 'Write heading for the first filter', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => 'First'
			],
			'portfolio_filter_first_elements'     => [
				'id'           => 'theme_options[portfolio_filter_first_elements]',
				'label'        => __( 'First filter included elementse', 'mille-fiori' ),
				'description'  => __( 'Write heading for the first filter', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => '4,5'
			],
			'portfolio_filter_second_name'        => [
				'id'           => 'theme_options[portfolio_filter_second_name]',
				'label'        => __( 'Second filter element name', 'mille-fiori' ),
				'description'  => __( 'Write heading for the second filter', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => 'Second'
			],
			'portfolio_filter_second_elements'    => [
				'id'           => 'theme_options[portfolio_filter_second_elements]',
				'label'        => __( 'Second filter included elements', 'mille-fiori' ),
				'description'  => __( 'Write heading for the second filter', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => '1,2,3'
			],
			'portfolio_filter_third_name'         => [
				'id'           => 'theme_options[portfolio_filter_third_name]',
				'label'        => __( 'Third filter element name', 'mille-fiori' ),
				'description'  => __( 'Write heading for the third filter', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => 'Third'
			],
			'portfolio_filter_third_elements'     => [
				'id'           => 'theme_options[portfolio_filter_third_elements]',
				'label'        => __( 'Third filter included elements', 'mille-fiori' ),
				'description'  => __( 'Write heading for the third filter', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => '1,4,5,6'
			],
			/*titles*/
			'portfolio_box1_title'                => [
				'id'           => 'theme_options[portfolio_box1_title]',
				'label'        => __( 'On Hover Title', 'mille-fiori' ),
				'description'  => __( 'Write main heading for the box title', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box2_title'                => [
				'id'           => 'theme_options[portfolio_box2_title]',
				'label'        => __( 'On Hover Title', 'mille-fiori' ),
				'description'  => __( 'Write main heading for the box title', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box3_title'                => [
				'id'           => 'theme_options[portfolio_box3_title]',
				'label'        => __( 'On Hover Title', 'mille-fiori' ),
				'description'  => __( 'Write main heading for the box title', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box4_title'                => [
				'id'           => 'theme_options[portfolio_box4_title]',
				'label'        => __( 'On Hover Title', 'mille-fiori' ),
				'description'  => __( 'Write main heading for the box title', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box5_title'                => [
				'id'           => 'theme_options[portfolio_box5_title]',
				'label'        => __( 'On Hover Title', 'mille-fiori' ),
				'description'  => __( 'Write main heading for the box title', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box6_title'                => [
				'id'           => 'theme_options[portfolio_box6_title]',
				'label'        => __( 'On Hover Title', 'mille-fiori' ),
				'description'  => __( 'Write main heading for the box title', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			// Page slug to link to
			'portfolio_box1_page_name'            => [
				'id'           => 'theme_options[portfolio_box1_page_name]',
				'label'        => __( 'Page slug to link with', 'mille-fiori' ),
				'description'  => __( 'Write page slug here(under the title noted with Permalink)', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box2_page_name'            => [
				'id'           => 'theme_options[portfolio_box2_page_name]',
				'label'        => __( 'Page slug to link with', 'mille-fiori' ),
				'description'  => __( 'Write page slug here(under the title noted with Permalink)', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box3_page_name'            => [
				'id'           => 'theme_options[portfolio_box3_page_name]',
				'label'        => __( 'Page slug to link with', 'mille-fiori' ),
				'description'  => __( 'Write page slug here(under the title noted with Permalink)', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box4_page_name'            => [
				'id'           => 'theme_options[portfolio_box4_page_name]',
				'label'        => __( 'Page slug to link with', 'mille-fiori' ),
				'description'  => __( 'Write page slug here(under the title noted with Permalink)', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box5_page_name'            => [
				'id'           => 'theme_options[portfolio_box5_page_name]',
				'label'        => __( 'Page slug to link with', 'mille-fiori' ),
				'description'  => __( 'Write page slug here(under the title noted with Permalink)', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box6_page_name'            => [
				'id'           => 'theme_options[portfolio_box6_page_name]',
				'label'        => __( 'Page slug to link with', 'mille-fiori' ),
				'description'  => __( 'Write page slug here(under the title noted with Permalink)', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box1_page_type'            => [
				'id'           => 'theme_options[portfolio_box1_page_type]',
				'label'        => __( 'Choose box display type', 'mille-fiori' ),
				'description'  => __( 'This settings allow you to select box display type', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'radio',
				'default'      => 'on',
				'choices'      => [
					'on'  => 'Image Background',
					'off' => 'Text box'
				]
			],
			'portfolio_box2_page_type'            => [
				'id'           => 'theme_options[portfolio_box2_page_type]',
				'label'        => __( 'Choose box display type', 'mille-fiori' ),
				'description'  => __( 'This settings allow you to select box display type', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'radio',
				'default'      => 'on',
				'choices'      => [
					'on'  => 'Image Background',
					'off' => 'Text box'
				]
			],
			'portfolio_box3_page_type'            => [
				'id'           => 'theme_options[portfolio_box3_page_type]',
				'label'        => __( 'Choose box display type', 'mille-fiori' ),
				'description'  => __( 'This settings allow you to select box display type', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'radio',
				'default'      => 'on',
				'choices'      => [
					'on'  => 'Image Background',
					'off' => 'Text box'
				]
			],
			'portfolio_box4_page_type'            => [
				'id'           => 'theme_options[portfolio_box4_page_type]',
				'label'        => __( 'Choose box display type', 'mille-fiori' ),
				'description'  => __( 'This settings allow you to select box display type', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'radio',
				'default'      => 'on',
				'choices'      => [
					'on'  => 'Image Background',
					'off' => 'Text box'
				]
			],
			'portfolio_box5_page_type'            => [
				'id'           => 'theme_options[portfolio_box5_page_type]',
				'label'        => __( 'Choose box display type', 'mille-fiori' ),
				'description'  => __( 'This settings allow you to select box display type', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'radio',
				'default'      => 'on',
				'choices'      => [
					'on'  => 'Image Background',
					'off' => 'Text box'
				]
			],
			'portfolio_box6_page_type'            => [
				'id'           => 'theme_options[portfolio_box6_page_type]',
				'label'        => __( 'Choose box display type', 'mille-fiori' ),
				'description'  => __( 'This settings allow you to select box display type', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'radio',
				'default'      => 'on',
				'choices'      => [
					'on'  => 'Image Background',
					'off' => 'Text box'
				]
			],
			'portfolio_box1_textbox_desc'         => [
				'id'           => 'theme_options[portfolio_box1_textbox_desc]',
				'label'        => __( 'Text Boxtype description', 'mille-fiori' ),
				'description'  => __( 'Description for box type of Text box', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box2_textbox_desc'         => [
				'id'           => 'theme_options[portfolio_box2_textbox_desc]',
				'label'        => __( 'Text Boxtype description', 'mille-fiori' ),
				'description'  => __( 'Description for box type of Text box', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box3_textbox_desc'         => [
				'id'           => 'theme_options[portfolio_box3_textbox_desc]',
				'label'        => __( 'Text Boxtype description', 'mille-fiori' ),
				'description'  => __( 'Description for box type of Text box', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box4_textbox_desc'         => [
				'id'           => 'theme_options[portfolio_box4_textbox_desc]',
				'label'        => __( 'Text Boxtype description', 'mille-fiori' ),
				'description'  => __( 'Description for box type of Text box', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box5_textbox_desc'         => [
				'id'           => 'theme_options[portfolio_box5_textbox_desc]',
				'label'        => __( 'Text Boxtype description', 'mille-fiori' ),
				'description'  => __( 'Description for box type of Text box', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'portfolio_box6_textbox_desc'         => [
				'id'           => 'theme_options[portfolio_box6_textbox_desc]',
				'label'        => __( 'Text Boxtype description', 'mille-fiori' ),
				'description'  => __( 'Description for box type of Text box', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],

			/**
			 * mille-fiori Partners
			 */
			'partners_header'                     => [
				'id'           => 'theme_options[partners_header]',
				'label'        => __( 'Partners Section Header', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'partners_image1'                     => [
				'id'           => 'theme_options[partners_image1]',
				'label'        => __( 'Partners Image #1', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'partners_image2'                     => [
				'id'           => 'theme_options[partners_image2]',
				'label'        => __( 'Partners Image #2', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'partners_image3'                     => [
				'id'           => 'theme_options[partners_image3]',
				'label'        => __( 'Partners Image #3', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'partners_image4'                     => [
				'id'           => 'theme_options[partners_image4]',
				'label'        => __( 'Partners Image #4', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'partners_image5'                     => [
				'id'           => 'theme_options[partners_image5]',
				'label'        => __( 'Partners Image #5', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'partners_image6'                     => [
				'id'           => 'theme_options[partners_image6]',
				'label'        => __( 'Partners Image #6', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],

			/**
			 * mille-fiori Testimonials
			 */
			'millefiori_testimonial_main_heading' => [
				'id'           => 'theme_options[millefiori_testimonial_main_heading]',
				'label'        => __( 'Main Heading', 'mille-fiori' ),
				'description'  => __( 'Write main heading for the testimonial section', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_testimonial_1_name'       => [
				'id'           => 'theme_options[millefiori_testimonial_1_name]',
				'label'        => __( 'Section Name', 'mille-fiori' ),
				'description'  => __( 'Upload Author Image for first testimonial', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_testimonial_1_job'        => [
				'id'           => 'theme_options[millefiori_testimonial_1_job]',
				'label'        => __( 'Section Job', 'mille-fiori' ),
				'description'  => __( 'Upload Author Image for first testimonial', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_testimonial_1_content'    => [
				'id'           => 'theme_options[millefiori_testimonial_1_content]',
				'label'        => __( 'Section Content', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],
			'millefiori_testimonial_2_name'       => [
				'id'           => 'theme_options[millefiori_testimonial_2_name]',
				'label'        => __( 'Section Name', 'mille-fiori' ),
				'description'  => __( 'Upload Author Image for first testimonial', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_testimonial_2_job'        => [
				'id'           => 'theme_options[millefiori_testimonial_2_job]',
				'label'        => __( 'Section Job', 'mille-fiori' ),
				'description'  => __( 'Upload Author Image for first testimonial', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_testimonial_2_content'    => [
				'id'           => 'theme_options[millefiori_testimonial_2_content]',
				'label'        => __( 'Section Content', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],
			'millefiori_testimonial_3_name'       => [
				'id'           => 'theme_options[millefiori_testimonial_3_name]',
				'label'        => __( 'Section Name', 'mille-fiori' ),
				'description'  => __( 'Upload Author Image for first testimonial', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_testimonial_3_job'        => [
				'id'           => 'theme_options[millefiori_testimonial_3_job]',
				'label'        => __( 'Section Job', 'mille-fiori' ),
				'description'  => __( 'Upload Author Image for first testimonial', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_testimonial_3_content'    => [
				'id'           => 'theme_options[millefiori_testimonial_3_content]',
				'label'        => __( 'Section Content', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],
			'millefiori_testimonial_4_name'       => [
				'id'           => 'theme_options[millefiori_testimonial_4_name]',
				'label'        => __( 'Section Name', 'mille-fiori' ),
				'description'  => __( 'Upload Author Image for first testimonial', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_testimonial_4_job'        => [
				'id'           => 'theme_options[millefiori_testimonial_4_job]',
				'label'        => __( 'Section Job', 'mille-fiori' ),
				'description'  => __( 'Upload Author Image for first testimonial', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_testimonial_4_content'    => [
				'id'           => 'theme_options[millefiori_testimonial_4_content]',
				'label'        => __( 'Section Content', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'editor',
				'default'      => ''
			],

			/**
			 * mille-fiori Contact
			 */
			'millefiori_contact_section_heading'  => [
				'id'           => 'theme_options[millefiori_contact_section_heading]',
				'label'        => __( 'Section Heading', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_contact_background'       => [
				'id'           => 'theme_options[millefiori_contact_background]',
				'label'        => __( 'Contact Background Image', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'millefiori_contact_heading'          => [
				'id'           => 'theme_options[millefiori_contact_heading]',
				'label'        => __( 'Contact section Title', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],

			/**
			 * mille-fiori Footer
			 */

			'millefiori_footer_logo'    => [
				'id'           => 'theme_options[millefiori_footer_logo]',
				'label'        => __( 'Footer Logo', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'image',
				'default'      => ''
			],
			'millefiori_footer_address' => [
				'id'           => 'theme_options[millefiori_footer_address]',
				'label'        => __( 'Footer address', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'onapage_footer_phone'      => [
				'id'           => 'theme_options[onapage_footer_phone]',
				'label'        => __( 'Footer Phone', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_footer_email'   => [
				'id'           => 'theme_options[millefiori_footer_email]',
				'label'        => __( 'Footer email', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],

			'millefiori_footer_social1'      => [
				'id'           => 'theme_options[millefiori_footer_social1]',
				'label'        => __( 'Footer Social button #1 Link', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_footer_social1thumb' => [
				'id'           => 'theme_options[millefiori_footer_social1thumb]',
				'label'        => __( 'Footer Social button #1 font-awesome image code( ex: fa-instagram )', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_footer_social2'      => [
				'id'           => 'theme_options[millefiori_footer_social2]',
				'label'        => __( 'Footer Social button #2 Link', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_footer_social2thumb' => [
				'id'           => 'theme_options[millefiori_footer_social2thumb]',
				'label'        => __( 'Footer Social button #2 font-awesome image code( ex: fa-instagram )', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_footer_social3'      => [
				'id'           => 'theme_options[millefiori_footer_social3]',
				'label'        => __( 'Footer Social button #3 Link', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_footer_social3thumb' => [
				'id'           => 'theme_options[millefiori_footer_social3thumb]',
				'label'        => __( 'Footer Social button #3 font-awesome image code( ex: fa-instagram )', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_footer_social4'      => [
				'id'           => 'theme_options[millefiori_footer_social4]',
				'label'        => __( 'Footer Social button #4 Link', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_footer_social4thumb' => [
				'id'           => 'theme_options[millefiori_footer_social4thumb]',
				'label'        => __( 'Footer Social button #4 font-awesome image code( ex: fa-instagram )', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_footer_social5'      => [
				'id'           => 'theme_options[millefiori_footer_social5]',
				'label'        => __( 'Footer Social button #5 Link', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],
			'millefiori_footer_social5thumb' => [
				'id'           => 'theme_options[millefiori_footer_social5thumb]',
				'label'        => __( 'Footer Social button #5 font-awesome image code( ex: fa-instagram )', 'mille-fiori' ),
				'description'  => __( '', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'text',
				'default'      => ''
			],

			/**
			 * mille-fiori Section Order
			 */
			'millefiori_section_order'       => [
				'id'           => 'theme_options[millefiori_sort]',
				'label'        => __( 'Section Order', 'mille-fiori' ),
				'description'  => __( 'Drag the section', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'sort',
				'choices'      => $choices,
				'default'      => ''
			],

			/**
			 * Page animation settings
			 */
			'millefiori_animation_status'    => [
				'id'           => 'theme_options[millefiori_animation_status]',
				'label'        => __( 'Theme Animation On/Off Settings', 'mille-fiori' ),
				'description'  => __( 'On/Off animation of the theme', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'radio',
				'default'      => 'on',
				'choices'      => [
					'on'  => 'On (Default)',
					'off' => 'Off'
				]
			],
			'pages_color_scheme'             => [
				'id'           => 'theme_options[pages_color_scheme]',
				'label'        => __( 'Pages Accent Color', 'mille-fiori' ),
				'description'  => __( 'This option allows you to set accent color scheme for all internal pages.', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'color',
				'default'      => '#ebaca5'
			],
			'pages_heading_color_scheme'     => [
				'id'           => 'theme_options[pages_heading_color_scheme]',
				'label'        => __( 'Headings Color', 'mille-fiori' ),
				'description'  => __( 'This option allows you to set color scheme for all headings on internal pages.', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'color',
				'default'      => '#ebaca5'
			],
			'pages_text_color_scheme'        => [
				'id'           => 'theme_options[pages_text_color_scheme]',
				'label'        => __( 'Text Color', 'mille-fiori' ),
				'description'  => __( 'This option allows you to set color scheme for all text on internal pages.', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'color',
				'default'      => '#333333'
			],
			'pages_base_background_color'    => [
				'id'           => 'theme_options[pages_base_background_color]',
				'label'        => __( 'Base Background Color', 'mille-fiori' ),
				'description'  => __( 'This option allows you to set background base color.', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'color',
				'default'      => '#fff'
			],
			'pages_darker_background_color'  => [
				'id'           => 'theme_options[pages_darker_background_color]',
				'label'        => __( 'Darker Background Color', 'mille-fiori' ),
				'description'  => __( 'This option allows you to set darker background color which is applied to (our story, newsletter, partners).', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'color',
				'default'      => '#f5eef0'
			],
			'pages_nav_color'                => [
				'id'           => 'theme_options[pages_nav_color]',
				'label'        => __( 'Top menu color', 'mille-fiori' ),
				'description'  => __( 'This option allows you to set main navigation color.', 'mille-fiori' ),
				'type'         => 'option',
				'setting_type' => 'color',
				'default'      => '#000'
			]
		];

		return $customizer_settings;
	}

	public static function add_setting( $wp_customize, $setting_id, $default, $type, $sanitize_callback ) {
		$wp_customize->add_setting( $setting_id, [
				'default'           => $default,
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => [ 'MileFiori_Customizer', $sanitize_callback ],
				'type'              => $type
			]
		);
	}

	/**
	 * adds sanitization callback funtion : textarea
	 */
	public static function millefiori_sanitize_textarea( $value ) {
		$value = wp_kses_post( $value );

		return $value;
	}

	/**
	 * adds sanitization callback funtion : url
	 */
	public static function millefiori_sanitize_url( $value ) {
		$value = esc_url( $value );

		return $value;
	}

	public static function millefiori_sanitize_text( $value ) {
		$value = sanitize_text_field( $value );

		return $value;
	}

	public static function millefiori_sanitize_editor( $value ) {
		$array       = wp_kses_allowed_html( 'post' );
		$allowedtags = [
			'iframe' => [
				'width'        => [],
				'height'       => [],
				'frameborder'  => [],
				'scrolling'    => [],
				'src'          => [],
				'marginwidth'  => [],
				'marginheight' => []
			]
		];
		$data        = array_merge( $allowedtags, $array );
		$value       = wp_kses( $value, $data );

		return $value;
	}

	public static function millefiori_sanitize_email( $value ) {
		$value = sanitize_email( $value );

		return $value;
	}

	public static function millefiori_sanitize_number( $value ) {
		$value = preg_replace( "/[^0-9+ ]/", "", $value );

		return $value;
	}

	public static function millefiori_sanitize_select( $value, $setting ) {
		global $wp_customize;
		$control = $wp_customize->get_control( $setting->id );
		if ( array_key_exists( $value, $control->choices ) ) {
			return $value;
		} else {
			return $setting->default;
		}
	}

	public static function millefiori_sanitize_radio( $value, $setting ) {
		global $wp_customize;
		$control = $wp_customize->get_control( $setting->id );
		if ( array_key_exists( $value, $control->choices ) ) {
			return $value;
		} else {
			return $setting->default;
		}
	}

	/**
	 * Sanitize Sharing Services
	 */
	public static function millefiori_sanitize_sections( $input ) {

		/* Var */
		$output = [];

		/* Get valid services */
		$valid_sections = sections();

		/* Make array */
		$sections = explode( ',', $input );

		/* Bail. */
		if ( ! $sections ) {
			return null;
		}

		/* Loop and verify */
		foreach ( $sections as $section ) {

			/* Separate section and status */
			$section = explode( ':', $section );

			if ( isset( $section[0] ) && isset( $section[1] ) ) {
				if ( array_key_exists( $section[0], $valid_sections ) ) {
					$status   = $section[1] ? '1' : '0';
					$output[] = trim( $section[0] . ':' . $status );
				}
			}
		}

		return trim( esc_attr( implode( ',', $output ) ) );
	}

	/**
	 * adds sanitization callback funtion : number
	 */
	public static function millefiori_sanitize_color( $value ) {
		$value = sanitize_hex_color( $value );

		return $value;
	}

}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register', [ 'MileFiori_Customizer', 'Register' ] );

function millefiori_registers() {

	/* CSS */
	wp_enqueue_style( 'mille-fiori-sort-control', get_template_directory_uri() . '/css/sort_control.css' );

	/* JS */
	wp_enqueue_script( 'mille-fiori-sort-control', get_template_directory_uri() . '/js/sort_control.js', [
		'jquery',
		'jquery-ui-sortable'
	], '', true );

//  wp_register_script( 'mille-fiori-customizer', get_template_directory_uri() . '/js/onepage_customizer.js', array(
//    "jquery",
//    "jquery-ui-core"
//  ), '', true );
//  wp_enqueue_script( 'mille-fiori-customizer' );
//  wp_localize_script( 'mille-fiori-customizer', 'ink_advert', array(
//      'pro_text'           => __( 'View PRO version', 'mille-fiori' ),
//      'pro_url'            => esc_url( 'https://www.inkthemes.com/wp-themes/free-mille-fiori-wordpress-theme/' ),
//      'support_text'       => __( 'Need Help!', 'mille-fiori' ),
//      'support_url'        => esc_url( 'http://www.inkthemes.com/lets-connect/' ),
//      'documentation_text' => __( 'Documentation', 'mille-fiori' ),
//      'documentation_url'  => esc_url( 'https://www.inkthemes.com/mille-fiori-wordpress-theme-tutorial/' )
//    )
//  );
}

add_action( 'customize_controls_enqueue_scripts', 'millefiori_registers' );