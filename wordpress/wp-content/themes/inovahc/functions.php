<?php
/*update_option( 'siteurl', 'http://blankthemaster.com.br' );
update_option( 'home', 'http://blankthemaster.com.br' );*/

//FILESIZES
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

//CHANGE ACF CAPABILITY
/* function my_acf_capability( $string ) {
    return 'manage_options_acf';
}
add_filter('acf/settings/capability', 'my_acf_capability'); */

//BLOGINFO
function tu(){
	bloginfo('template_url');
}
function url(){
	bloginfo('url');
}

//MENUS
/* register_nav_menu( 'principal', 'Menu Principal' );
register_nav_menu( 'ms', 'Mídias Sociais' ); */

//THUMBNAILS
/* add_theme_support('post-thumbnails');
add_image_size('capa', 1600, 700, true);
add_image_size('capa-mobile', 900, 1200, true); */

//REGISTRANDO POST TYPE
include_once(get_stylesheet_directory() . '/functions/custom-post-type.php');

//REGISTRANDO TAXONOMY
//include_once(get_stylesheet_directory() . '/functions/custom-taxonomy.php');

//REMOVE MENUS
//include_once(get_stylesheet_directory() . '/functions/remove-menus.php');

//REMOVE GUTEMBERG
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_page', '__return_false', 10);

//PAGINATION
/* function pagination($prev='&laquo;',$next='&raquo;'){
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	$pagination = array(
		'base' => @add_query_arg('paged','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'prev_text' => __($prev),
		'next_text' => __($next),
		'type' => 'plain'
	);
	if($wp_rewrite->using_permalinks()){
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	}
	if(!empty($wp_query->query_vars['s'])){
		$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
	}
	echo paginate_links( $pagination );
}; */