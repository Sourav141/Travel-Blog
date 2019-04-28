<?php

namespace Elementor;
class Firstwidget extends Widget_Base{
    public function get_name(){

		return "first-widget";
	}
	public function get_title(){
		return "Follow Us";
	}
	public function get_icon() {

		return "fa fa-twitter";
  }
		
	public function get_categories() {

		return ['basic'];
	}


	//Control Section

	protected function _register_controls() {

		$this->start_controls_section(
			'my_section',
			[
				'label' => __( 'Settings', 'travelblog' ),
				'tab' =>Controls_Manager::TAB_CONTENT,
			]
		);

		// Add Control

		$this->add_control(
			'control_text',
			[
				'label' => __( 'Text Here', 'travelblog' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your text', 'travelblog' ),
			]
		);

		$this->add_control(
			'Text_align',
			[
				'label' => __( 'Alignment', 'travelblog' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'travelblog' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'travelblog' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'travelblog' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
			]
		);

		$this->add_control(
			'Slider',
			[
				'label' => __( 'Slider', 'travelblog' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 200,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_section',
			[
				'label' =>__('Style', 'travelblog'),
				'tab' =>Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'travelblog' ),
				'type' =>Controls_Manager::MEDIA,
				'default' => [
					'url' =>Utils::get_placeholder_image_src(),
				]
			]
		);

		$this->end_controls_section();


	}


	//Render widget 

	protected function render() {
		$showvar= $this->get_settings_for_display();
		?>
		<h3> <?php echo $showvar['control_text']; ?> </h3>
		<?php
	}

	protected function _content_template() {
		?>
		<h3>{{{ settings.control_text }}}</h3>
		<?php
	}

}

Plugin::instance()->widgets_manager->register_widget_type( new Firstwidget );