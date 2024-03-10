<?php /*
add_action( 'init', 'create_taxonomy_category' );
function create_taxonomy_category() {
	$custom[] = array('slug' => 'setores', 'name' => 'Setor', 'plural' => 'Setores', 'post-type' => array('receitas'));
	foreach($custom as $item){
		$labels = array(
			'name' => $item['plural'],
			'singular_name' => $item['name'],
			'menu_name' => $item['plural'],
			'all_items' => 'Todos os '.$item['plural'],
			'edit_item' => 'Editar '.$item['name'],
			'view_item' => 'Ver '.$item['name'],
			'update_item' => 'Atualizar '.$item['name'],
			'add_new_item' => 'Adicionar '.$item['name'],
			'new_item_name' => 'Novo nome de '.$item['name'],
			'parent_item' => $item['name'].' superior',
			'search_items' => 'Pesquisar '.$item['plural'],
		);
		register_taxonomy( $item['slug'], $item['post-type'], array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_in_tag_cloud' => false,
			'query_var' => true,
			'public' => true,
			'rewrite' => true,
			)
		);
		foreach($item['post-type'] as $postType){
			register_taxonomy_for_object_type( $item['slug'], $postType );
		}
	}
}