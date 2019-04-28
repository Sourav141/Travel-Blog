<?php

function travelblog(){
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
    wp_enqueue_style('raleway', "https://fonts.googleapis.com/css?family=Raleway:900");
    wp_enqueue_style('baskersville', "https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700");
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), '3.3.7', true );
    
}

add_action('wp_enqueue_scripts', 'travelblog' );


register_nav_menus(array(
    'main_menu' => __('Main Menu', 'thetravelblog'),
    'social_menu' => __('Social Menu', 'thetravelblog')
));

add_theme_support('post-thumbnails' );

add_image_size('entry', 750, 490, true);

function travelblog_widgets(){
    register_sidebar(array(
        'name'  =>__('Footer Widget'),
        'id'    =>('footer_widget'),
        'description' => 'Widgets for the footer',
        'before_widget' => '<div id="%1$s" class="widget col-sm-6 %2$s">',
        'after_widget'  => '</div>',
        'before_titile' => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'  =>__('Sidebar Widget'),
        'id'    =>('sidebar_widget'),
        'description' => 'Widgets for the sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_titile' => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));
}
add_action('widgets_init', 'travelblog_widgets' );



// INITIALIZE ELEMENTOR WIDGET

class ElementorCustomElement
{

	private static $instance = null;

	public static function get_instance()
	{
		if (!self::$instance)
			self::$instance = new self;
		return self::$instance;
	}

	public function init()
	{
		add_action('elementor/widgets/widgets_registered', array($this, 'widgets_registered'));
	}

	public function widgets_registered()
	{
 
      // We check if the Elementor plugin has been installed / activated.
		if (defined('ELEMENTOR_PATH') && class_exists('Elementor\Widget_Base')) {
 
         // We look for any theme overrides for this custom Elementor element.
         // If no theme overrides are found we use the default one in this plugin.

			$widget_file = get_template_directory() . '/lib/custom-widget.php';
			$template_file = locate_template($widget_file);
			if (!$template_file || !is_readable($template_file)) {
				$template_file = get_template_directory() . '/lib/custom-widget.php';
			}
			if ($template_file && is_readable($template_file)) {
				require_once $template_file;
			}
		}
	}
}

ElementorCustomElement::get_instance()->init();

