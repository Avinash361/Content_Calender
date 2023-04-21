<?php

/**
 * Fired during plugin activation
 *
 * @link       https://https://avinash.wisdmlabs.net/
 * @since      1.0.0
 *
 * @package    Content_calender
 * @subpackage Content_calender/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Content_calender
 * @subpackage Content_calender/includes
 * @author     Avinash Jha <avinash.jha@wisdmlabs.com>
 */
class Content_calender_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		global $wpdb;
			$table_name = $wpdb->prefix . 'calender';
			$charset_collate = $wpdb->get_charset_collate();
		
			$sql = "CREATE TABLE IF NOT EXISTS $table_name (
			  id mediumint(10) AUTO_INCREMENT,
			  date date NOT NULL,
			  occasion varchar(100) NOT NULL,
			  post_title varchar(100) NOT NULL,
			  author int(20) NOT NULL,
			  reviewer varchar(100) NOT NULL,
			  PRIMARY KEY  (id)
			) $charset_collate;";
		
			require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
			dbDelta($sql);
	}

}
