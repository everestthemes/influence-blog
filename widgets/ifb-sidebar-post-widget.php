<?php
/**
 * Sidebar post widget class
 *
 * @package Influence_Blog
 */

if( ! class_exists( 'Influence_Blog_Sidebar_Post_Widget' ) ) :

    class Influence_Blog_Sidebar_Post_Widget extends WP_Widget {
 
        function __construct() { 

            parent::__construct(
                'influence-blog-sidebar-post-widget',  // Widget ID
                esc_html__( 'IfB: Post Widget', 'influence-blog' ),   // Widget Name
                array(
                    'description' => esc_html__( 'Displays Posts.', 'influence-blog' ), 
                )
            ); 
     
        }
     
        public function widget( $args, $instance ) {

            $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

            $posts_no = !empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;

            $layout = !empty( $instance[ 'layout' ] ) ? $instance[ 'layout' ] : 'post_one';
            
            $select_cat    = !empty( $instance['select_cat'] ) ? $instance['select_cat'] : 0;
            
            $post_type = !empty( $instance[ 'post_type' ] ) ? $instance[ 'post_type' ] : 'recent_posts';

            $post_args = array(
                
                'post_type' => 'post'
            );
            
            if( absint( $select_cat ) > 0) {
                
                $post_args['cat'] = absint( $select_cat );
            }
            
            if( $post_type == 'popular_posts' ) {
                
                $post_args['orderby'] = 'comment_count';
            }
            
            if( absint( $posts_no ) > 0 ) {
                
                $post_args['posts_per_page'] = absint( $posts_no );
            }
            
            $post_query = new WP_Query( $post_args );

            if( $post_query->have_posts() ) {
                
                if( $args['id'] == 'influence-blog-sidebar' || $args['id'] == 'influence-blog-footer-left' || $args['id'] == 'influence-blog-footer-middle' || $args['id'] == 'influence-blog-footer-right' ) {
                    
                    if( $layout == 'post_one' ) {
                
                        ?>
                        <div class="side-space">
                            <div class="recent-cate-wrap">
                                <?php
                                if( !empty( $title ) ) {
                                    ?>
                                    <div class="side-tt">
                                        <h3 class="s-title"><?php echo esc_html( $title ); ?></h3>
                                    </div>
                                    <?php
                                }
                        
                                while( $post_query->have_posts() ) :

                                    $post_query->the_post();
                                    ?>
                                    <div class="side-widget-d4">
                                        <?php
                                        if( has_post_thumbnail() ) {
                                            ?>
                                            <div class="img-holder">
                                                <figure>
                                                    <?php the_post_thumbnail( 'influence-blog-thumbnail-two', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                                                </figure>
                                            </div>
                                            <?php
                                        }
                        
                                        influence_blog_categories_meta( true );
                                        ?>
                                        <div class="side-widget-bdy">
                                            <h3 class="sm-title"><a href="<?php the_permalink(); ?>" tabindex="-1"><?php the_title(); ?></a></h3>
                                        </div>
                                    </div><!--//side-widget-d1-->
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?> 
                            </div><!--author-post-->
                        </div><!--//side bar-->
                        <?php
                    }
                }
            }
        }
     
        public function form( $instance ) {
            $defaults = array(
                'title'        => '',
                'post_no'      => 4,
                'layout'       => 'post_one',
                'post_type'    => 'recent_posts',
                'select_cat'   => 0,
            );

            $instance = wp_parse_args( (array) $instance, $defaults );
            
            $sidebar_layouts = influence_blog_post_layouts_array();
            
            $post_types = influence_blog_post_types_array();

            ?>
            
            <p class="layout-options-image">
                <label for="<?php echo esc_attr( $this->get_field_id('layout') ); ?>">
                    <strong><?php esc_html_e('Chooose Layout', 'influence-blog'); ?></strong>
                </label>
                
                <br>
                <br>
                <?php 
            
                foreach( $sidebar_layouts as $key => $sidebar_layout ) {
                    
                ?>
                <label for="<?php echo esc_attr( $this->get_field_id('layout') ); ?>" class="rad">
                    <input 
                      type="radio" name="<?php echo esc_attr( $this->get_field_name('layout') ); ?>"
                      id="<?php echo esc_attr( $this->get_field_id('layout') ); ?>" class="input-hidden" <?php checked($instance['layout'],$key); ?> value="<?php echo esc_attr( $key ); ?>">
                    <img class="rad-image" src="<?php echo esc_url( $sidebar_layout ); ?>" />
                </label>
                
                <?php
                }
                ?>
                
            </p>
            
            <p>
                <label for="<?php echo esc_attr( $this->get_field_name( 'post_type' ) ); ?>">
                    <strong><?php esc_html_e( 'Post Type' , 'influence-blog' ); ?></strong>
                </label>
                <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'post_type' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_type' ) ); ?>">
                <?php
                    
                foreach( $post_types as $key => $post_type ){
                    ?>
                    <option value="<?php echo esc_attr( $key ); ?>" <?php selected( $instance['post_type'], $key ); ?>>
                        <?php 
                            echo esc_html( $post_type );
                        ?>
                    </option>
                    <?php
                }
                ?>
                </select>
            </p> 

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>">
                    <strong><?php esc_html_e('Title', 'influence-blog'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />   
            </p>
            
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'select_cat' ) ); ?>">
                    <strong><?php echo esc_html_e( 'Select Category' , 'influence-blog' ); ?></strong>
                </label>
                <?php
                    wp_dropdown_categories( array(
                        'id'               => esc_attr( $this->get_field_id( 'select_cat' ) ),
                        'class'            => 'widefat',
                        'name'             => esc_attr( $this->get_field_name( 'select_cat' ) ),
                        'orderby'          => 'name',
                        'selected'         => esc_attr( $instance [ 'select_cat' ] ),
                        'show_option_all'  => esc_html__( 'Select To Show Category Posts' , 'influence-blog' ),
                        )
                    );
                ?>
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('post_no') ); ?>">
                    <strong><?php esc_html_e('No of Posts', 'influence-blog'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('post_no') ); ?>" name="<?php echo esc_attr( $this->get_field_name('post_no') ); ?>" type="number" value="<?php echo esc_attr( $instance['post_no'] ); ?>" />   
            </p>

            <?php
        }
     
        public function update( $new_instance, $old_instance ) {
     
            $instance = $old_instance;

            $instance['title']        = sanitize_text_field( $new_instance['title'] );
            
            $instance['select_cat']   = absint( $new_instance['select_cat'] );

            $instance['post_no']      = absint( $new_instance['post_no'] );

            $instance['layout']       = sanitize_text_field( $new_instance['layout'] );
            
             $instance['post_type']   = sanitize_text_field( $new_instance['post_type'] );

            return $instance;
        }
    }
endif;