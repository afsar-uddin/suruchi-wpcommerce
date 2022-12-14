<?php

namespace Elementor;

if (!defined('ABSPATH')) {
	exit;
} // Exit if accessed directly

class Suruchi_Ajax_Product_Cat_Filter extends Widget_Base
{

	public function get_name()
	{
		return 'ic-ajax-product-category';
	}

	public function get_title()
	{
		return __('Ajax Product Category', 'suruchi');
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
				'label'       => __('Ajax products filter', 'suruchi'),
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
?>

		<section class="product__section section--padding pt-0">
			<div class="container-fluid">
				<div class="section__heading text-center mb-35">
					<h2 class="section__heading--maintitle"><?php echo esc_html($settings['title']); ?></h2>
				</div>
				<ul class="d-flex justify-content-center mb-5">
					<li class="filter-item product__tab--primary__btn__list filter-item"><a class="filter-cat-item active" href="<?php home_url(); ?>">All</a></li>

					<?php
					$cats_item = get_terms([
						'taxonomy' => 'product_cat',
					]);

					// $cats = get_categories($cats_item);

					foreach ($cats_item as $key => $cat) {
						// var_dump($key);
					?>
						<li class="product__tab--primary__btn__list filter-item">
							<a class="filter-cat-item" data-category="<?php echo $cat->term_id; ?>" href="<?php echo get_category_link($cat->term_id); ?>"><?php echo esc_html($cat->name); ?></a>
						</li>
					<?php
					}
					?>
				</ul>
			</div>
			<div class="products-container">
				<div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30 products-filter">
					<?php
					$cat_args = [
						'post_type' => 'product',
						'posts_per_page' => -1
					];
					$cat_post = new \WP_Query($cat_args);
					if ($cat_post->have_posts()) : while ($cat_post->have_posts()) : $cat_post->the_post();
					?>
							<div class="col">
								<h3 class="product__items--content__title h4"><a href="#"><?php the_title(); ?></a></h3>
							</div>
					<?php endwhile;
					endif;
					wp_reset_postdata(); ?>
				</div>
				<div class="if-not-product"></div>
			</div>

		</section>

<?php

	}
}

Plugin::instance()->widgets_manager->register(new Suruchi_Ajax_Product_Cat_Filter());
