<?php
/**
 * Influence Blog queries functions
 *
 * @package Influence_Blog
 */



/**
 * Banner Posts Query
 */
if( !function_exists( 'influence_blog_banner_posts_query' ) ) {
    
    function influence_blog_banner_posts_query() {
        
        $banner_category = ifb_mod( 'banner_category', '' );
        
        $banner_posts_no = ifb_mod( 'banner_post_number', 4 );
        
        $banner_args = array(
          'post_type'      => 'post',  
        );
        
        if( !empty( $banner_category ) ) {
            $banner_args['category_name'] = $banner_category;
        }
        
        if( !empty( $banner_posts_no ) ) {
            $banner_args['posts_per_page'] = absint( $banner_posts_no );
        }
        
        $banner_query = new WP_Query( $banner_args );
        
        return $banner_query;
    }         
}
