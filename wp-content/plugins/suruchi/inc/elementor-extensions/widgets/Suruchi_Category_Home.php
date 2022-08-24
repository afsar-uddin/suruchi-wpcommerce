<?php

namespace Elementor;

if (!defined('ABSPATH')) {
	exit;
} // Exit if accessed directly

class Suruchi_Category_Home extends Widget_Base
{

	public function get_name()
	{
		return 'ic-home-category';
	}

	public function get_title()
	{
		return __('Home Category', 'suruchi');
	}

	public function get_icon()
	{
		return 'ic icofont-simple-smile';
	}

	public function get_categories()
	{
		return ['ic_elements'];
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


		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		$cat_term = get_terms([
			'taxonomy' => 'product_cat',
		]);

		// foreach ($cat_term as $key => $cat) {
		// 	echo "<pre>";
		// 	print_r($cat->name);
		// 	echo "</pre>";
		// }



		// var_dump($cat_term);

?>

		<section class="banner__section section--padding">
			<div class="container-fluid">
				<div class="row mb--n28">
					<?php foreach ($cat_term as $key => $cat) : ?>
						<?php if (1 === $key) { ?>
							<div class="col-lg-5 col-md-order mb-28">
								<div class="banner__items">
									<a class="banner__items--thumbnail position__relative" href="<?php echo get_term_link($cat->term_id, 'product_cat'); ?>"><img class="banner__items--thumbnail__img" src="<?php echo wp_get_attachment_url(get_term_meta($cat->term_id, 'thumbnail_id', true)); ?>" alt="banner-img">
										<div class="banner__items--content">
											<span class="banner__items--content__subtitle">17% Discount</span>
											<h2 class="banner__items--content__title h3"><?php echo $cat->name ?></h2>
											<span class="banner__items--content__link">View Discounts
												<svg class="banner__items--content__arrow--icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
													<path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
												</svg>
											</span>
										</div>
									</a>
								</div>
							</div>
						<?php } else if (2 === $key) { ?>


							<div class="col-lg-7 mb-28">
								<div class="row row-cols-lg-2 row-cols-sm-2 row-cols-1">
									<div class="col mb-28">
										<div class="banner__items">
											<a class="banner__items--thumbnail position__relative" href="<?php echo get_term_link($cat->term_id, 'product_cat'); ?>"><img class="banner__items--thumbnail__img" src="<?php echo wp_get_attachment_url(get_term_meta($cat->term_id, 'thumbnail_id', true)); ?>" alt="banner-img">
												<div class="banner__items--content">
													<span class="banner__items--content__subtitle text__secondary"><?php echo $cat->name ?></span>
													<h2 class="banner__items--content__title h3">Up to 70% Off & <br>
														Free Shipping</h2>
													<span class="banner__items--content__link">View Discounts
														<svg class="banner__items--content__arrow--icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
															<path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
														</svg>
													</span>
												</div>
											</a>
										</div>
									</div>
								<?php } else if (3 === $key) { ?>
									<div class="col mb-28">
										<div class="banner__items">
											<a class="banner__items--thumbnail position__relative" href="<?php echo get_term_link($cat->term_id, 'product_cat'); ?>"><img class="banner__items--thumbnail__img" src="<?php echo wp_get_attachment_url(get_term_meta($cat->term_id, 'thumbnail_id', true)); ?>" alt="banner-img">
												<div class="banner__items--content">
													<span class="banner__items--content__subtitle"><?php echo $cat->name ?></span>
													<h2 class="banner__items--content__title h3">Free Shipping Over <br>
														Order $120</h2>
													<span class="banner__items--content__link">View Discounts
														<svg class="banner__items--content__arrow--icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
															<path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
														</svg>
													</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							<?php } else if (4 === $key) { ?>
								<div class="banner__items">
									<a class="banner__items--thumbnail position__relative" href="<?php echo get_term_link($cat->term_id, 'product_cat'); ?>"><img class="banner__items--thumbnail__img banner__img--max__height" src="<?php echo wp_get_attachment_url(get_term_meta($cat->term_id, 'thumbnail_id', true)); ?>" alt="banner-img">
										<div class="banner__items--content">
											<span class="banner__items--content__subtitle">25% Discount</span>
											<h2 class="banner__items--content__title h3"><?php echo $cat->name ?></h2>
											<span class="banner__items--content__link">View Discounts
												<svg class="banner__items--content__arrow--icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
													<path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
												</svg>
											</span>
										</div>
									</a>
								</div>
							</div>
						<?php } ?>

					<?php endforeach; ?>
				</div>
			</div>
		</section>

<?php

	}
}

Plugin::instance()->widgets_manager->register(new Suruchi_Category_Home());
