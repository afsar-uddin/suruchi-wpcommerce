<?php

namespace Elementor;

if (!defined('ABSPATH')) {
	exit;
} // Exit if accessed directly

class Suruchi_Categoriy extends Widget_Base
{

	public function get_name()
	{
		return 'ic-category';
	}

	public function get_title()
	{
		return __('Category', 'suruchi');
	}

	public function get_icon()
	{
		return 'ic icofont-simple-smile';
	}

	public function get_categories()
	{
		return ['ic_elements'];
	}

	// products query 
	public function show_cats()
	{
		$cats = get_terms([
			'taxonomy' => 'product_cat',
			'hide_empty' => true,
		]);
		$cat_array = [];
		foreach ($cats as $cat) {
			$cat_array[$cat->term_id] = $cat->name;
		}
		return $cat_array;
	}

	protected function register_controls()
	{
		$this->start_controls_section(
			'section_content',
			[
				'label' => __('Content', 'suruchi'),
			]
		);

		$this->add_control(
			'title',
			[
				'label'       => __('Hero Title', 'suruchi'),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => esc_html__('Type your title here', 'suruchi'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'show_categories',
			[
				'label' => esc_html__('Show Element on', 'suruchi'),
				'type' => \Elementor\Controls_Manager::SELECT,
				// 'multiple' => true,
				'options' => $this->show_cats(),
			]
		);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
?>
		<?php


		$product_cat_id = $settings['show_categories'];
		$product_cat = get_term_by('id', $product_cat_id, 'product_cat');

		$cat_thumb = get_term_meta($product_cat->term_id, 'thumbnail_id', true);
		$thumb_url = wp_get_attachment_url($cat_thumb);

		$cat_link = get_term_link($product_cat->term_id, 'product_cat');

		// var_dump($cat_link);


		?>



		<div class="banner__items">
			<a class="banner__items--thumbnail position__relative" href="<?php echo $cat_link; ?>"><img class="banner__items--thumbnail__img" src="<?php echo $thumb_url; ?>" alt="banner-img">
				<div class="banner__items--content">
					<span class="banner__items--content__subtitle">17% Discount</span>
					<h2 class="banner__items--content__title h3"><?php echo $product_cat->name; ?></h2>
					<span class="banner__items--content__link">View Discounts
						<svg class="banner__items--content__arrow--icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
							<path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
						</svg>
					</span>
				</div>
			</a>
		</div>
<?php

	}
}

Plugin::instance()->widgets_manager->register(new Suruchi_Categoriy());
