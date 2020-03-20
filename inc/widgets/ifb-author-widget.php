<?php
/**
 * Author widget class
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( ! class_exists( 'Influence_Blog_Author_Widget' ) ) :

    class Influence_Blog_Author_Widget extends WP_Widget {

        function __construct() {

            parent::__construct(
                'influence_blog_author_widget',  // Widget ID
                esc_html__( 'IfB: Author Widget', 'influence-blog' ),   // Widget Name
                array(
                    'description' => esc_html__( 'Displays the author.', 'influence-blog' ),
                )
            );

        }

        public function widget( $args, $instance ) {

            $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

            $layout = !empty( $instance[ 'layout' ] ) ? $instance[ 'layout' ] : 'one';

            $author_page = !empty( $instance[ 'author_page' ] ) ? $instance[ 'author_page' ] : '';

            $author_content = !empty( $instance[ 'author_content' ] ) ? $instance[ 'author_content' ] : '';

            $author_image_url = !empty( $instance['author_image_url'] ) ? $instance['author_image_url'] : '';

            if( $layout == 'one' || $layout == 'two' || $layout == 'three' ) {

                if( $layout == 'two' ) {

                    $thumbnail = 'influence-blog-thumbnail-one';

                } else {

                    $thumbnail = 'influence-blog-thumbnail-two';
                }

                ?>
                <div class="side-space">
                    <div class="author-wrap style-<?php echo esc_attr( $layout ); ?>">
                        <?php
                        if( !empty( $title ) ) {
                        ?>
                        <div class="side-tt">
                            <h3 class="s-title"><?php echo esc_html( $title ); ?></h3>
                        </div>
                        <?php
                        }

                        if( !empty( $author_page ) ) {

                            $page_args = array(
                                'post_type' => 'page',
                            );

                            if( absint( $author_page ) > 0) {

                                $page_args['page_id'] = absint( $author_page );
                            }

                            $page_query = new WP_Query( $page_args );

                            if( $page_query->have_posts() ) {

                                while( $page_query->have_posts() ) :

                                    $page_query->the_post();
                                    ?>
                                    <div class="side-widget-d2 clearfix">
                                        <?php

                                        if( !empty( $author_image_url ) ) {

                                            $author_image_url_id = attachment_url_to_postid( $author_image_url );

                                            $author_image_src = wp_get_attachment_image_src( $author_image_url_id, $thumbnail );

                                            $author_image_src = $author_image_src[0];

                                            if( !empty( $author_image_src ) ) {
                                                ?>
                                                <div class="img-holder">
                                                    <figure><img src="<?php echo esc_url( $author_image_src ); ?>" alt="author"></figure>
                                                </div>
                                                <?php
                                            }
                                        } else {

                                            if( has_post_thumbnail() ) {

                                                ?>
                                                <div class="img-holder">
                                                    <figure>
                                                        <?php the_post_thumbnail( $thumbnail, array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                                                    </figure>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <div class="side-widget-bdy">
                                            <div class="author-detail">
                                                <h4 class="sm-title"><?php the_title(); ?></h4>
                                                <p class="exs-title">
                                                    <?php
                                                    if( $author_content == 'one' ) {

                                                        the_excerpt();

                                                    } else {

                                                        the_content();
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!--//side-widget-d1-->
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            }
                        }
                        ?>
                    </div>
                </div><!--author-post-->
                <?php

            } else {

                if( !empty( $author_page ) ) {

                    $page_args = array(
                        'post_type' => 'page',
                    );

                    if( absint( $author_page ) > 0) {

                        $page_args['page_id'] = absint( $author_page );
                    }

                    $page_query = new WP_Query( $page_args );

                    if( $page_query->have_posts() ) {

                        while( $page_query->have_posts() ) :

                            $page_query->the_post();
                            ?>
                            <div class="fl-top-widget-area primary-widget-area">
                                <div class="widget-area-inner lrg-padding">
                                    <div class="container">
                                        <div class="row justify-content-between">
                                            <div class="col-12 col-lg-7">
                                                <div class="widget-area-entry">
                                                    <div class="widget text_widget">
                                                        <?php
                                                        if( !empty( $title ) ) {
                                                            ?>
                                                            <h2 class="l-title"><?php echo esc_html( $title ); ?></h2>
                                                            <?php
                                                        }
                                                        ?>
                                                        <h3 class="m-title"><?php the_title(); ?></h3>
                                                        <p class="sub-title">
                                                            <?php
                                                            if( $author_content == 'one' ) {

                                                                the_excerpt();

                                                            } else {

                                                                the_content();
                                                            }
                                                            ?>
                                                        </p>
                                                    </div><!-- // widget text_widget -->
                                                </div>
                                            </div><!-- // col-12 col-lg-7-->
                                            <?php

                                            if( !empty( $author_image_url ) ) {

                                                $author_image_url_id = attachment_url_to_postid( $author_image_url );

                                                $author_image_src = wp_get_attachment_image_src( $author_image_url_id, 'influence-blog-thumbnail-three' );

                                                $author_image_src = $author_image_src[0];

                                                if( !empty( $author_image_src ) ) {
                                                    ?>
                                                    <div class="col-12 col-lg-4">
                                                        <div class="widget abt-img-sec">
                                                            <figure><img src="<?php echo esc_url( $author_image_src ); ?>" alt="about-img"></figure>
                                                        </div>
                                                    </div><!-- // col-12 col-lg-7-->
                                                    <?php
                                                }
                                            } else {

                                                if( has_post_thumbnail() ) {

                                                    ?>
                                                    <div class="col-12 col-lg-4">
                                                        <div class="widget abt-img-sec">
                                                            <figure>
                                                                <?php the_post_thumbnail( 'influence-blog-thumbnail-three', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                                                            </figure>
                                                        </div>
                                                    </div><!-- // col-12 col-lg-7-->
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div><!-- // row-->
                                    </div><!-- // container -->
                                </div><!-- // widget-area-inner -->
                            </div><!-- // fl-top-widget-area -->
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    }
                }
            }
        }

        public function form( $instance ) {
            $defaults = array(
                'title'        => '',
                'layout'        => 'one',
                'author_page'  => '',
                'author_content' => 'one',
                'author_image_url' => '',
            );

            $instance = wp_parse_args( (array) $instance, $defaults );

            $author_image_url = $instance['author_image_url'];

            $author_layouts = influence_blog_author_widget_select_array();

            $author_contents = influence_blog_widget_content_select_array();

            ?>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('layout') ); ?>">
                    <strong><?php esc_html_e('Chooose Layout', 'influence-blog'); ?></strong>
                </label>
            </p>
            <div class="selector-labels">
            <?php
            foreach( $author_layouts as $key => $value ) {

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
                <label for="<?php echo esc_attr( $this->get_field_id('author_page') ); ?>">
                    <strong><?php esc_html_e('Author Page', 'influence-blog'); ?></strong>
                </label>
                <?php
                    wp_dropdown_pages( array(
                        'id'               => esc_attr( $this->get_field_id( 'author_page' ) ),
                        'class'            => 'widefat',
                        'name'             => esc_attr( $this->get_field_name( 'author_page' ) ),
                        'orderby'          => 'name',
                        'selected'         => esc_attr( $instance [ 'author_page' ] ),
                        'show_option_none'  => esc_html__( 'Select Page' , 'influence-blog' ),
                        )
                    );
                ?>
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'author_content' ) ); ?>">
                    <strong><?php esc_html_e( 'Content Options' , 'influence-blog-pro' ); ?></strong>
                </label>
                <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'author_content' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'author_content' ) ); ?>">
                    <?php

                    foreach( $author_contents as $key => $content ){
                        ?>
                        <option value="<?php echo esc_attr( $key ); ?>" <?php selected( $instance['author_content'], $key ); ?>>
                            <?php
                                echo esc_html( $content );
                            ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </p>

            <p>
                <label for="<?php echo esc_attr($this->get_field_id('author_image_url')); ?>">
                    <strong><?php esc_html_e('Author Image', 'influence-blog'); ?></strong>
                    <br>
                    <small><?php esc_html_e('If no image is set, then featured image of selected page will be used.', 'influence-blog'); ?></small>
                </label>

                <span class="image-uploader-container">

                    <?php
                    $upload_btn_class = 'button upload-btn';
                    $remove_btn_class = 'button remove-btn';

                    if( empty( $author_image_url ) ) {

                        $remove_btn_class .= ' btn-hide';
                        $upload_btn_class .= ' btn-show';
                    } else {

                        $remove_btn_class .= ' btn-show';
                        $upload_btn_class .= ' btn-hide';
                    }
                    ?>

                    <span class="upload-image-holder" style="background-image: url( <?php echo esc_url( $author_image_url ); ?> );"></span>
                    <input type="hidden" class="widefat upload-image-url-holder" name="<?php echo esc_attr($this->get_field_name('author_image_url')); ?>" id="<?php echo esc_attr($this->get_field_id('author_image_url')); ?>" value="<?php echo esc_url( $author_image_url ); ?>">
                    <button class="<?php echo esc_attr( $upload_btn_class ); ?>" id="upload-btn"><?php esc_html_e( 'Upload', 'influence-blog' ); ?></button>
                    <button class="<?php echo esc_attr( $remove_btn_class ); ?>" id="remove-btn"><?php esc_html_e( 'Remove', 'influence-blog' ); ?></button>
                </span>
            </p>

            <?php
        }

        public function update( $new_instance, $old_instance ) {

            $instance = $old_instance;

            $instance['title']        = sanitize_text_field( $new_instance['title'] );

            $instance['layout']        = sanitize_text_field( $new_instance['layout'] );

            $instance['author_content']  = sanitize_text_field( $new_instance['author_content'] );

            $instance['author_page']   = absint( $new_instance['author_page'] );

            $instance['author_image_url']  = esc_url_raw( $new_instance['author_image_url'] );

            return $instance;
        }
    }
endif;
