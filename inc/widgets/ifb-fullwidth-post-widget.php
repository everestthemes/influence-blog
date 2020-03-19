<?php
/**
 * Fullwidth post widget class
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( ! class_exists( 'Influence_Blog_Fullwidth_Post_Widget' ) ) :

    class Influence_Blog_Fullwidth_Post_Widget extends WP_Widget {

        function __construct() {

            parent::__construct(
                'influence_blog_fullwidth_post_widget',  // Widget ID
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
                'post_no'      => 4,
                'layout'       => 'one',
                'sort_order'   => 'desc',
                'orderby'      => 'date',
                'select_cat'   => 0,
                'button_title' => '',
                'display_category_desc' => true,
                'display_featured_image' => true,
                'display_category' => true,
                'display_posted_date' => true,
                'display_comment_no' => true,
                'display_post_author' => true,
                'display_post_content' => true,
            );

            $instance = wp_parse_args( (array) $instance, $defaults );

            $fullwidth_layouts = influence_blog_fullwidth_widget_select_array();

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
            foreach( $fullwidth_layouts as $key => $value ) {

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
                <label for="<?php echo esc_attr( $this->get_field_id('button_title') ); ?>">
                    <strong><?php esc_html_e('Button Title', 'influence-blog'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('button_title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('button_title') ); ?>" type="text" value="<?php echo esc_attr( $instance['button_title'] ); ?>" />
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'display_category_desc' ) ); ?>" class="ckb">
                  <input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'display_category_desc' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'display_category_desc' ) ); ?>" <?php checked( $instance['display_category_desc'], true ); ?>>
                  <i></i><strong><?php esc_html_e( 'Display Category Description', 'influence-blog' ); ?></strong>
                </label>
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

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'display_posted_date' ) ); ?>" class="ckb">
                  <input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'display_posted_date' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'display_posted_date' ) ); ?>" <?php checked( $instance['display_posted_date'], true ); ?>>
                  <i></i><strong><?php esc_html_e( 'Display Posted Date', 'influence-blog' ); ?></strong>
                </label>
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'display_comment_no' ) ); ?>" class="ckb">
                  <input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'display_comment_no' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'display_comment_no' ) ); ?>" <?php checked( $instance['display_comment_no'], true ); ?>>
                  <i></i><strong><?php esc_html_e( 'Display Comment No.', 'influence-blog' ); ?></strong>
                </label>
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'display_post_author' ) ); ?>" class="ckb">
                  <input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'display_post_author' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'display_post_author' ) ); ?>" <?php checked( $instance['display_post_author'], true ); ?>>
                  <i></i><strong><?php esc_html_e( 'Display Post Author', 'influence-blog' ); ?></strong>
                </label>
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'display_post_content' ) ); ?>" class="ckb">
                  <input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'display_post_content' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'display_post_content' ) ); ?>" <?php checked( $instance['display_post_content'], true ); ?>>
                  <i></i><strong><?php esc_html_e( 'Display Post Content', 'influence-blog' ); ?></strong>
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

            $instance['button_title']        = sanitize_text_field( $new_instance['button_title'] );

            $instance['display_category_desc'] = wp_validate_boolean( $new_instance['display_category_desc'] );

            $instance['display_featured_image'] = wp_validate_boolean( $new_instance['display_featured_image'] );

            $instance['display_category'] = wp_validate_boolean( $new_instance['display_category'] );

            $instance['display_posted_date'] = wp_validate_boolean( $new_instance['display_posted_date'] );

            $instance['display_comment_no'] = wp_validate_boolean( $new_instance['display_comment_no'] );

            $instance['display_post_author'] = wp_validate_boolean( $new_instance['display_post_author'] );

            $instance['display_post_content'] = wp_validate_boolean( $new_instance['display_post_content'] );

            return $instance;
        }
    }
endif;
