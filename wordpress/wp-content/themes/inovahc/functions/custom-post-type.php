<?php
/*Custom Posts Types*/
add_action( 'init', 'register_custom_post_types' );
function register_custom_post_types() {
	$custom[] = array('slug' => 'capas', 'x' => 'a', 'name' => 'Capa', 'plural' => 'Capas', 'icon' => 'dashicons-images-alt2');
	foreach($custom as $item){
		$labels = array(
			'name' => _x($item['plural'], 'post type general name'),
			'singular_name' => _x($item['name'], 'post type singular name'),
			'add_new' => _x('Adicionar Nov'.$item['x'], $item['slug']),
			'add_new_item' => __('Adicionar '.$item['name']),
			'edit_item' => __('Editar '.$item['name']),
			'new_item' => __('Nov'.$item['x'].' '.$item['name']),
			'all_items' => __('Tod'.$item['x'].'s '.$item['x'].'s '.$item['plural']),
			'view_item' => __('Visualizar '.$item['name']),
			'search_items' => __('Pesquisar '.$item['plural']),
			'not_found' =>  __('Não Há '.$item['name'].' Encontrada'),
			'not_found_in_trash' => __('Não Há '.$item['name'].' na Lixeira'),
			'parent_item_colon' => '',
			'menu_name' => $item['plural']
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => 5,
			'menu_icon' => $item['icon'],
			'supports' => array('title', 'editor', 'author', 'excerpt', 'custom-fields', 'thumbnail'),
			'exclude_from_search' => false
		  );
		register_post_type($item['slug'], $args);
	}
}
