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

            $author_name = !empty( $instance[ 'author_name' ] ) ? $instance[ 'author_name' ] : '';

            $author_description = !empty( $instance[ 'author_description' ] ) ? $instance[ 'author_description' ] : '';

            $author_image_url = !empty( $instance['author_image_url'] ) ? $instance['author_image_url'] : '';

            if( $args['id'] == 'influence-blog-middle-widget-area' || $args['id'] == 'influence-blog-header-advertisement' ) {

                return;
            }

            if( $args['id'] == 'influence-blog-top-widget-area' || $args['id'] == 'influence-blog-bottom-widget-area' ) {

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

                                            if( !empty( $author_name ) ) {
                                                ?>
                                                <h3 class="m-title"><?php echo esc_html( $author_name ); ?></h3>
                                                <?php
                                            }

                                            if( !empty( $author_description ) ) {
                                                ?>
                                                <p class="sub-title"><?php echo esc_html( $author_description ); ?></p>
                                                <?php
                                            }
                                            ?>
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
                                }
                                ?>
                            </div><!-- // row-->
                        </div><!-- // container -->
                    </div><!-- // widget-area-inner -->
                </div><!-- // fl-top-widget-area -->
                <?php

            } else {

                ?>
                <div class="side-space">
                    <div class="author-wrap">
                        <?php
                        if( !empty( $title ) ) {
                        ?>
                        <div class="side-tt">
                            <h3 class="s-title"><?php echo esc_html( $title ); ?></h3>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="side-widget-d2 clearfix">
                            <?php
                                if( !empty( $author_image_url ) ) {

                                    $author_image_url_id = attachment_url_to_postid( $author_image_url );

                                    $author_image_src = wp_get_attachment_image_src( $author_image_url_id, 'influence-blog-thumbnail-one' );

                                    $author_image_src = $author_image_src[0];

                                    if( !empty( $author_image_src ) ) {
                                        ?>
                                        <div class="img-holder">
                                            <figure><img src="<?php echo esc_url( $author_image_src ); ?>" alt="author"></figure>
                                        </div>
                                        <?php
                                    }
                                }
                            ?>
                            <div class="side-widget-bdy">
                                <div class="author-detail">
                                    <?php
                                    if( !empty( $author_name ) ) {
                                        ?>
                                        <h4 class="sm-title"><?php echo esc_html( $author_name ); ?></h4>
                                        <?php
                                    }

                                    if( !empty( $author_description ) ) {
                                        ?>
                                        <h3 class="exs-title"><?php echo esc_html( $author_description ); ?></h3>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div><!--//side-widget-d1-->
                    </div>
                </div><!--author-post-->
                <?php
            }
        }

        public function form( $instance ) {
            $defaults = array(
                'title'        => '',
                'author_name'        => '',
                'author_description' => '',
                'author_image_url' => '',
            );

            $instance = wp_parse_args( (array) $instance, $defaults );

            $author_image_url = $instance['author_image_url'];

            ?>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>">
                    <strong><?php esc_html_e('Title', 'influence-blog'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('author_name') ); ?>">
                    <strong><?php esc_html_e('Author Name', 'influence-blog'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('author_name') ); ?>" name="<?php echo esc_attr( $this->get_field_name('author_name') ); ?>" type="text" value="<?php echo esc_attr( $instance['author_name'] ); ?>" />
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('author_description') ); ?>">
                    <strong><?php esc_html_e('Author Description', 'influence-blog'); ?></strong>
                </label>
                <textarea id="<?php echo esc_attr( $this->get_field_id( 'author_description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'author_description' ) ); ?>" rows="4" cols="46"><?php echo esc_textarea( $instance['author_description'] ); ?></textarea>
            </p>

            <p>
                <label for="<?php echo esc_attr($this->get_field_id('author_image_url')); ?>">
                    <strong><?php esc_html_e('Author Image', 'influence-blog'); ?></strong>
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

            $instance['author_name']  = sanitize_text_field( $new_instance['author_name'] );

            $instance['author_description']  = sanitize_textarea_field( $new_instance['author_description'] );

            $instance['author_image_url']  = esc_url_raw( $new_instance['author_image_url'] );

            return $instance;
        }
    }
endif;
