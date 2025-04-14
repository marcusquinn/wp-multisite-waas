<?php
/**
 * Admin bar shortcuts menu
 *
 * Adds the shortcuts menu to the admin bar.
 *
 * @category   WP Multisite WaaS
 * @package    WP_Ultimo
 * @author     Gustavo Modesto <gustavo@wpultimo.com>
 * @since      2.0.0
 */

namespace WP_Ultimo\Admin_Pages;

use WP_Ultimo\Settings;

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * This class adds the top bar admin navigation menu
 *
 * @since 2.0.0
 */
class Top_Admin_Nav_Menu {

	/**
	 * Adds the hooks and actions
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function __construct() {

		add_action('admin_bar_menu', [$this, 'add_top_bar_menus'], 50);
	}

	/**
	 * Adds the WP Multisite WaaS top-bar shortcut menu
	 *
	 * @since 1.1.0
	 * @param \WP_Admin_Bar $wp_admin_bar The admin bar identifier.
	 * @return void
	 */
	public function add_top_bar_menus($wp_admin_bar): void {

		// Only for super admins
		if ( ! current_user_can('manage_network')) {
			return;
		}

		// Add Parent element
		$parent = [
			'id'    => 'wp-ultimo',
			'title' => __('Multisite Waas', 'wp-multisite-waas'),
			'href'  => current_user_can('wu_read_dashboard') ? network_admin_url('admin.php?page=wp-ultimo') : '#',
			'meta'  => [
				'class' => 'wp-ultimo-top-menu',
				'title' => __('Go to the dashboard', 'wp-multisite-waas'),
			],
		];

		// Site
		$sites = [
			'id'     => 'wp-ultimo-sites',
			'parent' => 'wp-ultimo',
			'title'  => __('Manage Sites', 'wp-multisite-waas'),
			'href'   => network_admin_url('admin.php?page=wp-ultimo-sites'),
			'meta'   => [
				'class' => 'wp-ultimo-top-menu',
				'title' => __('Go to the sites page', 'wp-multisite-waas'),
			],
		];

		// Memberships
		$memberships = [
			'id'     => 'wp-ultimo-memberships',
			'parent' => 'wp-ultimo',
			'title'  => __('Manage Memberships', 'wp-multisite-waas'),
			'href'   => network_admin_url('admin.php?page=wp-ultimo-memberships'),
			'meta'   => [
				'class' => 'wp-ultimo-top-menu',
				'title' => __('Go to the memberships page', 'wp-multisite-waas'),
			],
		];

		// Customers
		$customers = [
			'id'     => 'wp-ultimo-customers',
			'parent' => 'wp-ultimo',
			'title'  => __('Customers', 'wp-multisite-waas'),
			'href'   => network_admin_url('admin.php?page=wp-ultimo-customers'),
			'meta'   => [
				'class' => 'wp-ultimo-top-menu',
				'title' => __('Go to the customers page', 'wp-multisite-waas'),
			],
		];

		// Products
		$products = [
			'id'     => 'wp-ultimo-products',
			'parent' => 'wp-ultimo',
			'title'  => __('Products', 'wp-multisite-waas'),
			'href'   => network_admin_url('admin.php?page=wp-ultimo-products'),
			'meta'   => [
				'class' => 'wp-ultimo-top-menu',
				'title' => __('Go to the products page', 'wp-multisite-waas'),
			],
		];

		// Payments
		$payments = [
			'id'     => 'wp-ultimo-payments',
			'parent' => 'wp-ultimo',
			'title'  => __('Payments', 'wp-multisite-waas'),
			'href'   => network_admin_url('admin.php?page=wp-ultimo-payments'),
			'meta'   => [
				'class' => 'wp-ultimo-top-menu',
				'title' => __('Go to the payments page', 'wp-multisite-waas'),
			],
		];

		// Discount Codes
		$discount_codes = [
			'id'     => 'wp-ultimo-discount-codes',
			'parent' => 'wp-ultimo',
			'title'  => __('Discount Codes', 'wp-multisite-waas'),
			'href'   => network_admin_url('admin.php?page=wp-ultimo-discount-codes'),
			'meta'   => [
				'class' => 'wp-ultimo-top-menu',
				'title' => __('Go to the discount codes page', 'wp-multisite-waas'),
			],
		];

		$container = [
			'id'     => 'wp-ultimo-settings-group',
			'parent' => 'wp-ultimo',
			'group'  => true,
			'title'  => __('Settings Container', 'wp-multisite-waas'),
			'href'   => '#',
			'meta'   => [
				'class' => 'wp-ultimo-top-menu ab-sub-secondary',
				'title' => __('Go to the settings page', 'wp-multisite-waas'),
			],
		];

		// Settings
		$settings = [
			'id'     => 'wp-ultimo-settings',
			'parent' => 'wp-ultimo-settings-group',
			'title'  => __('Settings', 'wp-multisite-waas'),
			'href'   => network_admin_url('admin.php?page=wp-ultimo-settings'),
			'meta'   => [
				'class' => 'wp-ultimo-top-menu ab-sub-secondary',
				'title' => __('Go to the settings page', 'wp-multisite-waas'),
			],
		];

		/**
		 * Add items to the top bar.
		 */
		$wp_admin_bar->add_node($parent);

		if (current_user_can('wu_read_sites')) {
			$wp_admin_bar->add_node($sites);
		}

		if (current_user_can('wu_read_memberships')) {
			$wp_admin_bar->add_node($memberships);
		}

		if (current_user_can('wu_read_customers')) {
			$wp_admin_bar->add_node($customers);
		}

		if (current_user_can('wu_read_products')) {
			$wp_admin_bar->add_node($products);
		}

		if (current_user_can('wu_read_payments')) {
			$wp_admin_bar->add_node($payments);
		}

		if (current_user_can('wu_read_discount_codes')) {
			$wp_admin_bar->add_node($discount_codes);
		}

		if (current_user_can('wu_read_settings')) {
			$wp_admin_bar->add_node($container);
			$wp_admin_bar->add_node($settings);
		}

		/*
		 * Add the sub-menus.
		 */
		$settings_tabs = Settings::get_instance()->get_sections();

		$has_addons = false;

		foreach ($settings_tabs as $tab => $tab_info) {
			if (wu_get_isset($tab_info, 'invisible')) {
				continue;
			}

			$parent = 'wp-ultimo-settings';

			if (wu_get_isset($tab_info, 'addon', false)) {
				$parent = 'wp-ultimo-settings-addons';
			}

			$settings_tab = [
				'id'     => 'wp-ultimo-settings-' . $tab,
				'parent' => $parent,
				'title'  => $tab_info['title'],
				'href'   => network_admin_url('admin.php?page=wp-ultimo-settings&tab=') . $tab,
				'meta'   => [
					'class' => 'wp-ultimo-top-menu',
					'title' => __('Go to the settings page', 'wp-multisite-waas'),
				],
			];

			$wp_admin_bar->add_node($settings_tab);
		}
	}
}
