<?php
/**
 * Custom Functions
 *
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
// Register Custom Post Type
function Empleados() {

	$labels = array(
		'name'                  => _x( 'Empleados', 'Post Type General Name', 'employee' ),
		'singular_name'         => _x( 'Empleado', 'Post Type Singular Name', 'employee' ),
		'menu_name'             => __( 'Empleados', 'employee' ),
		'name_admin_bar'        => __( 'Empleados', 'employee' ),
		'archives'              => __( 'Archivo', 'employee' ),
		'attributes'            => __( 'Atributos', 'employee' ),
		'parent_item_colon'     => __( 'Item superior', 'employee' ),
		'all_items'             => __( 'Todos los items', 'employee' ),
		'add_new_item'          => __( 'Agregar nuevo item', 'employee' ),
		'add_new'               => __( 'Agregar nuevo', 'employee' ),
		'new_item'              => __( 'Nuevo item', 'employee' ),
		'edit_item'             => __( 'Editar item', 'employee' ),
		'update_item'           => __( 'Actualizar item', 'employee' ),
		'view_item'             => __( 'Ver item', 'employee' ),
		'view_items'            => __( 'Ver items', 'employee' ),
		'search_items'          => __( 'Buscar item', 'employee' ),
		'not_found'             => __( 'No encontrado', 'employee' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'employee' ),
		'featured_image'        => __( 'Imagen destacada', 'employee' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'employee' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'employee' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'employee' ),
		'insert_into_item'      => __( 'Insertar en item', 'employee' ),
		'uploaded_to_this_item' => __( 'Subir al item', 'employee' ),
		'items_list'            => __( 'Lista de items', 'employee' ),
		'items_list_navigation' => __( 'Lista de navegacion de items', 'employee' ),
		'filter_items_list'     => __( 'Filtrar lista de items', 'employee' ),
	);
	$args = array(
		'label'                 => __( 'Empleado', 'employee' ),
		'description'           => __( 'Empleados', 'employee' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessperson',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'employee', $args );

}
add_action( 'init', 'Empleados', 1 );


// Register Custom Post Type
function Servicios() {

	$labels = array(
		'name'                  => _x( 'Servicios', 'Post Type General Name', 'servicios' ),
		'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'servicios' ),
		'menu_name'             => __( 'Servicios', 'servicios' ),
		'name_admin_bar'        => __( 'Servicios', 'servicios' ),
		'archives'              => __( 'Archivo', 'servicios' ),
		'attributes'            => __( 'Atributos', 'servicios' ),
		'parent_item_colon'     => __( 'Item superior', 'servicios' ),
		'all_items'             => __( 'Todos los servicios', 'servicios' ),
		'add_new_item'          => __( 'Agregar nuevo', 'servicios' ),
		'add_new'               => __( 'Agregar nuevo', 'servicios' ),
		'new_item'              => __( 'Nuevo servicio', 'servicios' ),
		'edit_item'             => __( 'Editar', 'servicios' ),
		'update_item'           => __( 'Actualizar', 'servicios' ),
		'view_item'             => __( 'Ver servicio', 'servicios' ),
		'view_items'            => __( 'Ver servicios', 'servicios' ),
		'search_items'          => __( 'Buscar servicio', 'servicios' ),
		'not_found'             => __( 'No encontrado', 'servicios' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'servicios' ),
		'featured_image'        => __( 'Imagen destacada', 'servicios' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'servicios' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'servicios' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'servicios' ),
		'insert_into_item'      => __( 'Insertar en servicio', 'servicios' ),
		'uploaded_to_this_item' => __( 'Actualizar el servicio', 'servicios' ),
		'items_list'            => __( 'Lista de servicios', 'servicios' ),
		'items_list_navigation' => __( 'Lista navegable', 'servicios' ),
		'filter_items_list'     => __( 'Filtro de servicios', 'servicios' ),
	);
	$args = array(
		'label'                 => __( 'Servicio', 'servicios' ),
		'description'           => __( 'Servicios', 'servicios' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-lightbulb',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'servicios', $args );

}
add_action( 'init', 'Servicios', 0 );
