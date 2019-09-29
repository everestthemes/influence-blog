<?php
/**
 * Fullwidth post widget class
 *
 * @package Influence_Blog
 */

if( ! class_exists( 'Influence_Blog_Fullwidth_Post_Widget' ) ) :

    class Influence_Blog_Fullwidth_Post_Widget extends WP_Widget {
 
        function __construct() { 

            parent::__construct(
                'influence-blog-fullwidth-post-widget',  // Widget ID
                esc_html__( 'IfB: Fullwidth Post Widget', 'influence-blog' ),   // Widget Name
                array(
                    'description' => esc_html__( 'Displays Posts which is only for fullwidth.', 'influence-blog' ), 
                )
            ); 
     
        }
     
        public function widget( $args, $instance ) {

            $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
            
            $description = !empty( $instance[ 'description' ] ) ? $instance[ 'description' ] : '';

            $posts_no = !empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;

            $layout = !empty( $instance[ 'layout' ] ) ? $instance[ 'layout' ] : 'full_one';
            
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
                
                if( $args['id'] == 'influence-blog-top-widget-area' || $args['id'] == 'influence-blog-fullwidth-bottom-widget-area' ) {
                    
                    if( $layout == 'full_one' ) {
                
                        ?>
                        <div class="fl-mid-widget-area">
                            <div class="widget-area-inner">
                                <div class="full-widget-d1 lrg-padding">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-4">
                                                <div class="full-content-bdy">
                                                    <div class="widget-tt">
                                                        <?php
                                                        if( !empty( $title ) ) {
                                                            
                                                            ?>
                                                            <h3 class="l-title"><?php echo esc_html( $title ); ?></h3>
                                                            <?php
                                                        }
                                                        
                                                        influence_blog_categories_meta( true );
                        
                                                        if( !empty( $description ) ) {
                                                            
                                                            ?>
                                                            <p class="sub-title"><?php echo esc_html( $description ); ?></p>
                                                            <?php
                                                        }
                        
                                                        $category_link = get_category_link( absint( $select_cat ) );
                                                        
                                                        if( !empty( $category_link ) ) {
                                                            
                                                            ?>
                                                            <a href="<?php echo esc_url( $category_link ); ?>" class="btn-more" tabindex="0"><?php echo esc_html__( 'Read More', 'influence-blog' ); ?></a>
                                                            <?php 
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <div class="slide-widget-d1-wrap">
                                                    <?php
                                                    $total_count = $post_query->post_count;
                        
                                                    $count = 0;
                        
                                                    while( $post_query->have_posts() ) :

                                                        $post_query->the_post();
                        
                                                        if( $count == 0 ) {
                                                            ?>
                                                            <div class="slide-widget-d1-list">
                                                                <div class="row">
                                                            <?php
                                                        }
                        
                                                        if( $count > 0 && $count%2 == 0 && $count < $total_count ) {
                                                            ?>
                                                                </div>
                                                            </div>
                                                            <div class="slide-widget-d1-list">
                                                                <div class="row">
                                                            <?php
                                                        }                                                      
                                                        
                                                        ?>
                                                        <div class="col-12 col-md-6 col-lg-6">
                                                            <div class="full-content-bdy">
                                                                <div class="img-holder">
                                                                    <figure><?php the_post_thumbnail( 'influence-blog-thumbnail-one', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?></figure>
                                                                </div>
                                                                <div class="inner-detail">
                                                                    <div class="metas">
                                                                      <?php influence_blog_posted_on( true ); ?>
                                                                      <?php influence_blog_posted_by( true ); ?>
                                                                      <?php influence_blog_comments_no( true ); ?>
                                                                    </div>
                                                                    <div class="widget-in-tt">
                                                                      <h3 class="sub-cate"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                        
                                                        if( $count == $total_count ) {
                                                            ?>
                                                            </div>
                                                            </div>
                                                            <?php
                                                        } 
                                                        $count++;
                                                    endwhile;
                                                    wp_reset_postdata();
                                                    ?>
                                                </div><!--slide-widget-d1-wrap-->
                                            </div><!--col-lg-8-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
        }
     
        public function form( $instance ) {
            $defaults = array(
                'title'        => '',
                'description'  => '',
                'post_no'      => 4,
                'layout'       => 'full_one',
                'post_type'    => 'recent_posts',
                'select_cat'   => 0,
            );

            $instance = wp_parse_args( (array) $instance, $defaults );
            
            $fullwidth_layouts = influence_blog_fullwidth_layouts_array();
            
            $post_types = influence_blog_post_types_array();

            ?>
            
            <p class="layout-options-image">
                <label for="<?php echo esc_attr( $this->get_field_id('layout') ); ?>">
                    <strong><?php esc_html_e('Chooose Layout', 'influence-blog'); ?></strong>
                </label>
                
                <br>
                <br>
                <?php 
            
                foreach( $fullwidth_layouts as $key => $fullwidth_layout ) {
                    
                ?>
                <label for="<?php echo esc_attr( $this->get_field_id('layout') ); ?>" class="rad">
                    <input 
                      type="radio" name="<?php echo esc_attr( $this->get_field_name('layout') ); ?>"
                      id="<?php echo esc_attr( $this->get_field_id('layout') ); ?>" class="input-hidden" <?php checked($instance['layout'],$key); ?> value="<?php echo esc_attr( $key ); ?>">
                    <img class="rad-image" src="<?php echo esc_url( $fullwidth_layout ); ?>" />
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
                <label for="<?php echo esc_attr( $this->get_field_id('description') ); ?>">
                    <strong><?php esc_html_e('Description', 'influence-blog'); ?></strong>
                </label>
                <textarea id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" rows="4" cols="46"><?php echo esc_textarea( $instance['description'] ); ?></textarea>
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
            
            $instance['description']  = sanitize_textarea_field( $new_instance['description'] );
            
            $instance['select_cat']   = absint( $new_instance['select_cat'] );

            $instance['post_no']      = absint( $new_instance['post_no'] );

            $instance['layout']       = sanitize_text_field( $new_instance['layout'] );
            
             $instance['post_type']   = sanitize_text_field( $new_instance['post_type'] );

            return $instance;
        }
    }
endif;