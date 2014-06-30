<?php
// Register Custom Post Type
function sis_carousel_custom_post_type() {

	$labels = array(
		'name'                => _x( 'Carousels', 'Post Type General Name', 'carousel' ),
		'singular_name'       => _x( 'Carousel', 'Post Type Singular Name', 'carousel' ),
		'menu_name'           => __( 'Carousels', 'carousel' ),
		'parent_item_colon'   => __( 'Parent Carousel:', 'carousel' ),
		'all_items'           => __( 'All Carousels', 'carousel' ),
		'view_item'           => __( 'View Carousel', 'carousel' ),
		'add_new_item'        => __( 'Add New Carousel', 'carousel' ),
		'add_new'             => __( 'Add New', 'carousel' ),
		'edit_item'           => __( 'Edit Carousel', 'carousel' ),
		'update_item'         => __( 'Update Carousel', 'carousel' ),
		'search_items'        => __( 'Search Carousel', 'carousel' ),
		'not_found'           => __( 'Not found', 'carousel' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'carousel' ),
	);
	$rewrite = array(
		'slug'                => 'carousel',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'carousel', 'carousel' ),
		'description'         => __( 'Post Type Description', 'carousel' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-slides',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'carousel', $args );

}

// Hook into the 'init' action
add_action( 'init', 'sis_carousel_custom_post_type', 0 );

/* Move featured image box under title */
function sis_carousel_img_box()
{
    remove_meta_box( 'postimagediv', 'carousel', 'side' );
    add_meta_box('postimagediv', __('Upload Carousel Image'), 'post_thumbnail_meta_box', 'carousel', 'normal', 'high');
}
add_action('do_meta_boxes', 'sis_carousel_img_box');

/*Shortcode for carousel by custom button*/
function sis_get_carousel(){
    $siscarousel= '<div id="owl-carousel" class="owl-carousel">';
    $carousel_query= "post_type=carousel&posts_per_page=-1";
    query_posts($carousel_query);
    if (have_posts()) : while (have_posts()) : the_post(); 
        $img= get_the_post_thumbnail( $post->ID, 'large' ); 
        $siscarousel.='<div class="carousel_img">'.$img.'</div>';       
    endwhile; endif; wp_reset_query();
    $siscarousel.= '</div>';
    return $siscarousel;
}

/**add the shortcode for the slider- for use in editor**/
function sis_insert_carousel($atts, $content=null){
    $siscarousel= sis_get_carousel();
    return $siscarousel;
}
add_shortcode('all-carousels', 'sis_insert_carousel');

/**add template tag- for use in themes**/
function sis_carousel_for_theme(){
    print sis_get_carousel();
}