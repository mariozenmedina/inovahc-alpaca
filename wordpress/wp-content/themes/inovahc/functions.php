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
	//bloginfo('url');
    echo pll_home_url();
}

//MENUS
register_nav_menu( 'principal', 'Menu Principal' );
register_nav_menu( 'ms', 'Mídias Sociais' );

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

//SVGS
function svg($icon,$w,$h,$class,$return = false){
    if($icon != ""){ 
        $html = '<svg '.( $w ? 'width="'.$w.'"' : '' ).( $h ? 'height="'.$h.'"' : '' ).( $class ? 'class="'.$class.'"' : '' ).' ><use  xlink:href="#'.$icon.'" /></svg>';
        if($return){
            return $html;
        }
        echo $html;
    }
}

//CLEAN NAME
function cleanName($s){
    $s = strtr(utf8_decode($s), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿšÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝŠ'), 'aaaaaceeeeiiiinooooouuuuyysAAAAACEEEEIIIINOOOOOUUUUYS');
    $s = str_replace("'", '_', $s);
    $s = preg_replace("/[^A-Za-z \_\-]/", "", strtolower($s));
    $s = preg_replace("/\s+/", "_", $s);
    $s = preg_replace("/-+/", "-", $s);
    return $s;
}

//MENU MS SVGS
function menu_ms_svg_icons($menu_objects, $args){
    if($args->theme_location == 'ms'){
        foreach($menu_objects as $k => $item){
            $menu_objects[$k]->title = svg($item->classes[0],20,20,"",true);
        }
    }
    return $menu_objects;
}
add_filter('wp_nav_menu_objects', 'menu_ms_svg_icons', 10, 2);

//ADD TRANSLATIONS
function add_string_translations() {
    if ( function_exists( 'pll_register_string' ) ) {
        pll_register_string( 'rodape_mapa', 'Mapa', 'Rodapé' );
        pll_register_string( 'rodape_acompanhe', 'Acompanhe as redes sociais', 'Rodapé' );
        pll_register_string( 'rodape_voltar', 'voltar ao topo', 'Rodapé' );
        pll_register_string( 'rodape_assine', 'Assine a news', 'Rodapé' );
        pll_register_string( 'botao_carregar', 'carregar mais', 'Botão' );
        pll_register_string( 'newsletter_obrigado', 'Obrigado!', 'Newsletter' );
        pll_register_string( 'pesquisa_voltar', 'voltar', 'Pesquisa' );
        pll_register_string( 'pesquisa_limpar', 'limpar', 'Pesquisa' );
        pll_register_string( 'pesquisa_conteudos', 'Conteúdos', 'Pesquisa' );
        pll_register_string( 'pesquisa_eventos', 'Eventos', 'Pesquisa' );
        pll_register_string( 'pesquisa_portfolio', 'Portfólio', 'Pesquisa' );
        pll_register_string( 'pesquisa_resultados', 'Resultados encontrados:', 'Pesquisa' );
        pll_register_string( 'pesquisa_encontrados', 'resultados encontrados', 'Pesquisa' );
        pll_register_string( 'pesquisa_nenhum', 'Nenhum resultado encontrado.', 'Pesquisa' );
        pll_register_string( 'pesquisa_nova', 'Faça uma nova pesquisa.', 'Pesquisa' );
        pll_register_string( 'pesquisa_placeholder', 'busca por palavras-chave', 'Pesquisa' );
    }
}
add_action( 'after_setup_theme', 'add_string_translations' );

//REMOVE COMMENTS
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments, trackbacks and editor in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
            remove_post_type_support($post_type, 'editor');
        }
    }
});