<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://https://avinash.wisdmlabs.net/
 * @since      1.0.0
 *
 * @package    Content_calender
 * @subpackage Content_calender/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Content_calender
 * @subpackage Content_calender/admin
 * @author     Avinash Jha <avinash.jha@wisdmlabs.com>
 */
class Content_calender_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Content_calender_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Content_calender_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/content_calender-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Content_calender_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Content_calender_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/content_calender-admin.js', array( 'jquery' ), $this->version, false );

	}

	// Add Custom Menu Pages

	function add_menu_pages(){
		add_menu_page(
			'Content Calendar',
			'Content Calendar',
			'manage_options',
			'content-calendar',
			array($this, 'content_calendar_callback'),
			'dashicons-calendar-alt',
			80
		);
	}
	function content_calendar_callback(){
		?>
			<h1><?php esc_html_e(get_admin_page_title()); ?></h1>
		<?php
		$this->schedule_content_callback();
	}
	function schedule_content_callback(){
		include('partials/content_calender-admin-display.php');

	}
	function view_schedule_callback(){
		include('partials/content_calender-admin-display.php');

	}


}
