<?php

//FILESIZES
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

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
register_nav_menu( 'rodape', 'Menu Rodapé' );
register_nav_menu( 'ms', 'Mídias Sociais' );

//REGISTRANDO POST TYPE
include_once(get_stylesheet_directory() . '/functions/custom-post-type.php');

//REGISTRANDO TAXONOMY
include_once(get_stylesheet_directory() . '/functions/custom-taxonomy.php');

//REMOVE GUTEMBERG
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_page', '__return_false', 10);

//PAGINATION
function pagination($prev='&laquo;',$next='&raquo;'){
    global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    
    $pagination_links = paginate_links( array(
        'prev_text' => '<button class="btn-icon" '.( $current == 1 ? 'disabled' : 'active' ).'>'.svg('icon-anterior',7,12,"fill-white", true).'</button>',
        'next_text' => '<button class="btn-icon" '.( $current < $wp_query->max_num_pages ? 'active' : 'disabled' ).'>'.svg('icon-proximo',7,12,"fill-white", true).'</button>',
        'type' => 'array'
    ) );

    echo '<div class="text-inovahc-green-500">';
    pll_e('Página');
    echo ' <span class="text-inovahc-green-800">'.$current.'</span> ';
    pll_e('de');
    echo ' <span class="text-inovahc-green-800">'.$wp_query->max_num_pages.'</span></div>';

    echo '<div class="flex gap-2">';
        echo $current == 1 ? '<button class="btn-icon" disabled>'.svg('icon-anterior',7,12,"fill-white", true).'</button>' : $pagination_links[0];
        echo ($current < $wp_query->max_num_pages) ? end($pagination_links) : '<button class="btn-icon" disabled>'.svg('icon-proximo',7,12,"fill-white", true).'</button>';
    echo '<div>';
};

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

//FORMAT FILE SIZE STRING
function format_file_size($size){
    $int = 0;
    while($size > 1024){
        $size /= 1024;
        $int++;
    }
    $term = 'B';
    switch($int){
        case 1:
            $term = 'KB';
            break;
        case 2:
            $term = 'MB';
            break;
        case 3:
            $term = 'GB';
            break;
        default:
            $term = 'B';
            break;
    }
    return $int.$term;
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
        pll_register_string( 'botao_voltar', 'voltar', 'Botão' );
        pll_register_string( 'botao_carregar', 'carregar mais', 'Botão' );
        pll_register_string( 'botao_anterior', 'anterior', 'Botão' );
        pll_register_string( 'botao_proximo', 'próximo', 'Botão' );
        pll_register_string( 'botao_mais', 'leia mais', 'Botão' );
        pll_register_string( 'botao_aplicar_pesquisar', 'aplicar e pesquisar', 'Botão' );
        pll_register_string( 'newsletter_obrigado', 'Obrigado!', 'Newsletter' );
        pll_register_string( 'pesquisa_limpar', 'limpar', 'Pesquisa' );
        pll_register_string( 'pesquisa_conteudos', 'Conteúdos', 'Pesquisa' );
        pll_register_string( 'pesquisa_eventos', 'Eventos', 'Pesquisa' );
        pll_register_string( 'pesquisa_portfolio', 'Projetos', 'Pesquisa' );
        pll_register_string( 'pesquisa_resultados', 'Resultados encontrados:', 'Pesquisa' );
        pll_register_string( 'pesquisa_encontrados', 'resultados encontrados', 'Pesquisa' );
        pll_register_string( 'pesquisa_nenhum', 'Nenhum resultado encontrado.', 'Pesquisa' );
        pll_register_string( 'pesquisa_nova', 'Faça uma nova pesquisa.', 'Pesquisa' );
        pll_register_string( 'pesquisa_placeholder', 'busca por palavras-chave', 'Pesquisa' );
        pll_register_string( 'termos_conteudos', 'Conteúdo', 'Termos' );
        pll_register_string( 'termos_eventos', 'Evento', 'Termos' );
        pll_register_string( 'termos_portfolio', 'Projeto', 'Termos' );
        pll_register_string( 'termos_compartilhe', 'Compartilhe este conteúdo:', 'Termos' );
        pll_register_string( 'termos_relacionados', 'Temas relacionados', 'Termos' );
        pll_register_string( 'feed_post', 'Feed de Conteúdos', 'Feed' );
        pll_register_string( 'feed_eventos', 'Feed de Eventos', 'Feed' );
        pll_register_string( 'feed_projetos', 'Feed de Projetos', 'Feed' );
        pll_register_string( 'texto_post', 'Aqui você encontra tudo o que temos de Conteúdos', 'Feed' );
        pll_register_string( 'texto_eventos', 'Aqui você encontra tudo o que temos de Eventos', 'Feed' );
        pll_register_string( 'texto_projetos', 'Aqui você encontra tudo o que temos de Projetos', 'Feed' );
        pll_register_string( 'filtro_tematica', 'filtrar por temática', 'Filtro' );
        pll_register_string( 'filtro_tecnologia', 'filtrar por tecnologia', 'Filtro' );
        pll_register_string( 'filtro_instituicao', 'filtrar por instituição', 'Filtro' );
        pll_register_string( 'filtro_fechar', 'fechar', 'Filtro' );
        pll_register_string( 'info_contato_tel', '+55 (11) XXXX XXXX', 'Contato' );
        pll_register_string( 'info_contato_email', 'email@hc.fm.usp.br', 'Contato' );
        pll_register_string( 'info_contato_endereco', 'Prédio do CEAC, 4º e 5º andares,<br /> Complexo do HCFMUSP <br />Cerqueira César, São Paulo - SP<br /> CEP. 05401-000', 'Contato' );
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

//ADD ARCHIVE SEARCH
function archive_search_template( $template ){
    global $wp_query;
    $post_type = get_query_var('post_type');
    if( $wp_query->is_search && ($post_type == 'post' || $post_type == 'projetos' || $post_type == 'eventos') ){
        return locate_template('index.php');
    }   
    return $template;   
}
add_filter( 'template_include', 'archive_search_template' );