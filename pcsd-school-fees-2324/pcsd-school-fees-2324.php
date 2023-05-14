<?php
defined('ABSPATH') or die('No script kiddies please!');
/*
* Plugin Name: PCSD School Fees 2023-2024
* Plugin URI: https://employee.provo.edu/technology
* Description: adds post type and categories for tracking school fees for the 23-24 school year.
* Author: Josh Espinoza
* Version: 1.0
* License: GPLv2
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function school_fees_2324_init()
{
/*===========================================================================================
English ->	Post Type: School Fees 23-24
===========================================================================================*/
	$pcsd_custom_post_type_icon = plugin_dir_url( __FILE__ ) . '/pcsd-icon-16x16.png';
	$school_fees_2324_labels = [
		"name" => __("School Fees 2023-2024", "custom-post-type-ui"),
		"singular_name" => __("School Fee 2023-2024", "custom-post-type-ui"),
	];

	$school_fees_2324_args = [
		"label" => __("School Fees 2023-2024", "custom-post-type-ui"),
		"labels" => $school_fees_2324_labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "school_fees_23-24", "with_front" => true],
		"query_var" => true,
		"menu_icon" => $pcsd_custom_post_type_icon,
		"supports" => ["title", "thumbnail"],
		"taxonomies" => ["school_fees_categories_2324"],
	];

	register_post_type("school_fees_23-24", $school_fees_2324_args);



/*===========================================================================================
English ->	Taxonomy: School Fees Categories 23-24
===========================================================================================*/

	$school_fees_categories_2324_labels = [
		"name" => __("School Fees Categories 23-24", "custom-post-type-ui"),
		"singular_name" => __("School Fee Category 23-24", "custom-post-type-ui"),
	];

	$school_fees_categories_2324_args = [
		"label" => __("School Fees Categories 23-24", "custom-post-type-ui"),
		"labels" => $school_fees_categories_2324_labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => ['slug' => 'school_fees_categories_2324', 'with_front' => true,],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "school_fees_categories_2324",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
	];
	register_taxonomy("school_fees_categories_2324", ["school_fees_23-24"], $school_fees_categories_2324_args);




















/*===========================================================================================
Spanish ->	Post Type: School Fees 2023-2024 (Spanish) Pagos escolares
===========================================================================================*/
	$cuotas_escolares_2324_labels = [
		"name" => __("Pagos escolares 2023-2024", "custom-post-type-ui"),
		"singular_name" => __("Cuotas escolares 2023-2024", "custom-post-type-ui"),
	];

	$cuotas_escolares_2324_args = [
		"label" => __("Pagos escolares 23-24", "custom-post-type-ui"),
		"labels" => $cuotas_escolares_2324_labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "pagos_escolares_2324", "with_front" => true],
		"query_var" => true,
		"menu_icon" => $pcsd_custom_post_type_icon,
		"supports" => ["title", "thumbnail"],
		"taxonomies" => ["school_fees_cate_spanish_2324"],
	];

	register_post_type("pagos_escolares_2324", $cuotas_escolares_2324_args);


/*===========================================================================================
Spanish ->	Taxonomy: School Fees Categories Spanish 21-22.
===========================================================================================*/

	$school_fees_categories_spanish_2324_labels = [
		"name" => __("School Fees Categories Spanish 23-24", "custom-post-type-ui"),
		"singular_name" => __("School Fee Category Spanish 23-24", "custom-post-type-ui"),
	];

	$school_fees_categories_spanish_2324_args = [
		"label" => __("School Fees Categories Spanish 23-24", "custom-post-type-ui"),
		"labels" => $school_fees_categories_spanish_2324_labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => ['slug' => 'school_fees_cate_spanish_2324', 'with_front' => true,],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "school_fees_categories_spanish_2122",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
	];
	register_taxonomy("school_fees_cate_spanish_2324", ["pagos_escolares_2324"], $school_fees_categories_spanish_2324_args);
}
add_action('init', 'school_fees_2324_init');
