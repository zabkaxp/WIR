<?php

function website_files(){
    
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts.js'), NULL, microtime(), true);
    wp_enqueue_style('main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'website_files');

add_filter('script_loader_tag', 'add_id_to_script', 10, 3 );
 
function add_id_to_script( $tag, $handle, $src ) {
    if ('main-js' === $handle ) {
        $tag = '<script type="module" src="' . esc_url( $src ) . '" id="scriptsjs" data-app-key="MY_APP_KEY"></script>';
    }
 
    return $tag;
}



function website_features(){
 add_theme_support('title-tag');
 register_nav_menu('header-menu-external', 'Header Menu External');
 register_nav_menu('header-menu-categories', 'Header Menu Categories');
 add_theme_support('post-thumbnails');
 add_image_size('front-page-thumbnail', 400, 250, true);
 add_image_size('ludzie-small-thumbnail', 312, 300, true);
 add_image_size('ludzie-big-thumbnail', 518, 410, true);
}
add_action('after_setup_theme', 'website_features');

//DETERMINE THE MOST POPULAR BLOG POSTS

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//ADDING THE TRACKER IN THE HEADER

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

//Display thepost view count

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');

function ignoreCertainFiles($exclude_filters){
    $exclude_filters[]= 'themes/1polska/node_modules';
    return $exclude_filters;
}




/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );
?>