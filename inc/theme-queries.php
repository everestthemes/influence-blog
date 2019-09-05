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



/**
 * Homepage Grid Layout Posts Query
 */
if( !function_exists( 'influence_blog_homepage_grid_layout_posts_query' ) ) {
    
    function influence_blog_homepage_grid_layout_posts_query() {
        
        $homepage_grid_category = ifb_mod( 'banner_category', '' );
        
        $homepage_grid_post_type = ifb_mod( 'banner_category', 'recent_posts' );
        
        $homepage_grid_posts_no = ifb_mod( 'banner_post_number', 4 );
        
        $homepage_grid_args = array(
          'post_type'      => 'post',  
        );
        
        if( !empty( $homepage_grid_category ) ) {
            $homepage_grid_args['category_name'] = $homepage_grid_category;
        }
        
        if( $homepage_grid_post_type == 'popular_post' ) {

            $homepage_grid_args['orderby'] = 'comment_count';
        }
        
        if( !empty( $homepage_grid_posts_no ) ) {
            $homepage_grid_args['posts_per_page'] = absint( $homepage_grid_posts_no );
        }
        
        $homepage_grid_query = new WP_Query( $homepage_grid_args );
        
        return $homepage_grid_query;
    }         
}



/**
 * Homepage Block Layout Posts Query
 */
if( !function_exists( 'influence_blog_homepage_block_layout_posts_query' ) ) {
    
    function influence_blog_homepage_block_layout_posts_query() {
        
        $homepage_block_category = ifb_mod( 'banner_category', '' );
        
        $homepage_block_post_type = ifb_mod( 'banner_category', 'recent_posts' );
        
        $homepage_block_posts_no = ifb_mod( 'banner_post_number', 4 );
        
        $homepage_block_args = array(
          'post_type'      => 'post',  
        );
        
        if( !empty( $homepage_block_category ) ) {
            $homepage_block_args['category_name'] = $homepage_block_category;
        }
        
        if( $homepage_block_post_type == 'popular_post' ) {

            $homepage_block_args['orderby'] = 'comment_count';
        }
        
        if( !empty( $homepage_block_posts_no ) ) {
            $homepage_block_args['posts_per_page'] = absint( $homepage_block_posts_no );
        }
        
        $homepage_block_query = new WP_Query( $homepage_block_args );
        
        return $homepage_block_query;
    }         
}
