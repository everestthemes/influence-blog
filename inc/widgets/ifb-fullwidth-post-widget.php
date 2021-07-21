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
                esc_html__( 'IFB: Fullwidth Post Widget', 'influence-blog' ),   // Widget Name
                array(
                    'description' => esc_html__( 'Displays Posts which is only for fullwidth.', 'influence-blog' ),
                )
            );

        }

        public function widget( $args, $instance ) {

            $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

            $posts_no = !empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;

            $layout = !empty( $instance[ 'layout' ] ) ? $instance[ 'layout' ] : 'full_one';

            $select_cat    = !empty( $instance['select_cat'] ) ? $instance['select_cat'] : 0;

            $sort_order    = !empty( $instance['sort_order'] ) ? $instance['sort_order'] : 'desc';

            $orderby       = !empty( $instance['orderby'] ) ? $instance['orderby'] : 'date';

            $post_excerpt = !empty( $instance['post_excerpt'] ) ? $instance['post_excerpt'] : '';

            $bg_title = !empty( $instance['bg_title'] ) ? $instance['bg_title'] : '';

            $button_title = !empty( $instance['button_title'] ) ? $instance['button_title'] : '';

            $display_category_desc  = !empty( $instance['display_category_desc'] ) ? $instance['display_category_desc'] : false;

            $display_featured_image  = !empty( $instance['display_featured_image'] ) ? $instance['display_featured_image'] : false;

            $display_category  = !empty( $instance['display_category'] ) ? $instance['display_category'] : false;

            $display_posted_date  = !empty( $instance['display_posted_date'] ) ? $instance['display_posted_date'] : false;

            $display_comment_no  = !empty( $instance['display_comment_no'] ) ? $instance['display_comment_no'] : false;

            $display_post_author  = !empty( $instance['display_post_author'] ) ? $instance['display_post_author'] : false;

            $display_post_content  = !empty( $instance['display_post_content'] ) ? $instance['display_post_content'] : false;

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

                                                    $category_name = get_cat_name( $select_cat );

                                                    $category_link = get_category_link( absint( $select_cat ) );

                                                    if( $display_category == true ) {

                                                        ?>
                                                        <div class="ifb-sub-cate">
                                                            <ul class="post-categories">
                                                               <li>
                                                                   <a href="<?php echo esc_url( $category_link ); ?>">
                                                                       <?php echo esc_html( $category_name ); ?>
                                                                   </a>
                                                               </li>
                                                           </ul>
                                                        </div>
                                                        <?php
                                                    }

                                                    if( $display_category_desc ) {

                                                        echo wp_kses_post( category_description( $select_cat ) );
                                                    }

                                                    if( !empty( $category_link ) && !empty( $button_title ) ) {

                                                        ?>
                                                        <a href="<?php echo esc_url( $category_link ); ?>" class="btn-more" tabindex="0"><?php echo esc_html( $button_title ); ?></a>
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

                                                $count = 1;

                                                while( $post_query->have_posts() ) :

                                                    $post_query->the_post();

                                                    if( $count == 1 ) {
                                                        ?>
                                                        <div class="slide-widget-d1-list">
                                                            <div class="row">
                                                        <?php
                                                    }

                                                    if( $count > 1 && $count%2 != 0 ) {
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
                                                            <?php
                                                            if( $display_featured_image == true ) {
                                                            ?>
                                                            <div class="img-holder">
                                                                <figure><?php the_post_thumbnail( 'influence-blog-thumbnail-one', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?></figure>
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="inner-detail">
                                                                <div class="metas">
                                                                  <?php influence_blog_posted_on( $display_posted_date ); ?>
                                                                  <?php influence_blog_posted_by( $display_post_author ); ?>
                                                                  <?php influence_blog_comments_no( $display_comment_no ); ?>
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

                } else {

                    ?>
                    <section class="fl-mid-widget-area design3">
                        <div class="trangle"></div>
                        <div class="widget-area-inner has-pattern">
                            <div class="full-widget-d3  mdm-padding">
                                <div class="container">
                                    <div class="full-widget-d3-slide-wrap">
                                        <div class="full-widget-d3-slide-list">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <div class="full-sec-less">
                                                        <div class="full-content-bdy">
                                                            <div class="widget-tt">
                                                                <?php

                                                                if( !empty( $bg_title ) ) {

                                                                    ?>
                                                                    <h2 class="big-tt"><?php echo esc_html( $bg_title ); ?></h2>
                                                                    <?php
                                                                }

                                                                if( !empty( $title ) ) {

                                                                    ?>
                                                                    <h3 class="l-title"><?php echo esc_html( $title ); ?></h3>
                                                                    <?php
                                                                }

                                                                $category_name = get_cat_name( $select_cat );

                                                                $category_link = get_category_link( absint( $select_cat ) );

                                                                if( $display_category == true ) {

                                                                    ?>
                                                                    <ul class="post-categories">
                                                                        <li>
                                                                           <a href="<?php echo esc_url( $category_link ); ?>">
                                                                               <?php echo esc_html( $category_name ); ?>
                                                                           </a>
                                                                       </li>
                                                                    </ul>
                                                                    <?php
                                                                }

                                                                echo wp_kses_post( category_description( $select_cat ) );

                                                                $category_link = get_category_link( absint( $select_cat ) );

                                                                if( !empty( $category_link ) && !empty( $button_title ) ) {

                                                                    ?>
                                                                    <a href="<?php echo esc_url( $category_link ); ?>" class="btn-more" tabindex="0"><?php echo esc_html( $button_title ); ?></a>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--//col-md-6-->
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <div class="full-sec-less right">
                                                        <?php
                                                        while( $post_query->have_posts() ) :

                                                        $post_query->the_post();
                                                        ?>

                                                        <div class="full-content-bdy">
                                                            <?php
                                                            if( $display_featured_image == true ) {
                                                            ?>
                                                            <div class="img-holder">
                                                                <figure><?php the_post_thumbnail( 'influence-blog-thumbnail-one', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?></figure>
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="inner-detail">
                                                                <div class="widget-in-tt">
                                                                   <h3 class="sub-cate"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                                </div>
                                                                <div class="metastyle1">
                                                                    <?php influence_blog_posted_on( $display_posted_date ); ?>
                                                                </div>
                                                                <?php
                                                                if( $display_post_content == true ) {

                                                                    the_excerpt();
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        endwhile;
                                                        wp_reset_postdata();
                                                        ?>
                                                    </div>
                                                    <!--//full-sec-less right-->
                                                </div>
                                                <!--//col-md-6-->
                                            </div>
                                            <!--//row-->
                                        </div>
                                        <!--//slide-list-->
                                    </div>
                                    <!--//slide-wrap-->
                                </div>
                                <!--//container-->
                            </div>
                            <!--//full-widget-d3-->
                        </div>
                        <!--//widget-area-inner-->
                    </section>
                    <?php
                }
            }
        }

        public function form( $instance ) {

            $defaults = array(
                'title'        => '',
                'bg_title'     => '',
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
            <input id="selected-img-val" data-default="<?php echo esc_attr( $instance['layout'] ) ?>" type="hidden" value="<?php echo esc_attr( $instance['layout'] ) ?>" name="<?php echo esc_attr( $this->get_field_name( 'layout' ) ) ?>"/>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>">
                    <strong><?php esc_html_e('Title', 'influence-blog'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
            </p>

            <p class="bg-title two <?php echo esc_attr( ( $instance['layout']== 'two' ) ? 'active' : '' ); ?>">
                <label for="<?php echo esc_attr( $this->get_field_id('bg_title') ); ?>">
                    <strong><?php esc_html_e('Background Title', 'influence-blog'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('bg_title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('bg_title') ); ?>" type="text" value="<?php echo esc_attr( $instance['bg_title'] ); ?>" />
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

            <p class="bg-title one <?php echo esc_attr( ( $instance['layout']== 'one' ) ? 'active' : '' ); ?>">
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

            $fullwidth_layouts = influence_blog_fullwidth_widget_select_array();

            $orderby_choices = influence_blog_widget_orderby_array();

            $sort_order_choices = influence_blog_widget_sort_order_array();

            $post_categories = influence_blog_post_category_array();

            $instance = $old_instance;

            $instance['title']        = sanitize_text_field( $new_instance['title'] );

            $instance['bg_title']     = sanitize_text_field( $new_instance['bg_title'] );

            $instance['select_cat']   = ( isset( $new_instance['select_cat'] ) && array_key_exists( $new_instance['select_cat'], $post_categories ) ) ? absint( $new_instance['select_cat'] ) : 0;

            $instance['post_no']      = absint( $new_instance['post_no'] );

            $instance['layout']       = ( isset( $new_instance['layout'] ) && array_key_exists( $new_instance['layout'], $fullwidth_layouts ) ) ? sanitize_text_field( $new_instance['layout'] ) : 'one';

            $instance['sort_order']   = ( isset( $new_instance['sort_order'] ) && array_key_exists( $new_instance['sort_order'], $sort_order_choices ) ) ? sanitize_text_field( $new_instance['sort_order'] ) : 'desc';

            $instance['orderby']      = ( isset( $new_instance['orderby'] ) && array_key_exists( $new_instance['orderby'], $sort_order_choices ) ) ? sanitize_text_field( $new_instance['orderby'] ) : 'date';

            $instance['button_title']        = sanitize_text_field( $new_instance['button_title'] );

            $instance['display_category_desc'] = isset( $new_instance['display_category_desc'] ) ? wp_validate_boolean( $new_instance['display_category_desc'] ) : false;

            $instance['display_featured_image'] = isset( $new_instance['display_featured_image'] ) ? wp_validate_boolean( $new_instance['display_featured_image'] ) : false;

            $instance['display_category'] = isset( $new_instance['display_category'] ) ? wp_validate_boolean( $new_instance['display_category'] ) : false;

            $instance['display_posted_date'] = isset( $new_instance['display_posted_date'] ) ? wp_validate_boolean( $new_instance['display_posted_date'] ) : false;

            $instance['display_comment_no'] = isset( $new_instance['display_comment_no'] ) ? wp_validate_boolean( $new_instance['display_comment_no'] ) : false;

            $instance['display_post_author'] = isset( $new_instance['display_post_author'] ) ? wp_validate_boolean( $new_instance['display_post_author'] ) : false;

            $instance['display_post_content'] = isset( $new_instance['display_post_content'] ) ? wp_validate_boolean( $new_instance['display_post_content'] ) : false;

            return $instance;
        }
    }
endif;
