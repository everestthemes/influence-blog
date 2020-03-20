<?php
/**
 * Sidebar post widget class
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( ! class_exists( 'Influence_Blog_Sidebar_Post_Widget' ) ) :

    class Influence_Blog_Sidebar_Post_Widget extends WP_Widget {

        function __construct() {

            parent::__construct(
                'influence_blog_sidebar_post_widget',  // Widget ID
                esc_html__( 'IfB: Sidebar Post Widget', 'influence-blog' ),   // Widget Name
                array(
                    'description' => esc_html__( 'Displays Posts.', 'influence-blog' ),
                )
            );

        }

        public function widget( $args, $instance ) {

            $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

            $posts_no = !empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;

            $layout = !empty( $instance[ 'layout' ] ) ? $instance[ 'layout' ] : 'one';

            $select_cat    = !empty( $instance['select_cat'] ) ? $instance['select_cat'] : 0;

            $sort_order    = !empty( $instance['sort_order'] ) ? $instance['sort_order'] : 'desc';

            $orderby       = !empty( $instance['orderby'] ) ? $instance['orderby'] : 'date';

            $display_featured_image  = !empty( $instance['display_featured_image'] ) ? $instance['display_featured_image'] : false;

            $display_category  = !empty( $instance['display_category'] ) ? $instance['display_category'] : false;

            $post_args = array(

                'post_type' => 'post'
            );

            if( absint( $select_cat ) > 0) {

                $post_args['cat'] = absint( $select_cat );
            }

            if( !empty( $sort_order ) ) {
                $post_args['order'] = $sort_order;
            }

            if( !empty( $orderby ) ) {
                $post_args['orderby'] = $orderby;
            }

            if( absint( $posts_no ) > 0 ) {

                $post_args['posts_per_page'] = absint( $posts_no );
            }

            $post_query = new WP_Query( $post_args );

            if( $post_query->have_posts() ) {

                if( $layout == 'one' ) {

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
                                    if( has_post_thumbnail() && $display_featured_image == true ) {
                                        ?>
                                        <div class="img-holder">
                                            <figure>
                                                <?php the_post_thumbnail( 'influence-blog-thumbnail-one', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                                            </figure>
                                        </div>
                                        <?php
                                    }

                                    influence_blog_categories_meta( $display_category );
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
                } else {

                    ?>
                    <div class="side-bar">
                        <div class="side-space side1-space">
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
                                <div class="side-widget-d1 clearfix">
                                    <?php
                                    if( has_post_thumbnail() && $display_featured_image == true ) {
                                        ?>
                                        <div class="img-holder">
                                            <figure>
                                                <?php the_post_thumbnail( 'influence-blog-thumbnail-one', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                                            </figure>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <div class="side-widget-bdy">
                                        <?php influence_blog_categories_meta( $display_category ); ?>
                                        <h3 class="sm-title"><a href="<?php the_permalink(); ?>" tabindex="-1"><?php the_title(); ?></a></h3>
                                    </div>
                                </div><!--//side-widget-d1-->
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div><!--latest-post-->
                    </div><!--//side bar-->
                    <?php
                }
            }
        }

        public function form( $instance ) {
            $defaults = array(
                'title'        => '',
                'post_no'      => 4,
                'layout'       => 'one',
                'select_cat'   => 0,
                'sort_order'   => 'desc',
                'orderby'      => 'date',
                'display_featured_image' => true,
                'display_category' => true,
            );

            $instance = wp_parse_args( (array) $instance, $defaults );

            $sidebar_layouts = influence_blog_sidebar_widget_select_array();

            $orderby_choices = influence_blog_widget_orderby_array();

            $sort_order_choices = influence_blog_widget_sort_order_array();

            ?>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('layout') ); ?>">
                    <strong><?php esc_html_e('Chooose Layout', 'influence-blog'); ?></strong>
                </label>
            </p>
            <div class="selector-labels">
            <?php
            foreach( $sidebar_layouts as $key => $value ) {

                $img_path = $value['image'];

                $class = ( $instance['layout'] == $key ) ? ' selector-selected': '';

                echo '<label class="selector-images'. esc_attr( $class ) .'" data-val="'. esc_attr( $key ) .'">';

                echo '<img src="'. esc_url( $value['image'] ) .'" title="'. esc_attr( $value['name'] ) .'" alt="'. esc_attr( $value['name'] ) .'"/>';

                echo '</label>';
            }
            ?>
            </div>
            <input data-default="<?php echo esc_attr( $instance['layout'] ) ?>" type="hidden" value="<?php echo esc_attr( $instance['layout'] ) ?>" name="<?php echo esc_attr( $this->get_field_name( 'layout' ) ) ?>"/>

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
                <label for="<?php echo esc_attr( $this->get_field_id( 'orderby' ) ); ?>">
                    <strong><?php esc_html_e( 'Order By' , 'influence-blog' ); ?></strong>
                    <br>
                    <small><b><?php esc_html_e( 'Select how to sort retrieved posts.' , 'influence-blog' ); ?></b></small>
                </label>
                <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'orderby' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'orderby' ) ); ?>">
                    <?php

                    foreach( $orderby_choices as $key => $orderby ){
                        ?>
                        <option value="<?php echo esc_attr( $key ); ?>" <?php selected( $instance['orderby'], $key ); ?>>
                            <?php
                                echo esc_html( $orderby );
                            ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'sort_order' ) ); ?>">
                    <strong><?php esc_html_e( 'Sort Order' , 'influence-blog' ); ?></strong>
                    <br>
                    <small><b><?php esc_html_e( 'Designates the ascending or descending order.' , 'influence-blog' ); ?></b></small>
                </label>
                <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'sort_order' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'sort_order' ) ); ?>">
                    <?php

                    foreach( $sort_order_choices as $key => $sort_order ){
                        ?>
                        <option value="<?php echo esc_attr( $key ); ?>" <?php selected( $instance['sort_order'], $key ); ?>>
                            <?php
                                echo esc_html( $sort_order );
                            ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('post_no') ); ?>">
                    <strong><?php esc_html_e('No of Posts', 'influence-blog'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('post_no') ); ?>" name="<?php echo esc_attr( $this->get_field_name('post_no') ); ?>" type="number" value="<?php echo esc_attr( $instance['post_no'] ); ?>" />
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'display_featured_image' ) ); ?>" class="ckb">
                  <input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'display_featured_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'display_featured_image' ) ); ?>" <?php checked( $instance['display_featured_image'], true ); ?>>
                  <i></i><strong><?php esc_html_e( 'Display Featured Image', 'influence-blog' ); ?></strong>
                </label>
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'display_category' ) ); ?>" class="ckb">
                  <input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'display_category' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'display_category' ) ); ?>" <?php checked( $instance['display_category'], true ); ?>>
                  <i></i><strong><?php esc_html_e( 'Display Post Category', 'influence-blog' ); ?></strong>
                </label>
            </p>

            <?php
        }

        public function update( $new_instance, $old_instance ) {

            $instance = $old_instance;

            $instance['title']        = sanitize_text_field( $new_instance['title'] );

            $instance['select_cat']   = absint( $new_instance['select_cat'] );

            $instance['post_no']      = absint( $new_instance['post_no'] );

            $instance['layout']       = sanitize_text_field( $new_instance['layout'] );

            $instance['sort_order']   = sanitize_text_field( $new_instance['sort_order'] );

            $instance['orderby']      = sanitize_text_field( $new_instance['orderby'] );

            $instance['display_featured_image'] = wp_validate_boolean( $new_instance['display_featured_image'] );

            $instance['display_category'] = wp_validate_boolean( $new_instance['display_category'] );

            return $instance;
        }
    }
endif;
