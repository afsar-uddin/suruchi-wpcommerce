<?php

namespace Elementor;

if (!defined('ABSPATH')) {
	exit;
} // Exit if accessed directly

class Suruchi_Ajax_Products_Filter extends Widget_Base
{

	public function get_name()
	{
		return 'ic-ajax-category';
	}

	public function get_title()
	{
		return __('Ajax Products', 'suruchi');
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
				<ul>
					<?php
					$cats = get_terms([]);
					?>
				</ul>
			</div>

		</section>

<?php

	}
}

Plugin::instance()->widgets_manager->register(new Suruchi_Ajax_Products_Filter());
